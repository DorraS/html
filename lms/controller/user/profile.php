<?php
/**
 * Created by PhpStorm.
 * User: ydomenjoud
 * Date: 25/04/18
 * Time: 16:01
 */

# PROFIL DE L'UTILISATEUR

// traiter les informations du formulaire

?>
<div class="container">
    <div class="card">
        <h1>Editer votre profil</h1>
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                </small>
            </div>
            <div class="form-group">
                <label for="exampleInputFirstname">Prénom</label>
                <input type="text" class="form-control" id="exampleInputFirstname" placeholder="Prénom">
            </div>
            <div class="form-group">
                <label for="exampleInputLastname">Nom</label>
                <input type="text" class="form-control" id="exampleInputLastname" placeholder="Nom">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>
