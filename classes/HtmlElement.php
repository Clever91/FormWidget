<?php

abstract class HtmlElement
{
    public string $key;
    public string $value;
    public string $type;
    public string $placeholder;

    public function __construct($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    abstract protected function render();
}


?>