<?php


$subject = "Someone has viewed your portfolio and sent you a message!";
$messageBackground = "";
$formHeaderMessage = "If you would like to work with me or have any enquries please feel free to fill out the form below!";
$nameBorder = "";
$emailBorder = "";
$messageBorder = "";
$redBorder = "3px solid #ef5353";
$redBackground = "3px solid #499944";
$greenBackground = "#5abc5c";
$greenBorder = "3px solid #5abc5c";




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
$nameBorder = $greenBorder;
$emailBorder = $redBorder;
$messageBorder = $greenBorder;
	} else {

		//Passed email

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$emailOutput = "
From: $name
Email Address: $email
$message";
mail("marlonpempengco@gmail.com", $subject, $emailOutput);

//Check if email was sent successfully

if(mail("marlonpempengco@gmail.com", $subject, $emailOutput)){

	$messageBackground = "#5abc5c";
	$formHeaderMessage = "Thank you for your message!";
//Thank you for your message!

} else{

//Message not sent :($messageBackground = "#5abc5c";
$formHeaderMessage = "Message was not sent :(";
	$messageBackground = "red";

}

	}

} else {

	//Failed

$messageBackground = "#ef5353";
$nameBorder = $redBorder;
$emailBorder = $redBorder;
$messageBorder = $redBorder;

$formHeaderMessage = "Please fill in all fields";

if(!empty($name) && empty($email) && empty($message)){

$messageBackground = "#ef5353";

	$nameBorder = $greenBorder;
	$emailBorder = $redBorder;
	$messageBorder = $redBorder;

	$formHeaderMessage = "Please fill in all fields";

}

if(!empty($name) && !empty($email) && empty($message)){

$messageBackground = "#ef5353";

	$nameBorder = $greenBorder;
	$emailBorder = $redBorder;
	$messageBorder = $redBorder;

	$formHeaderMessage = "Please fill in all fields";

}

if(!empty($name) && empty($email) && !empty($message)){

$messageBackground = "#ef5353";

	$nameBorder = $greenBorder;
	$emailBorder = $redBorder;
	$messageBorder = $greenBorder;

	$formHeaderMessage = "Please fill in all fields";

}

if(empty($name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)){

$messageBackground = "#ef5353";

	$nameBorder = $redBorder;
	$emailBorder = $greenBorder;
	$messageBorder = $greenBorder;

	$formHeaderMessage = "Please fill in all fields";

}

if(empty($name) && !empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)){

$messageBackground = "#ef5353";

	$nameBorder = $redBorder;
	$emailBorder = $redBorder;
	$messageBorder = $greenBorder;

	$formHeaderMessage = "Please fill in all fields";

}






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

<input type="text" name="name" placeholder="Name" style="border: <?php echo $nameBorder;?>" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"></input>

<input type="text" name="email" placeholder="Email" style="border: <?php echo $emailBorder;?>" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"></input>

<textarea name="message" placeholder="Message" style="border: <?php echo $messageBorder;?>"><?php echo isset($_POST['message']) ? $_POST['message'] : '' ?></textarea>

<button type="submit" name="submit"><p>Send</p></button>


</form>


</section>

<?php require("footer.php");?>

</body>

</html>
