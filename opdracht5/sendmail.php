<?php
$to = '22193@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = $_POST['headers'];

mail($to, $subject, $message, $headers);

echo 'Uw mail is verstuurd. Bedankt!';