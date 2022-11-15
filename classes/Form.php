<?php

include_once(__DIR__."/HtmlElement.php");

class Form 
{
    private $action;
    private $method;
    private $elements = [];

    public function __construct($act, $meth = "get")
    {
        $this->action = $act;
        $this->method = $meth;
    }

    public function addElement(HtmlElement $elem): void
    {
        array_push($this->elements, $elem);
    }

    public function render()
    {
        echo "<form action='{$this->action}' method='$this->method'>";
        foreach($this->elements as $elem) {
            $elem->render();
        }
        echo "</form>";
    }
}


?>