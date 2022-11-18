<?php

class BaseInput
{
    public string $name;
    public string $value;
    public string $placeholder;

    public function __construct(string $name, string $value = "", string $placeholder = "")
    {
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
    }
}


?>