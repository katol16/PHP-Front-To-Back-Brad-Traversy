<?php

    if(isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);

        // set cookie
        // setcookie("nazwa", $zmienna, czas wygaśnięcia)
        setcookie('username', $username, time()+3600);

        header('Location: page2.php');
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Cookies</title>
</head>
<body>
<!--    // Poniżej mozemy też użyc w akcji action="index.php"-->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Name</label>
        <input type="text" name="username" placeholder="Enter username" />
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>