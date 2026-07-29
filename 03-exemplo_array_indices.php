<?php
//Criar e atribuir valores
$idades = [2, 3, 8, 4, 10, 12, 84, 1, 6, 5];

//Mostrar idades de índices específicos
echo ($idades[8] . "<br>"); //6
echo ($idades[3] . "<br>"); //4

//Adicionar nova idade
$idades[] = 100;

//Printar todos os dados do array/vetor
print_r($idades);

//Alterar idade de um índice específico
$idades [0] = "120";
print_r($idades);

//Percorrer e manipular valores índice por índice
for($i=0; $i < count($idades); $i++) {
    echo(" ,br> ìndice: $i - $idades[$i]"); 
}

?>