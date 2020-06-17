<div class="sidebar">
    <ul>
        
        <li><?php echo anchor_void("javascript:void(0)", "<span class='profile'><img src='" . Base_URL . "/assets/images/" . $this->get_session('image') . "' class='profile-img'></span>"); ?></li>

        <li><?php echo anchor_void("javascript:void(0)", '<span class="icon">&#10162;</span>' . ucwords($this->get_session('name'))); ?></li>

        <li><?php echo anchor("profile/changePictureView", '<span class="icon">&#9851;</span>Changer photo de profil'); ?></li>

        <li><?php echo anchor("profile/changePasswordView", '<span class="icon">&#9852;</span>Changer mot de passe'); ?></li>

        <li><?php echo anchor("profile/index", '<span class="icon">&#9728;</span>Changer nom'); ?></li>

        <li><?php echo anchor("ajaxController/index", '<span class="icon">&#8284;</span>Ajouter utilisateur'); ?></li>
        
    </ul>
</div><!-- close sidebar -->