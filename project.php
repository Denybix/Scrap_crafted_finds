<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScrapCraftedFinds</title>
    <link rel="stylesheet" href="Css/Styless.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Croissant+One&display=swap" rel="stylesheet">    
</head>
<body>
    <nav id="navbar">
        <ul id="left-side">
            <li><a href="#">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="contactus.php">Contact us</a></li>
        </ul>
        <ul id="logo area">
            <img src="images1/headlogo.png">
        </ul>
        <ul id="right-side">
            <?php
            session_start();
            if (isset($_SESSION['telphone'])) {
                echo '<li><a href="#" id="logoutLink">Logout</a></li>';
            } else {
                echo '<li><a href="http://localhost/Php_program/log.php">Login</a></li>';
                echo '<li><a href="http://localhost/Php_program/register.php">Signup</a></li>';
            }
            ?>
        </ul>
        
    </nav>

    <section id="home">
        <img src="images1/logo.png">
    </section>

    <section id="secs-container">
        <div id="links">
            <div class="box">
                <img src="images1/Artisian.png" alt="">
                <h2 class="h-secondary center"><a href="http://localhost/Php_program/profile.php" style="text-decoration: none"><a1>Artisian Profile</a1></a></h2>
            </div>
            <div class="box">
                <img src="images1/Products.png" alt="">
                <h2 class="h-secondary center"><a href="http://localhost/Php_program/prod.php" style="text-decoration: none"><a3>Products section</a3></a></h2>
            </div>
            <div class="box">
                <img src="images1/Community.png" alt="">
                <h2 class="h-secondary center"><a href="http://localhost/Php_program/displayposts.php" style="text-decoration: none"><a4>Community Blogpost</a4></a></h2>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const logoutLink = document.getElementById('logoutLink');
        if (logoutLink) {
            logoutLink.addEventListener('click', function() {
                window.location.href = 'logout.php'; 
            });
        }
    });
    </script>
</body>
</html>