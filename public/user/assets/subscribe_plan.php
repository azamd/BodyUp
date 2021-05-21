<?php

if(!$_POST) exit;

// Email verification, do not edit.
function isEmail($email ) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email ));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$firstname     = $_POST['firstname'];
$lastname    = $_POST['lastname'];
$email    = $_POST['email'];
$phone   = $_POST['phone'];
$plan = $_POST['plan'];
$payment_mode = $_POST['payment_mode'];
$verify_plan   = $_POST['verify_plan'];

if(trim($firstname) == '') {
	echo '<div class="error_message">You must enter your First Name.</div>';
	exit();
} else if(trim($lastname ) == '') {
	echo '<div class="error_message">You must enter your Last name.</div>';
	exit();
} else if(trim($email) == '') {
	echo '<div class="error_message">Please enter a valid email address.</div>';
	exit();
} else if(!isEmail($email)) {
	echo '<div class="error_message">You have enter an invalid e-mail address, try again.</div>';
	exit();
	} else if(trim($phone) == '') {
	echo '<div class="error_message">Please enter a valid phone number.</div>';
	exit();
} else if(!is_numeric($phone)) {
	echo '<div class="error_message">Phone number can only contain numbers.</div>';
	exit();
} else if(trim($plan) == '') {
	echo '<div class="error_message">Please define your plan.</div>';
	exit();
} else if(trim($payment_mode) == '') {
	echo '<div class="error_message">Please define your payment mode.</div>';
	exit();
} else if(!isset($verify_plan) || trim($verify_plan) == '') {
	echo '<div class="error_message"> Please enter the verification number.</div>';
	exit();
} else if(trim($verify_plan) != '4') {
	echo '<div class="error_message">The verification number you entered is incorrect.</div>';
	exit();
}

if(get_magic_quotes_gpc()) {
	$message_contact = stripslashes($message_contact);
}


//$address = "HERE your email address";
$address = "info@lovefit.com";


// Below the subject of the email
$e_subject = 'You\'ve been contacted by ' . $firstname . '.';

// You can change this if you feel that you need to.
$e_body = "You have been contacted by $firstname $lastname with the following plan request." . PHP_EOL . PHP_EOL;
$e_content = "I would like to subscribe to $plan, payment via $payment_mode." . PHP_EOL . PHP_EOL;
$e_reply = "You can contact $lastname_contact via email, $email or via phone $phone";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "From: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: info@lovefit.com\n";
$usermessage = "Thank you for subscribe to Lovefit. We will reply shortly! with more details";
mail($user,$usersubject,$usermessage,$userheaders);

if(mail($address, $e_subject, $msg, $headers)) {

	// Success message
	echo "<div id='success_page' style='padding:25px 0 15px 0'>";
	echo "<strong >Order Sent.</strong><br>";
	echo "Thank you <strong>$firstname</strong>, your request has been submitted. We will contact you shortly.";
	echo "</div>";

} else {

	echo 'ERROR!';

}
