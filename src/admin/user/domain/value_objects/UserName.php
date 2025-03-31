<?php

namespace Src\admin\user\domain\value_objects;

class UserName
{
    private string $name;

    public function __construct(string $name)
    {
        if(strlen(string: $name < 3)) 
        {
            throw new \InvalidArgumentException(message:
             'Nombre de Usuario debe tener al menos 3 caracteres');
        }
    }
}