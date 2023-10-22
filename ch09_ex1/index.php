<?php
$name='';
$email='';
$phone='';
$message='';
$action = filter_input(INPUT_POST, 'action');

switch ($action) {
    case 'process_data':
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');

        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        // 2. display the name with only the first letter capitalized
        if(isset($name)){
            $message= "You must enter your name.";
            
        }else{
            $name =ucwords($name);
        }

        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        // 2. make sure the email address has at least one @ sign and one dot char-acter
        if(isset($mail)){
            $message= "You must enter your email address.";
        }else{
            if (strpos($mail, '@')==false  && strpos($mail, '.')==false) {
                $message="the email address has at least one @ sign and one dot character";
            }
            else{
                $email =  $email;
            }
        }   
        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        // 2. format the phone number like this 123-4567 or this 123-456-7890
        if(is_int($phone)  && isset($phone)){
            $message= "make sure the user enters at least seven digits, not including formatting characters";
        }else{
            $phone=(String)$phone;
            if(  preg_match( '/^(\d{3})(\d{3})(\d{4})$/', $phone,  $matches ) ){
                $phone = $matches[1] . '-' .$matches[2] . '-' . $matches[3];
            }else{
                $message="format the phone number like this 123-4567 or this 123-456-7890";
            }
            
        }
        /*************************************************
         * Display the validation message
         ************************************************/
        
        include 'data.php';
        break;
}
include 'string_tester.php';
?>