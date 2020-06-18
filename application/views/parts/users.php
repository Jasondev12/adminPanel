<h3 class="heading-title">Ajouter un utilisateur</h3>
<?php echo form_open(); ?>
<div class="group">
    <?php echo form_input(['type' => 'text', 'id' => 'userName', 'class' => 'control', 'placeholder' => 'Entrer un nom d\'utilisateur']); ?>
</div><!-- close group -->

<div class="group">
<label class="chooseRole" for="role-select">Choisir un rôle : </label>
<select name="role" id="role-select">
    <option value="">--Choisir le rôle de l'utilisateur--</option>
    <option value="admin">Administrateur</option>
    <option value="modo">Modérateur</option>
</select>
</div><!-- close group -->

<div class="group">
    <?php echo form_button(['class' => 'btn-default', 'id' => 'addUser', 'value' => 'Ajouter un utilisateur']); ?>
</div><!-- close group -->

<?php echo form_close(); ?>
<h2 class="heading-title">Liste des utilisateurs</h2>
    <table class="table m-20">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Rôle</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    <td data-label="ID :">1</td>
                    <td data-label="Nom :">Maes</td>
                    <td data-label="Email :">maesjasonpro@gmail.com</td>
                    <td data-label="Rôle :">Admin</td>
                    <td data-label="Supprimer :"><a href="#" class="delete">Supprimer &#10005</a></td>
                </tr>
                <tr>
                    <td scope="row" data-label="ID :">2</td>
                    <td data-label="Nom :">Lopez</td>
                    <td data-label="Email :">lopezA@gmail.com</td>
                    <td data-label="Rôle :">Modo</td>
                    <td data-label="Supprimer :"><a href="#" class="delete">Supprimer &#10005</a></td>
                </tr>
                <tr>
                    <td scope="row" data-label="ID :">3</td>
                    <td data-label="Nom :">Roczen</td>
                    <td data-label="Email :">Roczen@gmail.com</td>
                    <td data-label="Rôle :">Modo</td>
                    <td data-label="Supprimer :"><a href="#" class="delete">Supprimer &#10005</a></td>
                </tr>
                <tr>
                    <td scope="row" data-label="ID :">4</td>
                    <td data-label="Nom :">Webb</td>
                    <td data-label="Email :">Webb@gmail.com</td>
                    <td data-label="Rôle :">Modo</td>
                    <td data-label="Supprimer :"><a href="#" class="delete">Supprimer &#10005</a></td>
                </tr>
            </tbody>
    </table>
