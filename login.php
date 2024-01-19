<?php
include "./inc/includes.inc.php"; 

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
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./asset/style/login.style.css">
</head>
<body>
    <main id="main">
        <!-- error message --> 
        <dev id="<?php if($error == null){echo 'noerror';}else{echo 'error';}?>"> 
            <?php echo '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>'.$error; ?> 
        </dev>
        <article id="atic1">
            <header>
                <img src="./asset/pic/logos/Iconsmind-Outline-Butterfly.512.png" alt="logo" id="logo">
                <h2>Butterfly</h2>
            </header>
            <div id="form">
                <div id="username-handle">
                    username
                </div>
                <div id="password-handl">
                    password
                </div>
                <form action="./login.php" method="post">
                    <div id="user-name-input">
                    <label for="user"><i class="fa fa-user-o" aria-hidden="true"></i></label>
                    <input type="text" name="user" id="user">
                    </div>
                    
                    <div id="pass-input">
                    <label for="pass"><i class="fa fa-unlock-alt" aria-hidden="true"></i></label>
                    <input type="password" name="pass" id="pass" >
                    </div>
                    <button type="submit">Login</button>
                    <div id="register">
                        <p>dont have an account? <a href="./signup.php">click here</a></p>
                    </div>
                </form>
            </div>
        </article>
    </main>
</body>
<script src="./asset/js/login.js"></script>
</html>