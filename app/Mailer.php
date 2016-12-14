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
        $file_name = self::upload_image($data['doctor_image'], $data['name'], 129, 108);
        $data['doctor_image'] = $file_name;

        //upload link block images
        foreach ($data['link_block'] as $index => $link_block)
        {
            $file_name = self::upload_image($link_block['image'], $data['name'], 230, 183);
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

    static function upload_image($image, $prefix, $width, $height)
    {
        $directory = public_path() . '/uploads/images/';
        $filename = str_slug($prefix . '-' . str_random(5) . '.jpg');
        $path = $directory . '/' . $filename;
        // read image from temporary file
        $img = Image::make($image);
        // resize image
        $img->fit($width, $height);
        // save image
        $img->encode('jpg', 80)->save($path);
        return $filename;
    }

}
