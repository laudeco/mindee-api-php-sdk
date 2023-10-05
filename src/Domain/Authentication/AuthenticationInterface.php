<?php

namespace Laudeco\Mindee\Domain\Authentication;

interface AuthenticationInterface
{

    public function token():?string;
}