<?php

$nome = "Fernando";

$nome_completo = function($sobrenome) use ($nome) {
    return $nome . " " . $sobrenome;
};

echo $nome_completo("Silva");

$up =  array_map(function($nome){
  return strtoupper($nome);
},['Fernando','João', 'Maria']);

foreach($up as $nome){
  echo $nome . "\n";
}