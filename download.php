<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Download - Moment 5</title>
</head>

<body>
  <div class="topnav">
    <a href="index.php">Input</a>
    <a href="result.php">Result</a>
    <a href="download.php" class="active">Download</a>
  </div>
  <?php include './includes/header.php' ?>
  <h3>If you want to look at the code, you can find it by clicking the icons below!</h3><br>
  <div id="downloadWrapper">
    <a href="https://github.com/green-swe/moment5" target="_blank"><img id="git" src="./img/github.png" alt=""></a>
    <a href="https://drive.google.com/file/d/1WVma_k3p9y5rxhBxdmqWRwNX_4XkeblW/view?usp=sharing" target="_blank"><img id="gog" src="./img/gogdrive.png" alt=""></a>
  </div>
  <footer><?php include './includes/footer.php' ?></footer>
</body>

</html>