<?php

$name = "";
$email = "";
$message = "";
$subject = "Someone has viewed your portfolio and sent you a message!";


if(filter_has_var(INPUT_POST, "submit")){

if(!empty($_POST["name"]) && !empty($_POST["message"]) && !empty($_POST["email"])){

if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$emailOutput = "

From: $name
Email Address: $email
$message";

echo "Thank you for message!";
echo $emailOutput;
mail("marlonpempengco@gmail.com", $subject, $emailOutput);


}

} else {

echo "Please fill in all fields";

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

<div class="form-header"><p>Have something to share? Please do – I’d love to hear it!</p></div>

<input type="text" name="name" placeholder="Name"></input>

<input type="text" name="email" placeholder="Email"></input>

<textarea name="message" placeholder="Message"></textarea>

<button type="submit" name="submit">Send</button>


</form>


</section>

<?php require("footer.php");?>

</body>

</html>
