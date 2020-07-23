<?php
    $x=1;
    while($x<=100){
        if($x%3==0){
            $x++;
            continue;
        }
        echo $x."\t";
        $x++; 
    }
?>