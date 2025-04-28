<?php
    $age = 9;
    if($age>10 && $age<18){
        echo "you are teen";
    }elseif($age<=10 && $age > 0){
        echo "you are keed";
    }elseif($age>=18 && $age<=40){
        echo "you are adult";
    }else{
        echo "you are expired";
    }
?>