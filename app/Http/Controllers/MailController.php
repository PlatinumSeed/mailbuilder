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
        $template = view()->make('email-templates.renewal-loyalty', ['title' => $request->title])->render();
        $filename = time() . '.html';
        $public = public_path();
        $file = fopen($public . '/templates/' . $filename , 'w');
        fwrite($file, $template);

        return view('download', ['filename' => $filename]);
    }

    public function test($template)
    {
        return view('email-templates.' . $template);
    }
}
