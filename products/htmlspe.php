<?php
if (isset($_SERVER['REQUEST_METHOD']) == 'POST'){
        $x = htmlspecialchars($_POST['x']);
        echo $x; 
}
?>

<form action="./htmlspe.php" method="post">
    <input type="text" name="x" id="">
</form>