<div class="accountMessage">
    <?php $this->flash('signUpSuccess', 'alert alert-success');?>
    <?php $this->flash("emailError", "alert alert-danger");?>
    <?php $this->flash("passwordError", "alert alert-danger");?>
</div>

<div class="form-container">
    <div class="header-img">
        <img src="<?php echo Base_URL; ?>/assets/images/logoHD.png" alt="not found" class="logoHD">
    </div><!-- close header img -->
    <div class="heading">
        <h2>Connexion utilisateur</h2>
    </div><!-- close heading -->

    <?php echo form_open("AccountController/loginSubmit", "POST"); ?>

    <div class="group">
        <?php echo form_input(['type' => 'email', 'name' => 'email', 'class' => 'control', 'placeholder' => 'Entrez E-mail', 'value' => $this->set_value('email')]); ?>

        <div class="error">
        <?php if (!empty($this->errors['email'])): ?>
        <?php echo $this->errors['email']; ?>
        <?php endif;?>

        </div>
    </div><!-- close group -->
    <div class="group">
        <?php echo form_input(['type' => 'password', 'name' => 'password', 'class' => 'control', 'placeholder' => 'Entrez mot de passe', 'value' => $this->set_value('password')]); ?>

        <div class="error">
        <?php if (!empty($this->errors['password'])): ?>
        <?php echo $this->errors['password']; ?>
        <?php endif;?>

    </div><!-- close group -->
    <div class="group m-20">
        <?php echo form_submit(['class' => 'btn', 'value' => 'Se connecter &rarr;']); ?>
    </div><!-- close group -->
    <div class="group m-30">
    <h3 class="links">Vous ne possédez pas de compte ?</h3>

        <?php echo anchor("AccountController/index", "Créez votre compte", ['class' => 'linkAccount']); ?>

    </div><!-- close group -->
    <?php echo form_close(); ?><!-- close form -->
</div><!-- close container -->