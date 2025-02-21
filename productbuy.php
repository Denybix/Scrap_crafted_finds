<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>buy page</title>
    <link rel="stylesheet" href=Css/buyy.css>
</head>
<body>
     <header>
        <center>
            <h1>Welcome to the buy page</h1>
        </center>
    </header>
    
    <div id="navigation">
        <div id="menu" onclick="onClickMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <ul class="nav" id="nav">
            <li><a href="http://localhost/Php_program/project.php">Home</a></li> 
            <li><a href="#">Services</a></li> 
            <li><a href="#">About Us</a></li> 
            <li><a href="#">Contact Us</a></li> 
            <li><a href="http://localhost:5000">Product Comparison</a></li>    
        </ul>
    </div>

    <?php
    include("connection.php");

    $sql = "SELECT productid, productname, producttype, productcolour, productprice, quantity FROM cart"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="product">
                <h2><?php echo $row["productname"]; ?></h2>
                <p>Type: <?php echo $row["producttype"]; ?></p>
                <p>Color: <?php echo $row["productcolour"]; ?></p>
                <p>Price: ₹<?php echo $row["productprice"]; ?></p>

                <label for="quantity_<?php echo $row['productid']; ?>">Quantity:</label>
                <input type="number" id="quantity_<?php echo $row['productid']; ?>" name="quantity" min="1" value="<?php echo $row['quantity']; ?>">
                <p>Total Price: ₹<span id="total_<?php echo $row['productid']; ?>"><?php echo $row['productprice'] * $row['quantity']; ?></span></p>

                <button onclick="buy('<?php echo $row['productid']; ?>', '<?php echo $row['productprice']; ?>')">Buy</button>
            </div>
            <hr>
            <?php
        }
        } else {
            echo "No products found";
        }
        ?>

    <script>
         function onClickMenu() {
            document.getElementById("menu").classList.toggle("icon");
            document.getElementById("nav").classList.toggle("change");
        }

        document.addEventListener('DOMContentLoaded', function() {
            const menu = document.getElementById('menu');
            menu.addEventListener('click', onClickMenu);
        });

        
        function buy(productId, price) {
            const quantity = document.getElementById('quantity_' + productId).value;

            const totalPrice = price * quantity;

            alert('Product ID: ' + productId + '\nQuantity: ' + quantity + '\nTotal Price: ₹' + totalPrice);
        }

        document.querySelectorAll('input[type="number"]').forEach(input => {
            input.addEventListener('input', function() {
                const productId = this.id.split('_')[1];
                const price = <?php echo $row['productprice']; ?>; 
                const quantity = this.value;

                const totalPrice = price * quantity;
                document.getElementById('total_' + productId).textContent = totalPrice;
            });
        });
        
    </script>
</body>
</html>
