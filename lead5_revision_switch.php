<?php
$payment = "paid";
switch($payment){
    case 'paid':
        echo "paid";
        break;

    case "unpaid":
        echo "unpaid";
        break;
        
    case "pending":
        echo "pending";
        break;
    }



?>