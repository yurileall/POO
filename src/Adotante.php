<?php 

class Adotante {

    private $nome;
    private $endereco;
    private $idade;
    private $pet;

    public function __construct(Endereco $endereco, string  $nome, int $idade)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->validaIdade($idade);
        $this->idade = $idade;
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

    public function adotar(Pet $petEscolhido) {

        if ($petEscolhido->recuperarQuantidade() < 0) {
            echo "Não há mais pets para serem adotado";
        }
            $petEscolhido->diminuirQuantidade();
            $this->pet = $petEscolhido;
            echo "Pet adotado com sucesso";
    }

    public function validaIdade($idade) {
        if ($idade < 18) {
            echo "Para adotar um pet precisar ser maior de idade";
            exit();
        }

        return $this->idade;
    }
}