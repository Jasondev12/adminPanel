<?php

function link_css( $css_path ){
    if(!empty($css_path)){
        return '<link rel="stylesheet" type="text/css" href="'. Base_URL .'/' . $css_path.'">';
    }
}

function link_js( $js_path){
    if(!empty($js_path)){
 
        return '<script src="'. Base_URL .'/' . $js_path .'"></script>';
    }
}

function hello(){
    return "<h1>Hello message</h1>";
}

?>