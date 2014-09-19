<?php 

// PHP

// 1. Organize the following list of items into an array variable.
$var = array(
	'Fruit'	=>	'Apple',
	'Color'	=>	'Yellow',
	'Number'=>	7, // in php, trailing commas are allowed.
);

// 2. Modify the 3rd element from the above array by multiplying the value 7 to equal 21 using an equation.
$var['Number'] = $var['Number'] * 3;

// 3. Convert the array variable created above into JSON and save into a new variable.
$json = json_encode($var);