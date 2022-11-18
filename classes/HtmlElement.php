<?php

abstract class HtmlElement
{
    public string $name;
    public string $value;
    public string $type;
    public string $placeholder;

    public function __construct(string $name, string $placeholder)
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
    }

    abstract protected function render(): string;
}


?>