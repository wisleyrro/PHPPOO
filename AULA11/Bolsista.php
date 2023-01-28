<?php

require_once 'Aluno.php';
final class Bolsista extends Aluno {
    private $bolsa;

    public function renovarBolsa() {
        echo "<p>Bolsa renovada </p>";
    }
    //sobrepondo metodo da class aluno de pagarmensalidade criando varias pagarMensalidade!
    /*
        Se a função principal na classe Aluno tiver:
        com opção final desse jeito ele não permite fazer sobreposição de metodos de class
        public final function pagarMensalidade(){ }

        Toda class  que tenha:
        final Bolsista {
        }
        obs: não pode ter filhos ela e a ultima classe

        POLIMOFIRMOS DE SOBREPOSIÇÃO: ACONTECE QUANDO SUBSTITUIMOS UM METODO
        DE UMA SUPERCLASSE NA SUA SUBCLASSE, USANDO A MESMA ASSINATURA.

    */
    public function pagarMensalidade(){ 
        echo "<p> {$this->nome} é bolsista! então paga com desconto!";
    }

    //get e set
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }
}