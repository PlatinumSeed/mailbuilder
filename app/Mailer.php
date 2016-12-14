<?php

namespace App;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Image;
use Storage;

class Mailer extends Model
{
    protected $guarded = [];

    public static function save_new_mail($data)
    {
        //upload Dr image
        $file_name = (new Controller)->upload_image($data['doctor_image'], $data['name'], 129, 108);
        $data['doctor_image'] = $file_name;

        //upload link block images
        foreach ($data['link_block'] as $index => $link_block)
        {
            $file_name = (new Controller)->upload_image($link_block['image'], $data['name'], 230, 183);
            $data['link_block'][$index]['image'] = $file_name;
        }

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
