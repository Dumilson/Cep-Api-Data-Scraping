<?php
namespace App\Utils;


class Helper
{
    
    public static function returnApi($messages, $status, $data = null, $header = null)
    {
        $response = ['status' => '0', 'message' => 'Validation error'];
        $response['status'] = $status;
        $response['message'] = $messages;
        if ($data != null) {
            $response['data'] = $data;
        }
        return response($response, $status)->withHeaders([
            $header
        ]);
    }

    public static function formated_CEP($string)
    {
        return substr($string, 0, 5) . '-' . substr($string, 5, 3);
    }
}
