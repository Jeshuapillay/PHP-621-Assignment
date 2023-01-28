<html>

<head>

<style>

 body {
 background-color: black;
 color: white;
 font-family: calibri;
 }

 table, td, th {
 border: 2px solid white;
 border-collapse: collapse;
 padding: 10px;
 margin-left: 400px;
 margin-top: 30px;
 }

 h1 {
 margin-left: 455px;
 margin-top: 40px;
 font-size: 50px;
 text-decoration: underline;
 }

</style>

<title>Question 2.1_again</title>

</head>

<body>

 <h1>Car Dealership</h1>

 <?php

 $table = array(array("GTI", 15, 10), array("Polo", 20, 15), array("Golf", 25, 20),
 array("Audi", 30, 25), array("Toyota", 35, 30), array("Hyundai", 40, 35),
 array("Ferrari", 45, 40), array("TSI", 50, 45), array("Haval", 55, 50),
 array("Rangrover", 60, 55));

 echo("<table>");
 echo("<th>" . "Brand Name:" . "</th>");
 echo("<th>" . "Number of stock in store:" . "</th>");
 echo("<th>" . "Quantity Sold:" . "</th>");

 foreach ($table as $item => $a) {
 $i = 0;
 echo("<tr>");
 	while ($i < 3) {
 		echo("<td>" . $a[$i] . "</td>");
 		$i++;
 	}
 	echo("</tr>");
 	}

 echo("</table>");
 ?>

</body>

</html>