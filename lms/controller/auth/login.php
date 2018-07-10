<?php

/**
 * Formulaire de connexion
 */

// récupération des données
$email = array_key_exists('email', $_POST) ? $_POST['email'] : '';
$password = array_key_exists('password', $_POST) ? $_POST['password'] : '';

$error_message = '';

// vérification de la saisie
if (!empty($email) && !empty($password)) {
    $logger -> log('credentials were provided');
    // on recherche dans la DB
    $request = $DATABASE -> prepare('SELECT id FROM users WHERE email=:email AND password=:password');
    $request -> bindParam('email', $email);
    $request -> bindParam('password', $password);
    $request -> execute();

    // est ce qu'il y a un user qui correspond
    $count = $request -> rowCount();
    if ($count  === 1 ) {
        $logger -> log('found one user match');
        $id = $request -> fetchColumn();

        // enregistrer l'id du user dans la session
        $_SESSION['user_id'] = $id;

        // mettre à jour le last_login de cet utilisateur
        $request = $DATABASE -> prepare('UPDATE users SET last_login=NOW() WHERE id=:id');
        $request -> bindParam('id', $id);

        // si tout est bon, on redirige vers dashboard
        if ($request -> execute()) {
            $logger -> log('update of last_login was successfull');
            header('Location: /dashboard');
        }
    } else {
        // sinon y'a des erreurs
        $logger -> error('found non uniq user: ' . $count);
        $error_message = "Ce couple d'identifiant n'a pas été reconnu";
    }
} else {
    $logger -> log('no credentials provided');
}

?>

<div class="row align-items-center justify-content-center" id="login">
    <div class="col-sm-6 ">
        <form id="loginForm" method="post">
            <div id="icon" class="text-primary">
                <i class="fas fa-lock"></i>
            </div>

            <!-- debut affichage d'erreur -->
            <?php if( !empty($error_message)) { ?>
                <div class="alert alert-danger">
                    <?=$error_message?>
                </div>
            <?php } ?>
            <!-- fin affichage d'erreur -->

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email"
                       class="form-control"
                       name="email"
                       id="exampleInputEmail1"
                       placeholder="Email"
                       value="<?= $email ?>"
                       autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password"
                       class="form-control"
                       name="password"
                       id="exampleInputPassword1"
                       placeholder="Password"
                       value="<?= $password ?>"
                       autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary btn-block">LOG IN</button>
        </form>
    </div>
</div>