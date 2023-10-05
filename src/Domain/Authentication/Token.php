<?php

namespace Laudeco\Mindee\Domain\Authentication;

final class Token implements AuthenticationInterface
{

    public function __construct(
        private string $token
    )
    {
    }

    public function token(): ?string
    {
        return $this->token;
    }


}