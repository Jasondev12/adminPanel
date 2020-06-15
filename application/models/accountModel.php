<?php

class accountModel extends Database
{

    public function signup($data)
    {

        if ($this->Insert("users", $data)) {
            return true;
        } else {
            return false;
        }
    }

}
