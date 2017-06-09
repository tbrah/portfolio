<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: webmaster@example.com" . "\r\n" .
    $to = "thomasmessell@gmail.com";
    $subject = "Contact from website";
    $txt = "Name: $name \n Phone Number: $phone \n E-mail: $email \n Message: $message \n";
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        mail($to,$subject,$txt,$headers);
        header('Location: http://www.thomasmmd.dk/index.php?email=success');
    } else {
        echo "the email you provided was not valid, try again!";
        header('Location: http://www.thomasmmd.dk/index.php?email=failed');
    }
?>