<?php

// Exercice 1

	$numbers=[];
	$squareOrNot1='';
	$squareOrNot2='';
	$firstDigit=1;
	$lastDigit=16;
	
	if (is_int ($firstDigit)) {
	
	for ( $i = ($firstDigit) ; $i <= ($lastDigit) ; $i++ ){
		array_push($numbers, $i);
	}
	
	echo "<ol>";
	foreach($numbers as $number ){
	    
	    if (fmod(sqrt($number), 1) == 0){
			$squareOrNot1='<bold>';
	        $squareOrNot2='</bold>';
	    }
		
		else {
		    $squareOrNot1='';
	        $squareOrNot2='';
		}
		
		echo "<li ";
		
		if (($number % 2) == 0){
			echo "style='color:blue'>".$squareOrNot1.$number.$squareOrNot2;
		}
		
		else{
			echo "style='color:orange'>".$squareOrNot1.$number.$squareOrNot2;
		}
		
		echo "</li>"."\n";
	}
	
	echo "</ol>";

}

else {
    echo "Ceci n'est pas une chaîne d'entiers positifs."
}
	
// Exercice 2

	$numbers2 = [];
	$firstNumber=0;
	$secondNumber=0;
	$gap=0;
	
	for ($i=0; $i<=10; $i++){
		array_push($numbers2, rand(1,100000));
	}
	
	echo "Les nombres comparés sont :";
	
	foreach ($numbers2 as $number2){
		echo "- ".$number2."\n";
	}
	
	echo ".";
	
        for ($i=0; $i<10; $i++){
			
	    	$firstNumber=($numbers2[$i]);
	    	$secondNumber=($numbers2[($i+1)]);
	    	
	        $tempGap = abs($firstNumber - $secondNumber); // Le abs() évite de considérer une valeur négative comme plus petite.
			
	    	if ($gap <= $tempGap){
	    		$gap = $tempGap;
	    	}
			
    	}
		
	
	
	echo "\n\n"."Le plus grand écart trouvé est de ".$gap.".";
	
// Exercice 3

	$guessIt = rand(1, 100);
	$tryArray = [];
	$try = '';

	$i=0;

	while ($i<8) {
		if ($try < $guessIt) {
			echo "Nombre donné trop petit."."\n";
			$i++;
		}
		
		elseif ($try > $guessIt) {
			echo "Nombre donné trop grand."."\n";
			$i++;
		}
		
		elseif ($try = $guessIt) {
			$i++;
			if ($i=1){
				echo "Bravo ! Vous avez trouvé du 1er coup !";
			}
			else {
				echo "Bravo ! Vous avez trouvé en ".$i." essais !";
			}
			break;
		}
		if ($i==8) {
			echo "Désolée, le nombre était ".$guessIt.".";
		}
	}
	
?>