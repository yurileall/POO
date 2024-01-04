<?php 

class Adotante {

    private $nome;
    private $endereco;
    private $idade;
    private $pet;

    public function __construct(Endereco $endereco, Pet $pet, string  $nome, int $idade)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->validaIdade($idade);
        $this->idade = $idade;
        $this->pet = $pet;
    }

    public function recuperarNome() {
       return $this->nome;
    }

    public function recuperarIdade() {
        return $this->idade;
    }

    public function recuperarEnderecoNumero() {
        return $this->endereco->recuperarNumero();
    }

    public function recuperarEnderecoCep() {
        return $this->endereco->recuperarCep();
    }

    public function recuperarEnderecoLogradouro() {
        return $this->endereco->recuperarLogradouro();
    }

    public function recuperarPetSexo() {
        return $this->pet->recuperarSexo();
    }

    public function recuperarPetTipo() {
        return $this->pet->recuperarTipo();
    }

    public function recuperarPetQuantidade() {
        return $this->pet->recuperarQuantidade();
    }

    public function adotar($pet) {

        if ($this->pet->recuperarQuantidade() < 0) {
            echo "Não há mais pets para serem adotado";
        }
            $this->pet->diminuirQuantidade();
           
    }

    public function validaIdade($idade) {
        if ($idade < 18) {
            echo "Para adotar um pet precisar ser maior de idade";
            exit();
        }

        return $this->idade;
    }
}