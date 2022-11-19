<?php

class Select extends BaseSelect
{
    public function render(): string
    {
        $content = implode(PHP_EOL, array_map(fn($el) => $el->render(), $this->options));
        return sprintf('<div>
            <label>%s</label><br>
            <select name="%s">
                %s
            </select>
            </div>
        ', $this->label, $this->name, $content);
    }
}
