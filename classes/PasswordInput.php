<?php
class PasswordInput extends BaseInput
{
    public function renderInput(): string
    {
        return sprintf("<input type='password' name='%s' placeholder='%s'>", $this->name, $this->placeholder);
    }
}


?>