<?php 

include_once __DIR__."/../bases/BaseButton.php";
require_once __DIR__."/../intercases/HtmlElement.php";

class Button extends BaseButton implements HtmlElement
{
    public function render(): string
    {
        return "<button type='{$this->type}' name='{$this->name}'>{$this->value}</button>";
    }
}

?>