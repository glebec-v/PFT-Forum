<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 07.10.2015
 * Time: 16:14
 */

namespace App\Http\Controllers;


class Components extends Controller
{
    public static function weather(){
        $city_id=27947; // id города
        $data_file="http://export.yandex.ru/weather-ng/forecasts/$city_id.xml"; // адрес xml файла

        $xml = simplexml_load_file($data_file); // раскладываем xml на массив

        // выбираем требуемые параметры (город, температура, пиктограмма и тип погоды текстом (облачно, ясно)

        $city=$xml->fact->station;
        $temp=$xml->fact->temperature;
        $pic=$xml->fact->image;
        $type=$xml->fact->weather_type;

        // Если значение температуры положительно, для наглядности добавляем "+"
        if ($temp>0) {
            $temp='+'.$temp;
        }

        return view('layouts._weather')->with(
            [
                'city' => $city,
                'city_id' => $city_id,
                'temp' => $temp,
                'pic' => $pic,
                'type' => $type
            ]);
    }
}