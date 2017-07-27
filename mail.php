<?php 
if(isset($_POST['submit'])){
    $to = "kharleann@gmail.com"; // this is your Email address
    $from = $_POST['correo']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $subject = "Form submission";
    $message = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>
