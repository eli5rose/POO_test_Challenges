<?php
class Speedometer{

    const mile_km = 1.60934;
    const km_mile = 0.621371;

    public static function convertKmToMiles($km){

        $result = $km * self::km_mile;
        return round ($result, 2);

    }

    public static function convertMilesToKm($miles){
        $result = $miles * self::mile_km;
        return round($result,2);
    }
}
?>


