<?php
    // Message var
    $msg = '';

    // Check for submit
    if(filter_has_var(INPUT_POST, 'submit')) {
        echo 'Submitted';

        // Get Form Data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check Required fields
        if(!empty($email) && !empty($name) && !empty($message)) {
            // Passed
            echo 'PASSED';
            // Check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                // Failed
                $msg = "Wrong email";
            } else {
                // Passed
                $toEmail = 'karol.vogelgezang@gmail.com';
                $subject = 'Contact request from'.$name;
                $body = '<p>'.$message.'</p>';

                // Email Headers
                // \r\n -> new line
                $headers = "MIME-Version: 1.0"."\r\n";
                // .= - to ejst taka konktenacja, doda to co po "=" to $headers
                $header .= "Content-Type:text/html;charset=UTF-8"."\r\n";

                // Additional Headers
                $headers .= "From: ".$name."<".$email.">"."\r\n";

                if(mail($toEmail, $subject, $body, $headers)) {
                    // Email sent
                    $msg = "Your email has been sent";
                } else {
                    // Failed
                    $msg = "Your email was not sent";
                }

            }
        } else {
            // Failed
            $msg = "Please fill all fields";
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
<!--    // Poniżej mozemy też użyc w akcji action="index.php"-->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" />
        <label>Email</label>
        <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" />
        <label>Message</label>
        <textarea name="message" value="<?php echo isset($_POST['message']) ? $message : ''; ?>"></textarea>
        <button type="submit" name="submit"></button>
    </form>
    <?php if($msg != ''): ?>
        <p><?php echo $msg; ?></p>
    <?php endif; ?>
</body>
</html>