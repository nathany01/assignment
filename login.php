<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="login.php" method="post">
            <input type="text" name="name" placeholder="Enter your username">
            <input type="password" name="password" placeholder="Enter your password">
            <input type="submit" value="Login"> <p><a href="./reg.php">Register</a></p>
        </form>
    </div>
    <?php 
    require "index.php";

    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "select * from users where name = '$name' and password = '$password'";
    $result = mysqli_query($db, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "Login successful!";
        // You can redirect the user to another page here
    } else {
        echo "Invalid username or password.";
    }

    ?>
</body>
</html>