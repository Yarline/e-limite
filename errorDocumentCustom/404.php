<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include 'include/head.php'; ?>
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/reset.css">
        <title>Error 404</title>
    </head>
    <body>
        <section class="nav-error">
            <a href="#" onclick="history.go(-1); return false;">Page précédente</a>
            <a href="/">Acceuil</a>
        </section>
        <section class="body-error">
            <div class="img-text-error">
                <img src="public/img/404.png" alt="">
                <div>
                    <h1>Error 404</h1>
                    <h2>Cette page ne semble pas exister.</h2>
                </div>
            </div>
        </section>
    </body>
</html>
