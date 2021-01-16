<!-- <?php 
// if(isset($_POST['submit'])){
//     $to = "agarwalp@tcd.ie"; // this is your Email address
//     $from_name = $_POST['name']; // this is the sender's Email address
//     $from_email = $_POST['email'];
//     $subject = $_POST['subject'];
//     $message = $_POST['message'];

//     mail($to,$subject,$message);
//     echo "Mail Sent. Thank you " . $from_name . ", we will contact you shortly.";
//     // You can also use header('Location: thank_you.php'); to redirect to another page.
//     }
// ?> -->

<?php
if (isset($_REQUEST['email'])) {

  $from_name = $_REQUEST['name'] ;
  $from_email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("agarwal@tcd.ie",$from_name$subject,
  $message, "From:" . $from_email);

  echo "Merci! Votre requête a été soumise à notre webmestre.";

} else {

  echo "Erreur: Prière de remplir le formulaire.";

}
?>