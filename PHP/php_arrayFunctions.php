<?php
// Example of Count() function
// $cars=array("Volvo","BMW","Toyota");
// echo count($cars);

// Example of sort() function
// $cars = array("Volvo", "BMW", "Toyota");
// echo rsort($cars);

// Example of shuffle() function
// $color = array("red","green","blue","yellow","purple");
// shuffle($color);
// print_r($color);

// Example of ksort() function
// $age=array("Salman"=>"55","Shahrukh"=>"60","Akshay"=>"55");
// ksort($age);
// print_r($age);


// Example of in_array()
// $people = array("Shubhash", "Sita", "Rashmi", "Indu", "Vinod");
$staffs = array("Chandan sir","Binod sir","Sandeep Sir","Rasmi madam");
if (in_array("Binod sir", $staffs)) 
{
    echo "The Staff Name is matched";
} 
else 
{
    echo "The staff Name is not Matched";
}

// Example of array_merge()
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
$mergedArray = array_merge($a1,$a2);
// echo $mergedArray[0];

