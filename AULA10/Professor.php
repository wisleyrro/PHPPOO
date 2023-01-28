<?php

class Professor extends Pessoa {
    private $especialidade;
    private $salario;

    public function ReceberAumento($aum) {
        $this->salario += $aum;
    }

    //get e set
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

}