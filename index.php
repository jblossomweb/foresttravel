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
	button{

	}
</style>
</head>
<body>
<ul>
<?php foreach($json as $key=>$val): ?>
	<li><?php echo $key; ?> = <?php echo ($key === 'Color' ? strtolower($val): $val); ?></li>
<?php endforeach; ?>
</ul>
<button>Save</button>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(function() {
	// jQuery 1: Upon clicking the first list item replace the word “Apple” with “Orange”
	$("li:first").click(function() {
		$(this).html($(this).html().replace("Apple","Orange"));
	});
	// jQuery 2: Upon hovering the mouse over the second list item change its background color to some other color.
	$("li:eq(1)").hover(function() {
		$(this).css({'background-color': '#C0FFEE'});
	}, function(){
		$(this).css({'background-color': '#BADA55'});
	});
	// jQuery 3: Upon clicking the third list item have it fade away and reappear above the first item.
	$("li:eq(2)").click(function() {
		var el = $(this);
		el.fadeOut("fast",function(){
			el.parent('ul').prepend(el);
			el.fadeIn("fast");
		});
		
	});
	// MySQL 2: Add a link below the unordered list that would save the list items into the database as separate rows in the order in which they are displayed - using jQuery ajax
	$("button").click(function() {
		var el = $(this);
		var records = [];
		$('ul').children('li').each(function() {
			var string = $(this).html().replace(' ','');
			var array = string.split('=');
			records.push({
				"label": array[0],
				"value": array[1]
			});
		});
		records = $.extend({}, records);
		$.post('save.php',records,function(){
			el.html('Saved!').attr('disabled',true);
		});
	});
});
</script>
</body>
</html>