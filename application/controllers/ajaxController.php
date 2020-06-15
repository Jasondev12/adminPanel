<?php

class AjaxController extends Cmshappyday{

    public function index(){

        $data['layout'] = "parts/users";
        $data['title'] = "Ajouter utilisateur";
        $this->view("ajaxView", $data);
    }
}

?>