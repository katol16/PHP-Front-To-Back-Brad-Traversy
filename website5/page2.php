<?php
    // change cookie
    // setcookie('username', 'Frank', time() + 7200);

    // delete cookie
    // setcookie('username', 'Frank', time() - 7200);

    if(count($_COOKIE) > 0) {
        echo 'There are '.$count.' cookies saved<br>';
    } else {
        echo 'There are no cookies<br>';
    }

    if(isset($_COOKIE['username'])) {
        echo 'User'.$_COOKIE['username'].' is set';
    } else {
        echo 'User is not set';
    }


