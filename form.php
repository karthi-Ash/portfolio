<?php
//get data from form  
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "karthivijay0987@gmail.com";
$txt = "Name = " . $name . "\r\nEmail = " . $email . "\r\nMessage =" . $message;
$headers = "From: " . $email;
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
    echo '<script>alert("Message Send Successfully")</script>';
} else {
    echo '<script>alert("Something Went Wrong")</script>';
}
?>
