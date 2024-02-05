<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="reg.php" method="post">
            <input type="text" name="name" placeholder="Enter your username">
            <input type="email" name="email" placeholder="Your email">
            <input type="password" name="new" placeholder="Your password">
            <input type="number" name="age" placeholder="How old are you">
            <input type="submit" value="Register">
        </form>
    </div>
    <?php 
    require "index.php";

    $name = $_POST['name'];
    $password = $_POST['new'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users (name, password,email,age) VALUES ('$name', '$password', '$email', '$age')";
    $result = mysqli_query($db, $sql);

    if ($result) {
        echo "Registration successful!";
        header('Locatio: login.php');
        // You can redirect the user to a login page or another page here
    } else {
        echo "Error: " . mysqli_error($db);
    }
    ?>
</body>
</html>