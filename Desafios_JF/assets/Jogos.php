<?php

// Verificação da Variavel setada
if(isset($_GET['ordem'])) {
    $ordem = $_GET['ordem'];
}

$tipo = "nome";

if(isset($_GET['tipo'])){
    $tipo = $_GET['tipo'];
}


$Games["Street Fighter II"] = 'US$700 milhões';
$Games["Super Mario World"] = 'US$553 milhões';
$Games["Destiny"] = 'US$500 milhões';
$Games["Sonic The Hedgehog"] = 'US$387 milhões';
$Games["Grand Theft Auto 5"] = 'US$265 milhões';
$Games["Call of Duty: Modern Warfare 2"] = 'US$200 milhões';
$Games["Star Wars: Old Republic"] = 'US$200 milhões';
$Games["Final Fantasy VII"] = 'US$150 milhões';
$Games["Pac Man"] = 'US$135 milhões';
$Games["The Legend Of Zelda"] = 'US$121 milhões';
$Games["Max Payne 3"] = 'US$105 milhões';
$Games["Too human"] = 'US$100 milhões';
$Games["Grand Theft Auto 4"] = 'US$100 milhões';
$Games["Disneys Infinity"] = 'US$100 milhões';
$Games["Tomb Raider"] = 'US$100 milhões';
$Games["Gran Turismo 5"] = 'US$93 milhões';
$Games["Red Dead Redemption"] = 'US$90 milhões';
$Games["Defiance"] = 'US$80 milhões';
$Games["Metal Gear Solid 4"] = 'US$70 milhões';
$Games["Watch"] = 'US$70 milhões';

// arsort, asort, ksort, krsort
if($tipo == 'nome' && $ordem == 'desc'){
    krsort($Games);
}
elseif($tipo == 'money' && $ordem == 'desc'){
    arsort($Games);   
}

elseif($tipo == 'nome' && $ordem == 'asc'){
    ksort($Games);
}

else{
    asort($Games);
}


?>