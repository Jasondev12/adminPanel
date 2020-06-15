<h2 class="heading-title">Modifier nom</h2>

    <?php echo form_open("", "post", ['class' => 'm-20']); ?>

        <div class="group">

            <?php echo form_input(['type' => 'text', 'name' => 'name', 'class' => 'control', 'placeholder' => 'Entrez nom']); ?>

        </div><!-- close group -->
                  
        <div class="group m-20">

            <?php echo form_submit(['class' => 'btn-default', 'value' => 'Valider &rarr;']); ?>

                <span class="ml-20">

                    <input type="reset" value="Reset &larr;" class="btn-white">

                </span>
        </div><!-- close group -->
<?php echo form_close(); ?><!-- close form -->