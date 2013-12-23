<?php include 'base.php' ?>

<?php startblock('title') ?>Dristi - Projects<?php endblock() ?>

<?php startblock('main') ?>
<div class="hero-container project-container">
    <div class="row">
        <div class="col-md-12 full-width-block">
            <h1 class="heading-text">Projects</h1>
            <p>Currently, DRISTI is functional in two villages viz. Masu and Panchauli, both of which are in close vicinity of our college. Two sessions per village are conducted every week where students interact with the villagers, identify their problems and try to solve them by looking for relevant solutions. Various socio-economic problems are addressed by showing informative videos related to the same. At the same time regular workshops are held in the college campus to further support the cause.</p>
            <a class="btn btn-primary" href="<?= $links['activities']; ?>">Activities</a>
            <a class="btn btn-primary" href="<?= $links['events']; ?>">Events</a>
            <a class="btn btn-primary" href="<?= $links['experiences']; ?>">Experiences</a>
        </div>
        <div class="col-md-12 project-item">
            <h2 class="heading-text heading-text-green">Project Masu</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6"><img class="img-thumbnail img-responsive" src="/img/projects/masu-1.jpg"></div>
                <div class="col-md-3 col-sm-6 col-xs-6"><img class="img-thumbnail img-responsive" src="/img/projects/masu-2.jpg"></div>
                <div class="col-md-6 col-sm-12">
                    <p>Masu is a scenic village situated 4kms to the south of BIT Mesra. We have visited the village several times as per our schedule till date and conducted interactive sessions which includes -</p>
                    <ul>
                        <li>Surveys for identifying the major problems persisting in the village.</li>
                        <li>Video presentation in the form of motivational movies and documentaries related to social issues.</li>
                        <li>Interaction through games, quizzes , sports and fun activities like dancing and singing.</li>
                        <li>Career counseling sessions for students & those seeking employment.</li>
                        <li>Skill development sessions where basic computer Skills are imparted.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12 project-item">
            <h2 class="heading-text heading-text-green">Project Panchauli</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6"><img class="img-thumbnail img-responsive" src="/img/projects/panchauli-1.jpg"></div>
                <div class="col-md-3 col-sm-6 col-xs-6"><img class="img-thumbnail img-responsive" src="/img/projects/panchauli-2.jpg"></div>
                <div class="col-md-6 col-sm-12">
                    <p>Panchauli is a village situated half a Km west of BIT. This was the second venture of Team DRISTI and several sessions have been conducted here too with the nature of sessions being the same as Masu.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endblock() ?>
