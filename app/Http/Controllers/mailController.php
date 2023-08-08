<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class mailController extends Controller
{
    public function index()
    {
        $mail = Mail::all();
        return view('admin.mails.mails', compact('mail'));
    }

    public function view($id)
    {
        $mail = Mail::find($id);
        return view('admin.mails.view', compact('mail'));
    }

    public function destroy($id)
    {
        $mail = Mail::find($id);

        $mail->delete();
        return redirect('mails')->with('status',"Mail Deleted Successfuly");
    }

    public function insert(Request $request)
    {

        $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = env('MAIL_HOST');             //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = env('MAIL_USERNAME');                     //SMTP username
            $mail->Password   = env('MAIL_PASSWORD');                               //SMTP password
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = env('MAIL_PORT');                                   //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom(env('MAIL_USERNAME'), 'Mailer');
            $mail->addAddress('fipihe5659@duiter.com', 'Receiver Name');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = "<b>Name:</b> {$request->input('name')} <br> <b>email:</b> {$request->input('email')} <br> <b>message:</b> {$request->input('message')} <br>";

            $mail->send();

            //sent to db
            $mail = new Mail();

            $mail->name = $request->input('name');
            $mail->email = $request->input('email');
            $mail->message = $request->input('message');
            $mail->save();
            return redirect('/contact')->with('status',"Email Sent Successfully");

    }

}
