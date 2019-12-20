<?php
    // storing multiple data in cookies
    $user = ['name' => 'Brad', 'email' =>'test@gmail.com'];

    // w cookeis mozęy przechowywać tylko stirngi, dlatego tutaj musimy zrobić to serialize()
    $user = serialize($user);

    setcookie('user', $user, time() + 3600);

    // $user = $_COOKIE['user'];
    // echo $user; // pokaże WARINING bo jest "serialize"

     $user = unserialize($_COOKIE['user']);
     echo $user; // pokaże "Brad"

// GENERALNIE, preferuje się sesje zamiast COOKIES, bo sesje są trzymane na serwerze
