<?php

include_once __DIR__."/../bases/BaseInput.php";
require_once __DIR__."/../intercases/HtmlElement.php";

class PasswordInput extends BaseInput implements HtmlElement
{
    public function render(): string
    {
        return "<input type='password' name='{$this->name}' placeholder='{$this->placeholder}'>";
    }
}


?>