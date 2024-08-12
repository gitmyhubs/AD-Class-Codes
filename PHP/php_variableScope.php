<?php
// Example of Local Scope variable
// function localScope() {
//     $localVariable = "I am local variable, I am not Accessible outside the function";
//     echo $localVariable;
// }
// localScope(); // calling function here



// Example of Global Scope variable
// $globalVariable = "I am global and I am Accessible anywhere Outside the function";
// function globalScopeVar() {
//     global $globalVariable; 
//     echo $globalVariable; 
// }
// globalScopeVar(); // calling function here
// echo $globalVariable; 
?>


<?php
// Example of $ and $$ variables
$fruit = "Apple"; 
echo $fruit; 
?>

<?php
// Declare a variable name in another variable
$varName = "fruit";

// Declare a variable with the name stored in $varName
$$varName = "Apple";

// Access the variable using the name stored in $varName
echo $fruit; 
?>

<?php 


?>