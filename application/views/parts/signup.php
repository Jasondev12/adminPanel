        <div class="form-container">
            <div class="header-img">
                <img src="<?php echo Base_URL; ?>/assets/images/logoHD.png" alt="not found" class="logoHD">
            </div><!-- close header img -->
            <div class="heading">
                <h2>Créer un compte utilisateur</h2>
            </div><!-- close heading -->

            <?php echo form_open("accountController/signUpSubmit", "POST"); ?>

                <div class="group">
                    <?php echo form_input(['type' => 'text', 'name' => 'fullName', 'class' => 'control', 'placeholder' => 'Votre nom', 'value' => $this->set_value('fullName')]); ?>

                    <div class="error">
                    <?php if (!empty($this->errors['fullName'])): ?>
                    <?php echo $this->errors['fullName']; ?>
                    <?php endif;?>

                    </div>

                </div><!-- close group -->
                <div class="group">
                    <?php echo form_input(['type' => 'email', 'name' => 'email', 'class' => 'control', 'placeholder' => 'E-mail', 'value' => $this->set_value('email')]); ?>

                    <div class="error">
                    <?php if (!empty($this->errors['email'])): ?>
                    <?php echo $this->errors['email']; ?>
                    <?php endif;?>
                    </div>

                </div><!-- close group -->
                <div class="group">
                    <?php echo form_input(['type' => 'password', 'name' => 'password', 'class' => 'control', 'placeholder' => 'Créez mot de passe', 'value' => $this->set_value('password')]); ?>

                    <div class="error">
                    <?php if (!empty($this->errors['password'])): ?>
                    <?php echo $this->errors['password']; ?>
                    <?php endif;?>
                    </div>

                </div><!-- close group -->
                <div class="group">
                    <?php echo form_input(['type' => 'password', 'name' => 'confirmPassword', 'class' => 'control', 'placeholder' => 'Confirmation mot de passe', 'value' => $this->set_value('confirmPassword')]); ?>

                    <div class="error">
                    <?php if (!empty($this->errors['confirmPassword'])): ?>
                    <?php echo $this->errors['confirmPassword']; ?>
                    <?php endif;?>
                    </div>

                </div><!-- close group -->
                <div class="group m-20">
                    <?php echo form_submit(['class' => 'btn', 'value' => 'Créer compte &rarr;']); ?>
                </div><!-- close group -->
                <div class="group m-30">
                <h3 class="links">Vous possédez déjà un compte ?</h3>

                    <?php echo anchor("accountController/login", "Identifiez-vous", ['class' => 'linkAccount']); ?>

                </div><!-- close group -->
            <?php echo form_close(); ?><!-- close form -->
        </div><!-- close container -->