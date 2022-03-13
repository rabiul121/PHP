<?php

$i = 0;
while ($i < 5) {
    echo $i . "\n";
    $i++;
}

echo "-------------------\n";

$j = 0;
while ($j++ < 5) {
    echo $j . "\n";
}

echo "-------------------\n";

$j = 0;
while (++$j < 5) {
    echo $j . "\n";
}
