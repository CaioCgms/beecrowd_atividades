<?php

    function resto($x, $y)
    {
        $a = $x > $y ? $y : $x;
        $b = $x > $y ? $x : $y;
        if ($b > $a) {
            for ($i = $a + 1; $i < $b; $i++) {
                if ( $i % 5 == 2 || $i % 5 == 3) {
                    echo "{$i}\n";
                }
            }
        }
    }

    resto((int) readline(),(int) readline());