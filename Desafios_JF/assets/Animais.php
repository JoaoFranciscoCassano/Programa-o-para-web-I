<?php

// Verificação da Variavel setada
if(isset($_GET['ordem'])) {
    $ordem = $_GET['ordem'];
}

$tipo = "nome";

if(isset($_GET['tipo'])){
    $tipo = $_GET['tipo'];
}


$animais["Falcão Peregrino - Falco peregrinus"] = '387.2';
$animais["Andorinhões - Apodidae"] = '169.6';
$animais["Guepardo - Acinonyx jubatus"] = '112';
$animais["Peixe-Vela - Istiophorus albicans"] = '108.8';
$animais["Antilocapra - Antilocapra americana"] = '97.6';
$animais["Espadarte - Xiphias gladius"] = '96';
$animais["Leão - Panthera leo"] = '80';
$animais["Marlim - Istiophoridae"] = '80';
$animais["Gnu - Connochaetes"] = '80';
$animais["Gazela-de-Thomson - Eudorcas thomsonii"] = '80';
$animais["Lebre - Lepus europaeus"] = '76.8';
$animais["Raposa-Vermelha - Vulpes vulpes"] = '76.8';
$animais["Cavala-Wahoo - Acanthocybium solandri"] = '76.5';
$animais["Quarto de Milha - Equus caballus"] = '76';
$animais["Gazela-de-Grant - Nanger granti"] = '75.2';
$animais["Atum-Rabilho - Thunnus thynnus"] = '73.6';
$animais["Cão-Selvagem-Africano - Lycaon pictus"] = '72';
$animais["Coiote - Canis latrans"] = '69';
$animais["Zebra - Equus zebra"] = '64';
$animais["Albacora-Cachorra - Thunnus albacares"] = '47.6';

// arsort, asort, ksort, krsort
if($tipo == 'nome' && $ordem == 'desc'){
    krsort($animais);
}
elseif($tipo == 'velo' && $ordem == 'desc'){
    arsort($animais);   
}

elseif($tipo == 'nome' && $ordem == 'asc'){
    ksort($animais);
}

else{
    asort($animais);
}


?>