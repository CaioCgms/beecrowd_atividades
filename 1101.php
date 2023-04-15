<?php
    function soma($x, $y)
    {
        $a = $x > $y ? $y : $x;
        $b = $x > $y ? $x : $y;
        $sum = 0;
        for ($i = $a; $i <= $b; $i++) {
            echo "{$i} ";
            $sum += $i;
        }
        echo "Sum={$sum}\n";
    }

    $y = 1;
    $x = 0;
    while (true) {
        $t = explode(" ", readline());
        $x = $t[0];
        $y = $t[1];
        if ($x > 0 && $y > 0) {
            soma($x, $y);
        } else {
            break;
        }
    }