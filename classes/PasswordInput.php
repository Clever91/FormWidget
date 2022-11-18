<?php
class PasswordInput extends BaseInput
{
    public function render(): string
    {
        return sprintf("<div>
            <label>%s</label><br>
            <input type='password' name='%s' placeholder='%s'>
        </div>", $this->label, $this->name, $this->placeholder);
    }
}


?>