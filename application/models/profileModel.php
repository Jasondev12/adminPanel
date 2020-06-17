<?php 

class profileModel extends Database{

    public function updateProfilePicture($pictureName){
        
        $id = $this->get_session('userId');
        if($this->Update("users", ['image' => $pictureName], ['id' => $id])){
            return true;
        } else {
            return false;
        }
    }
}
?>