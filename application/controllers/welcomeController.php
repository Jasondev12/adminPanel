<?php

class WelcomeController extends Cmshappyday
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->get_session('userId')) {
            redirect("accountController/login");
        }
    }

    public function index()
    {

        $data['layout'] = "parts/welcomeView";
        $data['title'] = "Bienvenue";
        $this->view("welcome", $data);

    }

}
