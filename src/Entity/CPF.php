<?php

namespace Alura\Arquitetura\Entity;

class CPF
{
    public readonly string $numero;
    public function __construct(string $endereco)
    {
        $this->validaCPF($endereco);

        $this->numero = $endereco;
    }

    public function validaCPF($endereco)
    {
        if (filter_var($endereco, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException(
                'Endereço de e-mail inválido'
            );
        }
    }

    public function __toString()
    {
        return $this->numero;
    }
}