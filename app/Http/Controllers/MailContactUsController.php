<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Mail;

class MailContactUsController extends Controller
{
    //
    public function sendmail_contactus(Request $request){
        
        

        // $validatedData = $request->validate([
        //     'name' => 'required'|'max:255',
        //     'email' => 'required',
        //     'subject' => 'required',
        //     'msgBody' => 'required',
        // ]);
        
        // dd($request);
        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'msgBody' => $request->msgbody
        ];
        
        // return $data;
        
        $admin_mail=\App\Providers\AppServiceProvider::findEnvSetting("email");
        
        // return $admin_mail;
        
        if ($data['name']==null || $data['email']==null || $data['subject']==null || $data['msgBody']==null || $admin_mail==null){
            return "Error, Fill all";
        }
        
    
        Mail::send('mailcontactus', $data, function ($mail) use ($admin_mail,$request) {
            $mail->from('cmb@chamaralabs.com');
            $mail->to($admin_mail);
            $mail->subject($request->subject);
        });
    
        return 'Successfully send';

    }
}
