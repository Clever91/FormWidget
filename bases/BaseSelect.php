<?php

abstract class BaseSelect implements HtmlElement
{
    public string $label;
    public string $name;
    public array $options;

    public function __construct($label, $name, $options = [])
    {
        $this->label = $label;
        $this->name = $name;
        $this->options = $options;
    }

    /**
     * @var \Option
    */
    public function addOption(Option $option):void
    {
        array_push($this->options, $option);
    }
}

?>