<?php

class AccountController extends Cmshappyday
{

    public $model;
    public function __construct()
    {

        parent::__construct();
        $this->model = $this->model("accountModel");
    }

    public function index()
    {

        $data['layout'] = "parts/signup";
        $data['title'] = "Créer compte utilisateur";
        $this->view("index", $data);

    }

    public function signUpSubmit()
    {
        $this->validation("fullName", "Nom", "required|not_int");
        $this->validation("email", "E-Mail", "required|unique|users");
        $this->validation("password", "Mot de passe", "required|min_len|5");
        $this->validation("confirmPassword", "Confirmation Mdp", "required|confirm|password");
        if ($this->run()) {

            $fullName = $this->post('fullName');
            $email = $this->post('email');
            $password = $this->hash($this->post('password'));

            $data = [
                'fullName' => $fullName,
                'email' => $email,
                'password' => $password,
                'image' => 'profile.png',
            ];

            if ($this->model->signup($data)) {
                
                $this->set_flash("signUpSuccess", "Votre compte a été créé avec succès");
                $this->login();

            } else {
                echo 'sorry';
            }

        } else {
            $data['layout'] = "parts/signup";
            $data['title'] = "Créer compte utilisateur";
            $this->view("index", $data);
        }
    }

    public function login()
    {

        $data['layout'] = "parts/login";
        $data['title'] = "Connexion utilisateur";
        $this->view("index", $data);

    }
}
