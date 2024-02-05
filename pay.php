<?php
include "./inc/includes.inc.php";
session_start();
$uid = $_SESSION['user'];

$viewobj = new View();
$result = $viewobj->displaySubtotal($uid);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tel =$_POST['tel'];
    if (strlen($tel) != 10){
        $error = "insert only 10 digits";
    }
    else {
        header("Location:./scripts/pay.script.php?user=".$_SESSION['user']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pay</title>
    <link rel="stylesheet" href="./asset/style/pay.css">
</head>
<body id="body">
 <div id="container">
 <div id="cont">

    <div id="left">
        <div id="title1">PAY WITH</div>
        <div id="telebirr" onclick="changeBg('telebirr')">
            <span><img src="./asset/pic/pay/tele_birr.png" alt=""></span>
            <span>Tele Birr</span>
        </div>
        <div id="CBE" onclick="changeBg('CBE')">
            <span><img src="./asset/pic/pay/cbe_birr.png" alt=""></span>
            <span>CBE Birr</span>
        </div>
        <div id="awash" onclick="changeBg('awash')">
            <span><img src="./asset/pic/pay/awash.png" alt=""></span>
            <span>AWASHBirr</span>
        </div>
        <div id="BOA" onclick="changeBg('BOA')">
            <span><img src="./asset/pic/pay/card_boa.png" alt=""></span>
            <span>BOA Card</span>
        </div>
        <div id="coop" onclick="changeBg('coop')">
            <span><img src="./asset/pic/pay/ebirr_logo.png" alt=""></span>
            <span>E-Birr</span>
        </div>
    </div>

    <div id="right">
        <div id="chapa-logo">
        <svg class="mx-auto h-[2.5rem] mb-3 mt-10 lg:h-[6rem] lg:w-[6rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 116.73 72.08"><defs></defs><title></title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path fill-opacity="0.59" fill="#7dc242" d="M32,31.1H95.85a0,0,0,0,1,0,0v0A17.67,17.67,0,0,1,78.18,48.77H32a8.83,8.83,0,0,1-8.83-8.83v0A8.83,8.83,0,0,1,32,31.1Z"></path><path fill-opacity="0.59" fill="#7dc242" d="M31.18,7.79a7.46,7.46,0,0,0-.95.06c.63,0,1.27-.06,1.91-.06Z"></path><path fill-opacity="0.59" fill="#7dc242" d="M95.09,7.79,82.31,25.46H99.06A17.67,17.67,0,0,0,116.73,7.79Z"></path><path fill-opacity="0.59" fill="#7dc242" d="M60.7,25.19,73.28,7.79H32.15A32.12,32.12,0,0,1,60.7,25.19Z"></path><path fill="#7dc242" d="M60.83,25.46c0-.09-.08-.18-.13-.27l-.19.27Z"></path><path fill="#7dc242" d="M31.55,25.46v0c.2,0,.39,0,.59,0Z"></path><polygon fill="#7dc242" points="32.15 7.79 32.14 7.79 32.15 7.79 32.15 7.79"></polygon><path fill="#7dc242" d="M73.62,7.32l-.34.47L60.7,25.19c0,.09.09.18.13.27h-.32l-4.09,5.65L43.14,49.34A14.47,14.47,0,1,1,31.55,25.49v0h29l.19-.27A32.12,32.12,0,0,0,32.15,7.79h0c-.64,0-1.28,0-1.91.06A32.14,32.14,0,1,0,57.51,59.66l1.18-1.61h0L78.22,31.11l4.09-5.65L95.09,7.79l3.2-4.44A17.67,17.67,0,0,0,73.62,7.32Z"></path></g></g></svg>
        </div>

        <div id="price">
            <span id="tit">amount to pay</span>
            <span id="amount"><?php echo $result[0]['sub']; ?>ETB</span>
        </div>

        <div id="headers">
            <h2> Payment Detail</h2>

            <h2>Phone number</h2>
        </div>

        <form action="" method="post">
            <input type="text" name="tel" placeholder="09********">
            <button type="submit">pay with tele_birr</button>
        </form>
    </div>

    </div>
 </div>

    <script src="./asset/js/pay.js"></script>
</body>
</html>