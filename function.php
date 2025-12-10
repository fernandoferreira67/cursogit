<?php

$nome = "Fernando";

$nome_completo = function($sobrenome) use ($nome) {
    return $nome . " " . $sobrenome;
};

echo $nome_completo("Silva");