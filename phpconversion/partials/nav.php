<?php $routes = require "socials.php" ?>

<nav id="main-navbar">
    <h4><span>M</span>T<span>M</span> Coaching</h4>
    <ul id="menu" class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="program.html">Program</a></li>
        <li><a href="coaching.html">Coaching</a></li>
        <li><a href="#about-section">About</a></li>
        <!-- need click toggle -->
        <i class="fa-solid fa-xmark" id="openMenuButton" onClick={toggleSideMenu}> </i>
    </ul>
    <ul id="socials" name="socials">
        <li><a href="<?= $routes['facebook']; ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
        <li><a href="<?= $routes['instagram']; ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
        <li><a href="<?= $routes['youtube']; ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
        <li><a href="<?= $routes['discord']; ?>" target="_blank"><i class="fa-brands fa-discord"></i></a></li>
        <li id="cart" name="cart"><a href="#CART"><i class="fa-solid fa-cart-shopping"></i></a></li>
    </ul>
    <i class="fa-solid fa-bars" id="closeMenuButton" onClick={toggleSideMenu}></i>
</nav>