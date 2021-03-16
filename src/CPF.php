<?php
class CPF {
    private string $numeroCPF;

    public function __construct(string $cpf)
    {
        $this->numeroCPF = $cpf;
    }

    public function getNumeroCPF() : string
    {
        return $this->numeroCPF;
    }
}