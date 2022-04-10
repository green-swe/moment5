<?php
session_start();
include './includes/toRobberLang.php';

if (isset($_POST['input'])) {
  $convert = $_POST['input'];
  $_SESSION['input'] = $convert;
  $_SESSION['convert'] = toRobberLang($_POST['input']);

  header('Location: result.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Input - Moment 5</title>
</head>

<body>

  <div class="topnav">
    <a href="index.php" class="active">Input</a>
    <a href="result.php">Result</a>
    <a href="download.php">Download</a>
  </div>

  <?php include './includes/header.php' ?>

  <form action="" method="post">
    <h3>Enter a string to convert to the Robber Language (Rövarspråket): </h3>
    <textarea id="textInput" type="text" name="input"></textarea><br><br>
    <input type="submit" name="submit" value="Translate">
  </form>

  <footer><?php include './includes/footer.php' ?></footer>
</body>

</html>