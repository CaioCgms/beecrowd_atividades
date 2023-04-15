<?php

$stp = 3; //Número de caracteres pulados

function encrypt(string $palavra, bool $jump, bool $reverse, bool $trunc)
{
    global $stp;

    $chars = str_split($palavra);
    $out = "";

    for ($i = 0; $i < count($chars); $i++) {
        $char = $chars[$i];            
        $ascii = (int) ord($char);

       

        if ((ord($char) >= 97 && ord($char) <= 122) || (ord($char) >= 65 && ord($char) <= 90)) {


            if ($jump) {
                $ascii += $stp;
            } 
             
            if ($reverse) { 
                $out = chr((int) $ascii) . $out;
            } else {
                $out = $out . chr((int) $ascii);
            }
        } else {

            if ($reverse) {
                $out = $char . $out;
            } else {
                $out = $out . $char;
            }
        }
    }
        if ($trunc ) {
            $outAux = '';
            $out = str_split($out);
            for($i = 0; $i < count($out); $i++) {
                $char = $out[$i];
                if ($i >= count($out)/2) {
                    $ascii = ord($char);
                    $ascii--;
                    $char = chr($ascii);
                }
                $outAux .= $char;
            }

            $out = $outAux;
        }
    echo "{$out}\n";
}

$proc = 1;
while($proc < 4) {
    $lines = readline(); //Número de linhas
    $count = 0;
  while( $lines > $count ) {
        $palavra = readline();
        encrypt($palavra, $proc >= 1, $proc >= 2, $proc >= 3);
        $count++;
    }  
    $proc++;
}

