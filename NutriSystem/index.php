<!DOCTYPE html>
<!--
*****************************************************************************
 Copyright (C) 2019, Natnael Alemayehu. All rights Reserved. Unauthorized
 copying of this file and/or distributed without, the express permission 
 of Natnael Alemayehu is strictly prohibited. Written by Natnael Alemayehu 
 January 2019. 
*****************************************************************************
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="Nutrition Tracking System, NutriSystem">
        <meta name="author" content="Natnael Alemayehu">
        <link rel="icon" type="image/png" sizes="96x96" href="images/icons/meklit.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="node_modules/chapter-and-verse/chapterAndVerse.js"></script>

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?Indie+Flower|Maven+Pro">

        <!-- Custom styles and jQuery for this template -->
        <script type="text/javascript" src="script/scripts.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Home</title>
    </head>
    <body>
        <div class="container-fluid">
            <!-- header -->
            <header>
                <div class="row top_header">
                    <div class="col-4 text-left align-middle">
                        <img class="img-responsive align-middle" src="images/logo/header_logo.png" alt="header_logo" width="250" height="90" style="vertical-align: middle">
                    </div>
                    <div class="col text-right align-middle">
                        <a class="fb-ic"><i class="fa fa-facebook white-text mr-4 align-middle" style="font-size: 28px; color: #55ACEE; vertical-align: middle"></i></a> 
                        <a class="tw-ic"><i class="fa fa-twitter white-text mr-4 align-middle" style="font-size: 28px; color: #21A1D2; vertical-align: middle"></i></a>
                        <a class="yt-ic"><i class="fa fa-youtube white-text mr-4 align-middle" style="font-size: 28px; color: red; vertical-align: middle"></i></a>
                    </div>
                </div>
                <!-- Slider -->
                <div class="row slider">
                    <div class="col">
                        <!--Carousel Slider-->
                        <div id="indicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#indicators" data-slide-to="0" class="active"></li>
                                <li data-target="#indicators" data-slide-to="1"></li>
                                <li data-target="#indicators" data-slide-to="2"></li>
                                <li data-target="#indicators" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="img-responsive carousel_images" src="images/carousel/banner_0.png" alt="First slide" width="100%" height="100%">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-responsive carousel_images" src="images/carousel/banner_1.png" alt="Second slide" width="100%" height="100%">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-responsive carousel_images" src="images/carousel/banner_2.png" alt="Third slide" width="100%" height="100%">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-responsive carousel_images" src="images/carousel/banner_3.png" alt="Fourth slide" width="100%" height="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- navigator -->
            <div style="margin: 0 30px">
                <div class="row text-right align-middle">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light text-right">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- content -->
            <section>
                <div class="row">
                    <div class="col-md-8 page_header header_font">
                        <div  class="col-md-6 header_font">
                            <h3>DAILYNUTRI plans to keep you health:</h3>
                            <img class="img-responsive" src="images/background/nutrition.png" alt="nutrition" width="auto" height="auto" style="vertical-align: middle">
                        </div>
                        <div class="col page_header header_font">
                            <p>The right mix of nutrients to fuel your body</p>
                            <p>Plenty of healthy, lean protein</p>
                            <p>High fiber to help keep you feeling fuller, longer</p>
                            <p>Low-glycemic carbs to stabilize blood sugar</p>
                            <p>No artificial sweeteners or flavors</p>
                            <p>We have customizable plan to fit your life</p>
                        </div><br><br> 
                    </div>
                    <div class="col-md-4 page_header header_font verse">
                        <div class="bg-image"></div>
                        <div class="bg-text">
                            <h5>USER LOGIN</h5>
                            <hr style="color: #e6e6e6; width: 80%;"><br>
                            <form id="login_form" action="user.php" method="POST">
                                <label class="control-label">Username: </label><br>
                                <input id="input-1" class="form-control input-md" name="username" type="text" required/><br>

                                <label class="control-label">Password: </label><br>
                                <input id="input-2" class="form-control input-md" name="pass" type="password" required/><br><br>

                                <input class="btn btn-success btn-md" type="submit" value="Login"><br><br>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- footer -->
            <footer>
                <div class="row">
                    <div class="col text-left">
                        <p id="copyright">
                            Copyright &copy; <?php echo date("Y"); ?><a href="https://www.dailynutri.com"> DAILYNUTRI</a>&emsp;
                            <a class="fb-ic"><i class="fa fa-facebook white-text mr-4 social" style="color: #55ACEE;"></i></a> 
                            <a class="tw-ic"><i class="fa fa-twitter white-text mr-4 social" style="color: #21A1D2;"></i></a>
                            <a class="yt-ic"><i class="fa fa-youtube white-text mr-4 social" style="color: red;"></i></a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
