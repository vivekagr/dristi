<?php require_once 'ti.php';
      require_once 'vars.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $metaDescription ?>">
    <meta property="og:title" content="<?php startblock('title') ?>Dristi<?php endblock() ?>" />
    <meta property="og:image" content="http://dristi.org.in/img/logo-large.png" />
    <meta property="og:url" content="http://<?= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"]; ?>" />
    <meta property="og:description" content="<?= $metaDescription ?>" />
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
                    <li class="dropdown">
                        <a id="siteNavAbout" role="button" data-toggle="dropdown" data-target="#" href="<?= $links['about'] ?>">
                            About <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="siteNavAbout">
                            <li><a href="<?= $links['about'] ?>">About Us</a></li>
                            <li class="divider"></li>
                            <li><a href="<?= $links['objective'] ?>">Objectives</a></li>
                            <li><a href="<?= $links['origin'] ?>">Origin</a></li>
                            <li><a href="<?= $links['challenges'] ?>">Challenges</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a id="siteNavProjects" role="button" data-toggle="dropdown" data-target="#" href="<?= $links['projects'] ?>">
                            Projects <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="siteNavProjects">
                            <li><a href="<?= $links['projects'] ?>">Our Projects</a></li>
                            <li class="divider"></li>
                            <li><a href="<?= $links['activities'] ?>">Activities</a></li>
                            <li><a href="<?= $links['events'] ?>">Events</a></li>
                            <li><a href="<?= $links['experiences'] ?>">Experiences</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= $links['getInvolved'] ?>">Get Involved</a></li>
                    <li><a data-toggle="modal" data-target="#contactModal" href="<?= $links['contact'] ?>">Contact</a></li>
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
<?php require_once 'modals.php'; ?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<?php emptyblock('js') ?>
</body>
</html>
