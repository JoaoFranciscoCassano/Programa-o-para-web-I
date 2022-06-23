<?php

// Verificação da Variavel setada
if(isset($_GET['ordem'])) {
    $ordem = $_GET['ordem'];
}

$tipo = "nome";

if(isset($_GET['tipo'])){
    $tipo = $_GET['tipo'];
}


$cidades["São Caetano do Sul (SP)"] = '0.862';
$cidades["Águas de São Pedro (SP)"] = '0.854';
$cidades["Florianópolis (SC)"] = '0.847';
$cidades["Balneário Camboriú (SC)"] = '0.845';
$cidades["Vitória (ES)"] = '0.845';
$cidades["Santos (SP)"] = '0.840';
$cidades["Niterói (RJ)"] = '0.837';
$cidades["Joaçaba (SC)"] = '0.827';
$cidades["Brasília (DF)"] = '0.824';
$cidades["Curitiba (PR)"] = '0.823';
$cidades["Jundiaí (SP)"] = '0.822';
$cidades["Valinhos (SP)"] = '0.819';
$cidades["Vinhedo (SP)"] = '0.817';
$cidades["Santo André (SP)"] = '0.815';
$cidades["Araraquara (SP)"] = '0.815';
$cidades["Santana de Parnaíba (SP)"] = '0.814';
$cidades["Nova Lima (MG)"] = '0.813';
$cidades["Ilha Solteira (SP)"] = '0.812';
$cidades["Americana (SP)"] = '0.811';
$cidades["Belo Horizonte (MG)"] = '0.810';

// arsort, asort, ksort, krsort
if($tipo == 'nome' && $ordem == 'desc'){
    krsort($cidades);
}
elseif($tipo == 'IDHM' && $ordem == 'desc'){
    arsort($cidades);   
}

elseif($tipo == 'nome' && $ordem == 'asc'){
    ksort($cidades);
}

else{
    asort($cidades);
}


?>