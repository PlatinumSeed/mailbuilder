<?php

namespace App;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class Mailer extends Model
{
    protected $guarded = [];

    public static function save_new_mail($data)
    {
        //Create the html file
        $template = view()->make('email-templates.renewal-loyalty', ['data' => $data])->render();
        $filename = time() . '.html';
        $public = public_path();
        $file = fopen($public . '/templates/' . $filename , 'w');
        fwrite($file, $template);

        $content = serialize(array_except($data, ['name', '_token']));
        $mailer = new Self;
        $mailer->name = $data['name'];
        $mailer->content = $content;
        $mailer->file_name = $filename;
        $mailer->preview = (new Controller)->html2image($template);
        $mailer->save();

        return $mailer;
    }
}
