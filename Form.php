<?php
/**
 * Created by PhpStorm.
 * User: SkillUP student
 * Date: 17.11.2017
 * Time: 19:15
 */

class Form
{

    public function input(array $attr)
    {
        return '<input ' .$this->attr2html($attr) . '>';
    }
    public function submit(array $attr)
    {
        $attr ['type'] = 'submit';
        return $this->input($attr);
    }
    public function password(array $attr)
    {
        $attr ['type'] = 'password';
        return $this->input($attr);
    }
    public function textarea(array $attr)
    {
        $value = $attr['value'];
        unset($attr['value']);

        return '<textarea' . $this->attr2html($attr) . '>' . $value . '</textarea>';
    }
    public function open (array $attr)
    {
        return '<form' .$this->attr2html($attr) . '>';
    }
    public function close()
    {
        return "</form";
    }

    /**
     * Преобразует ['type'=>'text', 'value'=>'!!!']
     * в type="text" value="!!!"
     *
     * @param array $attr
     */
    protected function attr2html(array $attr)
    {
    $ret = '';

    foreach ($attr as $name => $value){
    $ret .= $name . '="' .htmlspecialchars($value) . '""';
    }
    return trim($ret);
    }
}
?>