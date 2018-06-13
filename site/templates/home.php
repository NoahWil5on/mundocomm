<?php snippet('header') ?>

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <img src="assets/images/logo_trans.png" alt="MundoComm logo" style="width:100px;height:100px;position: static; cursor: pointer;" onclick="document.location.href = './'">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse" style="clear: both">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Mission</a>
                </li>
                <li>
                    <a class="page-scroll" href="#teams">Teams</a>
                </li>
                <li>
                    <a class="page-scroll" href="#leadership">Our Leadership</a>
                </li>
                <li>
                    <a class="page-scroll" href="#advising">Advising Board</a>
                </li>
                <li>
                    <a class="page-scroll" href="#courses">Short Course</a>
                </li>
                <li>
                    <a class="page-scroll" href="#research">Our Research</a>
                </li>
                <li>
                    <a class="page-scroll" href="#recruitment">Recruitment</a>
                </li>
                <li>
                    <a class="page-scroll" href="#publications">Research Productivity</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<?php 
    function debug_to_console( $data ) {
        $output = $data;
        if ( is_array( $output ) )
            $output = implode( ',', $output);

        echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
    }
    $backgroundImage = 'http://placehold.it/1000';
    $myDate = new DateTime();
    $milliDay = 86400;
    $myDay = floor($myDate->getTimestamp() / $milliDay);
    $myImage = $myDay % $page->headerimages()->toStructure()->count();
    $index = 0;
    foreach($page->headerimages()->toStructure() as $images){
        if($index == $myImage){
            $backgroundImage = $images->background()->toFile()->url();
        }
        $index++;
    } 
?>
<!-- Intro Header -->
<header class="intro" id="header-image" style="background-image: url(<?php echo($backgroundImage) ?>)">
    <div class="floating-shader">
    </div>
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">MundoComm</h1>
                    <p class="intro-text"><?= $page->subhead() ?></p>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2" style="color: #000000;">
            <h2>Our Mission</h2>
            <div class="col-lg-8">
                <p><?= $page->mission() ?></p>
            </div>
            <div class="col-lg-4">
                <img src="assets/images/logo_trans.png" alt="MundoComm logo">
            </div>
        </div>
    </div>
</section>

<!-- Teams Section, download class removed -->
<section id="teams" class="container content-section text-center" style="color: #000000;">
    <h2>Meet Our Teams</h2>
</section>


<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
            <div id="map">
            </div>
        </div>
    </div>
</section>




<!--Leadership Section-->
<section id="leadership" class="content-section text-center">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h2 style="color: #000000;">Our Leadership</h2>

                <!--UR Leadership-->
                <h3 style="padding-top: 100px; color:#2d2f86">University of Rochester</h3>
                <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
            </div>
        </div>
        <div class="container" align="center">
            <?php foreach($page->uofr()->toStructure() as $team): ?>
            <div class="col-sm-4 portfolio-item" style="margin-bottom: 40px;">
                <a href="<?= $team->link() ?>" target="_blank" class="portfolio-link" data-toggle="modal">
                    <div class="caption" style="color: #8dc540;">
                        <h4><?= $team->name() ?><br/><?= $team->role() ?></h4>
                    </div>
                    <img src='<?= $team->image()->toFile()->url() ?>' class="img-responsive img-circle" alt="<?= $team->name() ?>">
                </a>
            </div>
            <?php endforeach ?>
        </div>

        <!--Costa Rica Leadership -->
        <div class="text-center">
            <h3 style="padding-top: 40px; color:#2d2f86">Costa Rica</h3>
            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
        </div>
        <div class="container" align="center">
            <?php foreach($page->costarica()->toStructure() as $team): ?>
            <div class="col-sm-4 portfolio-item" style="margin-bottom: 40px;">
                <a href="<?= $team->link() ?>" target="_blank" class="portfolio-link" data-toggle="modal">
                    <div class="caption" style="color: #8dc540;">
                        <h4><?= $team->name() ?><br/><?= $team->role() ?></h4>
                    </div>
                    <img src='<?= $team->image()->toFile()->url() ?>' class="img-responsive img-circle" alt="<?= $team->name() ?>">
                </a>
            </div>
            <?php endforeach ?>
        </div>

        <!-- Dominican Republic Leadership -->
        <div class="col-lg-12 text-center">
            <h3 style="padding-top: 40px; color:#2d2f86">Dominican Republic</h3>
            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
        </div>
        <div class="container" align="center">
            <?php foreach($page->dm()->toStructure() as $team): ?>
            <div class="col-sm-4 portfolio-item" style="margin-bottom: 40px;">
                <a href="<?= $team->link() ?>" target="_blank" class="portfolio-link" data-toggle="modal">
                    <div class="caption" style="color: #8dc540;">
                        <h4><?= $team->name() ?><br/><?= $team->role() ?></h4>
                    </div>
                    <img src='<?= $team->image()->toFile()->url() ?>' class="img-responsive img-circle" alt="<?= $team->name() ?>">
                </a>
            </div>
            <?php endforeach ?>
        </div>

        <!-- México Leadership -->
        <div class="col-lg-12 text-center">
            <h3 style="padding-top: 40px; color:#2d2f86">México</h3>
            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
        </div>
        <div class="container" align="center">
            <?php foreach($page->mexico()->toStructure() as $team): ?>
            <div class="col-sm-4 portfolio-item" style="margin-bottom: 40px;">
                <a href="<?= $team->link() ?>" target="_blank" class="portfolio-link" data-toggle="modal">
                    <div class="caption" style="color: #8dc540;">
                        <h4><?= $team->name() ?><br/><?= $team->role() ?></h4>
                    </div>
                    <img src='<?= $team->image()->toFile()->url() ?>' class="img-responsive img-circle" alt="<?= $team->name() ?>">
                </a>
            </div>
            <?php endforeach ?>
        </div>

