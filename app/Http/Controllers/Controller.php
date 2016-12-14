<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $apikey = "d6f8a90db49f6898";
    protected $api_url = "http://api.page2images.com/html2image";

    function html2image($html)
    {
        // URL can be those formats: http://www.google.com https://google.com google.com and www.google.com
        $device = 6; // 0 - iPhone4, 1 - iPhone5, 2 - Android, 3 - WinPhone, 4 - iPad, 5 - Android Pad, 6 - Desktop
        $loop_flag = TRUE;
        $timeout = 120; // timeout after 120 seconds
        set_time_limit($timeout+10);
        $start_time = time();
        $timeout_flag = false;

        //Note: free rate plan user cannot use SSL url.
        $url = ""; //This is the URL of the page. We will use it to generate relative path to get remote resources: css, js or images.

        while ($loop_flag) {
            // We need call the API until we get the screenshot or error message
            try {
                $para = array(
                	"p2i_html"        => $html,
                    "p2i_url"         => $url,
                    "p2i_key"         => $this->apikey,
                    "p2i_device"      => $device,
                    'p2i_screen'      => '1024x768',
                    'p2i_size'        => '1024x768',
                    'p2i_imageformat' => 'jpg'
                );
                // connect page2images server
                $response = $this->connect($this->api_url, $para);

                if (empty($response))
                {
                    $loop_flag = FALSE;
                    // something error
                    echo "something error";
                    break;
                } else
                {
                    $json_data = json_decode($response);
                    if (empty($json_data->status)) {
                        $loop_flag = FALSE;
                        // api error
                        break;
                    }
                }

                switch ($json_data->status) {
                    case "error":
                        // do something to handle error
                        $loop_flag = FALSE;
                        echo $json_data->errno . " " . $json_data->msg;
                        break;
                    case "finished":
                        // do something with finished. For example, show this image
                        return $json_data->image_url;
                        // Or you can download the image from our server
                        $loop_flag = FALSE;
                        break;
                    case "processing":
                    default:
                        if ((time() - $start_time) > $timeout) {
                            $loop_flag = false;
                            $timeout_flag = true; // set the timeout flag. You can handle it later.
                        } else {
                            sleep(3); // This only work on windows.
                        }
                        break;
                }
            } catch (Exception $e) {
                // Do whatever you think is right to handle the exception.
                $loop_flag = FALSE;
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
        }

        if ($timeout_flag) {
            // handle the timeout event here
            echo "Error: Timeout after $timeout seconds.";
        }
    }

    // curl to connect server
    function connect($url, $para)
    {
        if (empty($para)) {
            return false;
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($para));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }

    function upload_image($image, $prefix, $width, $height)
    {
        $directory = public_path() . '/uploads/images/';
        $filename = str_slug($prefix . '-' . time() . '.jpg');
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
