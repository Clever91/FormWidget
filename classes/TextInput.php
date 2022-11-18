<?php

include_once __DIR__."/../bases/BaseInput.php";
require_once __DIR__."/../intercases/HtmlElement.php";

class TextInput extends BaseInput implements HtmlElement
{
    public function render(): string
    {
        return "<input type='text' name='{$this->name}' placeholder='{$this->placeholder}'>";
    }
}


?>