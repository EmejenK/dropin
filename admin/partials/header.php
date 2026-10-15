<?php
require 'config/database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multiple Blog Website</title>
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <!-----Iconscout CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">
    <!----Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@300;400;500;600;700;800;900&
    display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="<?= ROOT_URL ?>"class="nav_logo">DROPIN</a>
            
            <!------Navigation links--->
            <ul class="nav_items">
                <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
                <li><a href="<?= ROOT_URL ?>sign-in.php">Sign In</a></li>
                
                <!---------Profile----------->
                <!--<li class="nav-profile">
                    <div class="avatar">
                        <img src="images/avatar1.png">
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
                    </ul>
                </li>-->
            </ul>

            <!---------Humburger----------->
            <button id="open_nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close_nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

    <!--========End Of Navigation==========-->