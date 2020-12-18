<html>
<head>
</head>
<body>
<form action="sermo" method="post">
    <input type="submit" value="send">
    <input type="hidden" name="button_pressed" value="1">
</form>

<?php

if(isset($_POST['button_pressed']))
{
    $to      = 'madhuri.setti02@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: 9908276025vinaykumar@gmail.com' . "\r\n" .
        'Reply-To: 9908276025vinaykumar@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}
</body>
</html>