<?php
include "../inc/includes.inc.php";

$error = null;
if (isset($_GET['error'])) $error = $_GET['error'];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (!empty($_POST['user']) && !empty($_POST['pass'])){
        $luname = htmlspecialchars($_POST['user']);
        $lpass = htmlspecialchars($_POST['pass']);
        $viewobj = new View();
        $viewobj->login($luname,$lpass);
    }
    else{
        $error = "user name or password is empty";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="./login.php" method="post">
        <input type="text" name="user" id="" placeholder="username">
        <input type="password" name="pass" id="" placeholder="password">
        <dev> <?php echo $error; ?> </dev>
        <button type="submit">submit</button>
    </form>
</body>
</html>