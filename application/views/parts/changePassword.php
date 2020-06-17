<?php $this->flash("currentPasswordWrong", "alert alert-danger");?>

<h2 class="heading-title">Modifier mot de passe</h2>

    <?php echo form_open("profile/changePassword", "POST", ['class' => 'm-20']); ?>

        <div class="group">

            <?php echo form_input(['type' => 'password', 'name' => 'password', 'class' => 'control', 'placeholder' => 'Mot de passe actuel', 'value' => $this->set_value('password')]); ?>

            <div class="error">
                <?php if (!empty($this->errors['password'])): ?>
                <?php echo $this->errors['password']; ?>
                <?php endif?>
            </div>

        </div><!-- close group -->
        <div class="group">

            <?php echo form_input(['type' => 'password', 'name' => 'newPassword', 'class' => 'control', 'placeholder' => 'Nouveau mot de passe', 'value' => $this->set_value('newPassword')]); ?>

            <div class="error">
                <?php if (!empty($this->errors['newPassword'])): ?>
                <?php echo $this->errors['newPassword']; ?>
                <?php endif?>
            </div>

        </div><!-- close group -->
        <div class="group">

            <?php echo form_input(['type' => 'password', 'name' => 'confirmPassword', 'class' => 'control', 'placeholder' => 'Confirmer mot de passe', 'value' => $this->set_value('confirmPassword')]); ?>

            <div class="error">
                <?php if (!empty($this->errors['confirmPassword'])): ?>
                <?php echo $this->errors['confirmPassword']; ?>
                <?php endif?>
            </div>

        </div><!-- close group -->
        <div class="group m-20">

            <?php echo form_submit(['value' => 'Valider &rarr;', 'class' => 'btn-default']); ?>

                <span class="ml-20">
                    <input type="reset" value="Reset &larr;" class="btn-white">
                </span>
        </div><!-- close group -->
    </form><!-- close form -->