<?php
    function labs(int $a, int $b) : int
    {
        $d = $a > $b ? $a : $b;
        return $d;
    }

    function maior(int $a, int $b, int $c) : void
    {
        $t = labs($a, $b);
        $t = labs($t, $c);
        echo "${t} eh o maior\n";
    }

    $in = readline();
    $values = explode(' ', $in);
    maior($values[0], $values[1], $values[2]);

