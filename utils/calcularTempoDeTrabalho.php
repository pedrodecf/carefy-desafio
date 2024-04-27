<?php
function calcularTempoDeTrabalho($dataEntrada) {
    $dataEntr = DateTime::createFromFormat('d/m/Y', $dataEntrada);
    
    if ($dataEntr === false) {
        return "Data inválida";
    }
    
    $dataAtual = new DateTime();
    
    $anosDeTrabalho = $dataEntr->diff($dataAtual);

    if ($anosDeTrabalho->y === 0) {
        return "Menos de 1 ano";
    }

    if ($anosDeTrabalho->y === 1) {
        return $anosDeTrabalho->y . " ano";
    }
    
    return $anosDeTrabalho->y . " anos";
}
