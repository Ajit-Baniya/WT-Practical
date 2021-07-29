<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
        header("location: ../login/");
        exit();
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
    <title>Dashboard</title>
    <link rel="icon" type="image/gif" href="../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="dashboard-style.css">
</head>

<body>
    
    <h1>Welcome <?= $_SESSION['username']?>!</h1>
    <a href="../logout" class="logout">Logout</a>
</body>

</html>