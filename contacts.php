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
            <section class="blog contact">
                <p class="blog-h projects-h">Contacts</p>
                
                <form action="" class="contact-form">
                    <div class="contact-mail-block">
                        <p class="contact-title">Your Email</p>
                        <input type="email" class="contact-input" aria-describedby="emailHelp">
                    </div>
                    <div class="contact-h-block">
                        <p class="contact-title">Title</p>
                        <input type="text" class="contact-input" aria-describedby="emailHelp">
                    </div>
                    <div class="contact-message-block">
                        <p class="contact-title">Message</p>
                        <textarea class="contact-input contact-input-big" name="comment" cols="40" rows="3"></textarea>                   </div>
                    </div>

                    <div class="contact-button-block">
                        <button class="contact-button">Send</button>
                    </div>
                </form>
        </section>
    </div>
</body>
</html>
