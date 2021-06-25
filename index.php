<?php

// setup array 
$array1 = [11, 23, 232];

//  setup key default
$array1[] = 32;

// set up key name in arr 
$array1["name"] = "Nam";
echo "<pre>";
print_r($array1);
echo "</pre>";

// update element in array
$array1[2] = "hoa";
echo "<pre>";
print_r($array1);
echo "</pre>";
