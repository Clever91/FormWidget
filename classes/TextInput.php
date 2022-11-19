<?php
class TextInput extends BaseInput
{
    public function renderInput(): string
    {
        return sprintf("<input type='text' name='%s' placeholder='%s'>", $this->name, $this->placeholder);
    }
}
