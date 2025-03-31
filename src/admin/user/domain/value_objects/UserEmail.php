<?php

namespace Src\admin\user\domain\value_objects;

class UserEmail
{
    private string $email;

    public function __construct(string $email)
    {
        if (!filter_var(value: $email, filter: FILTER_VALIDATE_EMAIL))
        {
            throw new  \InvalidArgumentException(message: 'Formato Email Inválido');
            
        }
        $this->email = $email;
    }

    public function value(): string
    {
        return $this->email;
    }
}