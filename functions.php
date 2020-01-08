<?php
# FUNCTION - Block of code that can be repeadly called

/*
    Camel Case - myFunction()
    Lower Case - my_function()
    Pascal Case - MyFunction()
*/

    // Create Simple Function
    function simpleFunction() {
        echo 'Hello World';
    }

    // Run Simple Function
    simpleFunction();

    // Function With Param
    function sayHello($name) {
        echo "Hello $name<br>";
    }

    sayHello('Joe');
    sayHello('Karol');

    // Jak nie podamy parametru to wyrzuci error
    // sayHello();
    // chyba, ze ustawimy w definicji funkcji parametr defaultowy, czyli:
    //    function sayHello($name = "world") {
    //        echo "Hello $name<br>";
    //    }
    // wtedy sayHello(); zadziała. Możemy oczywicie nadpsiac defaultowy parmaetr robiac sayHello("nadpisujacy parametr");

    // Return value
    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }
    echo addNumbers(2,3);

    // Passing arguments by reference
    $myNum = 10;

    // Normalnie argumenty funckji są przekazywane przez value
    function addFive($num) {
        $num += 5;
    }

    // Jak chcemy żeby był przekazywane przez reference, to musimy zrobić to &$num
    // UWAGA! to jest rzadko używane!
    function addTen(&$num) {
        $num += 10;
    }

    addFive($myNum);
    echo "value: $myNum<br>"; // wyświetli 10 a nie 15, bo jest przekazywane 'by value" wiec nie zmieni tej orginalnej wartości

    addTen($myNum);
    echo "value: $myNum<br>" // Tu wyświetli 20, bo jest przekazne "by reference" i zmieni orginalną wartość


?>