<h2 class="heading-title">Modifier mot de passe</h2>

    <?php echo form_open("", "POST", ['class' => 'm-20']); ?>

        <div class="group">

            <?php echo form_input(['type' => 'password', 'name' => 'currentPassword', 'class' => 'control', 'placeholder' => 'Mot de passe actuel']); ?>

        </div><!-- close group -->
        <div class="group">

            <?php echo form_input(['type' => 'password', 'name' => 'newPassword', 'class' => 'control', 'placeholder' => 'Nouveau mot de passe']); ?>

        </div><!-- close group -->
        <div class="group">

            <?php echo form_input(['type' => 'password', 'name' => 'confirmPassword', 'class' => 'control', 'placeholder' => 'Confirmer mot de passe']); ?>

        </div><!-- close group -->
        <div class="group m-20">

            <?php echo form_submit(['value' => 'Valider &rarr;', 'class' => 'btn-default']); ?>
            
                <span class="ml-20">
                    <input type="reset" value="Reset &larr;" class="btn-white">
                </span>
        </div><!-- close group -->
    </form><!-- close form -->