<?php

$name = "";
$email = "";
$message = "";
$subject = "Someone has viewed your portfolio and sent you a message!";
$messageBackground = "";
$formHeaderMessage = "Have something to share? Please do – I’d love to hear it!";


if(filter_has_var(INPUT_POST, "submit")){

if(!empty($_POST["name"]) && !empty($_POST["message"]) && !empty($_POST["email"])){

if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){

$messageBackground = "#5abc5c";
$formHeaderMessage = "Thank you for your message!";
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$emailOutput = "

From: $name
Email Address: $email
$message";

mail("marlonpempengco@gmail.com", $subject, $emailOutput);


} else

$messageBackground = "#ef5353";
$formHeaderMessage = "Please validate email address";

} else {


$messageBackground = "#ef5353";
$formHeaderMessage = "Please fill in all fields";

}

}

?>


<!DOCTYPE html>
<html>

<body>

<?php require("header.php");?>

<section class="sub-header" id="contact-title-header">

<h3><i class="fa fa-envelope"></i>Contact</h3>


</section>

<section id="contact-form">

<div class="contact-image"></div>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

<div style="background: <?php echo $messageBackground;?>" class="form-header"><p id="form-header-text"><?php echo $formHeaderMessage; ?></p></div>

<input type="text" name="name" placeholder="Name"></input>

<input type="text" name="email" placeholder="Email"></input>

<textarea name="message" placeholder="Message"></textarea>

<button type="submit" name="submit">Send</button>


</form>


</section>

<?php require("footer.php");?>

</body>

</html>
