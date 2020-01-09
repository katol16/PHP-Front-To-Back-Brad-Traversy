<?php

    # substr()
    # Returns a portion of a string -> wytnie od drugiego parametru do końca stringa lub do 3 parametru (jeśli jest)
    $output = substr("Hello", 1);
    echo $output; // ello

    $output2 = substr("Hello", 1,3);
    echo $output2; // ell

    // możemy wystartować od tyłu
    $output3 = substr("Hello", -2);
    echo $output3; // lo


    # strlen()
    # Returns the length of a string

    $output4 = strlen("Hello world");
    echo $output4; // 11


    # strpos()
    # Finds the position of the first occurence of a substring -> czyli znajduje pierwszą pozycję stringa z drugiego atrybutu czyli u nas "o"

    $output5 = strpos("Hello world", 'o');
    echo $output5; // 4

    # strrpos()
    # Finds the position of the last occurence of a substring -> czyli znajduje ostatnią pozycję stringa z drugiego atrybutu czyli u nas "o"

    $output6 = strrpos("Hello world", 'o');
    echo $output6; // 7

    # trim()
    # Strips whitespace

    $text = 'Hello world';
    var_dump($text);

    $trimmed = trim($text); // usunie whitespace ze stringa
    var_dump($trimmed);

    # strtoupper()
    #makes everything uppercase
    $output7 = "bedzie z duzej pozniej";
    $output7 = strtoupper($output7);

    # strtolower()
    # Makes everything lowerase
    $output8 = strtolower("Hello World");
    echo $output8;

    # ucwords()
    # Capitalize every word
    $output9 = ucwords("hello world");
    echo $output9; // Hello World

    # str_replace()
    # Replace all occurences of a search string with a replacement

    $text2 = "Hello World";
    $output10 = str_replace('World','Everyone', $text2);
    echo $output10;

    # is_string()
    # Check if string. Zwraca 1 jeśli string i false jeśli nie

    $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '',' ', 0, '0');

    foreach($values as $value) {
        if(is_string($value)) {
            echo "{$value} is a string";
        }
    }

    # gzcompress()
    # Compress a string -> Kompresuje string, do takiej nieczytelnej wartości.

    # gzuncompress()
    # Uncompress string