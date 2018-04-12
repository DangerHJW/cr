<?php

namespace App\Admin\Extensions;

use Encore\Admin\Form\Field;

class UmEditor extends Field
{
    protected $view = 'admin.um-editor';

    protected static $css = [
        '/vendor/umeditor1.2.3-utf8-php/themes/default/css/umeditor.css',
    ]; 
    
    protected static $js = [
        //'/vendor/umeditor1.2.3-utf8-php/third-party/jquery.min.js',
        '/vendor/umeditor1.2.3-utf8-php/third-party/template.min.js',
        '/vendor/umeditor1.2.3-utf8-php/umeditor.config.js',
        '/vendor/umeditor1.2.3-utf8-php/umeditor.js',
        '/vendor/umeditor1.2.3-utf8-php/lang/zh-cn/zh-cn.js',
    ];

    public function render()
    {
        $name = $this->formatName($this->column);

        $this->script = <<<EOT

 $(function(){
        window.um = UM.getEditor('container');
        
        
    });

EOT;
        return parent::render();
    }
}