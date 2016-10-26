<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jeanine Schoessler">

    <title>FreeCodeCamp Bozeman</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"><span class="sr-only">Expand</span></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <div class="sm">
                        <div class="svg-icon">
                            <div class="svg-container">
                                <?php include('img/fcc.svg'); ?>
                            </div>
                        </div>
                    </div>
                    Bozeman</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <?php {
                    /*
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    */ 
                    } ?>
                    <li>
                        <a  href="https://www.facebook.com/groups/free.code.camp.bozeman/">Facebook</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">FreeCodeCamp Bozeman</h1>
                <hr>
                <p><span>Interested in learning how to code? Want to refresh the fundamentals of JavaScript, front-end development or become a certified Full Stack Developer? </span></p>
                <a href="https://www.facebook.com/groups/free.code.camp.bozeman/" class="btn btn-primary btn-xl page-scroll"><i class="fa fa-facebook" aria-hidden="true"><span class="sr-only">Facebook</span></i> Join our Facebook group</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">What is FreeCodeCamp?
</h2>
                    <hr class="light">
                    <p class="text-faded">We're an open source community that helps you learn to code by working through self-paced coding challenges, building projects, and earning certificates. </p>
                    <a href="http://www.freecodecamp.com/" class="page-scroll btn btn-default btn-xl sr-button"><i class="fa fa-free-code-camp" aria-hidden="true"><span class="sr-only">FreeCodeCamp</span></i> Start Coding!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Why FreeCodeCamp?</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-code text-primary sr-icons"><span class="sr-only">Code</span></i>
                        <h3>Learn HTML, CSS, JavaScript and more!</h3>
                        <p class="text-muted">Work towards certificates in Front-End, Data Visualization and Back-End Development&mdash;all for free!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-codepen text-primary sr-icons"><span class="sr-only">Codepen</span></i>
                        <h3>Build Your Portfolio</h3>
                        <p class="text-muted">As your skills grow, show off your web applications through <a href="http://codepen.io/">Codepen.io.</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-users text-primary sr-icons"><span class="sr-only">Group of people</span></i>
                        <h3>Meet Fellow Programmers</h3>
                        <p class="text-muted">Ask questions or share your progress on our <a href="https://www.facebook.com/groups/free.code.camp.bozeman/">Facebook group</a>!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-comments text-primary sr-icons"><span class="sr-only">Chat bubble</span></i>
                        <h3>Collaborate with Developers</h3>
                        <p class="text-muted">Find answers and help others solve challenges on <a href="https://gitter.im/FreeCodeCamp/FreeCodeCamp">FreeCodeCamp's gitter chat</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php  /*
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
     */
    ?>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Get Started at FreeCodeCamp</h2>
                <a href="http://www.freecodecamp.com/" class="page-scroll btn btn-default btn-xl sr-button"><i class="fa fa-free-code-camp" aria-hidden="true"><span class="sr-only">FreeCodeCamp</span></i> Start Coding!</a>
            </div>
        </div>
    </aside>
   
<?php  
    /*
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>
    */
    ?>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>