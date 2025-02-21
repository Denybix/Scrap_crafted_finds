<?php include("display.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisians</title>
    <link rel="stylesheet" href="Css/proff.css">
</head>
<body>

    <header>
        <center>
            <h1>Artisians</h1>
        </center>
    </header>
    
    <div id="navigation">
        <div id="menu" onclick="onClickMenu()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
        </div>
        <ul class="nav" id ="nav">
            <li><a href="http://localhost/Php_program/project.php">Home</a></li> 
            <li><a href="#">Services</a></li> 
            <li><a href="#">About Us</a></li> 
            <li><a href="#">Contact Us</a></li>   
        </ul>
    </div>
    <section>
        <?php if ($total != 0): ?>
            <?php while ($result = mysqli_fetch_assoc($data)): ?>
                <p>Name: <?php echo $result['name']; ?></p>
                <p>Telephone: <?php echo $result['telphone']; ?></p>
                <p>Email: <?php echo $result['email']; ?></p>
                <p>Gender: <?php echo $result['gender']; ?></p>
                <hr>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No records found</p>
        <?php endif; ?>
    </section>
    <script>
        function onClickMenu()
                {
                    document.getElementById("menu").classList.toggle("icon");
                    document.getElementById("nav").classList.toggle("change");
                }
    </script>
</body>
</html>
