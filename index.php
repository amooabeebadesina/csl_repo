<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Central Science Laboratory</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script  src="js/jquery.min.js"></script>
    <script  src="js/bootstrap.min.js"></script>
<!--    <script src="js/bootstrap.js"></script>-->

</head>
<body>

<?php include('includes/header.inc'); ?><br />

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner container slider" role="listbox">
            <div class="item active">
                <img src="images/img1.jpg"/>
            </div>

            <div class="item">
                <img src="images/img1.jpg"/>
            </div>

            <div class="item">
                <img src="images/img1.jpg"/>
            </div>
        </div><br/>
    </div>



        <div class="row">
            <div class="col-sm-8 abt">
                <ul class="nav nav-tabs tabs">
                    <li class="active"><a data-toggle="tab" href="#home">CSL BRIEF</a></li>
                    <li><a data-toggle="tab" href="#menu1">MISSION</a></li>
                </ul>
                <div class="tab-content" >
                    <div id="home" class="tab-pane fade in active"><br/>
                        <div class="director_img"><img src="" alt="Director" class="img-responsive"/></div>
                        <p>It is my pleasure to welcome you all to the website of the Central Science Laboratory, Obafemi Awolowo University,
                            Ile-Ife, Nigeria. The Central Science Laboratory (CSL) was established in 1999 and equipped with state-of-the-art
                            equipment that are used by students and academics to meet the cutting edge research needs of the university
                            towards attaining the developmental objectives of our nation in the 21st century and beyond.
                            The Laboratory facilities have no doubt enhanced the research profile of the university, enabling
                            it to provide strategic leadership in Research and Development activities that have earned it
                            recognition both nationally and internationally.</p>
                    </div>
                    <div id="menu1" class="tab-pane fade"><br/>
                        <p>The mission is to provide and maintain state-of-the-art research equipment that
                            strengthens teaching and research in the sciences and, service research and
                            development activities nationwide. A major focus of the laboratory is to train
                            researchers and other users on how to derive maximum benefits from the installed equipment.</p><br/>
                        <p>The major strategic objectives are to: </p>
                        <ul><i>
                            <li>Acquire and maintain specialized items of teaching and research equipment</li>
                            <li>Provide a 24h gender friendly access to users within and outside the university,
                                including visiting scientists</li>
                            <li>Provide analytical services where direct access by users is considered inexpedient</li>
                            <li>Provide a forum for vibrant interactions by way of seminars and training workshops for staff and users</li>
                            <li>Secure partnership to guarantee sustainability of the services.</li></i>
                        </ul><br/>
                        <p>It is important to emphasize that the Laboratory’s establishment has not in any way precluded
                            faculties, departments and units from acquiring and utilizing their own research equipment,
                            the procurement of which the Director of the CSL coordinates for the university from the
                            yearly Federal Government Teaching and Research Equipment grant. Thus, the CSL operations
                            complement faculty/departmental facilities, thereby providing the university a competitive
                            advantage over others in the country. The Laboratory provides a basis for synergy in the University’s
                            research agenda as well as encourages interdisciplinary exchange of ideas, thus setting
                            the university at a high research pedestal.</p><br/>
                        <p>I salute the foresight of the University authorities in establishing such a
                            laboratory and also the effort of previous Directors of the Centre and succeeding
                            Vice-Chancellors who have kept the dream alive through provision of needed funds for
                            regular maintenance and newer acquisition of items of equipment. The intervention of the
                            Carnegie Corporation of New York in partnering with the laboratory to fulfill its
                            mandate since 2003 is also deeply appreciated.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <h3 class="news-header"><marquee behavior="alternate" scrollamount="12">NEWS</marquee></h3><br/>
                 <a href="" class="news-main"><h4>CSL Invites</h4></a>
                <p>Application from  Scientists.(Natural products ...<a href="">Read more</a></p><hr />
                <a href="" class="news-main"><h4>Workshop on Atomic Absorption Spectroscopy(AAS)</h4></a>
                <p>Watch out for dates in 2012</p>
            </div>
        </div>
</div>
    <?php include('includes/footer.inc'); ?>
</body>
</html>