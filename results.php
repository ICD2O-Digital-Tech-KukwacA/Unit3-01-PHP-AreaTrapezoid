<?php
	// get the base and height from the textfields
	$base1 = $_POST['base1'];
	$base2 = $POST['base2'];
	$height = $_POST['height'];

	// calculate the area
	$area = ($base1 + $base2 /2) * $height;
	?>
	<h3>Results:</h3>
	The area of the trapezoid is <?php echo "$area.round(float $area,2)" ?>cm<sup>2</sup>.;