<?php

    $loggedIn = true;
    $arr = [1,2,3,4,5];

    if ($loggedIn) {
        echo 'You are logged in';
    } else {
        echo 'You are not logged in';
    }

    // Poniżej skrócona wersja tego co powyżej
    echo ($loggedIn) ? 'Yo are logged in' : "You are not logged in"

    // przypisanie
    $isRegistered = ($loggedIn == true) ? true : false;
    echo $isRegistered;

    $age = 20;
    $score = 15;

    echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average': 'Exceptional') : ($age > 10 ? "Horrible" : "Average"));

?>

<div>
    <?php if($loggedIn) { ?>
        <h1>Welcome user!</h1>
    <?php } else { ?>
        <h1>Welcome guest!</h1>
    <?php } ?>
</div>

// Skrócona wersja tego co wyżej
<div>
    <?php if($loggedIn): ?>
        <h1>Welcome user!</h1>
    <?php else: ?>
        <h1>Welcome guest!</h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach($arr as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>

<div>
    <?php foreach($arr as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>

