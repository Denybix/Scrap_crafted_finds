<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Community Blogpost</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: green;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        h1 {
            margin: 0;
        }
        #navigation {
            background-color: #007bff;
            padding: 10px;
            overflow: hidden;
        }
        #menu {
            display: block;
            cursor: pointer;
            float: left;
        }
        .bar {
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 4px 0;
            transition: 0.4s;
        }
        .icon .bar:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }
        .icon .bar:nth-child(2) {
            opacity: 0;
        }
        .icon .bar:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }
        .nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            max-height: 0;
            float: left;
        }
        .nav li {
            float: left;
        }
        .nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .nav li a:hover {
            background-color: #0056b3;
        }
        .change {
            max-height: 200px;
        }
        .posts-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .post {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }
        .post h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .post img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 5px;
            display: block;
        }
        .post p {
            color: #666;
            line-height: 1.6;
        }
        #userButtons {
            position: absolute;
            top: 20px;
            right: 20px; 
            display: flex;
        }

        #userButtons a {
            margin-right: 10px;
            color: white;
            background-color: #007bff;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        #userButtons a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['telphone'])) {
        echo '<div id="userButtons">';
        echo '<a href="communityblogform.php">Add Post</a>';
        echo '<a href="logout.php">Logout</a>';
        echo '</div>';
    } else {
        echo '<div id="userButtons">';
        echo '<a href="log.php">Login</a>';
        echo '<a href="register.php">Sign Up</a>';
        echo '</div>';
    }
    ?>

    <header>
        <h1>Community Blogpost</h1>
    </header>
    
    <div id="navigation">
        <div id="menu" onclick="onClickMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <ul class="nav" id ="nav">
            <li><a href="http://localhost/Php_program/project.php">Home</a></li> 
            <li><a href="#">Services</a></li> 
            <li><a href="#">About Us</a></li> 
            <li><a href="#">Contact Us</a></li>    
        </ul>
    </div>

    <div class="posts-container">
        <?php
        include 'connection.php';

        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='post'>";
                echo "<h2>" . $row["title"] . "</h2>";
                if (!empty($row["image_path"])) {
                    echo "<img src='" . $row["image_path"] . "' alt='" . $row["title"] . "'>";
                }
                echo "<p>" . $row["content"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "No posts yet.";
        }

        mysqli_close($conn);
        ?>
    </div>
    <script>
         function onClickMenu() {
            document.getElementById("menu").classList.toggle("icon");
            document.getElementById("nav").classList.toggle("change");
        }
    </script>
</body>
</html>
