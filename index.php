<html lang="fr">

<head>
    <?php include 'include/head.php'; ?>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <title>Accueil</title>

</head>

<body>
    <header>
        <h1>Logo</h1>
        <?php include 'include/header.php'; ?>
    </header>
    <main>
        <section class="banner">
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

        <section class="slider">
            <h2>Ils se sont lancés</h2>
            <div class="autoplay">
                <div class="testimonyCard">
                    <figure>
                        <img src="public/img/lautre.png" alt="photo temoignage de l'autre">
                    </figure>
                    <blockquote>
                        “S’il n’y a pas de problème, il n’y a pas de solution et donc pas d’opportunité pour une entreprise d’exister. ”
                    </blockquote>
                    <p class="nom">Vinod Khosla</p>
                    <small class="entreprise">Sun Microsystemss</small>
                </div>

                <div class="testimonyCard">
                    <figure>
                        <img src="public/img/rim.png" alt="photo temoignage de rim">
                    </figure>
                    <blockquote>
                        “Aujourd’hui, je n’ai plus honte de dire que j’avais peur. Que dis-je ? Que j’étais TÉ-TA-NI-SÉE d’entreprendre.“
                    </blockquote>
                    <p class="nom">Rim Lariani</p>
                    <small class="entreprise">Pix & Connect</small>
                </div>

                <div class="testimonyCard">
                    <figure>
                        <img src="public/img/helene.png" alt="photo temoignage d'helene'">
                    </figure>
                    <blockquote>
                        “Il y a longtemps que j'ai compris que la peur, au fond, est ma meilleure alliée.“
                    </blockquote>
                    <p class="nom">Danièle Henkel</p>
                    <small class="entreprise">Henkel Média</small>
                </div>

                <div class="testimonyCard">
                    <figure>
                        <img src="public/img/mamie.png" alt="photo temoignage de mamie">
                    </figure>
                    <blockquote>
                        “C’est un sport collectif et, pour moi, construire une entreprise c’est vraiment une aventure collective avec un objectif commun.”
                    </blockquote>
                    <p class="nom">Hélène Boulet-Supau</p>
                    <small class="entreprise">Sarenza</small>
                </div>

                <div class="testimonyCard">
                    <figure>
                        <img src="public/img/mickeale.png" alt="photo temoignage de mickeale">
                    </figure>
                    <blockquote>
                        “Le futur appartient à ceux qui croient à la beauté de leurs rêves : alors vivez-les !“
                    </blockquote>
                    <p class="nom">Michaël Girard</p>
                    <small class="entreprise">KOSELYA</small>
                </div>
            </div>
        </section>
        <section class="entrepreneur_month">
            <figure>
                <img src="public/img/justine.jpg" alt="photo Justine Hutteau">
            </figure>
            <div>
                <h2>L'entrepreneur du mois</h2>
                <p>Justine Hutteau, fondatrice de Respire, a créé sa marque en 2018 après avoir su qu’ elle était atteinte d’une tumeur. L’idée de créer sa marque lui est venue, en voulant se procurer un déodorant sain adapté à sa maladie et à ses besoins. Concept ingénieux, n’est-ce pas ?</p>
            </div>
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
                <h2>Trouves ton <span>mentor.</span></h2>
                <p>Tu seras mis en relation avec entrepreneur qui te guidera vers la voie du succès. Saisis ta chance ! Toi aussi tu auras ta success story !</p>
            </div>
            <form action="" class="contact">
                <h2>La parole est à toi !</h2>
                <div class="flex">
                    <div class="form-items-group mid-form-items-size">
                        <label for="">Nom</label>
                        <input type="text" placeholder=" Nom">
                    </div>
                    <div class="form-items-group mid-form-items-size">
                        <label for="">Prénom</label>
                        <input type="text" placeholder=" Prénom">
                    </div>
                </div>
                <div class="form-items-group">
                    <label for="">Adresse mail</label>
                    <input type="text" placeholder=" exemple@exemple.fr">
                </div>
                <div>
                    <p>Qu’est-ce qui t’empêche de te lancer ?</p>
                    <div class="flex">
                        <div>
                            <label for="">Financement</label>
                            <input type="checkbox">
                        </div>
                        <div>
                            <label for="">Manque de confiance</label>
                            <input type="checkbox">
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <label for="">Les démarches</label>
                            <input type="checkbox">
                        </div>
                        <div>
                            <label for="">Autres</label>
                            <input type="checkbox">
                        </div>
                    </div>
                </div>
                <div class="form-items-group">
                    <label for="">Statut</label>
                    <select name="" id="">
                        <option value="">Etudiant</option>
                        <option value="">Employé</option>
                        <option value="">En reconversion</option>
                        <option value="">Sans emploi</option>
                    </select>
                </div>
                <div class="form-items-group">
                    <label for="">Mon projet</label>
                    <textarea name="" id="" cols="30" rows="5"></textarea>
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