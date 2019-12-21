<?php

// Te linie poniżej po prostu utworzą tablicę
// Array ( [0] => Steve [1] => Karol [2] => Michal [3] => Brad )
$people[] = "Steve";
$people[] = "Karol";
$people[] = "Kamil";
$people[] = "Konrad";
$people[] = "Michal";
$people[] = "Brad";

// print_r($people); // Array ( [0] => Steve [1] => Karol [2] => Michal [3] => Brad )

// Get Query String
// Tu użyjemy "REQUEST", mimo, ze tam mamy GET request, ale w razie "w" jakbyśµy tam użyli POST, to REQUEST też zadziała
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions
if($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);

    foreach($people as $person) {
        if(stristr($q, substr($person, 0, $len))) {
            if($suggestion === "") {
                // echo stristr($q, substr($person, 0, $len));
                $suggestion = $person;
            } else {
                // echo stristr($q, substr($person, 0, $len));
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No suggestion" : $suggestion;
