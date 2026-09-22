<?php

function divide(int $number, int $divideBy) {
    if ($divideBy == 0) {
        throw new Exception("Divide by 0 is not possible");
    }
    return $number / $divideBy;
}
try {
    echo divide(10,2);
    echo PHP_EOL;
} catch(Exception $error) {
    echo $error;
    echo PHP_EOL;
}
try {
    echo divide(10,0);
    echo PHP_EOL;
} catch(Exception $error) {
    echo $error;
    echo PHP_EOL;
}
?>
