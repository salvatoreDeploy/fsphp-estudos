<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);

$looping = 1;
$while = [];

while($looping <= 5){
    $while[] = $looping;
    $looping++;
}

var_dump($while);

$looping = 5;
$while = [];

do{
    $while[] = $looping;
    $looping--;
}while ($looping >= 1);

var_dump($while);

/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);

for($index = 1; $index <= 10; $index++){
    echo "<p>{$index}</p>";
}

/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);

for($c = 1; $c <= 10; $c++){
   if($c % 2 == 0){
       continue;
   }

   if($c > 7){
       break;
   }

   echo "<p>Pulou + 2 :: {$c}</p>";
}

/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);

$arr = [];

for($ar = 1; $ar < 10; $ar++){
    $arr[] = $ar;
}

var_dump($arr);

foreach ($arr as $array){
    var_dump($array);
}

foreach ($arr as $key => $value){
    var_dump("{$key} = {$value}");
}
