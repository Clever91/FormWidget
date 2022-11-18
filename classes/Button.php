<?php 

include_once __DIR__."/HtmlElement.php";

class Button extends HtmlElement
{
    public function __construct(string $type, string $value)
    {
        $this->type = $this->name = $type;
        $this->value = $value;
    }

    public function render(): string
    {
        return "<button type='{$this->type}' name='{$this->name}'>{$this->value}</button>";
    }
}

?>