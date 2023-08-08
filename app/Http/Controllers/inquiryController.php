<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\Inquiry;
use App\Models\inquiry_reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class inquiryController extends Controller
{
    public function index()
    {
        $inquiry = Inquiry::all();
        return view('admin.inquiry.inquiry', compact('inquiry'));
    }

    public function view($id)
    {
        $inquiry = Inquiry::find($id);
        $inquirynew = Inquiry::join('inquiry_reply', 'inquiry_reply.inquiry_id', '=', 'inquiry.id')
                            ->select('inquiry.id', 'inquiry_reply.inquiry_id', 'inquiry_reply.reply_message', 'inquiry_reply.created_at')
                            ->find($id);

        if($inquirynew == null){
            return view('admin.inquiry.view', compact('inquiry'));
        }else{
            return view('admin.inquiry.replyview', compact('inquiry', 'inquirynew'));
        }
    }

    public function destroy($id)
    {
        $inquiry = Inquiry::find($id);

        $inquiry->delete();
        return redirect('inquiry')->with('status',"Inquiry Deleted Successfuly");
    }

    public function insert(Request $request)
    {

        $inquiry = new PHPMailer(true);
            //Server settings
            $inquiry->SMTPDebug = 0;                      //Enable verbose debug output
            $inquiry->isSMTP();                                            //Send using SMTP
            $inquiry->Host       = env('MAIL_HOST');             //Set the SMTP server to send through
            $inquiry->SMTPAuth   = true;                                   //Enable SMTP authentication
            $inquiry->Username   = env('MAIL_USERNAME');                     //SMTP username
            $inquiry->Password   = env('MAIL_PASSWORD');                               //SMTP password
            $inquiry->SMTPSecure = env('MAIL_ENCRYPTION');         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $inquiry->Port       = env('MAIL_PORT');                                   //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $inquiry->setFrom(env('MAIL_USERNAME'), 'Mailer');
            $inquiry->addAddress('fipihe5659@duiter.com', 'Receiver Name');     //Add a recipient

            //Content
            $inquiry->isHTML(true);                                  //Set email format to HTML
            $inquiry->Subject = 'Here is the subject';
            $inquiry->Body    = "<b>Name:</b> {$request->input('name')} <br> <b>email:</b> {$request->input('email')} <br> <b>message:</b> {$request->input('message')} <br>";

            $inquiry->send();

            //sent to db
            $inquiry = new Inquiry();

            $inquiry->name = $request->input('name');
            $inquiry->email = $request->input('email');
            $inquiry->message = $request->input('message');
            $inquiry->save();
            return redirect('/inquirys')->with('status',"Inquiry Sent Successfully");

    }

    public function sendreply(Request $request)
    {
        $reply = new PHPMailer(true);
            //Server settings
            $reply->SMTPDebug = 0;                      //Enable verbose debug output
            $reply->isSMTP();                                            //Send using SMTP
            $reply->Host       = env('MAIL_HOST');             //Set the SMTP server to send through
            $reply->SMTPAuth   = true;                                   //Enable SMTP authentication
            $reply->Username   = env('MAIL_USERNAME');                     //SMTP username
            $reply->Password   = env('MAIL_PASSWORD');                               //SMTP password
            $reply->SMTPSecure = env('MAIL_ENCRYPTION');         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $reply->Port       = env('MAIL_PORT');                                   //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $reply->setFrom(env('MAIL_USERNAME'), 'Mailer');
            $reply->addAddress($request->input('email'), 'Receiver Name');     //Add a recipient

            //Content
            $reply->isHTML(true);                                  //Set email format to HTML
            $reply->Subject = 'Here is the subject';
            $reply->Body    = "<br> <b>message:</b> {$request->input('message')} <br>";

            $reply->send();

            //sent to db
            $inquiry_reply = new inquiry_reply();

            $inquiry_reply->inquiry_id = $request->input('inquiry_id');
            $inquiry_reply->reply_message = $request->input('reply_message');
            $inquiry_reply->save();

            return redirect('inquiry')->with('status',"Reply Sent Successfully");

    }
}
