<?php
require_once "Form.php";

class SmartForm extends Form
{
    protected function prepareAttr(array $attr)
    {
        if ( isset($attr['name'])
            && !isset($attr['value'])
            && isset($_REQUEST[$attr['name']]))
        {
            $attr['value'] = $_REQUEST[$attr['name']];
        }

        return parent::prepareAttr($attr);
    }

}