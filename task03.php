<?php
function get_shortest($strings) {
    if (empty($strings)) {
        return null;
    }
    $uniqueStrings = array_unique($strings);

    $shortest = reset($uniqueStrings);

    foreach ($uniqueStrings as $string) {
        if (strlen($string) < strlen($shortest)) {
            $shortest = $string;
        }
    }
    return $shortest;
}

?>
