<?php
/* $name = "Earth";
function doSomething()
{
    // global $name;
    echo $GLOBALS['name']; // $GLOBALS = Super-global
}
doSomething(); */

/* function doSomething()
{
    $name = "Earth"; //local scope
    echo $name;
}
doSomething();
 */
function doSomething()
{
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i . "\n";
}

doSomething();
doSomething();
doSomething();
doSomething();
