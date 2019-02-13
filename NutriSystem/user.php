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
        <link rel="stylesheet" href="css/pages.css">
        <title>user</title>
    </head>
    <body>
        <div class="container-fluid">
            <!-- header -->
            <header>
                <div class="row top_header">
                    <div class="col-4 text-left align-middle">
                        <img class="img-responsive align-middle" src="images/logo/header_logo.png" alt="header_logo" width="250" height="90" style="vertical-align: middle">
                    </div>
                    <!-- navigator -->
                    <div class="col text-right align-middle">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light" class="text-right">
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
                <!-- banner -->
                <div class="row slider">
                    <div class="col">
                        <img class="img-responsive carousel_images" src="images/banner/banner.png" alt="banner" width="100%" height="100%">
                    </div>
                </div>
            </header>
            <!-- unknown -->
            <div style="margin: 0 30px">
                <div class="row text-left align-middle">

                </div>
            </div>
            <!-- content -->
            <section>
                <div class="row">
                    <div class="col-md-11" class="tab_container">
                        <div class="page-header text-left header_font page_header">
                            <h4>Welcome user!</h4>
                        </div>
                        <div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item tab_color">
                                    <a class="nav-link active" data-toggle="tab" href="#veiw_profile">View Profile</a>
                                </li>
                                <li class="nav-item tab_color">
                                    <a class="nav-link" data-toggle="tab" href="#update_profile">Update Profile</a>
                                </li>
                                <li class="nav-item tab_color">
                                    <a class="nav-link" data-toggle="tab" href="#veiw_history">View History</a>
                                </li>
                                <li class="nav-item tab_color">
                                    <a class="nav-link" data-toggle="tab" href="#veiw_progress">View Progress</a>
                                </li>
                                <li class="nav-item tab_color">
                                    <a class="nav-link" data-toggle="tab" href="#recommendation">Recommendation</a>
                                </li>
                                <li class="nav-item tab_color">
                                    <a class="nav-link" data-toggle="tab" href="#input_food">Input Food/Drink</a>
                                </li>
                                <li class="nav-item tab_color">
                                    <a class="nav-link" data-toggle="tab" href="#view_setting">View/Update Setting</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active container" id="veiw_profile">
                                    <div class="page-header text-left header_font page_header">
                                        <h5 class="page-header text-left header_font page_header" style="padding-top: 20px;">VIEW PROFILE:</h5>
                                        <div class="col-md-8">
                                        <div class="form-group">
                                            <form action="" method="post">
                                                <label class="control-label">First name: </label><br>
                                                <input class="form-control input-lg" name="fname" type="text" placeholder="First name" required><br>
                                                <label class="control-label">Middle initial: </label><br>
                                                <input class="form-control input-lg" name="minitial" type="text" placeholder="Middle initial" required><br>
                                                <label class="control-label">Last name: </label><br>
                                                <input class="form-control input-lg" name="lname" type="text" placeholder="Last name" required><br>
                                                <label class="control-label">Gender: </label>&emsp;&emsp;&emsp;
                                                <input class="form-control input-lg" name="gender" type="text" placeholder="Male or Female" required><br>
                                                <label class="control-label">Telephone: </label><br>
                                                <input class="form-control input-lg" name="tphone" type="tel" placeholder="(651)-000-0000" required><br>
                                                <label class="control-label">E-mail: </label><br>
                                                <input class="form-control input-lg" name="email" type="text" placeholder="email@domain.org" required><br>
                                                <label class="control-label">Address: </label><br>
                                                <input class="form-control input-lg" name="street" type="text" placeholder="ex:123 Streat West" required><br>
                                                <label class="control-label">City: </label><br>
                                                <input class="form-control input-lg" name="city" type="text" placeholder="City" required><br>
                                                <label class="control-label">State: </label><br>
                                                <input class="form-control input-lg" name="state" type="text" placeholder="state" required><br>
                                                <label class="control-label">Zip code: </label><br>
                                                <input class="form-control input-lg" name="zipcode" type="text" placeholder="Zip code" required><br>
                                                <label class="control-label">Country: </label><br>
                                                <input class="form-control input-lg" name="country" type="text" placeholder="Country" required><br><br>
                                                
                                                <input class="btn btn-primary btn-lg" type="button" value="Submit">&emsp;&emsp;
                                                <input class="btn btn-warning btn-lg" id="reset" type="reset" value="Clear"><br><br>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane container fade" id="update_profile">
                                    <h5 class="page-header text-left header_font page_header" style="padding-top: 20px;">UPDATE PROFILE:</h5>
                                    <p>
                                    <div class="form-group">
                                        <form action="" method="post" class="form-inline">
                                            <input class="form-control input-lg" name="fname" type="text" placeholder="First name" required>&emsp;&emsp;
                                            <input class="btn btn-primary btn-lg" type="submit" value="Search Member">
                                            <br><br>
                                        </form>
                                    </div>
                                    </p>
                                </div>
                                <div class="tab-pane container fade" id="veiw_history">
                                    <h5 class="page-header text-left header_font page_header" style="padding-top: 20px;">VIEW HISTORY:</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                                        anim id est laborum.
                                    </p>
                                </div>
                                <div class="tab-pane container fade" id="veiw_progress">
                                    <h5 class="page-header text-left header_font page_header" style="padding-top: 20px;">VIEW PROGRESS:</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                                        anim id est laborum.
                                    </p>
                                </div>
                                <div class="tab-pane container fade" id="recommendation">
                                    <h5 class="page-header text-left header_font page_header" style="padding-top: 20px;">USER RECOMMENDATION:</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                                        anim id est laborum.
                                    </p>
                                </div>
                                <div class="tab-pane container fade" id="input_food">
                                    <h5 class="page-header text-left header_font page_header" style="padding-top: 20px;">INPUT FOOD/DRINK:</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                                        anim id est laborum.
                                    </p>
                                </div>
                                <div class="tab-pane container fade" id="view_setting">
                                    <h5 class="page-header text-left header_font page_header" style="padding-top: 20px;">VIEW/UPDATE SETTING:</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                                        anim id est laborum.
                                    </p>
                                </div>
                            </div><br><br> 
                        </div>
                    </div>
            </section>
            <!-- footer -->
            <footer>
                <div style="background-image: url('images/background/bg.jpg'); height: 150px; background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle; color: #000; border-top: 5px solid rgba(0, 37, 144, 0.5); margin: 5px 20px; padding-left: 5px">
                    <div class="row">
                        <div class="col-md-4" style="text-align: left;">
                            <h4><u>Contact us</u>:</h4>
                            <p><span style="font-size: 14px; color: blue;"></span>Phone:&emsp;630-844-3848 </p>
                            <p><span style="font-size: 14px; color: blue;"></span>Fax:&emsp;630-796-7615</p>
                            <p><span style="font-size: 14px; color: blue;"></span>info@dailynutri.com</p>
                        </div>
                        <div class="col-md-4" style="text-align: left;">
                            <h4><u>Address</u>:</h4>
                            <p><b>DailyNutri</b></p>
                            <p>1856 Rose Ave E Saint Paul, MN</p>
                            <p>55401 USA</p>
                        </div>
                        <div class="col-md-4" style="text-align: left;">
                            <h4><u>Follow us</u>:</h4>
                            <a class="fb-ic"><i class="fa fa-facebook white-text mr-4" style="font-size: 20px; color: #55ACEE;"> </i></a>
                            <a class="tw-ic"><i class="fa fa-twitter white-text mr-4" style="font-size: 20px; color: #21A1D2;"> </i></a>
                            <a class="yt-ic"><i class="fa fa-youtube white-text mr-4" style="font-size: 20px; color: red;"> </i></a>
                            <a class="ins-ic"><i class="fa fa-instagram white-text mr-4" style="font-size: 20px; color: #000;"></i></a><br><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-left">
                        <p id="copyright">
                            Copyright &copy; <?php echo date("Y"); ?><a href="https://www.dailynutri.com"> DAILYNUTRI</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
