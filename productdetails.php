<?php 
session_start();
include("connection.php");
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    
    $sql = "SELECT p.productName, p.productRating, p.productDescription, i.productImage
            FROM products p
            INNER JOIN images i ON p.productId = i.ImageID
            WHERE p.productId = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $productId); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <link rel="stylesheet" href=Css/proddetails.css>
        </head>
    <body>
    <header>
        <center>
            <h1>Product View Page</h1>
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
    </div>
        <div class="product-details-container">
            <div class="product-image">
                <img src="<?php echo $row["productImage"]; ?>" alt="<?php echo $row["productName"]; ?>"width="500" height="500">
            </div>
            <div class="product-details">
                <h2><?php echo $row["productName"]; ?></h2>
                <p>Rating: <?php echo $row["productRating"]; ?></p>
                <p>Description: <?php echo $row["productDescription"]; ?></p>
                
                <form id="ratingForm">
                    <div class="rating-container" onmouseleave="handleHover(event, this)">
                        <span class="star" data-value="1" onmouseover="handleStarHover(event, this)" onclick="handleClick(event, this)"></span>
                        <span class="star" data-value="2" onmouseover="handleStarHover(event, this)" onclick="handleClick(event, this)"></span>
                        <span class="star" data-value="3" onmouseover="handleStarHover(event, this)" onclick="handleClick(event, this)"></span>
                        <span class="star" data-value="4" onmouseover="handleStarHover(event, this)" onclick="handleClick(event, this)"></span>
                        <span class="star" data-value="5" onmouseover="handleStarHover(event, this)" onclick="handleClick(event, this)"></span>
                    </div>
                        <input type="hidden" id="selectedRating" name="selectedRating" value="0">
                        <button type="submit" id="rateButton">Rate</button>
                </form><br><br>

                    <?php
                        $sqlTypes = "SELECT DISTINCT Types FROM variations WHERE ProductID = ?";
                        $stmtTypes = $conn->prepare($sqlTypes);
                        $stmtTypes->bind_param("s", $productId);
                        $stmtTypes->execute();
                        $resultTypes = $stmtTypes->get_result();
                    ?>
                       <form id="colorForm">
                            <input type="hidden" name="productId" value="<?php echo $productId; ?>">
                            <label for="productType">Type:</label>
                            <select id="productType" name="productType">
                                <?php while ($rowType = $resultTypes->fetch_assoc()) : ?>
                                    <option value="<?php echo $rowType['Types']; ?>"><?php echo $rowType['Types']; ?></option>
                                <?php endwhile; ?>
                            </select><br><br>
                            
                            <label for="productColor">Color:</label>
                            <select id="productColor" name="productColor" disabled>
                                <option value="">Select a Type first</option>
                            </select><br><br>

                            <span id="priceDisplay"></span>
                            <span id="stockDisplay"></span><br>
                        </form><br>
                        <form id="addToCartForm" action="addtocart.php" method="post">
                            <label for="quantity">Quantity:</label>
                            <div>
                                <button type="button" onclick="decrementQuantity()">-</button>
                                <input type="number" id="quantity" name="quantity" value="1" min="1" max="1" disabled>
                                <button type="button" onclick="incrementQuantity()">+</button>
                            </div><br>

                            <input type="hidden" name="productId" value="<?php echo $productId; ?>">
                            <input type="hidden" name="productName" value="<?php echo $row['productName']; ?>">
                            <input type="hidden" name="productDescription" value="<?php echo $row['productDescription']; ?>">
                            <input type="hidden" name="productType" id="selectedType">
                            <input type="hidden" name="productColor" id="selectedColor">
                            <input type="hidden" name="productPrice" id="productPrice" value="0"> 
                            <input type="hidden" name="productQuantity" id="productQuantity" value="1"> 
                            <?php if (isset($_SESSION['telphone'])) : ?>
                            <button type="submit" id="addToCartButton">Add to cart</button>
                        <?php else : ?>
                            <p>Please <a href="login.php">login</a> to add this item to your cart.</p>
                        <?php endif; ?>
                        </form>
                </div>
                
            </div>
            
            <script>
        
                document.getElementById('addToCartForm').addEventListener('submit', function(event) {
                event.preventDefault();
                updateProductDetails();

                setSelectedValues();

                const formData = new FormData(this);
                for (let pair of formData.entries()) {
                    console.log(pair[0] + ': ' + pair[1]);
                }
                formData.append('selectedType', document.getElementById('selectedType').value);
                formData.append('selectedColor', document.getElementById('selectedColor').value);
                <?php if (isset($_SESSION['telphone'])) : ?>
                    fetch('addtocart.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        console.log(data);
                        window.location.href = 'productbuy.php';
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                <?php else : ?>
                    window.location.href = 'log.php'; 
                <?php endif; ?>
                });

            document.getElementById('productType').addEventListener('change', function() {
                const selectedType = this.value;

                if (selectedType) {
                    const xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                const colors = JSON.parse(xhr.responseText);
                                populateColors(colors);
                            } else {
                                console.error('Error fetching colors:', xhr.statusText);
                            }
                        }
                    };

                    xhr.open('GET', `getColors.php?type=${selectedType}&productId=<?php echo $productId; ?>`, true);
                    xhr.send();
                } else {
                    document.getElementById('productColor').innerHTML = '<option value="">Select a Type first</option>';
                    document.getElementById('productColor').disabled = true;
                }
            });

            let currentQuantity = 1;
                let maxStock = 0;

                function setSelectedValues() {
                    const selectedType = document.getElementById('productType').value;
                    const selectedColor = document.getElementById('productColor').value;

                    document.getElementById('selectedType').value = selectedType;
                    document.getElementById('selectedColor').value = selectedColor;
                }

                function updateProductDetails() 
                {
                    const displayedPrice = document.getElementById('priceDisplay').textContent;
                    const price = displayedPrice !== 'Price not available' ? displayedPrice.split('₹')[1] : '0';
                    document.getElementById('productPrice').value = price;

                    document.getElementById('selectedType').value = document.getElementById('productType').value;
                    document.getElementById('selectedColor').value = document.getElementById('productColor').value;

                    const quantity = document.getElementById('quantity').value;
                    document.getElementById('productQuantity').value = quantity;

                    setSelectedValues();
                }

                function displayPrice(price) {
                const priceDisplay = document.getElementById('priceDisplay');

                if (priceDisplay) {
                    if (price !== 'Price not available') {
                        priceDisplay.textContent = `Price: ₹${price}`; 
                        document.getElementById('productPrice').value = price; 
                    } else {
                        priceDisplay.textContent = 'Price not available';
                    }
                } else {
                    console.error('Price display element not found');
                }
            }

            function updateQuantityDisplay() {
                document.getElementById('quantity').value = currentQuantity;
                document.getElementById('productQuantity').value = currentQuantity; 
            }

                document.getElementById('productType').addEventListener('change', function() {
                    const selectedType = this.value;

                    if (selectedType) {
                        const xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === XMLHttpRequest.DONE) {
                                if (xhr.status === 200) {
                                    const price = xhr.responseText;
                                    displayPrice(price); 
                                } else {
                                    console.error('Error fetching price:', xhr.statusText);
                                }
                            }
                        };

                        xhr.open('GET', `getPrice.php?type=${selectedType}&productId=<?php echo $productId; ?>`, true);
                        xhr.send();
                    } else {
                        
                        const priceDisplay = document.getElementById('priceDisplay');
                        if (priceDisplay) {
                            priceDisplay.textContent = '';
                        }
                    }
                });

               function incrementQuantity() {
                        if (currentQuantity < maxStock) {
                            currentQuantity++;
                            updateQuantityDisplay();
                        } else {
                            alert('Reached maximum stock limit');
                        }
                    }

                function decrementQuantity() {
                        if (currentQuantity > 1) {
                            currentQuantity--;
                            updateQuantityDisplay();
                        }
                    }

                function updateQuantityDisplay() {
                        document.getElementById('quantity').value = currentQuantity;
                    }

                function displayStock(stockValue) 
                {
                    const stock = parseInt(stockValue);
                    maxStock = stock; 
                    const stockDisplay = document.getElementById('stockDisplay');
                    const quantityInput = document.getElementById('quantity');

                    if (stockDisplay) {
                        stockDisplay.textContent = `Stock: ${stock}`;
                        quantityInput.disabled = false;
                        quantityInput.value = currentQuantity; 
                        quantityInput.max = stock; 
                    } else {
                        console.error('Stock display element not found');
                    }
                }

                document.getElementById('productColor').addEventListener('change', function() {
                const selectedColor = this.value;
                const selectedType = document.getElementById('productType').value;

                if (selectedColor) {
                    const xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                const stock = xhr.responseText;
                                displayStock(stock); 
                            } else {
                                console.error('Error fetching stock:', xhr.statusText);
                            }
                        }
                    };

                    xhr.open('GET', `getStock.php?type=${selectedType}&color=${selectedColor}&productId=<?php echo $productId; ?>`, true);
                    xhr.send();
                } else {
                    const stockDisplay = document.getElementById('stockDisplay');
                    if (stockDisplay) {
                        stockDisplay.textContent = '';
                    }
                }
            });
           
            function populateColors(colors) 
            {
                const productColorSelect = document.getElementById('productColor');
                productColorSelect.innerHTML = '';
                productColorSelect.disabled = false;

                colors.forEach(color => {
                    const option = document.createElement('option');
                    option.value = color;
                    option.textContent = color;
                    productColorSelect.appendChild(option);
                });
            }
                function handleHover(event, container) 
                {
                    container.querySelectorAll('.star').forEach(star => {
                        star.classList.remove('hovered');
                    });
                }

                function handleStarHover(event, star) 
                {
                    const stars = star.parentNode.querySelectorAll('.star');
                    const hoverValue = parseInt(star.getAttribute('data-value'));

                    stars.forEach(s => {
                        const starValue = parseInt(s.getAttribute('data-value'));
                        s.classList.toggle('hovered', starValue <= hoverValue);
                    });
                }

                function handleClick(event, star) 
                {
                    const stars = star.parentNode.querySelectorAll('.star');
                    const selectedValue = parseInt(star.getAttribute('data-value'));

                    stars.forEach(s => {
                        const starValue = parseInt(s.getAttribute('data-value'));
                        if (starValue <= selectedValue) {
                            s.classList.toggle('selected');
                        }
                    });
                    const productId = '<?php echo $productId; ?>'; 
                    const selectedRating = star.classList.contains('selected') ? selectedValue : 0;

                    const xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                console.log('Rating updated successfully.');
                            } else {
                                console.error('Error updating rating:', xhr.statusText);
                            }
                        }
                    };

                    xhr.open('POST', 'Updaterating.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.send(`productId=${productId}&rating=${selectedRating}`);
                }

                function onClickMenu()
                {
                    document.getElementById("menu").classList.toggle("icon");
                    document.getElementById("nav").classList.toggle("change");
                }
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
<?php
    } else {
        echo "Product not found";
    }
    } else {
        echo "Rating done!!";
    }
?>
