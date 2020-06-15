<?php

class Profile extends Cmshappyday{

    public function __construct(){
        parent::__construct();
        
        
    }

    public function index(){

        $data['layout'] = "parts/changeName";
        $data['title'] = "Changer Nom";
        $this->view("dashboard", $data);
    }

    public function changePictureView(){

        $data['layout'] = "parts/changePicture";
        $data['title'] = "Modifier photo profil";
        $this->view("dashboard", $data);
    }

    public function changePasswordView(){

        $data['layout'] = "parts/changePassword";
        $data['title'] = "Modifier password";
        $this->view("dashboard", $data);

    }
}

?>