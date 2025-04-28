<?php 
    $array1 = array("name"=>"tamim","age"=>19,"height"=>5.5);
    $array2 = ["name"=>"tamim","age"=>19,"height"=>5.5];

    foreach($array1 as $value){
        echo "$value <br>";
    }

    foreach($array1 as $key => $value){
        echo "$key = $value <br>";
    }
?>