<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';
?>

<?php

//if(isset($_POST['submit'])) {
$response = "";
if(isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['subject'], $_POST['message'])) {
    if( Filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
        $response = 'Email invalid!';
    } else if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone'])
        || empty($_POST['subject']) || empty($_POST['message'])) {
        $response = 'All fields are required';
    } else{
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $To = "bjoerg.w.reinert@hotmail.com"; //Destination of the email
        $body = "";
        $body .= "From: " .$name. "\r\n";
        $body .= "Phone: " .$phone. "\r\n";
        $body .= "Email: " .$mailFrom. "\r\n";
        $body .= "Message: "  .$message. "\r\n";
        $headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
        mail($To, $subject, $message, $headers);

        $response = 'Mail was send. We will get back to you';
        header("Location: contact.php?mailsend");

    }
}
?>