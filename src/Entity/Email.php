<?php

namespace Alura\Arquitetura\Entity;

class Email
{
    public readonly string $endereco;
    public function __construct(string $endereco)
    {
        $this->validaEmail($endereco);

        $this->endereco = $endereco;
    }

    public function validaEmail($endereco)
    {
        if (filter_var($endereco, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException(
                'Endereço de e-mail inválido'
            );
        }
    }

    public function __toString()
    {
        return $this->endereco;
    }
}