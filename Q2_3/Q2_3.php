<html>

<head>

<title>Question 2.3</title>

<style>

 body{
 background-color: black;
 color: white;
 }

 h1 {
 font-family: calibri;
 font-size: 40px;
 text-decoration: underline;
 margin-left: 460px;
 margin-top: 100px;
 }

 table, td {
 border: 1.5px solid white;
 border-collapse: collapse;
 font-family: calibri;
 font-size: 20px;
 padding: 5px;
 margin-left: 400px;
 margin-top: 90px;
 }

</style>

</head>

<body>

 <h1>Student's Grades</h1>

 <?php

 echo("<table>");
 echo("<th>Name</th>");
 echo("<th>Mark</th>");
 echo("<th>Grade</th>");

 $grades = array("Sauer Jeppe" => 75, "Von Weilligh" => 44,
 "Troy Commisioner" => 60, "Paul Krugger" => 62, "Jacob Maree" => 70);

 foreach ($grades as $name => $mark) {
 	echo("<tr>");
 		if($mark >= 0 && $mark <= 49) {
 			echo("<td>$name</td> <td>$mark</td> <td> has failed.</td>");
 		} elseif($mark >= 50 && $mark <= 69) {
 			echo("<td>$name</td> <td>$mark</td> <td> has passed.</td>");
 		} elseif($mark >= 70 && $mark <= 100) {
 			echo("<td>$name</td> <td>$mark</td> <td> has scored a distinction.</td>");
 		}
 	echo("</tr>");
 }
 echo("</table>");
 ?> 
</body>

</html>
