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
    <script  src="js/jquery.min.js"></script>
    <script  src="js/bootstrap.min.js"></script>
    <!--    <script src="js/bootstrap.js"></script>-->

</head>
<body >

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
        <h2 class="text-center">CHEMISTRY LABORATORY</h2>
        <br><br>
        <div class="row">
            <div class="col-md-4">
                <img class="img-responsive" src="images/person-icon.png" alt="Prof. S.A Adesanya" style="height: 200px; width: 200px; margin: auto">
                <br>
                <div class="container-fluid text-center">
                    <b>Prof. S.A Adesanya</b> <br>
                    Dept. of Pharmacognosy, OAU, Ile-Ife <br>
                    E-mail: jadesany@oauife.edu.ng <br>
                </div>
            </div>
            <div class="col-md-8" style="padding: 20px">
                <h4><b>Lab. Coordinator</b></h4>
                <p>This laboratory has been designed to assist in carrying out
                    a number of analytical experiments in a single room. Here
                    is the Perkin Elmer AAS 400 atomic absorption spectrophotometer
                    with its own workstation. Others include five units of UV-visible
                    spectro-photometers, three units of HPLC, two units of gas
                    chromatographs (GC), one unit Infrared (IR) spectrophotometer
                    and two chemical balances. </p>
                <p>Three of the UV spectrophotometers are of the double beam
                    UNICAM models, each with multiple cell holders for automatic
                    scanning of a series of samples. The spectrometers can scan at
                    variable speeds and at two wavelengths of 1 and 2nm. The built-in
                    microprocessor permits the selection of output formats, automatic
                    zeroing, data production and processing with equations for linear
                    and non-linear curves and graphics. The other two have similar
                    processing capacity but are single beam models with single cell holders.
                    These spectrophotometers are suitable for direct scanning for UV-visible
                    parameters of compounds, quantitative determination of concentration as
                    well as kinetic studies for the rate of synthesis or degradation. </p>
                <p>
                    These are useful for the monitoring of enzyme activities by researchers
                    in biochemistry, rate of reactions by chemists and engineers, and for
                    quantification and drug monitoring by pharmacists and related fields.
                    The IR spec. is a Fourier-Transform model highly sensitive for the scanning
                    of compounds and quantization at specific absorbance. It has found use
                    principally in pharmaceutical and chemical sciences in getting fingerprint
                    pattern for synthetic or isolated compounds and official identification of
                    pharmaceutical raw materials as well as in the petroleum industry.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: lightgrey">
        <h4>The AKTA HPLC </h4>
        <p>HPLC is attached to an automated fraction collector. Each of the HPLC has a
            variable UV detector and data flow interphase with computers for monitoring
            chromatography. The workstation for each has facilities for data storage and retrieval,
            and manipulation and/or display of chromatogram. The two Gas Chromatographs are models
            equipped with a flame ionization detector. The whole procedure after sample injection
            is also automated with a computer interface for chromatogram monitoring and processing.</p>
    </div>
</div>

<?php include('includes/footer.inc'); ?>
</body>
</html>