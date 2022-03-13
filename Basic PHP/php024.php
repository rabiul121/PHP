<?php
function serve($foodType = "Coffee", $numberOfItems = "1 cup")
{
    echo "{$numberOfItems} of {$foodType} has/have been served";
}

$food = "Tea";
$quantity = "2 cups";
serve($food, $quantity);
