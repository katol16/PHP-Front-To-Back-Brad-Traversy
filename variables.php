<!-- To też się normalnie wyświetli jak to odkomentujesz
<h1>Hello in hello</h1> -->

<?php
	echo 'Hello World';
	print 'Hello world'; // zwróci wartość (reszta jak w echo)

	// VARIABLES
		// Prefix with $
		// Start with a letter or an underscore
		// Only letters, numbers and underscore
		// Case sensitive

	// DATA TYPES
		// String
		// Integers
		// Floats 
		// Booleans
		// Arrays
		// Objects
		// Null
		// Resource

	$output = 'hello world';
	echo $output;

	$num1 = 4;
	$num2 = 10;
	$sum = $num1 + $num2;

	$string1 = 'Hello';
	$string2 = 'World';

	$greeting = $string1 .' '. $string2.'!';
	// 2 sposób poniżej (łatwiejszy)
	$greeting2 = "$string1 $string2";

	echo $greeting;
	echo $greeting2;

	// escaping
	$string3 = 'They\'re Here';
	// 2 sposób
	$string4 = "They're Here";

	echo $string3;
	echo $string4;

	$float1 =  4.4;
	$bool1 = true;


	// Constants - tworzenie stałych w php jak (const w js)
	// Popularną praktyką jest by stałe były pisane z duzej litery 
	define('NAZWASTALEJ','wartosc stalej');
	echo NAZWASTALEJ;

	// 3 patrametr "true" powoduje, ze stała nie jest "case sensitive" dlatego "echo nazwastalej2;" zadziala
	define('NAZWASTALEJ2','wartosc stalej', true);
	echo nazwastalej2;

?>