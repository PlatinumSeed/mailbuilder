<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class MailController extends Controller
{
    public function index ()
    {
        return view('home');
    }

    public function create_mail(Request $request)
    {
        $data = $request->all();
        $template = View::make('email-templates.template', ['content' => $request->content])->render();

        $public = public_path();
        $file = fopen($public . '/templates/' . $request->file_name . '.html' , 'w');
        fwrite($file, $template);
        echo 'done';
    }

    public function test($template)
    {
        return view('email-templates.' . $template);
    }
}
