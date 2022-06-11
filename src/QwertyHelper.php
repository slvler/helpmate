<?php


namespace Qwerty\HelperService;
use DateTime;


class QwertyHelper{

    /*
    * Time Section
    */

    public static function getDateFormat($date)
    {
        if ($date) {
            $dt = new DateTime($date);

            return $dt->format("m/d/y");
        }
    }


    /*
    * Redirect Section
    */

    public static function getAbort($code, $message = '', array $headers = [])
    {
        return app()->abort($code, $message, $headers);
    }


    /*
    * File Section
    */

    function getAsset($path, $secure = null)
    {
        return app('url')->asset($path, $secure);
    }

    /*
     * Math Section
     */
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
