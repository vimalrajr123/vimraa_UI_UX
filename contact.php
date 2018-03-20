<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
	if ('POST' === $_SERVER['REQUEST_METHOD'])
{
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comments']))
    {
        echo "Error";
    }
    else
    {
        $to = "vimalrajr123@gmail.com";
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $comments = trim($_POST['comments']);

        $subject = "VIMRAA contact form";
        $headers = "From: $email";
        $messages = "Name: $name \\r\
 Email: $email \\r\
 Comments: $comments";
        $mailsent = mail($to, $subject, $messages, $headers);

        if ($mailsent)
        {
            echo "Mail sent successfuly";
        }
        else
        {
            echo "Error sending email";
        }
    }
}
?>
</body>
</html>