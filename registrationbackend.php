<?php include("connection.php");?>
<?php
    if($_POST['Submit'])
    {
        $name = $_POST['name'];
        $telphone= $_POST['telphone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $des = $_POST['des'];

        if($name !="" && $telphone !="" && $email !="" && $password !="" && $gender !="" && $des !="")
        {
            $query = "INSERT INTO regdata VALUES ('$name', '$telphone', '$email', '$password', '$gender', '$des')";
            $data = mysqli_query($conn,$query);
            
            if($data)
            {
                echo "Data Inserted into Database";
                header("Location: log.php");
            }
            else
            {
                echo "Failed";
            }
        }
        else
        {
            echo "Please fill the form";
        }
    }
?>
