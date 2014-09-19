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

// 4. Decode the above JSON variable back to a normal array and echo to browser using a foreach loop in an unordered list.
$json = json_decode($json);

// 5. Place a condition inside the foreach loop so that the value in the 2nd element is displayed in lowercase.

?>
<html>
<head>
<!-- CSS 1: Style the unordered list as per the following instructions -->
<style>
	ul{
		list-style: none
	}
	ul li{
		display: block;
		background-color: #BADA55;
		margin-bottom: 20px;
		text-align: center;
	}
	ul li:hover{
		background-color: #EFFEC7;
	}
</style>
</head>
<body>
<ul>
<?php foreach($json as $key=>$val): ?>
	<li><?php echo $key; ?> = <?php echo ($key === 'Color' ? strtolower($val): $val); ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>