<?php

include_once __DIR__."/HtmlElement.php";

class PasswordInput extends HtmlElement
{
    public function render(): string
    {
        return "<input type='password' name='{$this->name}' placeholder='{$this->placeholder}'>";
    }
}


?>