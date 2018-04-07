<?php


$subject = "Someone has viewed your portfolio and sent you a message!";
$messageBackground = "";
$formHeaderMessage = "If you would like to work with me or have any enquries please feel free to fill out the form below!";
$borderColor = "";


if(filter_has_var(INPUT_POST, "submit")){

//Get Form Data

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Check Required Fields

if(!empty($name) && !empty($email) && !empty($message)){

	//Passed
	//Check Email

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

		//Failed email
$messageBackground = "#ef5353";
$formHeaderMessage = "Please validate email address";
$borderColor = "3px solid #ef5353";

	} else {

		//Passed email
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

	}

} else {

	//Failed
	//Please fill in all fields

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

<h3><i class="fa fa-envelope"></i> Contact</h3>


</section>

<section id="contact-form">

<div class="contact-image"></div>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

<div style="background: <?php echo $messageBackground;?>" class="form-header"><p id="form-header-text"><?php echo $formHeaderMessage; ?></p></div>

<input type="text" name="name" placeholder="Name"></input>

<input type="text" name="email" placeholder="Email" style="border: <?php echo $borderColor;?>"></input>

<textarea name="message" placeholder="Message"></textarea>

<button type="submit" name="submit"><p>Send</p></button>


</form>


</section>

<?php require("footer.php");?>

</body>

</html>
