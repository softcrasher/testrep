<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>calculator app</h1>
  <form action="calculator.php" method="post">
      <label for="num1">enter first number: </label><br>
      <input type="number" name="num1"><br>
      <label for="num2">enter second number: </label><br>
      <input type="number" name="num2"><br>
      <label for="op">enter operator: </label><br>
      <input type="text" name="op"><br>
      <input type="submit" value="click to submit" class="submit"><br>
  </form>
</body>
</html>
<?php
  $n1 = $_POST["num1"];
  $n2 = $_POST["num2"];
  $op = $_POST["op"];
  $total = null;

  if($op == '+')
  {
    $total =  $n1 + $n2;
    echo "<h1>total: $total<h1>";
  }
  else if($op == '-')
  {
    $total =  $n1 - $n2;
    echo "<h1>total: $total<h1>";
  }
  else if($op == '*')
  {
    $total =  $n1 * $n2;
    echo "<h1>total: $total<h1>";
  }
  else if($op == '/')
  {
    $total =  $n1 / $n2;
    echo "<h1>total: $total<h1>";
  }
  else 
  {
    echo "<h1>invalid operator</h1>";
  }
?>