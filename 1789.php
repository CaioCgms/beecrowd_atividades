<?php
    $grupo = readline();

    if (  $grupo && $grupo > 0 &&  $grupo < 501) {
        $velocidades = explode(" ", readline());
        $velocidadeMax = 0;
        for($i = 0; $i < count($velocidades); $i++) {
            $velocidade = $velocidades[$i];
            if ( $velocidade > 0 && $velocidade < 51) {
                if ($velocidade < 10) {
                    $velocidade = 1;
                } else if ($velocidade >= 10 && $velocidade < 20) {
                    $velocidade = 2;
                } else {
                    $velocidade = 3;
                }
                $velocidadeMax = $velocidadeMax > $velocidade ? $velocidadeMax : $velocidade;
            }
        }
        echo "$velocidadeMax";
    }