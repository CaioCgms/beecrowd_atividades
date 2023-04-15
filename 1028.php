<?php

    function pilhaDeFigurinhas($vicente, $ricardo) {
        $dv = 1;
        $dvMax = 1;
        $menor = $vicente > $ricardo ? $ricardo : $vicente;
        while ( $dv <= $menor) {
            if ($vicente % $dv == 0 && $ricardo % $dv == 0) {
                $dvMax = $dv;
            }
            $dv++;
        }
        echo  "$dvMax\n";
    }

    $lines = readline();

    while ($lines > 0) {
        $in = explode(" ", readline());
        pilhaDeFigurinhas($in[0], $in[1]);
        $lines--;
    }