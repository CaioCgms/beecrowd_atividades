<?php

    function cesar_crypt(string $palavra, int $stp, bool $reverse)
    {
        $chars = str_split($palavra);
        $out = '';

        for ($i = 0; $i < count($chars); $i++) {
            $char = $chars[$i];
            if ((ord($char) >= 97 && ord($char) <= 122) || (ord($char) >= 65 && ord($char) <= 90)) {
                $r = $reverse ?  -1 : 1;
                // echo "DIF " . (abs($ascii - 90)) . "\n";
                $ascii = ord($char) + ($r) * $stp;
                if ($ascii > 90) {
                    $ascii = 65 + ($r) * (abs($ascii - 89));
                } else if ($ascii < 65) {
                    $ascii = 90 + ($r) * (abs($ascii - 64));
                } 
            }
            // echo "ascii " . $ascii . ">>" . chr($ascii)  ."\n";
            $out = $out . chr($ascii);
        }
        echo "$out\n"; // 'Letras ' . count($chars);
    }

    $lines = readline();
    while ($lines > 0) {
        cesar_crypt(readline(), readline(), true);
        $lines--;
    }
