<?php

namespace App\Http\Controllers\Admin;
use App\Models\EmailConfiguration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailConfigurationController extends Controller
{
    public function configuration_index(){
        $email = EmailConfiguration::first();
        return view('dashboard.admin.email_configuration',compact('email'));
    }

    public function Configuration_update(Request $request){

        $email = EmailConfiguration::first();
        $email->mail_host = $request->mail_host;
        $email->email = $request->email;
        $email->smtp_username = $request->smtp_username;
        $email->smtp_password = $request->smtp_password;
        $email->mail_port = $request->mail_port;
        $email->mail_encryption = $request->mail_encryption;
        $email->save();
        return redirect()->back();
    }
}

