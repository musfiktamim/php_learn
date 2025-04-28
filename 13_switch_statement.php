<?php
    $day = 11;

    switch($day){
        case 1:
            echo "Sat";
            break;
        case 2:
            echo "Sun";
            break;
        case 3:
            echo "Mon";
            break;
        case 4:
            echo "Tue";
            break;
        case 5:
            echo "Wed";
            break;
        case 6:
            echo "Thu";
            break;
        case 7:
            echo "Fri";
            break;
        case 8: case 9: case 10:
            echo "hey what's up";
            break;
        default:
            echo "invalide";
    }
?>