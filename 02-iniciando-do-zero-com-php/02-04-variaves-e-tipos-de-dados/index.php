<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");


/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirstName = "Henrique";
$userLastName = "Araujo";
$userAge = "33";

echo "<p>{$userFirstName} {$userLastName} <span class='tag'>{$userAge}</span></p>";

$company = "UpInside";
$$company = "Treinamento";

echo "<h3>{$company} {$UpInside}</h3>";

$calcA = 10;
$calcB = 20;
$calcB = &$calcA;
$calcB = 100;

var_dump([
    "A" => $calcA,
    "B" => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;

var_dump($true, $false);

$bestAge = ($userAge > 50);
var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = ""; // ou ''
$d = array(); // ou []
$e = null;

var_dump($a, $b, $c, $d, $e);

if($a || $b || $c || $d || $e){
    var_dump(true);
}else{
    var_dump(false);
}

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article>Uma callback function!</article>";
$codeClear = call_user_func("strip_tags", $code);
var_dump($code, $codeClear);

$codeMore = function($code){
    var_dump($code);
};
$codeMore('#Boracodar');

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Olá mundo";
$array = [$string];
$object = new stdClass();
$object->hello = $string;
$null = null;
$int = 123456;
$float = 1.23456;

var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
]);