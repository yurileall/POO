<?php

require_once 'src/Adotante.php';
require_once 'src/Endereco.php';
require_once 'src/Pet.php';

$endereco = new Endereco(10, '40325-210', 'Travessa Campos França');
$Primeiroadotante = new Adotante( $endereco, 'Yuri', 21);
echo $Primeiroadotante->adotar($petArray[0]) . PHP_EOL;

// echo $Primeiroadotante->recuperarPetTipo() . PHP_EOL;
// echo $Primeiroadotante->recuperarNome() . PHP_EOL;
// echo $Primeiroadotante->recuperarIdade() . PHP_EOL;
// echo $Primeiroadotante->recuperarEnderecoNumero() . PHP_EOL;
// echo $Primeiroadotante->recuperarEnderecoLogradouro() . PHP_EOL;
// echo $Primeiroadotante->recuperarEnderecoCep() . PHP_EOL;

$endereco = new Endereco(10, '40325-210', 'Travessa Campos França');
$Segundoadotante = new Adotante( $endereco, 'Yuri', 21);
echo $Segundoadotante->adotar($petArray[1]) . PHP_EOL;

$endereco = new Endereco(10, '40325-210', 'Travessa Campos França');
$Terceiroadotante = new Adotante( $endereco, 'Yuri', 21);
echo $Terceiroadotante->adotar($petArray[2]) . PHP_EOL;

echo $petArray[0]->recuperarQuantidade() . PHP_EOL;

//var_dump($Primeiroadotante);exit;
