<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
session_start();
  echo $_SESSION["email"];
  echo $_SESSION["parola"];
?>

<button></button>
</body>

</html>