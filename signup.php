<?php
include "./inc/includes.inc.php";
$error = null;
if (isset($_GET['error'])){$error = $_GET['error'];}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // CHECK IF ANY OF THE FILDS ARE EMPTY
    if(!empty($_POST['user'] && $_POST['email'] && $_POST['tel'] && $_POST['pass'])){
        $user = htmlspecialchars($_POST['user']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlentities($_POST['tel']);
        $pass = htmlspecialchars($_POST['pass']);
        $confpass = htmlspecialchars($_POST['cpass']);

        $controllObj = new Controller();
        $controllObj->register($user,$pass,$confpass,$email,$tel);
    }
    else{
        // if any of the filds are empty display this message
        $error = "you must insert all the information needed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./asset/style/signup.style.css">
</head>
<body>

<div id="cont">
    <!-- error message alart box -->
    <div id="<?php if($error==null){echo 'noerror';}else{echo 'error';} ?>">
            <?php echo '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>'.$error ?>
        </div>
    <div id="side-image">
        <img id="side-img" src="./asset/pic/Screenshot (67).png" alt="Dov">
    </div>
    <!-- the form -->
        <form action="./signup.php" method="post" id="form">
            <div id="logo">
                <img src="./asset/pic/logos/Iconsmind-Outline-Butterfly.512.png" alt="logo">
                <p>Butterfly</p>
            </div>

            <div id="user">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <input type="text" name="user" id="" placeholder="user name">
            </div>

            <div id="mail">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <input type="email" name="email" id="" placeholder="@email">
            </div>

            <div id="tel">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <input type="tel" name="tel" id="" placeholder="+2519 00000000">
            </div>

            <div id="password">
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            <input type="password" name="pass" id="" placeholder="password">
            </div>

            <div id="confpass">
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            <input type="password" name="cpass" id="" placeholder="confirm password">
            </div>

            <div id="buttons">
            <button type="submit">signup</button>
            <button type="button"><a href="./login.php">login</a></button>
            </div>

        </form>
</div>
</body>

<!-- java script to facilate some functionalities -->
<script language="javascript" src="./asset/js/signup.app.js"></script>
</html>