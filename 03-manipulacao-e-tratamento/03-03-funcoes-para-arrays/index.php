<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
    "Iron Man",
    "Capitão America",
    "Batman"
];

$array_assoc = [
    "HQ_01" => "Iron Man",
    "HQ_02" => "Capitão America",
    "HQ_03" => "Batman"
];

array_unshift($index, "novo");
$array_assoc = ["HQ_04" => "Lanterna Verde"] + $array_assoc;
array_push($index, "Fim");
$array_assoc = $array_assoc + ["HQ_05" => "X-men"];

array_shift($index);
array_shift($array_assoc);

array_pop($index);
array_pop($array_assoc);

array_unshift($index, "");
$array_assoc = ["HQ_04" => ""] + $array_assoc;

$index = array_filter($index);
$array_assoc = array_filter($array_assoc);

var_dump($index, $array_assoc);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

$index = array_reverse($index);
$array_assoc = array_reverse($array_assoc);

asort($index);
asort($array_assoc);

ksort($index);
krsort($index);

sort($index);

var_dump($index, $array_assoc);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump(
    array_keys($array_assoc),
    array_values($array_assoc)
);

if(in_array("Batman", $array_assoc)){
    echo "<p>I am Batman</p>";
}

$arrToString = implode(", ", $array_assoc);
echo "<p> Eu gosto de ler {$arrToString} e muitos outros!";


var_dump(explode(", ", $arrToString));
/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
    "name" => "Henrique",
    "company" => "Wells",
    "mail" => "henrique@mail.com"
];

$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>{{company}}</p>
        <a href="mailto:{{mail}}" title="Enviar e-mail para {{name}}">Enviar e-mail</a>
    </article>
TPL;

echo $template;

echo str_replace(
    array_keys($profile), array_values($profile), $template
);

$replaces = "{{" . implode("}}&{{", array_keys($profile)) . "}}";

echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
);

// var_dump(explode("&", $replaces));