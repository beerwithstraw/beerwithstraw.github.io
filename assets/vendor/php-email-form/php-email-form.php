<?php 
if(isset($_POST['submit'])){
    $to = "agarwalp@tcd.ie"; // this is your Email address
    $from_name = $_POST['name']; // this is the sender's Email address
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    mail($to,$subject,$message);
    echo "Mail Sent. Thank you " . $from_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>