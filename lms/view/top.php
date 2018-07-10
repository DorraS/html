<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LMS by Grand EST</title>
    <link rel="stylesheet" href="/view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/view/assets/css/styles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"
            integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
            crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top  navbar-dark bg-dark">
    <a href="/" class="navbar-brand" href="#">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mt-2 mt-lg-0">
            <?php if (!empty($USER)) { ?>
                <li class="nav-item navbar-text mr-2">
                    <a href="/user/profile"><?= $USER->getPresentation() ?></a>
                </li>
                <li class="nav-item">
                    <a href="/auth/logout" class="btn btn-primary">Logout</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a href="/auth/login" class="btn btn-primary">Login</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>