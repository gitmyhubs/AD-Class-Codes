<?php 
// Arithmetic operators
// $x = 10;  
// $y = 6;
// $c = $x + $y;
// echo "The sum of x and y is : " .$c;

// Assignment Operators
// $x = 50;  
// $x += 300; 
// echo "The Value of x is : " .$x;

// Comparison operator
// $x = 100;  
// $y = 100;
// var_dump($x == $y); // The var_dump() function dumps information about one or more variables. 

//  Increment / Decrement Operators
// Example of pre-increment
// $x = 20;  
// echo "Pre-increment of 20 is : " . ++$x . "<br>";

// // example of post-increment
// $x = 30;  
// echo "Post-increment of 30 is : " . $x++ . "<br>";

// // example of pre-decrement
// $x = 40;  
// echo "Pre-decrement of 40 is : " . --$x . "<br>";

// // Example of post-decremant
// $x = 50;
// echo "Post-Decrement of 50 is : " . $x--; 

// Logical Operator
// $x = 100;  
// $y = 200;
// if ($x == 100 or $y == 2000) {
//     echo "x and y are true";
// }
// else{
//     echo "x and y are not true!!";
// }

// String Operator
// $txt1 = "Hello AD Class";
// $txt2 = "How are you";
// echo "<h1>" . $txt1 . $txt2. "</h1>";

// Example of Array operator

$arr = ["name","email","password"];
$x = array("name" => "Piyush", "Email" => "email@email.com");  
$y = array("Mobile" => 1234567890, "Add" => "Hazaribagh");  
print_r($x + $y);


// Example of Conditional Assignment Operator using (?) Ternary operator
$user_login = true;
$name = "Piyush";
// Check condition where conditoin met or not
$message = $user_login ? ' Hello ' .$name. ' Welcome back! ' : ' Please log in. ';
echo $message; 

?>