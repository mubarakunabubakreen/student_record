<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Dashboard</h1>
    <h6>Welcomeback, <?php echo $_SESSION['username'] ?></h6>
    <a href="logout.php">Logout</a>
</body>

</html>