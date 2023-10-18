<?php
function calc(string $operator,int $nbr1,int $nbr2){
    if ($operator == "+"){
        $result = $nbr1 + $nbr2;
        return $result;
    }
    elseif($operator == "-"){
        $result = $nbr1 - $nbr2;
        return $result;
    }
    elseif($operator == "*"){
        $result = $nbr1 * $nbr2;
        return $result;
    }
    elseif($operator == "/"){
        if ($nbr2 == 0){
            return "Cannot divide by 0";
        }
        else{
            $result = $nbr1 / $nbr2;
            return $result;
        }    
    }
    elseif($operator == "%"){
        $result = $nbr1 % $nbr2;
        return $result;
    }
    else{
        return "Unknown operator";
    }
}



?>