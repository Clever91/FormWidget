<?php 

include_once __DIR__."/HtmlElement.php";

class Button extends HtmlElement
{
    public function __construct(string $type, string $value)
    {
        $this->type = $this->key = $type;
        $this->value = $value;
    }

    public function render()
    {
        return "<button type='{$this->type}' name='{$this->key}'>{$this->value}</button>";
    }
}

?>