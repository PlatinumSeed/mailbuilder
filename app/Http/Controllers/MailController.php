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

        //Format
        $data['about_left_content'] = $this->nl2p($data['about_left_content']);
        $data['about_right_content'] = $this->nl2p($data['about_right_content']);

        //Generate file from template
        $template = view()->make('email-templates.renewal-loyalty', ['data' => $data])->render();
        $filename = time() . '.html';
        $public = public_path();
        $file = fopen($public . '/templates/' . $filename , 'w');
        fwrite($file, $template);

        //Give the download link
        return view('download', ['filename' => $filename]);
    }

    public function test($template)
    {
        return view('email-templates.' . $template);
    }

    private function nl2p($string, $line_breaks = true, $xml = true)
    {
        $string = str_replace(array('<p>', '</p>', '<br>', '<br />'), '', $string);
        // It is conceivable that people might still want single line-breaks
        // without breaking into a new paragraph.
        if ($line_breaks == true)
            return '<p style="color: #768b5a; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 13px; line-height: 24px; margin-top: 0px; margin-bottom: 15px;">'.preg_replace(array("/([\n]{2,})/i", "/([^>])\n([^<])/i"), array("</p>\n<p>", '$1<br'.($xml == true ? ' /' : '').'>$2'), trim($string)).'</p>';
        else
            return '<p>'.preg_replace(
            array("/([\n]{2,})/i", "/([\r\n]{3,})/i","/([^>])\n([^<])/i"),
            array("</p>\n<p>", "</p>\n<p>", '$1<br'.($xml == true ? ' /' : '').'>$2'),

            trim($string)).'</p>';
    }
}
