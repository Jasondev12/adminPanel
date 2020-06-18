<?php

class Profile extends Cmshappyday
{
    public $model;
    public function __construct()
    {
        parent::__construct();
        if (!$this->get_session('userId')) {
            redirect("AccountController/login");
        }

        $this->model = $this->model("ProfileModel");
    }

    public function index()
    {

        $data['layout'] = "parts/changeName";
        $data['title'] = "Changer Nom";
        $this->view("dashboard", $data);
    }

    public function updateName(){

        $this->validation("fullName", "Nom complet", "required|not_int");
        if($this->run()){
            $fullName = $this->post('fullName');
            if($this->model->changeName($fullName)){
                $this->set_flash("nameChanged", "Votre nom de profil est mise à jour avec succès");
                $this->set_session('name', $fullName);
                redirect("WelcomeController/index");
            }
        } else {
            $this->index();
        }
    }

    public function changePictureView()
    {
        $data['layout'] = "parts/changePicture";
        $data['title'] = "Modifier photo profil";
        $this->view("dashboard", $data);
    }

    public function updatePicture()
    {

        $data = [

            'file_name' => 'changePicture',
            'allowed_extensions' => 'jpg|png',
            'upload_path' => 'assets/images/',
            'label' => 'Une image',

        ];

        $this->file($data);
        if ($this->file_run()) {
            $pictureName = $this->file_data['file_name'];
            if ($this->model->updateProfilePicture($pictureName)) {

                $this->set_session("image", $pictureName);
                $this->set_flash("profilePicture", "Votre image de profil est mise à jour avec succès");
                redirect("WelcomeController/index");

            } else {
                echo 'sorry';
            }
        } else {
            $this->changePictureView();
        }
    }

    public function changePasswordView()
    {

        $data['layout'] = "parts/changePassword";
        $data['title'] = "Modifier password";
        $this->view("dashboard", $data);

    }

    public function changePassword()
    {

        $this->validation("password", "Mot de passe", "required");
        $this->validation("newPassword", "Nouveau mot de passe", "required|min_len|5");
        $this->validation("confirmPassword", "Confirmation du mot de passe", "required|confirm|newPassword");

        if ($this->run()) {

            $currentPassword = $this->post('password');
            $newPassword = $this->hash($this->post('newPassword'));
            $result = $this->model->updatePassword($currentPassword, $newPassword);

            if ($result === "currentPasswordWrong") {
                $this->set_flash("currentPasswordWrong", "Le mot de passe actuel est incorrect");
                $this->changePasswordView();
            } else if ($result === "success") {
                $this->set_flash("passwordChanged", "Votre mot de passe a été modifié");
                redirect("WelcomeController/index");
            }

        } else {
            $this->changePasswordView();
        }
    }
}
