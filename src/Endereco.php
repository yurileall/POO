<?php 

class Endereco {
    private $numero;
    private $cep;
    private $logradouro;

    public function __construct( int $numero, string $cep, string $logradouro)
    {
        $cep = filter_var($cep, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{5}\-[0-9]{3}$/'
            ]
            ]);

            if ($cep === false) {
                echo "CEP inválido";
                exit();
            }

        $this->numero = $numero;
        $this->cep = $cep;
        $this->logradouro = $logradouro;
    }

    public function recuperarNumero() {
        return $this->numero;
    }

    public function recuperarCep() {
        return $this->cep;
    }

    public function recuperarLogradouro() {
        return $this->logradouro;
    }
}