<?php

include_once __DIR__."/HtmlElement.php";

class TextInput extends HtmlElement
{
    public function render(): string
    {
        return "<input type='text' name='{$this->name}' placeholder='{$this->placeholder}'>";
    }
}


?>