<?php

include('config/settings.php');

$post = $db->prepare('SELECT * FROM post');
$post->execute();

$tPost = $post->fetchAll(PDO::FETCH_ASSOC);

$testimony = $db->prepare('SELECT * FROM testimony');
$testimony->execute();

$tTestimony = $testimony->fetchAll(PDO::FETCH_ASSOC);

?><html lang="fr">

<head>
    <?php include 'include/head.php'; ?>
    <link rel="stylesheet" href="public/css/style.css">
    <title>Accueil</title>

</head>

<body>
    <header>
        <figure class="nav_logo">
            <img src="public/img/logo.png" alt="logo">
        </figure>
        <?php include 'include/header.php'; ?>
    </header>
    <main>
        <section class="header-banner">
            <video class="bannerVideo" autoplay loop muted>
                <source src=public/video/prod.webm type=video/webm>
                <source src=public/video/prod.mp4 type=video/mp4>
            </video>
            <div class="banner-content">
                <h1 id="typing" class="typing"></h1>
                <p>Si tu es en train de lire ceci, c’est que tu as sûrement envie de lancer ton projet entrepreneurial mais que tu n’oses pas. Tu ne te sens peut-être pas légitime ou tu n’as pas assez confiance en toi ?</p>
                <div class="btn-group">
                    <a href="#" class="btn empty-btn">J'ai peur</a>
                    <a href="#" class="btn filled-btn">Je me lance</a>
                </div>
                <div class="social">
                    <span class="iconify" data-icon="akar-icons:instagram-fill" style="color: #ffc357; font-size: 30px; margin: 5px;"></span>
                    <span class="iconify" data-icon="bi:linkedin" style="color: #ffc357; font-size: 30px; margin: 5px;"></span>
                    <span class="iconify" data-icon="akar-icons:twitter-fill" style="color: #ffc357; font-size: 30px; margin: 5px;"></span>
                </div>
            </div>
        </section>
        <div id="avdices-ancre"></div>
        <section class="advices">
            <h2>Nos conseils pour te lancer</h2>
            <p class="paragraph">Tu l’ignores peut-être mais tu es dans la meilleure période de ta vie pour entreprendre ! Il te suffit de beaucoup de passion, d’un peu d’organisation, d’une dose de discipline et d’une pincée de motivation avant de devenir ton propre patron ! </p>

            <div class="three">
                <div class="time">
                    <span class="iconify" data-icon="ic:round-hourglass-bottom" style="color: #5c7aea; font-size: 55px;"></span>
                    <p class="little_title">Optimise ton temps</p>
                    <p class="little_title-text">On sait très bien que tu passes beaucoup trop de temps sur Tiktok... Utilise le autrement !</p>
                </div>

                <div class="inform">

                    <span class="iconify" data-icon="ic:baseline-connected-tv" style="color: #5c7aea; font-size: 55px;"></span>
                    <p class="little_title">Renseignes toi !</p>
                    <p class="little_title-text">Il y a beaucoup d’avantages à ta disposition, nous sommes là pour t’aider à les trouver !</p>
                </div>

                <div class="trust">
                    <span class="iconify" data-icon="ic:baseline-favorite-border" style="color: #5c7aea; font-size: 55px;"></span>

                    <p class="little_title">Aie confiance en toi !</p>
                    <p class="little_title-text">Malgré certaines contraintes et quelques freins, tu as tout pour te lancer !</p>
                </div>
            </div>
        </section>

        <section class="part_two">
            <div class="left_side">
                <h2>Les clés de la<br>confiance en soi</h2>
                <p>Tout est dans la tête, une simple idée peut devenir une idée de génie. Alors qu’est-ce que tu attends ?</p>
                <a class="btn filled-btn" href="">Découvrir l'article</a>
            </div>

            <div class="right_side">
                <img src="public/img/undraw_meditation.svg">
            </div>
        </section>

        <section class="etape-entreprise">
            <img src="public/img/etape_picto.png" alt="">
            <div class="etape-entreprise-bloc">
                <h2>10 étapes pour créer<br>son entrprise</h2>
                <p>Tu ne sais pas par où commencer, ni comment t’y prendre ? Nous avons la solution ! Installe-toi et prends-en de la graine.</p>
                <a href="#">Découvrir l'article</a>
            </div>
        </section>

        <section id="sucessStory-ancre" class="slider">
            <h2>Ils se sont lancés</h2>
            <div class="autoplay">
                <?php foreach ($tTestimony as $value2) { ?>
                <div class="testimonyCard">
                    <figure>
                        <img src="back/data/<?= $value2['file']?>" alt="photo temoignage de l'autre">
                    </figure>
                    <blockquote>
                        <?= $value2['body']?>
                    </blockquote>
                    <p class="nom"><?= $value2['name']?></p>
                    <small class="entreprise"><?= $value2['entreprise']?></small>
                </div>
                <?php } ?>
            </div>
        </section>
        <section id="actus-ancre" class="entrepreneur_month desktop">
            <?php foreach ($tPost as $value) { ?>
                <figure>
                    <img src="back/data/<?= $value['file'] ?>" alt="photo Justine Hutteau">
                </figure>
                <div>
                    <h2>L'entrepreneur du mois</h2>
                    <p><?= $value['body'] ?></p>
                </div>
        </section>

        <section class="entrepreneur_month mobile">
            <div>
                <h2>L'entrepreneur du mois</h2>
            </div>
            <figure>
                <img src="back/data/<?= $value['file'] ?>" alt="photo Justine Hutteau">
            </figure>
            <div>
                <p><?= $value['body'] ?></p>
            </div>
        <?php } ?>
        </section>

        <section class="reasonWhy">
            <h2>Pourquoi se lancer ?</h2>
            <p>Tu es encore là ? Tu hésites encore ? Lance toi !</p>
            <video width="450" autoplay loop muted>
                <source src=public/video/prod.webm type=video/webm>
                <source src=public/video/prod.mp4 type=video/mp4>
            </video>
        </section>

        <section class="flex contactSection">
            <div class="mentoring">
                <h2 class="desktop">Trouves ton <br>mentor.</h2>
                <h2 class="mobile">Trouves ton mentor.</h2>
                <p>Tu seras mis en relation avec entrepreneur qui te guidera vers la voie du succès. Saisis ta chance ! Toi aussi tu auras ta success story !</p>
            </div>
            <form action="post" class="contact">
                <h2>La parole est à toi !</h2>
                <div class="flex">
                    <div class="form-items-group mid-form-items-size">
                        <label for="">Nom</label>
                        <input type="text" name="lastname" placeholder=" Nom">
                    </div>
                    <div class="form-items-group mid-form-items-size">
                        <label for="">Prénom</label>
                        <input type="text" name="firstname" placeholder=" Prénom">
                    </div>
                </div>
                <div class="form-items-group">
                    <label for="">Adresse mail</label>
                    <input type="email" name="email" placeholder=" exemple@exemple.fr">
                </div>
                <div>
                    <p>Qu’est-ce qui t’empêche de te lancer ?</p>
                    <div class="flex box">
                        <div>
                            <label for="">Financement</label>
                            <input type="checkbox" name="problem">
                        </div>
                        <div>
                            <label for="">Manque de confiance</label>
                            <input type="checkbox" name="problem">
                        </div>
                    </div>
                    <div class="flex box">
                        <div>
                            <label for="">Les démarches</label>
                            <input type="checkbox" name="problem">
                        </div>
                        <div>
                            <label for="">Autres</label>
                            <input type="checkbox" name="problem">
                        </div>
                    </div>
                </div>
                <div class="form-items-group">
                    <label for="">Statut</label>
                    <select name="status" id="">
                        <option value="">Etudiant</option>
                        <option value="">Employé</option>
                        <option value="">En reconversion</option>
                        <option value="">Sans emploi</option>
                    </select>
                </div>
                <div class="form-items-group">
                    <label for="">Mon projet</label>
                    <textarea name="project" id="" cols="30" rows="5"></textarea>
                </div>
                <button type="submit" class="btn filled-btn btn-form">Je trouve mon mentor</button>
            </form>
        </section>


    </main>
    <footer>
        <?php include 'include/footer.php'; ?>
    </footer>
</body>

</html>