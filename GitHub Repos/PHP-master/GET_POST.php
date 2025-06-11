<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get & post</title>
</head>
<body>
    <form action="GET_POST.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>

        <label>Password:</label><br>
        <input type="Password" name="password"><br>

        <input type="submit" value="Login">
    </form>

</body>
</html>
<?php
    //in <form action> php page name
    // method --> either get or post

    //here $_GET because get method used in HTML
    // in this method sensitive data will show on URL bar
    // that's why we use 'post' method

    // echo $_GET["username"]."<br>";
    // echo $_GET["password"];

    echo $_POST["username"]. "<br>";
    echo $_POST["password"];
?>