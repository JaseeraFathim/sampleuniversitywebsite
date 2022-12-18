<? php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'jaseerafathim1@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Name: $visitor_email.\n".
              "User Name: $subject.\n".
              "User Message: $message.\n";

$to = 'stoneyjango@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "To: $email_to \r\n";

$headers .= "Reply-To: $visitors_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")



?>