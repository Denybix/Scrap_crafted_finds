<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        textarea {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="file"] {
            margin-top: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Create a New Post</h1>
    <form action="submitpost.php" method="POST" enctype="multipart/form-data">
        <label for="postTitle">Title:</label>
        <input type="text" id="postTitle" name="postTitle" required><br><br>
        
        <label for="postContent">Content:</label><br>
        <textarea id="postContent" name="postContent" rows="6" required></textarea><br><br>
        
        <label for="imageUpload">Upload Image:</label>
        <input type="file" id="imageUpload" name="imageUpload" accept="image/*"><br><br>
        
        <input type="submit" value="Submit Post">
    </form>
</body>
</html>
