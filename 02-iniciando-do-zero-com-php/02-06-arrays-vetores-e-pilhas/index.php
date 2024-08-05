<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrayA = [1, 2, 3];

var_dump($arrayA);

$arrayIndex = [
    "Brian",
    "Angus",
    "Malcolm"
];

$arrayIndex[] = "Cliff";
$arrayIndex[] = "Phill";

var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcolm",
    "bass_guitar" => "Cliff"
];

$arrayAssoc["drums"] = "Phill";

$arrayAssoc["rock_band"] = "AC/DC";

var_dump($arrayAssoc);

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ["Brian", "Mic"];
$angus = ["name" => "Angus", "instrument" => "Guitar"];
$instument = [
    $brian,
    $angus
];

var_dump($instument);

var_dump([
    "brian" => $brian,
    "angus" => $angus
]);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$acdc = [
    "band" => "AC/DC",
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcolm",
    "bass_guitar" => "Cliff",
    "drums" => "Phill"
];

echo "<p>O vocal da Banda AC/DC é {$acdc["vocal"]} e junto com {$acdc['solo_guitar']} fazem um som daora.</p>";

$pearl = [
    "band" => "Pear Jam",
    "vocal" => "Eddie",
    "solo_guitar" => "Mike",
    "base_guitar" => "Stone",
    "bass_guitar" => "Jeff",
    "drums" => "Jack"
];

$rockBand = [
  "acdc" => $acdc,
  "pear_jam" => $pearl
];

var_dump($rockBand);

echo "<p>{$rockBand['pear_jam']['vocal']}</p>";

foreach ($acdc as $participant) {
    echo "<p>{$participant}</p>";
}

foreach ($acdc as $instrument => $participant) {
    echo "<p>{$participant} is a {$instrument} of band</p>";
}

foreach ($rockBand as $band){
    $art = "<article><h1>%s</h1><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
    vprintf($art, $band);
}

