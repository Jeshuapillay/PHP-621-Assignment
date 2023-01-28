<html>
<head>
 <title>Question 1.1</title>
 <link rel = "stylesheet" href = "Q1_1.css">
</head>
<body>
 <h1>PHP CHESS BOARD</h1>
 <table cellspacing = 0px cellpadding = 0px border = 1px>
 <?php
 for($row = 1; $row <= 8; $row++) {
 echo "<tr>";
 for($col = 1; $col <= 8; $col++) {
 $total = $row + $col;
 if($total%2 == 0) {
 echo "<td height = 30px width = 30px bgcolor = black></td>";
 } else {
 echo "<td height = 30px width = 30px bgcolor = white></td>";
 }
 }
 echo "<tr>";
 }
 ?>
 </table>
5 | P a g e
</body>
</html>
