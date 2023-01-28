<html>

<head>

 <link rel = "stylesheet" href = "Q1_2.css">

 <title>Question 1.2</title>

</head>

<body>

 <h1>Number Grid</h1>

 <table>

 <?php
 	for($row = 1; $row < 11; $row++) {
 		echo "<tr>";
 		for($col = 1; $col < 11; $col++) {
 			echo("<td>" . $row * $col . "</td>");
 		}
 	echo "<tr>";
 	}
 ?>

 </table>

</body>

</html>