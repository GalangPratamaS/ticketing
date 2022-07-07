<?php 
namespace App\Helpers;

class JsonFormatter {
    protected static $response = [
        'code' => null,
        'message' => null,
        'data' => null,
    ];

    public static function createApi($code = null, $message = null, $data = null){
        
        self::$response['data'] = $data;
        self::$response['code'] = $code;
        self::$response['message'] = $message;
        

        return response()->json(self::$response, self::$response['code']);        
    }

}

?>