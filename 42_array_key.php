<?php
    $color = ["red","green","blue","yellow"];
    echo "<pre>";
    print_r(array_keys($color));
    echo "<br>";
    print_r(array_key_first($color));
    echo "<br>";
    print_r(array_key_last($color));
    echo "<br>";
    print_r(array_key_exists(3,$color));
    echo "<br>";
    print_r(key_exists(3,$color));
    echo "</pre>";
?>