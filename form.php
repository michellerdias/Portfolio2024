<?php

    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $phone = addslashes($_POST['phone']);
    $message = addslashes($_POST['message']);

    $to = "michellerenatadias@gmail.com";
    $subject = "CONTACT FROM PORTFOLIO";

    $body = "Name: ".$name."\n"."E-mail: ".$email."\n"."Phone Number: ".$phone."\n"."Message: ".$message;

    $head = "From: michelle.rendias@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$head)){
        echo("The contact form was submitted successfully.");
    }else{
        echo("Contact form submission failed. Please, try again.");
    }

?>