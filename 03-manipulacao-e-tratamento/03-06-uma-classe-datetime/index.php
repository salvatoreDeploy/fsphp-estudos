<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

define("DATE_BR", "d/m/Y H:i:s");

$dateNow = new DateTime();
$dateBirth = new DateTime("1991-05-12");
$dateStatic = DateTime::createFromFormat(DATE_BR, "10/03/2024 12:00:00");
$dateStaticNotFormat = DateTime::createFromFormat("d/m/Y", "12/07/2024");

var_dump([
    $dateNow,
    $dateBirth,
    $dateStatic,
    $dateStaticNotFormat
]);

var_dump([
    $dateNow->format(DATE_BR),
    $dateNow->format("d")
]);

echo "<p>Hoje é dia {$dateNow->format("d")} do {$dateNow->format("m")} de {$dateNow->format("Y")}</p>";

$newTimeZone = new DateTimeZone("Pacific/Apia");
$newDateTime = new DateTime("now", $newTimeZone);

var_dump([
    $newTimeZone,
    $newDateTime,
    $dateNow
]);

/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

$dateInterval = new DateInterval("P10Y2MT10M");

var_dump([$dateInterval]);

$dateTime = new DateTime("now");
$dateTime->add($dateInterval);
$dateTime->sub($dateInterval);

var_dump([$dateTime]);

$birth = new DateTime(date("Y") . "-05-12");

$diff = $dateNow->diff($birth);

var_dump($diff);

if($diff->invert){
    echo "<p>Seu aniversario foi a {$diff->days} dias</p>";
}else{
    echo "<p>Faltan {$diff->days} dias para seu aniversario</p>";
}

$dataResources = new DateTime("now");
var_dump([
    $dataResources->format(DATE_BR),
    $dataResources->sub(DateInterval::createFromDateString("10days"))->format(DATE_BR),
    $dataResources->add(DateInterval::createFromDateString("20days"))->format(DATE_BR)
]);

/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

$start = new DateTime("now");
$interval = new DateInterval("P1M");
$end = new DateTime("01-01-2025");

$period = new DatePeriod($start, $interval, $end);

var_dump([
    $start->format(DATE_BR),
    $interval,
    $end->format(DATE_BR)
]);

echo "<h1>Sua Assinatura:</h1>";
foreach ($period as $recurrences){
    echo "<p>Proximo vencimento: {$recurrences->format(DATE_BR)}</p>";
}