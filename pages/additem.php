<?php session_start();
   $items = $_GET['items'];
   //$qty = $_GET['qty'];
    
    $_SESSION['items'] = $items; //array([$img,$qty]);
for($i=0; $i<sizeof($_SESSION['items']); $i++){
    $_SESSION['items'][$i];
}
    //echo sizeof($_SESSION['items']);
    //print $_SESSION['items'][0][0];
    //print $_SESSION['items'][0][1];
?>