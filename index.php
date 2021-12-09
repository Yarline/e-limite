<?php

include('config/settings.php');

$post = $db->prepare('SELECT * FROM post');
$post->execute();

$tPost = $post->fetchAll(PDO::FETCH_ASSOC);

$testimony = $db->prepare('SELECT * FROM testimony');
$testimony->execute();

$tTestimony = $testimony->fetchAll(PDO::FETCH_ASSOC);

?>
<html xmlns:og=”http://ogp.me/ns#” lang="fr">

<head>
    <!-- open graph | partage du site visuel -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="T'as tout pour toi – Il suffit de te lancer" />
    <meta property="og:url" content="https://www.tastoutpourtoi.fr/" />
    <meta property="og:image" content="public/img/logo.png" />
    <meta property="og:description" content="Tu as entre 20 et 35 ans et tu souhaites devenir entrepreneur ? Rendez-vous sur notre site tastoutpourtoi.fr et retrouve tout ce dont tu as besoin pour lancer ton projet. Alors qu'attends tu pour te lancer." />
    <?php include 'include/head.php'; ?>
    <title>Accueil</title>

</head>

<body>
    <header>
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
                <p>Si tu es en train de lire ceci, c’est que tu as envie de lancer ton projet entrepreneurial mais que tu n’oses pas. Tu doutes de toi ? Tu n’oses pas de te lancer ? </p>
                <div class="btn-group">
                    <a href="#" class="btn filled-btn">Je me lance</a>
                </div>
            </div>
        </section>
        <article class="adventure">
            <h2>L’entrepreneuriat : la grande aventure !</h2>
            <figure>
            <iframe src="https://www.youtube.com/embed/8VSGUUu_pVs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </figure>
        </article>
       
        <section id="advices-ancre" class="advices">
            <h2>T’es jeune et tu veux te lancer ?</h2>
            <p class="paragraph">Tu l’ignores peut-être mais tu es dans la meilleure période de ta vie pour entreprendre ! Il te suffit de beaucoup de passion, d’un peu d’organisation, d’une dose de discipline et d’une pincée de motivation avant de devenir ton propre patron !</p>

            <div class="three">
                <div class="time">
                    <span class="iconify" data-icon="ic:round-hourglass-bottom" style="color: #e23000; font-size: 55px;"></span>
                    <p class="little_title">Tu penses qu’il n’y a que des contraintes ?</p>
                    <p class="little_title-text">Eh bien détrompes toi ! Tu es jeune et tu peux exploiter de nombreux avantages spécifiques à ta tranche d’âge.</p>
                </div>

                <div class="inform">

                    <span class="iconify" data-icon="ic:baseline-connected-tv" style="color: #e23000; font-size: 55px;"></span>
                    <p class="little_title">La liberté à portée de main !</p>
                    <p class="little_title-text">Avec une bonne méthode de travail et une gestion efficace de ton planning, tu pourras travailler où et quand tu veux ! </p>
                </div>

                <div class="trust">
                    <span class="iconify" data-icon="ic:baseline-favorite-border" style="color: #e23000; font-size: 55px;"></span>

                    <p class="little_title">Aie confiance en toi !</p>
                    <p class="little_title-text"> “Les éléments clés d'un bon entrepreneur sont la motivation, la détermination et la rigueur.” Florian, 20 ans </p>
                </div>
            </div>
        </section>

        <section class="part_two mobile-up">
            <div class="img_confidence">
                <img src="public/img/avantages.png">
            </div>
            <div id="avantages_ancre" class="right_side text_confidence">
                <h2>Découvre tes avantages !</h2>
                <p>Créer sa boîte n’a jamais été aussi facile. En effet, les jeunes maîtrisent plus les outils numériques que les autres générations...</p>
                <a class="btn filled-btn" href="advantages.php">Découvrir</a>
            </div>
        </section>
        <section class="part_two mobile-down">
            <div class="text_confidence">
                <h2>Garde le smile !</h2>
                <p>C’est en utilisant tes forces, en restant positif et en n’ayant pas peur d’échouer que ton projet se réalisera !</p>
                <a class="btn filled-btn" href="confidence.php">Découvrir</a>
            </div>
            <div class="right_side img_confidence">
                <img src="public/img/smile.png">
            </div>
        </section>
        <section class="part_two mobile-up">
            <div class="img_confidence">
                <img src="public/img/création.png">
            </div>
            <div class="right_side text_confidence">
                <h2>Le p’tit guide de création d’entreprise</h2>
                <p>T’es complêtement perdu et tu ne sais pas comment te lancer ? Nous aussi... enfin, ça c’était avant d’avoir lu notre guide !</p>
                <a class="btn filled-btn" href="">Découvrir</a>
            </div>
        </section>
        <section class="part_two mobile-down">
            <div class="text_confidence">
                <h2>Besoin d’un coup de main ?</h2>
                <p>On se doutait bien que t’étais en galère et qu’il te fallait un peu d’aide. Du coup, on a fait une petite liste des meilleures aides qui avantages les jeunes dans leur lancement d’entreprise !</p>
                <a class="btn filled-btn" href="">Découvrir</a>
            </div>
            <div class="right_side img_confidence">
                <img src="public/img/interrogation.png">
            </div>
        </section>

        <section id="sucessStory-ancre" class="slider">
            <h2>Ils se sont lancés</h2>
            <div class="center" style="display:flex;">

                <!-- <span onclick="slideLeft()" class="iconify left-btn" data-icon="akar-icons:chevron-left"></span> -->
                <!-- <div class="slider-card_wrapper" id="slider-card_wrapper"> -->
                <?php foreach ($tTestimony as $value2) { ?>
                    <div class="testimonyCard">
                        <figure>
                            <img src="back/data/<?= $value2['file'] ?>" alt="photo temoignage de l'autre">
                        </figure>
                        <blockquote>
                            <?= $value2['body'] ?>
                        </blockquote>
                        <p class="nom"><?= $value2['name'] ?></p>
                    </div>
                <?php } ?>
                <!-- </div> -->
                <!-- <span onclick="slideRight()" class="iconify right-btn" data-icon="akar-icons:chevron-right"></span> -->
            </div>
        </section>

        <section id="actus-ancre" class="entrepreneur_month desktop">
            <?php foreach ($tPost as $value) { ?>
                <div>
                    <figure>
                        <img src="back/data/<?= $value['file'] ?>" alt="photo du talent du mois">
                    </figure>
                    <div class="entrepreneur_text">
                        <h2>Le talent du mois</h2>
                        <p><?= $value['body'] ?></p>
                        <div class="btn-group">
                            <a href="<?= $value['social'] ?>" class="btn filled-btn" target="_blank">Soutiens <?= $value['name'] ?></a>
                        </div>
                    </div>

        </section>
        </div>


        <section class="entrepreneur_month mobile">
            <div>
                <h2>Le talent du mois</h2>
            </div>
            <figure>
                <img src="back/data/<?= $value['file'] ?>" alt="photo du talent du mois">
            </figure>
            <div>
                <p><?= $value['body'] ?></p>
            </div>
            <div class="btn-group">
                <a href="#" class="btn filled-btn">Soutiens <?= $value['name'] ?></a>
            </div>
        <?php } ?>
        </section>

        <section class="reasonWhy">
            <h2>Pourquoi se lancer ?</h2>
            <p>Tu es encore là ? Tu hésites encore ? Lance toi !</p>
            <figure>
                <iframe src="https://www.youtube.com/embed/l1m99X1smik" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </figure>
        </section>

        <section class="contactSection">
            <div>
                <h2>La parole est à toi !</h2>
                <p>Tu souhaites te lancer, mais tu as encore des hésitations ? T’as tout pour toi t’invite à remplir ce petit formulaire afin de te donner toutes les informations dont tu peux avoir besoin avant de te lancer. Si tu ne sais pas vers quel statut juridique t’orienter ou que tu ne possèdes pas assez de recules sur les aides dont tu pourrais bénéficier ?</p>
                <p> Appuies sur “Je commence maintenant !” et trouve les réponses à tes questions </p>
                <span onclick="popUpContact()" class="btn filled-btn">Je commence maintenant !</span>
            </div>
        </section>
        <div id="overlay_contact_form">
            <section id="popUp">
                <div class="popUpform">
                    <h2>La parole est à toi</h2>
                    <form action="addMentor.php">
                        <div class="column-input-group">
                            <label for="name">Ton nom*</label>
                            <input type="text" name="name">
                        </div>
                        <div class="column-input-group">
                            <label for="firstname">Ton prénom*</label>
                            <input type="text" name="firstname">
                        </div>
                        <div class="column-input-group">
                            <label for="mail">Ton adresse email*</label>
                            <input type="mail" name="email">
                        </div>
                        <div class="column-input-group">
                            <label for="age">Ton âge</label>
                            <input type="number" name="age">
                        </div>
                        <div class="btn-group">
                            <button class="btn empty-btn close_contact">Annuler</button>
                            <button type="submit" class="btn filled-btn">Envoyer</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <section class="mentor">
            <div>
                <h2>Deviens le mentor dont tu as rêvé</h2>
                <p>À ton tour, donne un coup de pouce à un jeune entrepreneur et aide le à réussir !</p>
            </div>
            <span class="btn filled-btn" onclick="popUp()">Je deviens mentor</span>
        </section>

        <div id="overlay">
            <section id="popUp">
                <div class="popUpform">
                    <h2>Deviens mentor!</h2>
                    <form action="addMentor.php">
                        <div class="column-input-group">
                            <label for="name">Ton nom*</label>
                            <input type="text" name="name">
                        </div>
                        <div class="column-input-group">
                            <label for="firstname">Ton prénom*</label>
                            <input type="text" name="firstname">
                        </div>
                        <div class="column-input-group">
                            <label for="mail">Ton adresse email*</label>
                            <input type="mail" name="email">
                        </div>
                        <div class="accept">
                            <input type="checkbox" name="accept">
                            <label for="accept">J'accepte que mes informations soit utilisés dans le cadre de ce dispositif.</label>
                        </div>
                        <div class="btn-group">
                            <button class="btn empty-btn close">Annuler</button>
                            <button type="submit" class="btn filled-btn">Envoyer</button>
                        </div>
                    </form>
                </div>
                <div class="confirmation_response">
                    <span class="iconify closeIcon close" data-icon="akar-icons:cross"></span>
                    <h2>Ton inscription en tant que mentor a bien été prise en compte.</h2>
                    <p>Un mail de validation vient de t’être envoyé. Nous te recontactons rapidement.</p>
                </div>
            </section>
        </div>

    </main>
    <footer>
        <?php include 'include/footer.php'; ?>
    </footer>
</body>

</html>