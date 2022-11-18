<?php
abstract class BaseInput implements HtmlElement
{
    public string $label;
    public string $name;
    public string $placeholder;

    public function __construct(string $label, string $name, string $placeholder = "")
    {
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
    }
}


?>