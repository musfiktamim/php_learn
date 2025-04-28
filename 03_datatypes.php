<?php
    //types off data;
    $name = "Musfikur Rahman Tamim"; //string -> text
    $age = 19; //int -> number
    $height = 5.5; // float -> decimale number
    $are_yu_adult = false; // bool -> yeas/no
    $my_arr = array(10,20,30,"Tamim"); // [10,20,30] //array -> in on container you can define multiple value
    $class = null; // NULL undefined -> blank container;
    echo "$name $age $height $are_yu_adult $class";
    echo "<br>";
    echo $my_arr[2];
    echo "<br>";
    // var_dump() -> check data types
    echo "type of name: " . var_dump($name) ; 
    echo "<br>";
    echo "type of age: " . var_dump($age) ;
    echo "<br>";
    echo "type of height: " . var_dump($height) ;
    echo "<br>";
    echo "type of adult_or_not: " . var_dump($are_yu_adult) ;
    echo "<br>";
    echo "type of my_arr: " . var_dump($my_arr) ;
    echo "<br>";
    echo "type of class: " . var_dump($class) ;

?>