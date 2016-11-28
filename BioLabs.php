<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: hydee-->
<!-- * Date: 11/25/16-->
<!-- * Time: 10:44 AM-->
<!-- */-->

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Central Science Laboratory</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script  src="css/jquery.js"></script>
    <script  src="css/bootstrap.min.js"></script>

</head>
<body>

<?php include('includes/header.inc'); ?><br />

<div class="bl-body">

</div>
<div class="about-wrapper">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/bio_lab/Untitled-52.jpg" alt="first image about CSL">
            </div>

            <div class="item">
                <img src="images/bio_lab/Untitled-62.jpg" alt="first image about CSL">
            </div>

            <div class="item">
                <img src="images/bio_lab/Untitled-72.jpg" alt="first image about CSL">
            </div>

            <div class="item">
                <img src="images/bio_lab/Untitled-82.jpg" alt="first image about CSL">
            </div>

            <div class="item">
                <img src="images/bio_lab/Untitled-92.jpg" alt="first image about CSL">
            </div>
        </div>

    </div>
    <br><br>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 img-div">
                <img src="images/bio_lab/sidepics.jpg" alt="side picture" class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h3><b>Biotechnology Laboratory</b></h3>
                <p>This unit houses the facilities for basic procedure in molecular
                    biology. Two PCR systems complete with documentation systems and gel
                    systems; water purification facilities and low temperature freezers
                    are available.
                </p>
                <p>
                    A micro-titre plate reader for multipurpose application is also
                    in this unit. Effort is in progress to acquire vertical electrophoresis
                    tanks for use in protein analysis and also establish tissue culture facilities for the unit.
                </p>
                <br>
                <h4><b>Medium Pressure Chromatograph    </b></h4>
                <p>
                    Accelerated Gradient Chromatographic set-up of Baeckstrom SEPARO AB is
                    available for preparative medium pressure chromatography to boost natural
                    product chemistry and other applications.
                </p>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.inc'); ?>
</body>
</html>