<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Post Layout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
        .container {
            width: 400px;
            max-height: 90vh;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: #888 #f0f2f5;
        }
        .container:: {
            width: 8px;
        }
        .container:: {
            background: #888;
            border-radius: 10px;
        }
        .container:: {
            background: #f0f2f5;
        }
        .header {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #dddfe2;
        }
        .header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .header .info {
            flex-grow: 1;
        }
        .header .info p {
            margin: 0;
            font-size: 14px;
            color: #4b4f56;
        }
        .header .info .name {
            font-weight: bold;
            color: #1c1e21;
        }
        .post-content {
            padding: 10px;
        }
        .post-content p {
            margin: 0;
            color: #1c1e21;
        }
        .image {
            width: 100%;
            height: auto;
        }
        .stories {
            display: flex;
            overflow-x: auto;
            padding: 10px;
            background-color: #f0f2f5;
            scrollbar-width: thin;
            scrollbar-color: #888 #f0f2f5;
        }
        .stories: {
            height: 8px;
        }
        .stories: {
            background: #888;
            border-radius: 10px;
        }
        .stories::-webkit-scrollbar-track {
            background: #f0f2f5;
        }
        .story {
            width: 80px;
            margin-right: 10px;
            text-align: center;
            color: #333;
        }
        .story img {
            width: 100%;
            height: 80px;
            border-radius: 10px;
            object-fit: cover;
        }


    </style>
</head>
<body>
<div class="container">
    <!-- Facebook Stories Section -->
    <div class="stories">
        <div class="story">
            <img src="1777.jpg" alt="Story 1">
            <p>Tiger</p>
        </div>
        <div class="story">
            <img src="555555.jpg" alt="Story 2">
            <p>Dog</p>
        </div>
        <div class="story">
            <img src="yyyy.jpg" alt="Story 3">
            <p>Bear</p>
        </div>
        <div class="story">
            <img src="bbb.jpg" alt="Story 4">
            <p>Elephant</p>
        </div>
    </div>

<div class="container">
    <!-- Existing Posts -->
    <!-- Post 1 -->
    <div class="header">
        <img src="carrr.jpg">
        <div class="info">
            <p class="name">Mahendra Kadu</p>
            <p>is feeling motivated with Abhijeet Khollam at Grand Hyatt Goa. · 1d · <span>👥</span></p>
        </div>
    </div>
    <div class="post-content">
        <p>M.D. Mahasammelan: A Gathering by LIC HFL</p>
    </div>
    <img src="yash1.jpg" alt="Post Image" class="image">

    <!-- Post 2 -->
    <div class="header">
        <img src="rcb.jpg">
        <div class="info">
            <p class="name">Virat Kohli</p>
            <p>Win or lose, RCBian forever 2d.</p>
        </div>
    </div>
    <div class="post-content">
        <p>Chinnaswamy Stadium</p>
    </div>
    <img src="virat.jpg" alt="Post Image" class="image">

    <!-- Post 3 -->
    <div class="header">
        <img src="A.png">
        <div class="info">
            <p class="name">Lionel Messi</p>
            <p>"Little by little, I'm getting better all the time. I've not lost the passion to play" 3d.</p>
        </div>
    </div>
    <div class="post-content">
        <p>Argentina</p>
    </div>
    <img src="m.jpg" alt="Post Image" class="image">

    <!-- Post 4 -->
    <div class="header">
        <img src="pp.jpg">
        <div class="info">
            <p class="name">Cristiano Ronaldo</p>
            <p>"There is no harm in dreaming of becoming the world's best player" 4d.</p>
        </div>
    </div>
    <div class="post-content">
        <p>Portugal</p>
    </div>
    <img src="rr.jpg" alt="Post Image" class="image">

    <!-- Post 5 -->
    <div class="header">
        <img src="12.jpg">
        <div class="info">
            <p class="name">Nature</p>
            <p>Exploring new adventures! 5d.</p>
        </div>
    </div>
    <div class="post-content">
        <p>New Destination</p>
    </div>
    <img src="nature.jpg" alt="Post Image" class="image">

    <!-- New Post (6th) -->
    <div class="header">
        <img src="cl.jpg">
        <div class="info">
            <p class="name">Indian Cricket team</p>
            <p>"Cricket is not just a game, it is a religion in India." · 6d.</p>
        </div>
    </div>
    <div class="post-content">
        <p>Trying to be best</p>
    </div>
    <img src="c.jpg" alt="New Image" class="image">
</div>

</body>
</html>