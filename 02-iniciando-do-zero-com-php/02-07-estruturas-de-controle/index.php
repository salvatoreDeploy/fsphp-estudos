<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test = true;

if($test){
    var_dump($test);
}else{
    var_dump($test);
}

$age = 20;

if($age < 20){
    var_dump("Bandas Coloridas");
}elseif ($age > 20 && $age < 50){
    var_dump("Otimas bandas");
}else{
    var_dump("Rock And Roll Raiz");
}

$hour = 23;

if($hour >= 5 && $hour < 23){
    if($hour < 7){
        var_dump("Bob Marley");
    }else{
        var_dump("After Bridge");
    }
}else{
    var_dump("Hora de estar dormindo");
}

/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);

$rock = "";

if(isset($rock)){
    var_dump("Rock and Roll");
}else{
    var_dump("Die");
}

if(empty($rock)){
    var_dump("Rock and Roll");
}else{
    var_dump("Die");
}

/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);

$payment = "canceld";

switch ($payment){
    case "billet_printed":
        break;
    case 'canceled':
        break;
    case 'past_due':
    case 'pednding':
        break;
    case 'approved':
    case 'completed':
        break;
    default:
        break;
}




