<?php
    $b = 9;
    function changeNormal($a){
        $a = 10;
    }
    
    function changeWithReference(& $a){
        $a = 100;
    }

    changeNormal($b);
    echo $b;
    changeWithReference($b);
    echo $b;

?>