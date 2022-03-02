<?php
echo "----------------\nFibonacci Series\n----------------\n";
$veryOld = 0;
$old = 1;
$new = 1;
for ($i = 0; $i < 15; $i++) {
    echo $veryOld . " ";
    $old = $new;
    $new = $veryOld + $old;
    $veryOld = $old;
}
