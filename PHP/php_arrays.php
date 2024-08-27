<?php 
// Example of Indexed Array

$bikes = array("Honda", "Hero", "Bajaj", "TVS", "KTM", "Yamaha", "Suzuki");
print_r($bikes);
print_r($bikes[5]);
echo "bikes Names Are : $bikes[0], $bikes[1]";


// Example of Associative Array
$bikes = array("BikeName"=>"Honda Shine", "model"=>"Honda123", "year"=>1990);
print_r($bikes);
echo "Bikes details are : $bikes[BikeName], $bikes[model], $bikes[year]";


// Example of Multidimentional array

// $students = array(
//     array("name" => "Rahul","scores" => array("math" => 85,"science" => 92,"english" => 88)),
//     array("name" => "Ajit","scores" => array("math" => 78,"science" => 81,"english" => 79))
    
// );

// Access specific elements directly
// echo "<pre>";
// print_r($students);

// echo "Rahul math score: " . $students[0]['scores']['math'] . "<br>";  
// echo "Ajit science score: " . $students[1]['scores']['science'];  



?>