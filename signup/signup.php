<?php
include "../inc/includes.inc.php";
$error = null;
if (isset($_GET['error'])){$error = $_GET['error'];}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // CHECK IF ANY OF THE FILDS ARE EMPTY
    if(!empty($_POST['user'] && $_POST['email'] && $_POST['tel'] && $_POST['pass'])){
        $user = htmlspecialchars($_POST['user']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlentities($_POST['tel']);
        $pass = htmlspecialchars($_POST['pass']);

        $controllObj = new Controller();
        $controllObj->register($user,$pass,$email,$tel);
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
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="cont">
    <!-- error message alart box -->
    <div id="<?php if($error==null){echo 'noerror';}else{echo 'error';} ?>">
            <?php echo $error ?>
            <button onclick=alertdisable()>OK</button>
        </div>
    <!-- the form -->
        <form action="./signup.php" method="post">
            <input type="text" name="user" id="" placeholder="user name">
            <input type="email" name="email" id="" placeholder="@email">
            <input type="tel" name="tel" id="" placeholder="+2519 00000000">
            <input type="password" name="pass" id="" placeholder="password">
            <input type="password" name="cpass" id="" placeholder="confirm password">
            <button type="submit">signup</button>
        </form>
</div>
</body>

<!-- java script to facilate some functionalities -->
<script language="javascript">
    var height = window.innerHeight;
    var width = window.innerWidth;
    document.getElementById("cont").style.height = height+"px";
    document.getElementById("cont").style.width = width+"px";
    var alertdisable = () => {
        document.getElementById("error").style.display="none";
    }
</script>
</html>