<?php

class AccountController extends Cmshappyday
{

    public $model;
    public function __construct()
    {

        parent::__construct();
        $this->model = $this->model("AccountModel");
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

    public function loginSubmit()
    {

        $this->validation('email', 'Email', "required");
        $this->validation('password', 'Password', "required");
        if ($this->run()) {

            $email = $this->post('email');
            $password = $this->post('password');
            $result = $this->model->login($email, $password);

            if ($result === "EmailNotFound") {
                $this->set_flash("emailError", "Email est incorrecte");
                $this->login();
            } else if ($result === "PasswordNotMatched") {
                $this->set_flash("passwordError", "Mot de passe est incorrecte");
                $this->login();
            } else if ($result['status'] === "success") {
              
                $sessionData = [

                    'userId' => $result['data']->id,
                    'loader' => true,
                    'name' => $result['data']->fullName,
                    'image' => $result['data']->image

                ];

                $this->set_session($sessionData);
                redirect("AjaxController/index");

            }

        } else {
            $this->login();
        }
    }

    public function logout(){

        $this->destroy_session();
        $this->login();
    }
}
