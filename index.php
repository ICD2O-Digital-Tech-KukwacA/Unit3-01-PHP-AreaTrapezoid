<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Area of a Trapezoid">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="kukwac">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-16x16.png">
    <link rel="manifest" href="./Favicons/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Area of a Trapezoid</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Area of a Trapezoid in PHP</h1>";
			echo "<h3>This program will calculate the area of a trapezoid.</h3>";
		?>
		<!-- form to get the bases and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="base1">Base(a) (cm):</label>
      <input type="float" id="base1" placeholder="Enter the base (cm)" name="base1"><br><br>
      <label for="base2">Base(b) (cm):</label>
      <input type="float" id="base2" placeholder="Enter the base (cm)" name="base2"><br><br>
      <label for="height">Height (cm):</label>
      <input type="float" id="height" placeholder="Enter the height (cm)" name="height"><br><br>
      <input type="submit" value="Calculate Area">
    </form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">
        <div id="user-info">
          <div id="$area"></div>
      </div>
      </iframe>
	</body>
</html>