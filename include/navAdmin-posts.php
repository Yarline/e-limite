<aside class="new-posts">
    <figure class="nav_logo">
        <a href="/"><img src="../public/img/logo.PNG" alt="logo"></a>
        
    </figure>
        <div class="new-posts-group">
            <aside>
                <?php
                    if(!empty($_SESSION['user']))
                        echo '<p>Bonjour '.$_SESSION['user']['username'].'</p>';
                    flash_out(); 
                ?>
            </aside>
            <div class="new-posts-group-links">
                <a href="../back/testimony.php">
                    <img src="../public/img/plus.svg" alt="">Témoignages
                </a>
            </div>
            <div class="new-posts-group-links link-active">
                <a href="../back/addPost.php">
                    <img src="../public/img/plus.svg" alt="">Posts
                </a>
            </div>
        </div>
    <div class="new-posts-group-links link-logout">
        <a href="../back/core/logout.php">
            <img src="../public/img/logout.svg" alt="">Se déconnecter
        </a>
    </div>
</aside>