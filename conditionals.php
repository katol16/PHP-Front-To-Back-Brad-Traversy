<?php
    // Tutaj wszystko jest praktycznie tak jak w JS. To proste rzeczy wiec nie ma sensu robic notatek

    // Jest jedna dodatkowa rzecz w "LOGICAL OPERATORS":
    // XOR (Exclusive OR) - Jedno musi być prawdziwe ale nie mogą być OBA! Pamietaj, że w zwykłym OR (||) jedno lub oba mogą byc prawdziwe, by warunek był spełiony
    // Przykład zapisu

    $num = 2;
    if ($num >4 XOR $num < 10) {
        echo "$num passed";
    }

    // SWITCH - praktycznie tak samo jak w JS, ale dla przypomnienia zrbiels notatki

    $favColor = 'red';

    switch($favColor) {
        case 'red';
            echo 'Your favorite color is red';
            break;
        case 'blue';
            echo 'Your favorite color is blue';
            break;
        case 'green';
            echo 'Your favorite color is green';
            break;
        default:
            echo 'Your favorite color is something else';
    }

?>