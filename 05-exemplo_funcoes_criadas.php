<?php
$idade = 0;

//Funções que eu criei
function formatarMoeda(float $valor){
    return "<br> O valor da moeda: R$" .
        number_format($valor,2,",",".");
}

function verificarMaiorIdade($idade){
    if($idade >= 18){
        return true;
    } else {
       return false;
    }
}
?>