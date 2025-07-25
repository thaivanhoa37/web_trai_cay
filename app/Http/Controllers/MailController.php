<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller {

    public function send_mail() {

        //send mail
        $to_name = "Fruit";
        $to_email = "shoplinhkien470tdn@gmail.com";//send to this email

        $data = array("name"=>"Mail từ tài khoản khách hàng của VH Fruit","body"=>'Mail gửi về vấn dề hàng hóa');

        Mail::send('pages.send_mail',$data,function($message) use ($to_name,$to_email){
            $message->to($to_email)->subject('Test gửi mail');//send this mail with subject
            $message->from($to_email,$to_name);//send from this mail
        });
        //--send mail
    }
}
