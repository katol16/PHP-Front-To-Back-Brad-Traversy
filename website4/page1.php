<?php
    if(isset($_POST['submit'])) {
        // We will catch the frm values and set it to the SESSION
        // Jeśli chcesz użyć sesji musisz ją wystartować poniższą funkcją
        session_start();
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        // redirect
        header('Location: page2.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Sessions</title>
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
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>