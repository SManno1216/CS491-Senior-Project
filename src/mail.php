<?php
    if(isset($_POST['submit'])){

        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $message = $_POST["Message"];

        $toEmail = $_POST["stevedmanno@gmail.com"];

        $subject = "Customer Inquiry";

        $body = "Name: " .$name."\r\n E-Mail:" .$email."\r\n Phone:" .$phone."\r\n Message:\r\n" .$message;

        if(mail($toEmail, $subject, $body)){
            $status = "Your information is received successfully.";
        }else{
            $status = "Your information did not send.";
        }
    }
?>