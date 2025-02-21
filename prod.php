<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href=Css/product.css>
</head>
<body>
    <header>
        <center>
            <h1>Product Page</h1>
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
            <li><a href="http://localhost:5000">Product Comparison</a></li>    
        </ul>
    </div>
    <div class="product-container">
        <?php
            $sql = "SELECT p.productId, p.productName, p.productRating, p.productDescription, i.productImage
                FROM products p
                INNER JOIN images i ON p.productId = i.ImageID";

            $result = $conn->query($sql);

           if ($result->num_rows > 0) 
           {
                while ($row = $result->fetch_assoc()) 
                {
                    echo "<div class='product-box'>";
                    echo "<a href='productdetails.php?id=" . $row["productId"] . "'>";
                    echo "<div class='product-image'>";
                    echo "<img src='" . $row["productImage"] . "' alt='" . $row["productName"] . "'>";
                    echo "</div>";
                    echo "<div class='product-details'>";
                    echo "<h2>" . $row["productName"] . "</h2>";
                    $stars = "";
                    for ($i = 0; $i < intval($row["productRating"]); $i++) {
                        $stars .= "<span>&#x2605;</span>";
                    }
                    echo "<div class='star-rating'>$stars</div>";
                    echo "<p>" . $row["productDescription"] . "</p>";
                    echo "</div>";
                    echo "</div>";
                }
            } 
            else 
            {
                echo "0 results";
            }
        ?>
    </div>

    <script>
        
        function collapseProduct(element) 
        {
            if (element === event.target) 
            {
                document.querySelector('.expanded-product').classList.remove('show');
            }
        }
       function handleHover(event, container) 
       {
            const stars = container.querySelectorAll('.star');
            const hoverValue = parseInt(event.target.getAttribute('data-value'));

            stars.forEach
            (star => 
                {
                    const starValue = parseInt(star.getAttribute('data-value'));
                    star.classList.toggle('selected', starValue <= hoverValue);
                }
            );
        }

        function handleClick(event, productId) 
        {
            let stars = productId.querySelectorAll('.star');
            let ratingValue = 0;

            stars.forEach
            (
                (star, index) => 
                {
                    if (event.target === star) 
                    {
                        ratingValue = index + 1;
                    }
                }
            );

            let ratingInput = productId.querySelector('input[name="productRating"]');
            if (ratingInput) 
            {
                ratingInput.value = ratingValue;
                productId.submit(); 
            }
        }

        function onClickMenu()
        {
            document.getElementById("menu").classList.toggle("icon");
            document.getElementById("nav").classList.toggle("change");
        }
    </script>

</body>
</html>

