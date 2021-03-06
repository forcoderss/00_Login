<?php
session_start();
if (!isset($_SESSION['online'])) {
    $location = "location:../views/login.php";
    header($location);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.0-beta1 -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    </head>
    <body>
<!-- Container -->
        <div class="container">
            <nav class="nav mt-2 bg-light nav-tabs justify-content-center">
                <a href="index.php" class="nav-link">Home</a>
                <!-- Verificacion de users --> 
                <?php if ($_SESSION['rol'] == 1) { ?>
                    <a href="../views/dashboard.php" class="nav-link">Dashboard</a>
                <?php } ?>
                <!-- Fin verificacion de users --> 
                <a href="../views/myservices.php" class="nav-link">My Services</a>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?= $_SESSION['online']?></a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../views/myaccount.php">My Account</a></li>
                <li><a class="dropdown-item" href="noaccess.php">Facturas</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../views/logout.php">LogOut</a></li>
                </ul>
            </li>
            </nav>
    

