<?php
    $array2d1 = array( "musfik"=>array("name"=>"musfik","age"=>17),"tamim"=>array("name"=>"Tamim","age"=>18));
    $array2d2 = ["musfik"=>["name"=>"musfik","age"=>17],"tamim"=>["name"=>"Tamim","age"=>18]];
    echo "<pre>";
    print_r($array2d1);
    echo "</pre>";
    
    
    echo "<pre>";
    foreach($array2d1 as $key1 => $value1){
        echo " <br> $key1 = {";
        foreach($value1 as $key2 => $value2 ){
            echo " $key2 : $value2 ,";
        }
        echo "}";
    }
    echo "</pre>";
?>