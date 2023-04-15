<?php
    $valuesPar = [];
    $valuesImpar = [];

    function evenOddAdd($v)
    {

        global $valuesPar;
        global $valuesImpar;

        // Par
        if ($v % 2 == 0) {
            $valuesOut = [];
            $added = false;
            for ($i = 0; $i < count($valuesPar); $i++) {
                $valuesOut[$i] = $valuesPar[$i];
                $added = false;
                if ($valuesPar[$i] >= $v) { //...
                    $valuesOut[$i] = $v;
                    $added = true;
                    for ($k = $i; $k < count($valuesPar); $k++) {
                        $valuesOut[$k + 1] = $valuesPar[$k];
                    }
                    break;
                }
            }

            if (!$added) {
                $valuesOut[] = $v;
            }
            $valuesPar = $valuesOut;
        }

        // Impar
        if ($v % 2 == 1) {
            $valuesOut = [];
            $added = false;
            for ($i = 0; $i < count($valuesImpar); $i++) {
                $valuesOut[$i] = $valuesImpar[$i];
                $added = false;
                if ($valuesImpar[$i] >= $v) { //...
                    $valuesOut[$i] = $v;
                    $added = true;
                    for ($k = $i; $k < count($valuesImpar); $k++) {
                        $valuesOut[$k + 1] = $valuesImpar[$k];
                    }
                    break;
                }
            }

            if (!$added) {
                $valuesOut[] = $v;
            }

            $valuesImpar = $valuesOut;
        }        
    }

    function evenOddShow()
    {
        global $valuesPar;
        global $valuesImpar;

        for ($i = 0; $i < count($valuesPar); $i++) {
            echo "{$valuesPar[$i]} \n";
        }
        for ($i = count($valuesImpar) - 1; $i >= 0; $i--) {
            echo "{$valuesImpar[$i]} \n";
        }
    }

    $lines = readline();

    while ($lines > 0) {
        evenOddAdd(readline());
        $lines--;
    }
    evenOddShow(); 