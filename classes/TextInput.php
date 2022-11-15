<?php

include_once __DIR__."/HtmlElement.php";

class TextInput extends HtmlElement
{
    public function render() 
    {
        return "<input type='text' name='{$this->key}' placeholder='{$this->placeholder}'>";
    }
}


?>