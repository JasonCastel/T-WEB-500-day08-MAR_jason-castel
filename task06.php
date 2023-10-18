<?php
function sequence($n) {
    if ($n < 0) {
        return;
    }

    $sequence = "1";
    echo $sequence . PHP_EOL;

    for ($i = 1; $i <= $n; $i++) {
        $count = 1;
        $temp = "";
        $currentNumber = $sequence[0];

        for ($j = 1; $j < strlen($sequence); $j++) {
            if ($sequence[$j] == $currentNumber) {
                $count++;
            } else {
                $temp .= $count . $currentNumber;
                $currentNumber = $sequence[$j];
                $count = 1;
            }
        }

        $temp .= $count . $currentNumber;
        $sequence = $temp;

        echo $sequence . PHP_EOL;
    }
}

?>
