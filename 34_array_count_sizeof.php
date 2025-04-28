<?php
    $arrya1 = [1,2,3,4,5,6,7,8,9,9];

    $arrya2 = [[1,2,3,4],[5,6,7,8]];

    $arrya3 = [[[1,2,3,4],[5,6,7,8]],[[1,2,3,4],[5,6,7,8]]];

    echo "</br>";
    echo count($arrya1);
    echo "</br>";
    echo sizeof($arrya1);
    echo "</br>";
    echo sizeof($arrya2);
    echo "</br>";
    echo count($arrya2);
    echo "</br>";
    echo count($arrya2,1);
    echo "</br>";
    echo sizeof($arrya3);
    echo "</br>";
    echo count($arrya2,true);
?>