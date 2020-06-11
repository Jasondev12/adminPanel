<?php

class AccountController extends Cmshappyday{

    public function index(){

        $data['layout'] = "parts/signup";
        $data['title'] = "Créer compte utilisateur";
        $this->view("index", $data);

    }

    public function login(){

        $data['layout'] = "parts/login";
        $data['title'] = "Connexion utilisateur";
        $this->view("index", $data);

    }
}

?>