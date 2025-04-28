<?php
    function recursiveFunc($i,$j){
        if($i==$j){
            return ;
        }else{
            echo "hello world $i <br>";
            recursiveFunc($i+1,$j);
        }
    }

    recursiveFunc(1,100);

?>