<?php
    function forLooping($start=0,$length=10,$step=1){
        for($start;$start<$length;$start = $start + $step){
            echo "hello world $start <br>";
        }
    }
    forLooping(1,1001,100);
?>