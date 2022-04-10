<?php
session_start();
if (!isset($_SESSION['convert'])) {
  $convert = "Please enter a string on the first page!";
  $input = "";
} else {
  $convert = $_SESSION['convert'];
  $input = $_SESSION['input'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Result - Moment 5</title>
</head>

<body>
  <div class="topnav">
    <a href="index.php">Input</a>
    <a href="result.php" class="active">Result</a>
    <a href="download.php">Download</a>
  </div>
  <?php include './includes/header.php' ?>

  <?php

  if ($input == "") {
    echo $convert;
  } else {
    echo "<h3>You entered this string: <br><br>'" . $input . "'</h3><br><hr>";
    echo "<h3>The result after your string being converted to the robber languages is: <br><br>'<div class='resultText'>" . $convert . "'</div></h3>";
  }
  ?>
  <footer><?php include './includes/footer.php' ?></footer>
</body>

</html>