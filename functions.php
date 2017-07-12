<?php

//Fonction pour l'exercice 1 :

	function fancyNumbers($firstDigit, $lastDigit) {
		
		$numbers=[];
		$squareOrNot1='';
		$squareOrNot2='';
		
		if (is_int ($firstDigit)) {
	
			for ( $i = ($firstDigit) ; $i <= ($lastDigit) ; $i++ ){
				array_push($numbers, $i);
			}
			
			echo "<ol>";
			
			foreach($numbers as $number ){
				
				if (fmod(sqrt($number), 1) == 0){
					$squareOrNot1='<strong>';
					$squareOrNot2='</strong>';
				}
				else {
					$squareOrNot1='';
					$squareOrNot2='';
				}
				
				echo "<li ";
				if (($number % 2) == 0){
					echo "style='color:blue'>";
				}
				else{
					echo "style='color:orange'>";
				}
				echo $squareOrNot1.$number.$squareOrNot2."</li>"."\n";
			}
			
			echo "</ol>";

		}

		else {
			echo "Ceci n'est pas une chaîne d'entiers positifs.";
		}

	}

// Fonction pour l'exercice 2 :

	function bigGap (array $numbers2) {
		
		$firstNumber=0;
		$secondNumber=0;
		$gap=0;
		
		echo nl2br("Les nombres comparés sont :"."\n\n");
		foreach ($numbers2 as $number2){
			echo nl2br("- ".$number2."\n");
		}
		
			for ($i=0; $i<10; $i++){
				
				$firstNumber=($numbers2[$i]);
				$secondNumber=($numbers2[($i+1)]);
				
				$tempGap = abs($firstNumber - $secondNumber); // Le abs() évite de considérer une valeur négative comme plus petite.
				
				if ($gap <= $tempGap){
					$gap = $tempGap;
				}
				
			}
		
		echo nl2br("\n\n"."Le plus grand écart trouvé est de ".$gap.".");
	}

// Fonction pour l'exercice 3 :
	
	function forkGame($try) {
		
		$guessIt = rand(1, 100);
		$try = '';

		$i=0;

		while ($i<8) {
			if ($try < $guessIt) {
				echo nl2br("Nombre donné trop petit."."\n");
				$i++;
			}
			
			elseif ($try > $guessIt) {
				echo nl2br("Nombre donné trop grand."."\n");
				$i++;
			}
			
			elseif ($try = $guessIt) {
				$i++;
				if ($i=1){
					echo "Bravo ! Vous avez trouvé du 1er coup !";
				}
				else {
					echo "Bravo ! Vous avez trouvé en ".$i." essais.";
				}
				break;
			}
			if ($i==8) {
				echo nl2br("\n"."Désolée, le nombre était ".$guessIt.".");
			}
		}
		
	}
	
?>
