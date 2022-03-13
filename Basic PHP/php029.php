<?php
// Fibonacci series using recursive function
function fibonacci($old, $new, $end)
{
    static $start;
    $start = $start ?? 1;
    if ($start > $end) {
        return;
    }
    $start++;
    echo $old . " ";
    // echo PHP_EOL;
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $end);
}
fibonacci(0, 1, 15);
