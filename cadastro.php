<?php

$id = (int) 10;
$nome = (string)'Fernando';
$method = (string)'PUT';

if($method === 'PUT') {
    echo "Atualizando o usuário de ID {$id} com o nome {$nome}";
} else {
    echo "Método não suportado.";
}