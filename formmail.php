<?php
$TO = "adamtemsamani09@gmail.com";
$h = $_POST['email'];
$message = " Message: ".$_POST['realname']." ".$_POST['email']." ".$_POST['comments'];
$subject=$_POST['title'];
mail($TO, $subject, $message, $h);
Header("Location: message.html");
?>