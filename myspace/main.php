<div class="container">
    <header class="header">
        <?php
            include("./blocks/header/header.php");
        ?>
    </header>
    <section class="about">
            <?php
                include("./blocks/about/about.html");
            ?>
    </section>
    <section class="projects">
            <p class="projects-h">Latest Projects</p>
            <?php
                $dir    = './blocks/projects';
                    
                if ($handle = opendir($dir)) {
                    while (false !== ($file = readdir($handle))) { 
                        if ($file != "." && $file != "..") { 
                            include($dir."/".$file);
                        } 
                    }
                    closedir($handle); 
                }
            ?>
    </section>
    <section class="comments">
            <p class="projects-h comments-h">Latest Comments</p>
                <?php
                    $dir    = './blocks/comments';
                    
                    if ($handle = opendir($dir)) {
                        while (false !== ($file = readdir($handle))) { 
                            if ($file != "." && $file != "..") { 
                                include($dir."/".$file);
                            } 
                        }
                        closedir($handle); 
                    }

                ?>
    </section>
    <footer class="footer">
            <div class="nav-links footer-links">
                <p class="autor-name footer-link">mlbuster © 2022</p>

                <a href="" class="nav-link footer-link">Home</a>
                <p class="link-around footer-link"> | </p>
                <a href="" class="nav-link footer-link">Last Projects</a>
                <p class="link-around footer-link"> | </p>
                <a href="" class="nav-link footer-link">All Projects</a>
                <p class="link-around footer-link"> | </p>
                <a href="" class="nav-link footer-link">Help</a>
                <p class="link-around footer-link"> | </p>
                <a href="" class="nav-link footer-link">Contacts</a>
            </div>
    </footer>
</div>