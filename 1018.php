<?php
    $valor = readline();
    $valorOriginal = $valor;
    $disponivel = 0;

    $cedulas = [100, 50, 20, 10, 5, 2, 1];
    $cedulasCount = [];

    function sacar(int $valor)
    {
        global $cedulas;
        global $cedulasCount;

        if ($valor > 0) {
            for ($i = 0; $i < count($cedulas); $i++) {
                $c = $cedulas[$i];
            
                if ($valor >= $c) {
                    if(isset($cedulasCount[$c])){
                        $cedulasCount[$c] += 1;
                        $valor = $valor - $c;
                        $i = $i - 1;
                    }else{
                        $cedulasCount[$c] = 1;
                        $valor = $valor - $c;
                        $i = $i - 1;
                    }
                }
            }
            // if(isset($cedulasCount[]))
            return sacar($valor);
        }
        // Resto
        return $valor;
    }

    function cedulasSacadas()
    {
        global $cedulasCount;
        global $cedulas;
        global $valorOriginal;
        
        $keys = array_keys($cedulasCount);

        echo "{$valorOriginal}\n";

        for ($i = 0; $i < count($cedulas); $i++) {
            $k = $cedulasCount[$cedulas[$i]] ?? 0;
            $v = $cedulas[$i];
            echo "{$k} nota(s) de R$ {$v},00\n";
        }
    }

    sacar($valor);
    cedulasSacadas();
