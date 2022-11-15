<?php

include_once __DIR__."/HtmlElement.php";

class PasswordInput extends HtmlElement
{
    public function __construct($key, $placeholder = '')
    {
        $this->key = $key;
        $this->placeholder = $placeholder;
    }

    public function render() 
    {
        echo "<input type='password' name='{$this->key}' placeholder='{$this->placeholder}'>";
    }
}


?>