<html lang="fr">

<head>
    <?php include 'include/head.php'; ?>
    <link rel="stylesheet" href="public/css/style.css">
    <title>Accueil</title>

</head>

<body>
    <header>
        <?php include 'include/header.php'; ?>
    </header>
    <main>
        <section class="banner">
            <video class="bannerVideo" autoplay loop>
                <source src=public/video/prod.mp4 type=video/mp4>
            </video>
            <div class="banner-content">
                <h1>Il suffit de se lancer</h1>
                <p>Si tu es en train de lire ceci, c’est que tu as sûrement envie de lancer ton projet entrepreneurial mais que tu n’oses pas. Tu ne te sens peut-être pas légitime ou tu n’as pas assez confiance en toi ?</p>
                <div class="btn-group">
                    <a href="#" class="btn empty-btn">J'ai peur</a>
                    <a href="#"  class="btn filled-btn">Je me lance</a>
                </div>
                <div class="social">
                    <span class="iconify" data-icon="akar-icons:instagram-fill" style="color: #ffc357; font-size: 30px; margin: 5px;"></span>
                    <span class="iconify" data-icon="bi:linkedin" style="color: #ffc357; font-size: 30px; margin: 5px;"></span>
                    <span class="iconify" data-icon="akar-icons:twitter-fill" style="color: #ffc357; font-size: 30px; margin: 5px;"></span>
                </div>
            </div>
        </section>

        <section class="advices">
            <h2>Nos conseils pour te lancer</h2>
            <p>Tu l’ignores peut-être mais tu es dans la meilleure période de ta vie pour entreprendre ! Il te suffit de beaucoup de passion, d’un peu d’organisation, d’une dose de discipline et d’une pincée de motivation avant de devenir ton propre patron ! </p>

            <div>
                <div class="time">
                    <span class="iconify" data-icon="ic:baseline-favorite-border" style="color: #5c7aea; font-size: 55px;"></span>
                    <p>Optimise ton temps</p>
                    <p>On sait très bien que tu passes beaucoup trop de temps sur Tiktok... Utilise le autrement !</p>
                </div>

                <div class="inform">
                    <span class="iconify" data-icon="ic:round-hourglass-bottom" style="color: #5c7aea; font-size: 55px;"></span>
                    <p>Renseignes toi !</p>
                    <p>Il y a beaucoup d’avantages à ta disposition, nous sommes là pour t’aider à les trouver !</p>
                </div>

                <div class="trust">
                    <span class="iconify" data-icon="ic:baseline-connected-tv" style="color: #5c7aea; font-size: 55px;"></span>
                    <p>Aie confiance en toi !</p>
                    <p>Malgré certaines contraintes et quelques freins, tu as tout pour te lancer !</p>
                </div>

            </div>
        </section>

    </main>
    <footer>
        <?php include 'include/footer.php'; ?>
    </footer>
</body>

</html>