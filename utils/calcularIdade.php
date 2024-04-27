<?php
function calcularIdade($dataNascimento) {
    $dataNasc = DateTime::createFromFormat('d/m/Y', $dataNascimento);
    
    if ($dataNasc === false) {
        return "Data inválida";
    }
    
    $dataAtual = new DateTime();
    
    $idade = $dataNasc->diff($dataAtual);
    
    return $idade->y;
}
