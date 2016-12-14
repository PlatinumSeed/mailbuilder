<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use \App\Mailer;

class MailerController extends Controller
{
    public function index ()
    {
        $mailers = Mailer::all();
        return view('home', ['mailers' => $mailers]);
    }

    public function create()
    {
        return view('create');
    }

    public function create_mail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $new_mail = Mailer::save_new_mail($request->all());

        return redirect('/')->with('message', 'New Template Created');
    }

    public function preview($template)
    {
        //Format


        return view('email-templates.' . $template);
    }
}
