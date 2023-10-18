<?php

function calc_average($int){
    $numérateur = 0;
    $dénominateur = count($int);
    for($i = 0;$i<$dénominateur;$i++){
        $numérateur = $numérateur + $int[$i];
    }
    $result = $numérateur / $dénominateur;
    return round($result,1);
}

?>