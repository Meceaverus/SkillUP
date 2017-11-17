<?php
require_once "Form.php";

class SmartForm extends Form
{
    protected function attr2html(array $attr)
    {
        if ( isset($attr['name'])
            && !isset($attr['value'])
            && isset($_REQUEST[$attr['name']]))
        {
            $attr['value'] = $_REQUEST[$attr['name']];
        }

        return parent::attr2html($attr);
    }

}