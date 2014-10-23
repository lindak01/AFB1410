<?php

class view{
    
    public function __construct(){
        
    }
    
    public function show($template, $data = array()) {
        $templatePath = "php/${template}.inc";
        if (file_exists($templatePath)) {
            include $templatePath;
        }
    }
}
?>