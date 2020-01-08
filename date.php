<?php
    echo date(); // wyrzuci Warning, bo musi coś być tutaj podane
    echo date('d'); // Wyrzuci numer dnia
    echo date('m'); // Wyrzuci miesiąc
    echo date('Y'); // Wyrzuci rok
    echo date('l'); // Day of the week
    echo date('Y/m/d'); // Year/month/day
    echo date('m-d-y'); // tez zadziałą (month-day-year)
    echo date('h'); // Hour
    echo date('i'); // Minutes
    echo date('s'); // seconds
    echo date('a'); // AM or PM
    echo date('h:i:sa'); // 14:14:15 AM

    //Set Time Zone
    date_default_timezone_set('America/New_York');

    // mktime - make time function
    $timestamp = mktime(10,14,54,9,10,1981);
    echo($timestamp); // Liczba sekund od 1 stycznia 1970 do teraz (TU MA BY RACZEJ DO TEJ DATY Z POWYŻSZEJ LINI)

    // Teraz możemy wyśwetlić date z timestamp w taki sposób
    echo date('m/d/Y h:i:sa', $timestamp);

    // string to time
    // poniżej może byc też w stringu "tomorrow" albo "next sunday", "+2 months" itd. wiele rzeczy mozesz wpisac w arguemnt strtotime
    $timestamp2 = strtotime('7:00pm March 22 2016');
    echo $timestamp2; // timestampt (ilość sekund od 1 stycznia 1970)

    echo date('m/d/y h:i:sa', $timestamp2);

    // Więcej w dokumentacji.
?>