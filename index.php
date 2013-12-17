<?php include 'base.php' ?>

<?php startblock('head_css')?>
    <link href="css/magnific-popup.css" rel="stylesheet">
<?php endblock() ?>

<?php startblock('js') ?>
    <script src="js/magnific-popup.js"></script>
    <script>
        $(document).ready(function() {
            $('.frontpage-gallery').magnificPopup({
                delegate: 'a',
                type:'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
<?php endblock() ?>

<?php startblock('main') ?>
    <div class="frontpage-heading">
        <div class="frontpage-heading-overlay">
            <div class="frontpage-heading-text">Let's Make a Difference</div>
        </div>
    </div>
    <div class="grey-container">
        <div class="row">
            <div class="col-lg-12 full-width-block">
                <div class="heading-group">
                    <h1 class="heading">dristi</h1>
                    <h2 class="sub-heading">a BIT initiative</h2>
                </div>
                <p>DRISTI stands for ‘Directing Rural India towards Social and Technological Integration’.  It’s an initiative by students of BIT Mesra to aid in the development of rural India. We aspire to create awareness about health, sanitation, water conservation, education, addiction and many more socio-economic problems as well as to hold workshops about career counseling and skill development.</p>
                <p>BIT Mesra, since its foundation in 1955, is renowned for enriching and nurturing young minds in technical education but very less could be done for the villages encircling the campus. Though a number of individuals from the nearby villages have been employed here, the room for improvement always remains.</p>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <filter id="grayscale">
            <feColorMatrix type="matrix" values="0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0"/>
        </filter>
    </svg>
    <div class="feature-box-container">
        <div class="row">
            <div class="col-sm-4 feature-box">
                <img class="feature-box-image" src="img/feature-item/our-mission.jpg">
                <div class="feature-box-description">
                    <a href="#" class="btn btn-primary">Our Mission</a>
                    <p>​To extend the parameters in terms of education and recreation to guide on the path of self sufficiency and success in future.</p>
                </div>

            </div>
            <div class="col-sm-4 feature-box">
                <img class="feature-box-image" src="img/feature-item/get-involved.jpg">
                <div class="feature-box-description">
                    <a href="#" class="btn btn-primary">Get Involved</a>
                    <p>Be a part of dedicated volunteer action team and help us with the field work.</p>
                </div>

            </div>
            <div class="col-sm-4 feature-box">
                <img class="feature-box-image" src="img/feature-item/donate.jpg">
                <div class="feature-box-description">
                    <a href="#" class="btn btn-primary">Donate</a>
                    <p>You help us bring about permanent change so rural India can have a happy, healthy, better living, forever.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="grey-container in-action">
        <h2>Dristi In Action</h2>
        <div class="row">
            <div class="col-md-7 frontpage-gallery">
                <div class="row">
                    <div class="col-xs-4">
                        <a href="img/frontpage-gallery/1.jpg" class="thumb">
                            <img src="img/frontpage-gallery/thumb-1.jpg" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="img/frontpage-gallery/2.jpg" class="thumb">
                            <img src="img/frontpage-gallery/thumb-2.jpg" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="img/frontpage-gallery/3.jpg" class="thumb">
                            <img src="img/frontpage-gallery/thumb-3.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <a href="img/frontpage-gallery/4.jpg" class="thumb">
                            <img src="img/frontpage-gallery/thumb-4.jpg" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="img/frontpage-gallery/5.jpg" class="thumb">
                            <img src="img/frontpage-gallery/thumb-5.jpg" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="img/frontpage-gallery/6.jpg" class="thumb">
                            <img src="img/frontpage-gallery/thumb-6.jpg" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="video-container in-action-video">
                    <iframe src="//www.youtube.com/embed/acoUHAuGj-w" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
<?php endblock() ?>