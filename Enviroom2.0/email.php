<?php
$to = ‘nikolaivasilev208@gmail.com’;
$subject = ‘Apple Computer’;
$message = ‘Steve, I think this computer thing might really take off.’;

wp_mail( $to, $subject, $message );

//user posted variables
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

//php mailer variables
  $to = get_option('nikolaivasilev208@gmail.com');
  $subject = "Some text in subject...";
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";
 }

//Here put your Validation and send mail
$sent = wp_mail($to, $subject, strip_tags($message), $headers);
      if($sent) {

      }//message sent!
      else  {

      }//message wasn't sent
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviroom</title>
</head>
<body>
  	<?php echo $message; ?>
  	<?php $success = mail($to,$subject,$message); ?>
  	<?php if (isset($success) && $success) { ?>
      <h1>Hello</h1>
      <p>You have just recieved a fucking email!</p>
      <h1>Fuck you _!_</h1>
  <?php } else { ?>
  	<h1>Oppsie looks like there was an error</h1>	
 
</body>
