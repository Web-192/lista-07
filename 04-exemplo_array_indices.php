<?php
//Pecorra o vetor de $idades e mostre quantos são +18 anos

$idades = [1,2,58,100,18,20];
$contMaiorIdade = 0;

for($i=0;$i<count($idades);$i++){
    if($idades[$i] >= 18) {
        $contMaiorIdade++;
    
    }
}
echo("<br> Temos $contMaiorIdade com maior idade.");
?>