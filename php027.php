<?php
/*
    * Divide task in small function
    * Then accumulate all functions under one big function
    * It makes code more readable and clear
    * Code will be easier to debug
*/

function doTaskA()
{
    echo "Task A completed.\n";
}

function doTaskB()
{
    echo "Task B completed.\n";
}

function doTaskC()
{
    echo "Task C completed.\n";
}

function doTaskD()
{
    echo "Task D completed.\n";
}

function doTaskE()
{
    echo "Task E completed.\n";
}

function doLargeTask()
{
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}

doLargeTask();
