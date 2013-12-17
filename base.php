<?php require_once 'ti.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php startblock('title') ?>Dristi<?php endblock() ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <?php emptyblock('head_css') ?>
</head>

<body>
<div class="main-container">
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img class="brand-logo" src="/img/logo.png" alt="Dristi Logo"> </a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right site-nav">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Get Involved</a></li>
                    <li><a href="#">Media Centre</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php emptyblock('main') ?>

    <footer>
        <div class="row">
            <div class="col-lg-7 col-xs-8">
                Connect with us on
                <a class="footer-social-icon" target="_blank" href="http://fb.com/dristi.bitm"><img src="img/icons/social-fb.png"></a>
                <a class="footer-social-icon" target="_blank" href="https://www.youtube.com/channel/UCNQtcdgyhwybBgjiU6xE41Q"><img src="img/icons/social-yt.png"></a>
            </div>
            <div class="col-lg-4 col-xs-4 text-right pull-right">
                dristi &#0169; 2013
            </div>
        </div>
    </footer>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<?php emptyblock('js') ?>
</body>
</html>
