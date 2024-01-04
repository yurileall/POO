<?php 

class Pet {
    private $sexo;
    private $tipo;
    private static $quantidadePet = 0;

    public function __construct(string $sexo, string $tipo)
    {
        $this->sexo = $sexo;
        $this->tipo = $tipo;
        Pet::$quantidadePet++;
    }
       
    public function recuperarSexo() {
        return $this->sexo;
    }

    public function recuperarTipo() {
        return $this->tipo;
    }

    public static function recuperarQuantidade() {
        return Self::$quantidadePet;
    }

    public function diminuirQuantidade() {
        return Self::$quantidadePet--;
    }
}