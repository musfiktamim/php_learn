<?php
    function compate($a,$b){
        if($a===$b){
            return 0;
        }
        return ($a > $b)? 1 : -1;
    }

    $name1 = ["a"=>"Musfik","b"=>"Rahman","c"=>"Tamim","d"=>"Muhammad"];
    $name2 = ["a"=>"Musfik","c"=>"Muhammad"];

    echo "<pre>";
    print_r(array_intersect($name1,$name2));
    print_r(array_intersect_key($name1,$name2));
    print_r(array_intersect_assoc($name1,$name2));
    echo "<br>";
    
    print_r(array_intersect_uassoc($name1,$name2,"compate"));
    print_r(array_uintersect_assoc($name1,$name2,"compate"));

    echo "<br>";
    print_r(array_uintersect($name1,$name2,"compate"));
    echo "<br>";
    print_r(array_uintersect_assoc($name1,$name2,"compate"));
    print_r(array_intersect_ukey($name1,$name2,"compate"));    
    echo "</pre>";

?>