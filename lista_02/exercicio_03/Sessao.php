<?php

class Sessao {

    private $hora;
    private $min;

    public function __construct($hora, $min) {
        $this->hora = $hora;
        $this->min = $min;
    }

    function getHora() {
        return $this->hora;
    }

    function getMin() {
        return $this->min;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setMin($min) {
        $this->min = $min;
    }

}
