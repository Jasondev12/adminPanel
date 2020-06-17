<?php

class WelcomeController extends Cmshappyday
{

    public function index()
    {

        $data['layout'] = "parts/welcomeView";
        $data['title'] = "Bienvenue";
        $this->view("welcome", $data);

    }

}
