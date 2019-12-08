<?php

	#Array - Varialbe that holds multiple values
	/*
		There is 3 types of arrays:
		- Indexed
		- Associative
		- Multi-dimensional		

	*/

	// Indexed - the easiest and most common
		$people = array('Kevin', 'Jeremy', 'Sara');
		echo $people[1]; // Jeremy
		echo $people[3]; // undefined;

		$ids = array(12,21,232);

		// lub w ten sposób (działa tak samo jak z array())
		$cars = ['honda', 'fiat', 'maluch'];
		// dodaj cos do tablicy
		$cars[3] = 'nowe auto';
		// jak nie znasz indeksu gdzie chcesz dodac, to
		$cars[] = "nowe auto 2";

		// pobierze długość tablicy
		echo count($cars); // 5

		// Wyświetli całą tablicę
		print_r($cars);

		// Wyświetli całośc z typami danych
		var_dump($cars);

		// Associative arrays - pozwala przypisać wartośc do danego klucza w tablicy

		// klucz to peirwsza wartość

		// ponziej klucz to 'Brad' i 'Jose'
		$people = array('Brad' => 35, 'Jose' => 32)
		echo $people['Brad']; // zwróci 35

		$ids = [22 => 'Brad', 44 => 'Jose'];
		echo $ids[22]; // zwróci "Brad"

		// przypisanie
		$people['Jill'] = 43;
		// echo $people['Jill'];

		
?>