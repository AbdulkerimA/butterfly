<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // send the comment to company email
    include "./inc/includes.inc.php";
    session_start();
    if (isset($_SESSION['user'])){
        $cmnt = htmlspecialchars($_POST['comment']);

        $contobj = new Controller();
        $result = $contobj->comment($_SESSION['user'],$cmnt);
        header("Location:./index.php#comment");
    }
    else{
        header("Location:./login.php");
    }
}

?>

<div id="comment">

    <h2>feed back</h2>
    <form action="./footer.php" method="post">
        <input type="email" placeholder="email@gmail.com">
        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="your comment"></textarea>
        <button type="submit">submit</button>
    </form>
</div>

<div id="top">
    <div id="contact">
        <h3>contuct us</h3>
        <ul>
                <a href="">telegram</a> 
                <a href="">email</a> 
                <a href="">discord</a> 
                <a href="">phone</a> 
        </ul>
    </div>

    <div id="links">
        <h3> links </h3>
        <ul>
                <a href="">home</a> 
                <a href="">about</a> 
                <a href="">shop</a> 
                <a href="">discount</a> 
                <a href="">cart</a> 
        </ul>
    </div>

    <div id="Group_members">
        <h3> Group members </h3>
        
                <a href="">Abdulkerim Adem</a> 
                <a href="">abdulmalik Mubarek</a> 
                <a href="">yonatan Belhu</a>  
                <a href="">Semirah Zeki</a> 
                <a href="">lemi </a> 
    </div>
</div>
 
<div id="bottom">
    <p>&copy copy right reserved by butterfly</p>
</div>