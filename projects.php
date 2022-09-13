<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;400&family=Silkscreen&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    <title>Projects</title>
</head>
<body>
    <div class="container">
        <?php
            include("./blocks/header/header.php");
        ?>
        <section class="projects projects-paddings">
            <p class="projects-h project-page-h">Projects</p>
            <div class="projects-container">
                <?php
                $dir    = './blocks/big_projects';
                    
                if ($handle = opendir($dir)) {
                    while (false !== ($file = readdir($handle))) { 
                        if ($file != "." && $file != "..") { 
                            include($dir."/".$file);
                        } 
                    }
                    closedir($handle); 
                }
            ?>
                
            </div>
        </section>
    </div>
</body>
</html>
