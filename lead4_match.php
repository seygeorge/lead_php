<?php
 declare(strict_types=1);
//The match operation


function group($marrystatus,$payment){


$marritarystatus = match($marrystatus)
    {
    "single" => "single",
    "married" => "married",
    "divorced" => "divorced",
    default => "Unknown relationship Status",
    };


$paymentstatus = match($payment) 
    {
    "paid"=> "paid",
    "payment Declined" => "payment Declined",
    "pending payment" => "pending payment",
    default => "Unknown Payment Status",
    };
   
};


?>