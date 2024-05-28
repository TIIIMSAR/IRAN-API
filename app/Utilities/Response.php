<?php
namespace App\Utilities;

class Response{

    public static function respond($data,$status_code){
        echo $data . "<br>" .$status_code;
    }
}