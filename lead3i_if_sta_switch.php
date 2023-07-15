<?php

//the project is about variable and their operators ,etc.

//variable in php
$firstName = "George";
$lastname = "Sey Bernasko Osei";
$fullname = $firstName + $lastname;
echo $fullname;

//Conditional Statements
//if statements
$firstcalls = "Enoch";
$secondcalls = "Peter";
$thirdcalls = "Grace";
if ($firstcalls == $lastcalls){
    echo "firstname is equal to lastname";

}else{
    echo "first is not equal to lastname";
}

//conditional Statement
//elseif Statement
if ($firstcalls == $lastcalls){
    echo "Firstcall is equal secondcalls";
}
elseif($firstcalls == $thirdcalls)
{
    echo "secondcalls is equal thirdcalls";
}
elseif($firstcalls == $thirdcalls)
{
    echo "firstcall is equal thirdcalls";
}
else {
    echo "None is not equal";
}

//conditional statement
//switch statement

switch ($firstcalls){
    case $secondcalls:
        echo "firstcalls is equal to secondcalls ";
        break;
    case $thirdcalls:
        echo "thirdcalls is equal to firstcalls";
        break;
    default:
    echo "firstcalls is not equal to any of them";
}

//another way of running switch statement

switch ($firstname){
    case $secondcalls:
    case $thirdcalls:
        echo "a is equals all the calls";
        break;
    default:
    echo "a is not equals to any of the calls";
}

?>