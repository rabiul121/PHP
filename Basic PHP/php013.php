<?php

$n = 23;

if ($n % 2 == 0) {
    echo "{$n} is an even number";
}else {
    echo "{$n} is a odd number";

}
echo PHP_EOL;

// Alternative implementation

if ($n % 2 == 0):
    echo "{$n} is an even number";
    echo PHP_EOL;
else:
    echo "{$n} is a odd number";
    echo PHP_EOL;
endif;
