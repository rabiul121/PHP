<?php

// for loop
echo "for Loop\n";
echo "----------------\n";
for ($i = 1; $i <= 10; $i++) {
    // echo $i."\n";
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}
echo "\n";

// while loop
echo "while Loop\n";
echo "----------------\n";
$a = 0;
while ($a < 10) {
    $a++;
    echo $a . PHP_EOL;
}
echo PHP_EOL;

// do-while loop
echo "do-while Loop\n";
echo "----------------\n";
$m = 0;
do {
    $m++;
    echo $m . "\n";
} while ($m < 10);

echo PHP_EOL;

// Go-To loop
echo "go-to Loop\n";
echo "----------------\n";
$n = 0;
a:
$n++;
echo $n . PHP_EOL;
if ($n < 10) {
    goto a;
}

echo PHP_EOL;
