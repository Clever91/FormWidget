<?php

abstract class HtmlElement
{
    public $key;
    public $value;
    public $type;
    public $placeholder;

    public function __construct($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    abstract protected function render();
}


?>