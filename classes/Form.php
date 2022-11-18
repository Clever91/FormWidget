<?php

include_once(__DIR__."/HtmlElement.php");

class Form 
{
    private string $action;
    private string $method;
    /**
     * @var \HtmlElement[]
    */
    private array $elements = [];

    public function __construct(string $action, string $method = "get")
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function addElement(HtmlElement $elem): void
    {
        array_push($this->elements, $elem);
    }

    public function render()
    {
        $content = implode(PHP_EOL, array_map(fn($el) => $el->render(), $this->elements));
        return sprintf("<form action='%s' method='%s'>%s</form>", $this->action, $this->method, $content);
    }
}


?>