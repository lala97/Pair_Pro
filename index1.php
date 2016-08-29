
<?php
 session_start();
 if (isset($_SESSION['signUp'])) {

 }
 else {
   header('Location:signUp.php');
 }
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-lineicons.css">
    <!-- FONT LATO CDN -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <section id="head">


        <nav id="head" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
          Startup<span style="color:#20befa;">ly</span>
          </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a id="home" href="#homeSection">HOME</a></li>
                        <li><a id="about" href="#aboutSection" class="a">ABOUT</a></li>
                        <li><a id="features" href="#featuresSection" class="a">FEATURES</a></li>
                        <li><a id="product" href="#productSection" class="a">PRICES</a></li>
                        <li><a id="feedback" href="#feedbackSection" class="a">FEEDBACK</a></li>
                        <li><a id="team" href="#teamSection" class="a">TEAM</a></li>
                        <li><a id="contact" href="#contactSection" class="a">CONTACTS</a></li>
                        <li><a href="#">EXTRA<span class="caret a"></span></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php">LOGIN</a></li>
                        <li><a href='signUp.php' class="btn btn-sm btn-outline-color">SIGN UP</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <section id="launch">
            <div class="container text-center">
                <div id="top1">
                    <h1 class="weight">Do not wait - <span style="color:#20befa;">launch</span> your startup now!</h1>
                    <p class="weight">this template is flexible enough to suit any kind of startup or new business</p>
                    <button type="button" class="btn btn-info"><i class="fa fa-shopping-cart"></i> GET STARTED</button>
                    <button class="btn btn-outline">TAKE TOUR</button>
                </div>
            </div>
        </section>
    </section>

    <!--  ______LOG0 SECTION_________ -->
    <section id="logo">
        <div class="container">
            <div class="logo1">
                <div class="col-md-2 col-md-offset-1 text-center col-xs-6 col-sm-4">
                    <div class="logo2">
                        <img src="img/logo-5.png">
                    </div>

                </div>
                <div class="col-md-2 text-center col-xs-6 col-sm-4">
                    <div class="logo3">
                        <img src="img/logo-5.png">
                    </div>
                </div>
                <div class="col-md-2 text-center col-xs-6 col-sm-4">
                    <div class="logo4">
                        <img src="img/logo-5.png">
                    </div>
                </div>
                <div class="col-md-2 text-center col-xs-6 col-sm-5 col-sm-offset-1 col-md-offset-0">
                    <div class="logo5">
                        <img src="img/logo-5.png">
                    </div>
                </div>
                <div class="col-md-2 text-center col-xs-11 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-offset-0">
                    <div class="logo6">
                        <img src="img/logo-5.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--   ____ABOUT______ -->
    <section id="aboutSection">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-offset-3">
                    <button id="first-tab" type="button" class="btn btn-secondary active">First Tab</button>
                </div>
                <div class="col-md-2">
                    <button id="second-tab" type="button" class="btn btn-secondary">Second Tab</button>
                </div>
                <div class="col-md-2">
                    <button id="third-tab" type="button" class="btn btn-secondary">Third Tab</button>
                </div>
            </div>


            <!-- FIRST TAB-->
            <div class="row">
                <div class="first-tab">
                    <div class="col-md-6 col-sm-6">
                        <img src="img/people.jpg" class="img-responsive img-left">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="info text-center textRight">
                            <h3 class="weight">FOR EVERY</h3>
                            <span class="weight">STARTUP</span>
                            <p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh</p>
                            <p>sdfs sit atmet sit dolor greand fdanrh sdfs</p>
                            <p class="textTop">In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non
                                vident, nihilamane umquam magnum ac cognitione.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECOND TAB-->
            <div class="row">
                <div class="second-tab">
                    <div class="col-md-6 col-sm-6">
                        <div class="info text-center textLeft">
                            <h3 class="weight">NEW AGE</h3>
                            <span class="weight">TECHNOLOGY</span>
                            <p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh</p>
                            <p>sdfs sit atmet sit dolor greand fdanrh sdfs</p>
                            <p class="textTop">In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non
                                vident, nihilamane umquam magnum ac cognitione.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="img/phone.jpg" class="img-responsive img-right">
                    </div>
                </div>
            </div>
            <!-- THIRD-TAB-->
            <div class="row">
                <div class="third-tab">
                    <div class="col-md-12 col-sm-12">
                        <div class="textDiv text-center">
                            <h1 class="weight">3 EASY STEPS</h1>
                            <p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh</p>
                            <p>dfs sit atmet sit dolor greand fdanrh sdfs</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="down text-center">
                                <i class="icon icon-shopping-04"></i>
                                <p>PLACE ORDER</p>
                                <p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="down text-center">
                                <i class="icon icon-seo-icons-03"></i>
                                <p>PLACE ORDER</p>
                                <p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="down text-center">
                                <i class="icon icon-seo-icons-05 "></i>
                                <p>PLACE ORDER</p>
                                <p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <hr>

    <!-- _____PROCESS____ -->
    <section id="processSection">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="info text-left textLeft">
                        <h3 class="weight">NEW AGE</h3>
                        <span class="weight">TECHNOLOGY</span>
                        <p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh</p>
                        <p>sdfs sit atmet sit dolor greand fdanrh sdfs</p>
                        <p class="textTop">In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident,
                            nihilamane umquam magnum ac cognitione.</p>
                    </div>

                </div>
                <div class="col-md-6 col-sm-6">
                    <img src="img/content_image1.png" class="img-responsive img-right">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <img src="img/helmet.jpg" class="img-responsive img-left">
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="info text-right textRight">
                        <h3 class="weight">HANG</h3>
                        <span class="weight">ON TO</span>
                        <h3 class="weight">YER HELMET</h3>
                        <p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh</p>
                        <p>sdfs sit atmet sit dolor greand fdanrh sdfs</p>
                        <p class="textTop">In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident,
                            nihilamane umquam magnum ac cognitione.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ___ FEATURES____ -->
    <section id="featuresSection">
        <div class="container">
            <div class="section-content">
                <div class="col-md-4">


                    <div class="row">

                        <div class="col active" data-href="rich_features_1.png" id="colOne">
                            <h4>Lorem Dolor</h4>
                            <p>Sit amet, consectetur adipiscing elit</p>
                            <p>hac divisione rem ipsam prorsus</p>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col" data-href="rich_features_2.png" id="colTwo">
                            <h4>Lorem Dolor</h4>
                            <p>Sit amet, consectetur adipiscing elit</p>
                            <p>hac divisione rem ipsam prorsus</p>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col" data-href="rich_features_3.png" id="colThree">
                            <h4>Lorem Dolor</h4>
                            <p>Sit amet, consectetur adipiscing elit</p>
                            <p>hac divisione rem ipsam prorsus</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="img">
                        <img src="img/rich_features_1.png" class="img-responsive img1">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="img">
                        <img src="img/rich_features_2.png" class="img-responsive img2">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="img">
                        <img src="img/rich_features_3.png" class="img-responsive img3">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ________FEATURES-LIST ______ -->
    <section id="features-listSection">
        <div class="container">
            <div class="row">
                <div class="iconDiv">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <i class="icon icon-office-44"></i>
                        <span>Feature 1</span>
                        <p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <i class="icon icon-shopping-18"></i>
                        <span>Feature 2</span>
                        <p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <i class="icon icon-seo-icons-27"></i>
                        <span>Feature 3</span>
                        <p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <i class="icon icon-office-24"></i>
                        <span>Feature 4</span>
                        <p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
                    </div>

                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="iconDiv">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <i class="icon icon-graphic-design-13"></i>
                        <span>Feature 5</span>
                        <p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
                    </div>


                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <i class="icon icon-arrows-37"></i>
                        <span>Feature 6</span>
                        <p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <i class="icon icon-badges-votes-14"></i>
                        <span>Feature 7</span>
                        <p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <i class="icon icon-badges-votes-16 "></i>
                        <span>Feature 8</span>
                        <p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
                    </div>

                </div>
            </div>
    </section>

    <!--____________NEWS-LETTER_________ -->
    <section id="news-letterSection">
        <div class="container">
            <div class="row">
                <div class="main">

                    <div class="col-md-5 col-sm-9 col-sm-offset-3 col-lg-5 col-lg-offset-0">
                        <div class="leftDiv">
                            <h1 class="weight">GET LIVE UPDATES</h1>
                            <p>No spam promise - only latest news and prices!</p>
                        </div>

                    </div>
                    <div class="col-md-7">
                        <div class="rightDiv">
                            <div class="col-md-4 col-sm-4">
                                <div class="form">
                                    <input size="17" type="text" class="form-control" id="exampleInputName2" placeholder="Your name">
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-5">
                                <div class="row">
                                    <div class="form">
                                        <input size="30" type="email" class="form-control" id="exampleInputEmail2" placeholder="your@email.com">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form">
                                    <button>SUBSCRIBE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- _____PRODUCT_____ -->
    <section id="productSection">
        <div class="container">

            <div class="row">
                <div class="textDiv text-center">
                    <h1 class="weight">PRODUCT </h1>
                    <span class="weight"> PACKAGES</span>
                    <p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh</p>
                    <p>dfs sit atmet sit dolor greand fdanrh sdfs</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="table">
                        <div class="col-md-12">
                            <div class="title weight lightGray">Individual</div>
                        </div>
                        <div class="col-md-12">
                            <div class="tableprice">
                                <div class="price gray weight"><span class="currency">$</span>19</div>
                                <div class="period gray">per month</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <p><b>Free</b> Domain</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <p><b>Unlimited</b> Websites</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <p><b>Unlimited</b> Bandwidth</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <p class="none"><b>Unlimited</b> Disk Space</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <a class="btn btn-default" href="#">GEt Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="table hover">
                        <div class="col-md-12">
                            <div class="title weight lightGray">Studio</div>
                        </div>
                        <div class="col-md-12">
                            <div class="tableprice">
                                <div class="price blue weight"><span class="currency">$</span>29</div>
                                <div class="period blue">SUBSCRIPTION</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <p><b>Free</b> Domain</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <p><b>Unlimited</b> Websites</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <p><b>Unlimited</b> Bandwidth</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <p class="none"><b>Unlimited</b> Disk Space</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <a class="btn btn-default border" href="#">GEt Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="table">
                        <div class="col-md-12">
                            <div class="title weight lightGray">Enterprice</div>
                        </div>
                        <div class="col-md-12">
                            <div class="tableprice">
                                <div class="price blue weight"><span class="currency">$</span>19</div>
                                <div class="period blue">per month</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <p><b>Free</b> Domain</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <p><b>Unlimited</b> Websites</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <p><b>Unlimited</b> Bandwidth</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <p class="none"><b>Unlimited</b> Disk Space</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="detail">
                                <a class="btn btn-default border" href="#" role="button">GEt Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- AWARDS-->
    <section id="awardsSection">
        <div class="container">
            <div class="textDiv text-center" id="textDiv">
                <span class="weight"> Our</span>
                <h1 class="weight">Awards </h1>
                <p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh</p>
                <p>dfs sit atmet sit dolor greand fdanrh sdfs</p>
            </div>
            <div class="logo">
                <div class="col-md-2 col-md-offset-2 text-center col-xs-6 col-sm-3">
                    <div class="row">
                        <img src="img/logo-5.png">
                    </div>
                </div>
                <div class="col-md-2 text-center col-xs-6 col-sm-3">
                    <img src="img/logo-5.png">
                </div>
                <div class="col-md-2 text-center col-xs-6 col-sm-3">
                    <img src="img/logo-5.png">
                </div>
                <div class="col-md-2 text-center col-xs-6 col-sm-3">
                    <img src="img/logo-5.png">
                </div>
            </div>
        </div>
    </section>

    <!-- ____ FEEDBACK___ -->
    <section id="feedbackSection">
        <div class="container">
            <div class="row">
                <div class="textDiv text-center" id="textDiv">
                    <h1 class="weight">What</h1>
                    <span class="weight">Clients </span>
                    <h1 class="weight"> Say</h1>
                </div>
            </div>
            <div class="row">
                <div id="down">


                    <div class="col-md-2 col-xs-2">
                        <i class="fa fa-quote-left fa-2x"></i>
                    </div>

                    <div class="col-md-8 col-xs-8 text-center">

                        <p class="weight">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur
                            vitae lorem ipsum.</p>

                    </div>

                    <div class="col-md-2 col-xs-2">
                        <i class="fa fa-quote-right fa-2x"></i>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--____BOOTPART______-->
    <section id="bootpartSection">
        <div id="botpart">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-offset-1 col-xs-12 col-sm-4">
                        <img class="pull-left img-reponsive img-circle" src="img/profile-1.jpg">
                        <h4 class="weight">AMY WARNER</h4>
                        <p>Investor at Pear Inc.</p>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-4">
                        <img class="pull-left img-reponsive img-circle" src="img/profile-2.jpg">
                        <h4 class="weight">AMY WARNER</h4>
                        <p>Investor at Pear Inc.</p>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-4">
                        <img class="pull-left img-reponsive img-circle" src="img/profile-1.jpg">
                        <h4 class="weight">AMY WARNER</h4>
                        <p>Investor at Pear Inc.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--_____TEAM_____-->

    <section id="teamSection">
        <div class="container text-center">
            <div class="row">
                <h1 class="weight">BEHIND <span style="color:#20befa;">THE</span> SCENES</h1>
                <br>
                <p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
                    <br> dfs sit atmet sit dolor greand fdanrh sdfs</p>
                <br>
                <div class="col-md-8 col-md-offset-2">
                    <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident,
                        nihilamane umquam magnum ac cognitione. In his rest gestiret. Sed ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam
                        magnum ac cognitione.</p>
                </div>
            </div>

            <div class="row">
                <div class="team">

                        <?php
                    include "config.php";
                  $sql = "SELECT * FROM `telebe`";
                  $query = mysqli_query($conn, $sql);
                  $src = [];

                  // $sql = "SELECT `text` FROM `telebe`";
                  // $query = mysqli_query($conn, $sql);
                  $text = [];
                    if ($query) {
                      while($row = mysqli_fetch_assoc($query)){
                        array_push($src , $row['src']);
                         array_push($text , $row['text']);
                      }
                      // while($row1 = mysqli_fetch_assoc($query)){
                      //        array_push($text , $row1['text']);
                      //       }
                      for ($i = 0; $i < sizeof($src); $i++) {
                        ?>
                        <div class="col-md-3 col-xs-6 col-sm-3">
                          <div class="down">
                      <img src="<?=$src[$i]?>" class="img-responsive">
                       <p><?=$text[$i]?></p>
                     </div>
                   </div>
                  <?php  }
                  }
                  ?>
                  <?php
                    // include "config.php";

                        // <!-- <h4>MIKE BOLDER</h4>
                        // <p>Developer</p> -->
          //   if ($query) {
          //       while($row = mysqli_fetch_assoc($query)){
                    // array_push($text , $row['text']);
              //   }
                //  for ($i = 0; $i < sizeof($text); $i++) {
                ?>
                 <!-- <p>
                //  $text[$i]
                 ?></p> -->
          <?php
            // }
            //  }
            ?>
          <!-- </div>
        </div> -->
                    <!-- <div class="col-md-3 col-xs-6 col-sm-3">
                        <div class="down">

                            <img class="img-responsive" src="img/team-1.jpg">
                            <br>
                            <h4>MIKE BOLDER</h4>
                            <p>Developer</p>
                        </div>

                    </div> -->
                    <!-- <div class="col-md-3 col-xs-6 col-sm-3">
                        <div class="up">
                            <img class="img-responsive" src="img/team-2.jpg">
                            <br>
                            <h4>MIKE BOLDER</h4>
                            <p>Developer</p>
                        </div>

                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-3">
                        <div class="down">
                            <img class="img-responsive" src="img/team-3.jpg">
                            <br>
                            <h4>MIKE BOLDER</h4>
                            <p>Developer</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-3">
                        <div class="up">
                            <img class="img-responsive" src="img/team-4.jpg">
                            <br>
                            <h4>MIKE BOLDER</h4>
                            <p>Developer</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- ___FOOTER1___-->
    <section id="contactSection">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-md-offset-0 col-sm-5 col-sm-offset-5">
                    <i class="icon icon-seo-icons-24"></i>
                </div>
                <div class="col-md-8 text-center">
                    <h1 class="weight">LAUNCH YOUR STARTUP NOW!</h1>
                    <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.</p>
                </div>
                <div class="col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-4">
                    <button class="btn btn-default">GET THIS TEMPLATE</button>
                </div>
            </div>

        </div>
    </section>

    <!--____FOOTER____-->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h1 class="weight">Startuply</h1>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco. Qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Nisi ut aliquid ex ea commodi consequatur?
                        <br>
                        <span style="font-weight:600; line-height: 40px;">John Doeson, Founder.</span></p>
                </div>
                <div class="col-md-5 text-center col-sm-5">
                    <h4 class="weight">SOCIAL NETWORKS</h4>
                    <i class="icon icon-socialmedia-08"></i>
                    <i class="icon icon-socialmedia-09"></i>
                    <i class="icon icon-socialmedia-16"></i>
                    <i class="icon icon-socialmedia-04"></i>
                    <br>
                    <i class="icon icon-socialmedia-07"></i>
                    <i class="icon icon-socialmedia-16"></i>
                    <i class="icon icon-socialmedia-09"></i>
                    <i class="icon icon-socialmedia-08"></i>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4 class="text-center weight">OUR CONTACTS</h4>
                    <ul>
                        <li>
                            <span><i class="fa fa-envelope-o"></i></span>
                            <a href="#">info@startup.ly</a>
                        </li>
                        <li>
                            <span><i class="fa fa-map-marker"></i></span> 2901 Marmora road, Glassgow, Seattle, WA 98122-1090
                        </li>

                        <li>
                            <span><i class="fa fa-phone"></i></span> 1 - 234-456-7980
                        </li>
                </div>
            </div>
        </div>

        <div id="final" class="text-center">
            <p>startup.ly 2014. All rights reserved.</p>
        </div>
    </section>










    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"> <\ / script > ')
    </script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/main.js"></script>
</body>
</html>
