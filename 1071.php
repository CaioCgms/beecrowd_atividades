<?php

    function soma($x, $y)
    {
        $a = $x > $y ? $y : $x;
        $b = $x > $y ? $x : $y;
        $soma = 0;
        if ($b > $a) {
            for ($i = $a + 1; $i < $b; $i++) {
                if ( $i % 2 == 1 || $i % 2 == -1) {
                    $soma += $i;
                }
            }
        }

        echo "$soma\n";
    }

    soma((int) readline(),(int) readline());