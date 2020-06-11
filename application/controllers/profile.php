<?php

class Profile extends Cmshappyday{

    public function index(){

        $data['layout'] = "parts/changeName";
        $data['title'] = "Changer Nom";
        $this->view("dashboard", $data);
    }
}

?>