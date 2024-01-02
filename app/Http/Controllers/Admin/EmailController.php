<?php

namespace App\Http\Controllers\Admin;
use App\Models\EmailTemplate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailController extends Controller
{

    public function Email_index(){

        $templates = EmailTemplate::all();
        return view('dashboard.admin.email_template',compact('templates'));
    }

    public function editemail_template($id){

        $template = EmailTemplate::find($id);
          return view('dashboard.admin.edit_email_template',compact('template'));



    }

    public function email_template_upd(Request $request,$id){

        $template = EmailTemplate::find($id);

        $template->subject = $request->subject;
        $template->description = $request->description;
        $template->save();
        return redirect()->route('admin.Email_index');

    }


}
