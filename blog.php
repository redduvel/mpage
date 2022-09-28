<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;400&family=PT+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <title>MLuster</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <?php
                include("blocks/header/header.php");
            ?>
        </header>
    <section class="blog">
            <p class="blog-h projects-h">Wall of thoughts</p>
            <div class="blog-posts">
                <div class="post">
                    <div>
                        <p class="project-date">2022-01-01</p>
                    </div>
                    <div class="post-container">
                        <p class="project-name">Post name</p>
                        
                        <div class="post-text-lines">
                            <div class="post-text">
                                <p class="post-text-cl">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Provident, dolorem sapiente repudiandae tenetur eum perferendis
                                    et aperiam obcaecati quae deserunt rem similique molestiae esse
                                    velit iste quisquam? Exercitationem, voluptates hic!
                                </p>
                                <br>
                                <p class="post-quote">
                                    " Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Odit ut explicabo doloribus, assumenda vitae deserunt?
                                    Sequi nobis quo, aut adipisci quod non aliquam.
                                    Vel tenetur ullam eveniet doloribus incidunt veritatis? "
                                </p>
                                <br>
                                <p class="post-text-cl">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Provident, dolorem sapiente repudiandae tenetur eum perferendis
                                    et aperiam obcaecati quae deserunt rem similique molestiae esse
                                    velit iste quisquam? Exercitationem, voluptates hic!
                                </p>
                                <br>
                                <p class="post-text-cl">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Provident, dolorem sapiente repudiandae tenetur eum perferendis
                                    et aperiam obcaecati quae deserunt rem similique molestiae esse
                                    velit iste quisquam? Exercitationem, voluptates hic!
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="none-post">
                    <p class="none-post-text">
                        nothing here yet :(
                    </p>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
