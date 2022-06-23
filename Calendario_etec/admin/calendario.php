<?php 
    date_default_timezone_set('America/Sao_Paulo');

    if(isset($_GET['$mes'])) {
        echo $_GET ['$mes'];
    }
    else {
        $mes = date('Y-M-D');
    }
    echo $mes;
    $timestamp = strtotime($mes . "-01");
    if($timestamp === false) {
        $mes = date('Y-m-d');
    }
    
    $hoje = date('Y-m-j', time());

    $titulo = date('Y / m', $timestamp);

    $anterior = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
    $proximo = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

    $cont_dias = date('t', $timestamp);

    $dias = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
    
    $semanas = [];
    $semana = '';

    $semana .= str_repeat('<td></td>' , $dias);

    for($dia = 1; $dia <= $cont_dias; $dia++, $dias++){
        $data = $mes .'-'. $dia;
    
        if($hoje == $data){
            $semana .= '<td class="today">' .$dia;
        }
        else{
            $semana .= '<td>' . $dia;
        }
        $semana .= '</td>';
        
        if($dias % 7 == 6 || $dia == $cont_dias){
            $semana .= str_repeat('<td></td>', 6 - ($dias % 7));
        

        $semanas[] = '<tr>' .$semana. '</tr>';

        $semana = '';
        }
    }   
?>

