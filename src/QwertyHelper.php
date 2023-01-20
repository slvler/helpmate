<?php


namespace slvler\helpmate;
use DateTime;

class QwertyHelper{

    public static function getDateFormat($date)
    {
        if ($date) {
            $dt = new DateTime($date);

            return $dt->format("m/d/y");
        }
    }
    public static function getAbort($code, $message = '', array $headers = [])
    {
        return app()->abort($code, $message, $headers);
    }

    function getAsset($path, $secure = null)
    {
        return app('url')->asset($path, $secure);
    }
    function getDivisible($one,$two)
    {
        $result = $one % $two;
        if($result == 0) {
            return 'check';
        } else {
            return 'fail - remainder = '. $result;
        }
    }



}
