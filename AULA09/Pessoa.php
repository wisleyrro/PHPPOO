<?php

class Pessoa {
    //atributos
    private $nome;
    private $idade;
    private $sexo;
    //metodo construtor
    public function __construct($no, $id, $sx){
        $this->nome = $no;
        $this->idade = $id;
        $this->sexo = $sx;
    }
    //get e set
    public function getNome() {
        return $this->nome;
    }

    private function setNome($nome) {
        $this->nome = $nome;
    }
    public function getIdade() {
        return $this->idade;
    }

    private function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getSexo() {
        return $this->sexo;
    }

    private function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    //metodo aniversario
    public function fazerAniverario(){
        $this->setIdade($this->getIdade()+1);
    }
}