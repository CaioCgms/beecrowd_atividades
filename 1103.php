<?php

    while (true) {

        $v = explode(" ", readline());

        $h1 = $v[0];
        $m1 = $v[1];

        $h2 = $v[2];
        $m2 = $v[3];

        if ($h1 >= 0 && $h1 <= 23 && $h2 >= 0 && $h2 <= 23 && $m1 >= 0 && $m1 <= 59 && $m2 >= 0 && $m2 <= 59) {
            
            $t1 = ($h1 * 60) + $m1;
            $t2 = ($h2 * 60) + $m2;

            if($t2 - $t1 < 0) {
                
                $tR = ((24 * 60)- abs($t2 - $t1));

            } else if ($t2 - $t1 == 0) {
                $tR = 24 * 60;
            } else {
                $tR = $t2 - $t1;
            }
            echo "{$tR}\n";
        }

        if(!$h1 && !$h2 && !$m1 && !$m2) break;
    }