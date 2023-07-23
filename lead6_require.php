<?php
require 'lead4_match.php';

function status($marritarystatus,$paymentstatus){

if ($marritarystatus == "single" && 
    $paymentstatus =="paid" )
    {
        return "<br>.get ready to marry";
}else{
        return "<br>.is not time";
};



};


echo group("single","paid");
echo status("single","paid");



?>