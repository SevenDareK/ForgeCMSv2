<?php
namespace App;

class Form {

    private $datas = [];

    public function __construct($datas = []){
        $this->datas = $datas;
    }

    private function getValue($name){
        if(isset($this->datas[$name])) {
            return $this->datas[$name];
        }else{
            return '';
        }
    }

    private function input($type, $name, $label, $error=false, $value=false){
        if($type == 'textarea'){
            $input = "<textarea name=\"$name\" class=\"form-control\" id=\"input".ucfirst($name)."\">$value</textarea>";
        }else{
            $input = "<input type=\"$type\" name=\"$name\" class=\"form-control\" id=\"input".ucfirst($name)."\" value=\"$value\">";
        } 
        if ($error=='true') {
            return "<div class=\"form-group has-error\">
                <label for=\"input".ucfirst($name)."\">$label</label>
                $input
            </div>";
        }elseif($error=='success'){
            return "<div class=\"form-group has-success\">
                <label for=\"input".ucfirst($name)."\">$label</label>
                $input
            </div>";
        }else {
            return "<div class=\"form-group\">
                <label for=\"input".ucfirst($name)."\">$label</label>
                $input
            </div>";
        }
    }

    public function text($name, $label, $error=false, $value=false){
        return $this->input('text', $name, $label, $error, $value);
    }

    public function password($name, $label, $error=false, $value=false){
        return $this->input('password', $name, $label, $error, $value);
    }

    public function email($name, $label, $error=false, $value=false){
        return $this->input('email', $name, $label, $error, $value);
    }

    public function select($name, $label, $options){
        $options_html = "";
        $value = $this->getValue($name);
        foreach($options as $k => $v){
            $selected = '';
            if($value == $k){
                $selected = ' selected';
            }
            $options_html .= "<option value=\"$k\"$selected>$v</option>";
        }
        return "<div class=\"form-group\">
            <label for=\"input$name\">$label</label>
            <select name=\"$name\" class=\"form-control\" id=\"input$name\">$options_html</select>
        </div>";
    }

    public function textarea($name, $label, $error=false, $value=false){
        return $this->input('textarea', $name, $label, $error, $value);
    }

    public function submit($label){
        return '<button type="submit" class="btn btn-primary">' . $label . '</button>';
    }

    public function Form($option)
    {
        echo '<form '.$option.'>';
    }

    public function endForm()
    {
        echo '</form>';
    }
} 