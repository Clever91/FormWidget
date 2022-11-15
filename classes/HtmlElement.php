<?php

abstract class HtmlElement
{
    public string $key;
    public string $value;
    public string $type;
    public string $placeholder;

    public function __construct(string $key, string $placeholder)
    {
        $this->key = $key;
        $this->placeholder = $placeholder;
    }

    abstract protected function render();
}


?>