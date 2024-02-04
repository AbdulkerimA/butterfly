<?php 


include "../inc/includes.admin.inc.php";


if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    $uid = $_POST['uid'];
    $viewobj = new View();
    $result = $viewobj->displayProductsOnTheCart($uid);

    //$dolar = str_replace("$","",$result[0]['p']);
    //echo $dolar;
    $subtotal = 0;
    for ($i=0;$i<count($result);$i++){
        $dolar = str_replace("$","",$result[$i]['p']);
        $subtotal = $subtotal + ($result[$i]['amount'] * $dolar);
    }

    //echo $subtotal;
   if ($subtotal > 0){

        $viewobj2 = new View();
        $result2 = $viewobj2->displaySubtotal($uid);
        
        $present = "false";
        
        // check for user session precence 
        for ($x=0;$x<count($result2);$x++){
            if ($result2[$x]['user'] == $uid){
                $present = "true"; //if it is present mark it
                break;
            }
        }
        
        // create the data 
        if ($present == "false"){
            $contobj = new Controller();
            $result3 = $contobj->insertSubtotal($uid,$subtotal); 
        }
        else{
            $contobj = new Controller();
            $result4 = $contobj->updateSubtotal($uid,$subtotal);
        }
        echo $result4;
    }
    //echo $result4;

}
?>