<?php

require_once 'src/Adotante.php';
require_once 'src/Endereco.php';
require_once 'src/Pet.php';

$pet = new Pet('macho', 'cachorro');
$pet = new Pet('macho', 'cachorro');
$pet = new Pet('macho', 'cachorro');
$pet = new Pet('macho', 'cachorro');
$pet = new Pet('macho', 'cachorro');
$pet = new Pet('macho', 'cachorro');

$endereco = new Endereco(10, '40325-210', 'Travessa Campos França');
$Primeiroadotante = new Adotante( $endereco, $pet, 'Yuri', 21);
echo $Primeiroadotante->adotar($pet) . PHP_EOL;

// echo $Primeiroadotante->recuperarPetTipo() . PHP_EOL;
// echo $Primeiroadotante->recuperarNome() . PHP_EOL;
// echo $Primeiroadotante->recuperarIdade() . PHP_EOL;
// echo $Primeiroadotante->recuperarEnderecoNumero() . PHP_EOL;
// echo $Primeiroadotante->recuperarEnderecoLogradouro() . PHP_EOL;
// echo $Primeiroadotante->recuperarEnderecoCep() . PHP_EOL;

$endereco = new Endereco(10, '40325-210', 'Travessa Campos França');
$Segundoadotante = new Adotante( $endereco, $pet, 'Yuri', 21);
echo $Segundoadotante->adotar($pet) . PHP_EOL;

$endereco = new Endereco(10, '40325-210', 'Travessa Campos França');
$Terceiroadotante = new Adotante( $endereco, $pet, 'Yuri', 21);
echo $Terceiroadotante->adotar($pet) . PHP_EOL;

echo $pet->recuperarQuantidade() . PHP_EOL;

//var_dump($Primeiroadotante);exit;
