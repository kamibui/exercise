<?php

// i followed a youtube video for this part

$gallery = []; // 

if (isset($_POST["city"]) 
&& !empty($_POST["city"])){

      echo "Set Location";
    }else{
      $city = $_POST["city"];
      $api_key = "8d1d21bcf433da11d638661753a0c4d7";
      $api = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";
      $api_data = file_get_contents($api);


     // print_r($api_data);


      $weather = json_decode($api_data,true);
    //  print_r($weather);


        echo $weather["weather"][0]["description"];
    }



?>
