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

    public function render(): string
    {
        return sprintf("<div>
            <label>%s</label><br>
            %s
        </div>", $this->label, $this->renderInput());
    }

    abstract public function renderInput(): string;
}


?>