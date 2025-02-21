<?php include("connection.php")?>
    <!DOCTYPE HTML>
    <html>
    <body> 
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product1">
            <input type="submit" name="Submit" value="Upload File" class="btn">
<br><br>
</form>
<form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product2">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
           <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product3">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
           <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product4">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
       <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product5">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product6">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product7">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
       <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product8">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product9">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
       <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product10">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product11">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
<form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product12">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
<form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product13">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
<form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product14">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product15">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product16">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
<form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product17">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product18">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product19">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>
</form>
        <form method="post" action="#" enctype="multipart/form-data">
            <input type="file" name = "productImage"><br><br>
            <input type="hidden" name="productId" value="product20">
            <input type="submit" name="Submit" value="Upload File" class="btn">
            <br><br>

        </form>

    </body>
    </html>
        
    
<?php    
    if($_POST['Submit']) 
    {
        $imageid = $_POST["productId"];
        $filename = $_FILES["productImage"]["name"];
        $tempname = $_FILES["productImage"]["tmp_name"];
        $productImage = "uploads/" .$filename;
        move_uploaded_file($tempname, $productImage);

        $sql = "INSERT INTO images (ImageId,productImage)
            VALUES ('$imageid','$productImage')";

        if (mysqli_query($conn, $sql)) {
            echo "Product added to the database successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>