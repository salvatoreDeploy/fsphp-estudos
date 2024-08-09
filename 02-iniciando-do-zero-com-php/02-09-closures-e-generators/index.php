<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function ($yearNasc) {
    $age = date("Y") - $yearNasc;
    return "<p>Você tem {$age} anos!</p>";
};

echo $myAge(1991);


$priceBRL = function ($price) {
    return "R$ " . number_format($price, 2, ",", ".");
};

echo "<p>O projeto custa {$priceBRL(3600)}. Vamos fechar?</p>";

$myCart = [];

$myCart["Total_price"] = 0;
$cardAdd = function ($item, $qtd, $price) use (&$myCart) {
    $myCart[$item] = $qtd * $price;
    $myCart["Total_price"] += $myCart[$item];
};

$cardAdd("HTML5", 2, 512);
$cardAdd("React", 3, 1123);

var_dump($myCart);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 40000000;

function showDates($days)
{
    $showDate = [];
    for ($day = 1; $day < $days; $day++) {
        $saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
    }

    return $saveDate;
}

echo "<div style='text-align: center'>";
foreach (showDates(1) as $date) {
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";

function generatorDate($days)
{
    for ($day = 1; $day < $days; $day++) {
        yield date("d/m/Y", strtotime("+{$day}days"));
    }
}

echo "<div style='text-align: center'>";
foreach (generatorDate($iterator) as $date) {
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";