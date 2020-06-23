<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?> 
    <title>Smith&Smith Lawyers</title>
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="#">Our Team</a>
            </li>
            <li>
                <a href="#">Practice Areas</a>
            </li>
            <li>
                <a href="#">Results</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            
        </ul>
    </div>

    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/s_s_logo.png" alt="Smith&Smith Logo">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a class="active" href="index.html">Home</a>
            </li>
            <li>
                <a href="#">Our Team</a>
            </li>
            <li>
                <a href="#">Practice Areas</a>
            </li>
            <li>
                <a href="#">Results</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            
        </ul>
    </nav>

    <div class="banner">
        <div class="banner-container">
            <div class="banner-title">
                <h1>Lorem Ipsum Dolor Sit Amet</h1>
            </div>
            <div class="banner-btn">
                <button class="contactBtn">Contact Us</button>
            </div>
        </div>
    </div>