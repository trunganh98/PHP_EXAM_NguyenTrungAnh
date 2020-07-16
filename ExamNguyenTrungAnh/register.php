<?php

require_once 'conn.php';

if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "insert into users values ('', '$fullname', '$email', '$username', '$password')";
    $result = $conn->query($query);
    if (!$result) die("Query is fail!!!");
    else {
        setcookie('username', $username, time()+3600);
        setcookie('fullname', $fullname, time()+3600);
        header("location: welcome.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style type="text/css">
        body{
            background: url("/phpmysql/hinh-nen-cute-de-thuong.jpg") no-repeat;
            background-size: cover;
            text-align: center;
            padding: 10px;
            font-size: x-large;
        }
        button{
            margin-top: 30px;
            font-size: 20px;

        }
        button:hover{
            background-color: #00fa00;
        }
        input{
            margin: 5px;
            padding:3px 30px;
        }
        h1{
            font-size: 80px;
            color: #25b220;
        }

    </style>
</head>
<body>
<h1>Register</h1>
<form action="register.php">
    <label>Full Name</label><br>
    <input name="fullname" type="text"><br>

    <label>Email</label><br>
    <input name="email" type="text"><br>

    <label>User Name</label><br>
    <input name="username" type="text"><br>

    <label>Password</label><br>
    <input name="password" type="password" ><br>

</form>
<div>
    <button type="submit" name="submit" value="register">Register</button>
</div>
</body>
</html>
