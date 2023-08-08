<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Curl\Curl;

class EmailController extends Controller
{
    public function index(Request $request)
    {
      $imap_server = '{'.env('IMAP_HOST').':'.env('IMAP_PORT').'/imap/ssl/novalidate-cert}INBOX';
      $username = env('IMAP_USERNAME');
      $password = env('IMAP_PASSWORD');

      $imap_stream = imap_open($imap_server, $username, $password);

      // Check if connection is successful
      if (!$imap_stream) {
          die('Failed to connect to mail server: ' . imap_last_error());
      }

        // get the total number of emails in the mailbox
        $all_emails = imap_search($imap_stream, 'ALL');
        $total_emails = count($all_emails);

        // Pagination variables
        $messagesPerPage = 10;
        $totalPages = ceil($total_emails / $messagesPerPage);
        $currentPage = $request->get('page', 1);
        $pagination = $totalPages;

      // count the number of unread messages
      if($unread_emails = imap_search($imap_stream, 'UNSEEN')){
          $num_unread_emails = count($unread_emails);
          echo $num_unread_emails.' Unread Emails<br><br>';
      }

      // Get the list of emails in the Inbox folder
      $search_criteria = 'All'; //SEEN, UNSEEN, ALL
      $email_list = imap_search($imap_stream, $search_criteria);

	    // Fetch email details
        $data = [];
        foreach ($email_list as $emailId) {
            $data[] = imap_headerinfo($imap_stream, $emailId);
        }
        return view('admin.email.email', compact('data', 'pagination', 'messagesPerPage' , 'currentPage'));
    }

    public function viewEmail($id)
    {
        $imap_server = '{'.env('IMAP_HOST').':'.env('IMAP_PORT').'/imap/ssl/novalidate-cert}INBOX';
        $username = env('IMAP_USERNAME');
        $password = env('IMAP_PASSWORD');

        $imap_stream = imap_open($imap_server, $username, $password);

        // Check if connection is successful
        if (!$imap_stream) {
            echo 'Failed to connect to mail server: ' . imap_last_error();
        }else{
            // $id = 7;

            $email_header = imap_headerinfo($imap_stream, $id);
            // print_r($email_header);
            $email_subject = $email_header->subject;
            $email_sender = $email_header->fromaddress;
            $email_date = $email_header->date;

            $email_body = imap_fetchbody($imap_stream,$id,1.2);
            if(empty($email_body)){
                $email_body = imap_fetchbody($imap_stream,$id,1);
            }

            $email_data = imap_fetchstructure($imap_stream, $id);
            $attachments = array();

            // loop through the email parts to find attachments
            foreach ($email_data->parts as $part_number => $part_data) {
            if ($part_data->ifdparameters) {
                foreach ($part_data->dparameters as $parameter) {
                if (strtolower($parameter->attribute) == 'filename') {
                    // found an attachment
                    $attachments[$parameter->value] = imap_fetchbody($imap_stream, $id, $part_number+1);
                }
                }
            }
            }

            // Print the email data
            // echo "Email ID: $id <br/>";
            // echo "Subject: $email_subject <br/>";
            // echo "From: $email_sender <br/>";
            // echo "Date: $email_date <br/>";
            // echo "Body: $email_body <br/><br/>";

            // print the attachments
            foreach ($attachments as $filename => $attachment) {
                $file_size = round((int)(strlen(rtrim($attachment, '=')) * 0.75)/1024);
                $exp = explode('.', $filename);
                $file_ext = strtolower(end($exp));

                // echo "Attachment filename: $filename<br/>";
                // echo "Attachment size: " . $file_size . " KB<br/>";
                // if(in_array($file_ext, array('jpg','jpeg', 'png', 'gif'))){
                //     echo "<img src=\"data:image/png;base64,$attachment\"  /><br/>";
                //     echo "<a href=\"data:image/$file_ext;base64,$attachment\" download=\"$filename\">Download</a><br/>";
                // }else{
                //     echo "<a href=\"data:application/$file_ext;base64,$attachment\" download=\"$filename\">Download</a><br/>";
                // }
            //   echo "Attachment content:\n";
            //   echo $attachment;
            }

            return view('admin.email.view', compact('id', 'email_subject', 'email_sender', 'email_date', 'email_body'));
        }

        // Close the IMAP connection
        imap_close($imap_stream);

    }
}
