<?php

class AjaxController extends Cmshappyday
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

        $data['layout'] = "parts/users";
        $data['title'] = "Ajouter utilisateur";
        $this->view("ajaxView", $data);
    }
}
