<?php include("registrationbackend.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Css/regiss.css">
</head>
<body>
    <div class="container">
    <form action="#" method="POST">
        <div class="title">
            <h1>Register Here</h1>
        </div>

        <div class="form">
            <div class="input_field">
                <label>Name</label>
                <input type="text" class="input" name="name">
            </div>

            <div class="input_field">
                <label>Phone No.</label>
                <input type="text" class="input" name="telphone">
            </div>

            <div class="input_field">
                <label>Email</label>
                <input type="text" class="input" name="email">
            </div>

            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="password">
            </div>

            <div class="input_field">
                <label>Gender</label>
                <div class="custom_select">
                <select name="gender">
                    <option value="Not Selected">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                </div>
            </div>

            <div class="input_field">
                <label>How do you want to sign in as</label>
                <select name="des">
                    <option value="Not Selected">Select</option>
                    <option value="Normal_User">Normal User</option>
                    <option value="Artisian">Artisian</option>
                </select>
            </div>

            <div class="input_field">
                <input type="submit" name="Submit" value="Register" class="btn">
            </div>
        </div>
        </form>
    </div>  
</body>
</html>

