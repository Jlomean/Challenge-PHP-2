<?php

require'functions.php';

// Exercice 1

echo nl2br("<h1>Exercice 1 :</h1>");

	fancyNumbers(1,16);	
	
// Exercice 2

echo nl2br("<h1>Exercice 2 :</h1>");

	$randomNumbers = [];
	for ($i=0; $i<=10; $i++){
		array_push($randomNumbers, rand(1,100000));
	}
		
	bigGap($randomNumbers);
	
// Exercice 3

echo nl2br("<h1>Exercice 3 :</h1>");

	$guessedNumber = ''; // toDo : coder une page pour l'input du nombre.
	
	forkGame($guessedNumber);
	
?>