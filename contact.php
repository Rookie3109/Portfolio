<?php
//variable setting
$name = $_REQUEST ['name'];
$email = $_REQUEST ['email'];
$message = $_REQUEST ['message'];

//check input fields
if (empty($name) || empty ($email) || empty($message)) {
    echo " Please Fill All The Fields" ;
}
else
{
    mail("mathurjivesh918@gmail.com" , "Webtech message" , $message , "From: $name <
    $email>" );
}