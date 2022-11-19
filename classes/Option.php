<?php

class Option implements HtmlElement
{
    public string $name;
    public string $value;

    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function render(): string
    {
        return sprintf('<option name="%s">%s</option>', $this->name, $this->value);
    }
}
