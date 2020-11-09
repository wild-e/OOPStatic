<?php


class Speedometer{

    public const CONVERT_NUMBER = 1.609;

    public static function convertKmToMiles(int $number)
    {
        return round(($number/self::CONVERT_NUMBER), 2);
    }

    public static function convertMilesToKm(int $number)
    {
        return round(($number*self::CONVERT_NUMBER), 2);
    }
}
