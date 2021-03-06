<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
        <link rel="icon" sizes="16x16" href="/assets/favicon/favicon.ico">

        <title>Cataclysme-rp</title>
    </head>

    <body>
        <div class="block nav">
            <?php include('./views/nav.php') ?>
        </div>

        <div class="block header container-fluid">
            <?php include('./views/header.php') ?>
        </div>

        <div class="block img_text container-fluid position-relative">
            <?php include('./views/img_text.php') ?>
        </div>

        <div class="block img_mea">
            <?php include('./views/img_mea.php') ?>
        </div>

        <div class="block news">
            <?php include('./views/news.php') ?>
        </div>

        <div class="block slider">
            <?php include('./views/slider.php') ?>
        </div>
        
        <div class="block footer">
            <?php include('./views/footer.php') ?>
        </div>

        <script src="./js/index.js"></script>
    </body>
</html>