<?php
    $numbLeds = [
        1 => 2,
        2 => 5,
        3 => 5,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 3,
        8 => 7,
        9 => 6,
        0 => 6
    ];

    function countLeds()
    {
        global $numbLeds;

        $numero = readline();
        $numeroChars = str_split($numero);
        $countLEDs = 0;
    
        for ($i = 0; $i < count($numeroChars); $i++) {
            $char = $numeroChars[$i];
            if (isset($numbLeds[$char])) {
                $countLEDs += (int) $numbLeds[$char];
            }
        }

        echo "{$countLEDs} leds\n";
    }

    $tests = (int) readline();

    while ($tests > 0) {
        countLeds();
        $tests--;
    }