</section>

<!-- Advising Board Section -->
<section id="advising" class="content-section text-center">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h2 style="color: #000000;">Advising Board</h2>
                <img class="center-block img-responsive" src="assets/images/advisingboard.JPG" alt="Members List">
            </div>
        </div>
    </div>
</section>

<!--Courses Section-->
<section id="courses" class="container content-section text-center">
    <div class="col-lg-8 col-lg-offset-2" style="color: #000000;">
        <h2>Short Course</h2>
        <img class="center-block img-responsive" src="assets/images/collage1.jpg" alt="Short Course Collage">
        <br>
        <p><?= $page->shortcourse() ?></p>
    </div>
</section>

<!--Research Section-->
<section id="research" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2" style="color: #000000;">
            <h2>Our Research</h2>
            <img class="center-block img-responsive" src="assets/images/collage2.jpg" alt="Research Collage">
            <br>
            <p><?= $page->research() ?></p>
        </div>
    </div>
</section>

<!-- Recruitment Section -->
<section id="recruitment" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2" style="color: #000000;">
            <h2>Recruitment</h2>
            <p>Please check back later for new recruitment opportunities.</p>
            <!-- <ul class="list-inline">
                <li>
                    <a href="https://redcap.urmc.rochester.edu/redcap/surveys/?s=LX77MLWPKY" target="_blank" class="btn btn-primary btn-lg">Apply Now/Solicite Aquí</a></li>
            </ul> -->
        </div>
    </div>
</section>

<!-- Publications Section -->
<section id="publications" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2" style="color: #000000;">
            <h2>Research Productivity</h2>
            <?php foreach($page->papers()->toStructure() as $paper): ?>
                <p align="left"><?= $paper->citation() ?></p>
                <a href="<?= $paper->link() ?>" target="_blank" class="btn btn-primary btn-lg">View Paper</a>
            <?php endforeach ?>
        </div>
    </div>
</section>
<script async defer>
    var markers = [];
    function initMap() {
        var center = {lat: 19.70, lng: -85};
        var points = [];
        <?php foreach($page->missions()->toStructure() as $mission): ?>
        points.push({
            lat: Number(<?php echo($mission->lat()); ?>),
            lng: Number(<?php echo($mission->lng()); ?>),
            name: "<?php echo($mission->name()); ?>"
        });
        var myUrl = '<?php echo($mission->url()); ?>';
        if(myUrl && myUrl != undefined && myUrl.length > 0){
            points[points.length - 1].url = `${myUrl}`;
        }
        <?php endforeach ?>

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 5,
            center: center,
            mapTypeId: 'roadmap'
        });
        var position;
        var markers = [];
        var infos = [];
        var image;
        points.forEach(point => {
            image = {
                url: './assets/images/logo_trans.png',
                size: new google.maps.Size(40, 40),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(20, 40),
                scaledSize: new google.maps.Size(40, 40)
            };
            position = new google.maps.LatLng(point.lat,point.lng);
            var marker = new google.maps.Marker({
                position: position,
                icon: image,
                map: map
            });
            var htmlContent = "<p style='color: black'>" + point.name + "</p>"
            var infowindow = new google.maps.InfoWindow({
                content: htmlContent
            });
            marker.addListener('mouseover', function() {
                infowindow.open(map, marker);
            });
            marker.addListener('mouseout', function() {
                infowindow.close();
            });
            marker.addListener('click', function() {
                if(point.url){
                    window.location.href = point.url;
                }                
            });
            markers.push(marker);
            infos.push(infowindow);
        });
    }
</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC0ZN-L9sw4LXqfBZjXPP3MGpiloO9RqQ&callback=initMap">
</script>

<?php snippet('footer') ?>