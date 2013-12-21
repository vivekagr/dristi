<?php include 'base.php' ?>

<?php startblock('title') ?>Dristi - About Us<?php endblock() ?>

<?php startblock('main') ?>
    <div class="image-heading about-heading">
        <div class="image-heading-overlay">
        </div>
    </div>
    <div class="padded-container about-container">
        <div class="row">
            <div class="col-lg-12 full-width-block">
                <h1 class="heading-text">About Us</h1>
                <p>BIT Mesra, since its foundation in 1955, is renowned for enriching and nurturing young minds in technical education but very less could be done for the villages encircling the campus. Though a number of individuals from the nearby villages have been employed here, the room for improvement always remains.And, this is how DRISTI began. The basic idea was to extend their parameters in terms of information, skills, education and recreation to guide them on the path of self sufficiency and success in future. The feasible targets were two villages-Masu and Panchauli which were in close vicinity of our college.</p>
                <a class="btn btn-primary" href="<?= $links['objective']; ?>">Our Aims & Objectives</a>
            </div>
        </div>
    </div>
    <div class="padded-container grey-container ">
        <div class="row">
            <div class="col-lg-12 full-width-block">
                <h1 class="heading-text text-center">The Team</h1>
                <div class="row about-team-container">
                    <?php foreach ($teamMembers as $member) { ?>
                    <div class="col-sm-2 col-xs-4 about-team-member">
                        <img class="img-responsive img-circle" src="/img/team/<?= $member['img'] ?>">
                        <h3><?= $member['name'] ?></h3>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php endblock() ?>
