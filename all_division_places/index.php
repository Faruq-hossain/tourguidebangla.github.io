<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Most Popular Place in Bangladesh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- new link strt -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Additional new link Start CSS Files -->
    <link rel="stylesheet" href="css/popular_placee.css">

    <link rel="stylesheet" href="css/indexx.css">
    <!-- Additional  new link end CSS Files -->

    <!-- Custom Theme files -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->

</head>
<style>
    .btn-default {
        top: 25%;
        left: 25%;
        color: #999;
        background: #fffccc;
    }

    /* .box_sundar {
        width: 30%;
        float: left;
        margin: 50px 20px;
        background-color: #fff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.15);
    } */

    /* readmore button start */

    .box_sundar p {
        font-size: 15px;
        line-height: 28px;
        height: 90px;
        overflow: hidden;
    }

    .box_sundar btn {
        display: inline-block;
        color: #fff;
        background-color: #ff3300;
        text-decoration: none;
        font-size: 15px;
        padding: 10px 15px;
        border-radius: 8px;
        margin-top: 10px;
        margin-bottom: 25px;
    }

    .box_sundar btn:hover {
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    }

    .box_sundar.showContent p {
        height: auto;
    }

    .box_sundar.showContent a.readmore-btn {
        background-color: red;

    }

    /* read more btn end */

    /* FAQ DropDown Menu Start */
    .accordion {
        width: 100%;
        max-width: 1000px;
        margin: 2rem auto;
    }

    .accordion-item {
        background-color: #fff;
        color: #111;
        margin: 1rem 0;
        border-radius: 0.5rem;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.25);
    }

    .accordion-item-header {
        padding: 0.5rem 3rem 0.5rem 1rem;
        min-height: 3.5rem;
        line-height: 1.25rem;
        font-weight: bold;
        display: flex;
        align-items: center;
        position: relative;
        cursor: pointer;
    }

    .accordion-item-header::after {
        content: "\002B";
        font-size: 2rem;
        position: absolute;
        right: 1rem;
    }

    .accordion-item-header.active::after {
        content: "\2212";
    }

    .accordion-item-body {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }

    .accordion-item-body-content {
        padding: 1rem;
        line-height: 1.5rem;
        border-top: 1px solid;
        border-image: linear-gradient(to right, transparent, #34495e, transparent) 1;
    }


    /* FAQ DropDown Mwnu end */

    /* card images side start */
    .card {
        flex-direction: row;
        width: 450px;
        border-radius: 5px;
    }

    .card-title {
        font-weight: bold;
    }

    .card img {
        width: 30%;
        height: 100px;
        /* border-top-right-radius: 0; */
        border-bottom-left-radius: calc(0.25rem - 1px);
    }

    @media only screen and (max-width: 768px) {

        .card-body {
            padding: 0.5em 1.2em;
        }

        .card-body .card-text {
            margin: 0;
        }

        .card img {
            width: 50%;
        }
    }

    @media only screen and (max-width: 1200px) {
        .card img {
            width: 40%;
        }
    }

    /* map start */
    #map {
        height: 300px;
        width: 100%;
    }

    /* map end */
</style>

<body>
    <?php include('includes/header.php'); ?>
    <br><br><br><br><br><br><br>
    <!-- <div class="banner-3">
        <div class="container">
            <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TMS- Find Route Services
            </h1>
        </div>
    </div> -->





    <section id="#" class="container list-group list-group-flush">

        <br><br><br><br>

        <h1 style="color:blue;text-align:center;font-weight: bold;">Most Beautiful Places under <span style="color:#ff3300;">Sundarban</span> </h1>
        <!-- <h3 style="text-align: center;">this all photos are Khulna division</h3> -->
        <hr class="mb-5" />




        <!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
                <li data-target="#carousel-example-2" data-slide-to="3"></li>
                <li data-target="#carousel-example-2" data-slide-to="4"></li>
                <li data-target="#carousel-example-2" data-slide-to="5"></li>
                <li data-target="#carousel-example-2" data-slide-to="6"></li>
                <li data-target="#carousel-example-2" data-slide-to="7"></li>
                <li data-target="#carousel-example-2" data-slide-to="8"></li>
                <li data-target="#carousel-example-2" data-slide-to="9"></li>
                <li data-target="#carousel-example-2" data-slide-to="10"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" style="height:400px;" src=" images/pp1.jpg" alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <!-- <h3 class="h3-responsive">Light mask</h3> -->
                        <p style="color:#ff3300;font-weight:bold;">1/10</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" style="height:400px;" src="images/s2.jpg" alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="carousel-caption">
                        <!-- <h3 class="h3-responsive">Strong mask</h3> -->
                        <p style="color:#ff3300;font-weight:bold;">2/10</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" style="height:400px;" src="images/s3.jpg" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <!-- <h3 class="h3-responsive">Slight mask</h3> -->
                        <p style="color:#ff3300;font-weight:bold;">3/10</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" style="height:400px;" src="images/s1.jpg" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <!-- <h3 class="h3-responsive">Slight mask</h3> -->
                        <p style="color:#ff3300;font-weight:bold;">4/10</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" style="height:400px;" src="images/s5.jpg" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <!-- <h3 class="h3-responsive">Slight mask</h3> -->
                        <p style="color:#ff3300;font-weight:bold;">5/10</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" style="height:400px;" src="images/s6.jpg" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <!-- <h3 class="h3-responsive">Slight mask</h3> -->
                        <p style="color:#ff3300;font-weight:bold;">6/10</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" style="height:400px;" src="images/s7.jfif" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <!-- <h3 class="h3-responsive">Slight mask</h3> -->
                        <p style="color:#ff3300;font-weight:bold;">7/10</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" style="height:400px;" src="images/s8.jfif" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <!-- <h3 class="h3-responsive">Slight mask</h3> -->
                        <p style="color:#ff3300;font-weight:bold;">8/10</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" style="height:400px;" src="images/s9.jfif" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <!-- <h3 class="h3-responsive">Slight mask</h3> -->
                        <p style="color:#ff3300;font-weight:bold;">9/10</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" style="height:400px;" src="images/s10.jpg" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <!-- <h3 class="h3-responsive">Slight mask</h3> -->
                        <p style="color:#ff3300;font-weight:bold;">10/10</p>
                    </div>
                </div>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->

        </div>
        <!-- <hr class="mb-5" />
        <br><br><br><br> -->

        <!-- <h3 class="title">Sundarban the most popular placees</h3> -->


    </section>
    <!-- all blog start -->

    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="all-blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <h1 style="font-weight: bold;font-size:22px;">Sundarban Most 14 Tourist Places</h1><br><br>
                                    <br><br>
                                    <!-- content start -->
                                    <div class="pos-f-t">
                                        <div class="collapse" id="navbarToggleExternalContent">
                                            <div class="bg-dark p-4">
                                                <h4 class="text-white" style="font-size:20px;">Most Beautiful Places to Visit in Sundarban</h4><br>
                                                <!-- <span class="text-light" style="font-size:15px;">1.</span> -->
                                                <ul style="color:#ff3300;font-size:15px;">
                                                    <li><a href="#sundarban">1.Sundarban National Park</a></li>
                                                    <li><a href="#dublarcor">2.Dublar Char Island</a></li>
                                                    <li><a href="#karamjol">3.Karamjol</a></li>
                                                    <li><a href="#hiron_point">4.Hiron Point</a></li>
                                                    <li><a href="#Kotka">5.Kotka Beach</a></li>
                                                    <li><a href="#harbaria">6.Herbaria Sundarban</a></li>
                                                    <li><a href="#">7.Verirkhal Sundarban</a></li>
                                                    <li><a href="#hiron_point">8.Nilkamol Sundarban (Also known as Hiron Point)</a></li>
                                                    <li><a href="#tinkona">9.Triangle (Tinkona) Island Sundarban</a></li>
                                                    <li><a href="#">10.Tiger Hill Sundarban</a></li>
                                                    <li><a href="#Jamtala">11.Jamtala Beach Sundarban(side place in Katka)</a></li>
                                                    <li><a href="#Jamtala">12.Watch Tower Of Jamtala Sundarban(inside Jamtala)</a></li>
                                                    <li><a href="#">13.Katka Forest Office Sundarban</a></li>
                                                    <li><a href="#">14.Gorar Ban Sundarban</a></li>


                                                </ul>
                                            </div>
                                        </div>
                                        <nav class="navbar navbar-dark bg-dark" style="text-align:left;">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <h3 style="color:azure;">Name of Tourist Places</h3>
                                        </nav>
                                    </div>

                                    <!-- content end -->

                                    <!-- sundarban Strat -->

                                    <div class="blog-thumb">
                                        <div class="container text-center">

                                            <!-- <h1> Click Me </h1> -->
                                            <!-- Large modal -->
                                            <button class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg"><img src="images/pp1.jpg" class="img-responsive" alt=""></button>

                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">



                                                            <!-- Wrapper for slides -->
                                                            <div class="carousel-inner">
                                                                <div class="item active">
                                                                    <img class="img-responsive" src="images/s2.jpg" alt="...">
                                                                    <div class="carousel-caption">
                                                                        One Image
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <img class="img-responsive" src="images/s3.jpg" alt="...">
                                                                    <div class="carousel-caption">
                                                                        Another Image
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <img class="img-responsive" src="images/s4.jpg" alt="...">
                                                                    <div class="carousel-caption">
                                                                        Another Image
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Controls -->
                                                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                            </a>
                                                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="down-content" id="sundarban">
                                            <span>Sundarban</span>
                                            <a href="post-details.html">
                                                <h4>The Largest Mangrove Forest In The World.</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="https://en.wikipedia.org/wiki/Sundarbans" target="_blank" style="font-weight: bold;">Wikipedia</a></li>
                                                <li><a href="#">Date</a></li>
                                            </ul>
                                            <br>


                                            <!-- <p>summary</p> -->
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="post-tags" style="font-size:large;">
                                                            <li><i class="fa fa-tags"></i></li>
                                                            <li><a href="#">tag</a>,</li>
                                                            <!-- <li><a href="#">Nature</a></li> -->
                                                        </ul>
                                                    </div>

                                                    <div class="col-6">
                                                        <ul class="post-share">
                                                            <li><i class="fa fa-share-alt" style="font-size:large;"></i><a target="_blank" id="shareBtn">Share</a></li>
                                                            <!-- <li><a href="https://facebook.com" target="_blank" id="shareBtn">Facebook</a>,</li>
                                                        <li><a href="https://twitter.com" target="_blank" id="shareBtn"> Twitter</a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>



                                        </div>
                                        <div class="box_sundar">
                                            <img src="images/s1.jpg" alt="">
                                            <!-- <h4>Sundarban</h4> -->
                                            <br><br><br><br>
                                            <p>
                                                Sundarbans is the world's largest mangrove forest. It spans Bangladesh's districts of Khulna, Satkhira, Bagerhat, Patuakhali,
                                                and Barguna. The Sundarbans literally means "beautiful forest" in Bengali. However, the Sundarbans may have also been named from
                                                the Sundori tree, which grows abundantly there.

                                                Here you may hear monkeys shrieking, birds and peacocks chirping, deer howling, owls, bees buzzing, and the legendary <b>Royal
                                                    Bengal Tiger</b> roaring. Sundarbans also has 330 species of trees, 270 species of birds, 14 species of reptiles, 42 species of wild
                                                animals, 32 types of shrimp, and 200 species of fish. Because of the natural beauty of

                                                <span id="dots">...</span>


                                                <span>
                                                    Sundarbans is home to about 200 different types of fish, including shrimp. Tourists are drawn to the Sundarbans forest because of its \
                                                    picturesque appeal. Indeed, the number of tourists visiting the Sundarbans has surged more than ever in recent years. The greatest time of year to visit the Sundarbans is from mid-October to April....
                                                    <br><br>
                                                    The Sundarbans have various stunning locations.
                                                    <a href="#"> Hiron Point,</a>
                                                    <a href="#">Dubalar Char,</a>
                                                    <a href="#">Sharankhola,</a>
                                                    <a href="#">Chalkata,</a>
                                                    <a href="#">Tiger Point ,</a>
                                                    <a href="#">Tower,</a>
                                                    <a href="#">Tiger Point Sea Beach,</a>
                                                    <a href="#">Jamtala Sea Beach,</a>
                                                    <a href="#">Seven River Point,</a>
                                                    <a href="#">Kalirchar,</a> and others are among them.

                                                    <br><br>

                                                    The Royal Bengal Tiger is the Sundarbans' major draw. However, you must witness the tiger's footsteps in the Sundarbans. The footprints convey the impression that the tiger traveled through this
                                                    area not long ago. These footprints can also be photographed.

                                                    <br><br>

                                                    You can also pay a visit to the Dublar Char. Shutkipolli is the name given to this island in the Bay of Bengal. Every year during the fishing season, fishermen from all over the world gather here
                                                    to make temporary dwellings. They take a large number of fish from the sea and dry them before selling them in the market.

                                                    <br><br>
                                                    Pure water bottles, a fast-relief box for initial treatment, one pair of socks, cameras, radios, appropriate winter clothing, and so on are all essentials for Sundarbans travel.

                                                    <br><br>
                                                    In addition to this natural feature, Khulna has four other natural attractions. This district also has twelve attractions classified in other categories. The exact position of Sundarbans may be found on the map above.

                                                </span>
                                                <!-- <button id="btn" onclick="MoreLess()">Read More</button> -->

                                            </p>
                                            <btn href="javascript:void();" class="readmore-btn">Read More</btn>

                                        </div>


                                        <!-- Dublar Char Island Start -->


                                        <div class="down-content" id="dublarcor">
                                            <span>Dublar Char Island</span>
                                            <a href="post-details.html">
                                                <h4>The Largest Mangrove Forest In The World.</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="https://en.wikipedia.org/wiki/Dublar_Char" target="_blank" style="font-weight: bold;">Wikipedia</a></li>
                                                <li><a href="#">Date</a></li>
                                            </ul>
                                            <br>


                                            <!-- <p>summary</p> -->
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="post-tags" style="font-size:large;">
                                                            <li><i class="fa fa-tags"></i></li>
                                                            <li><a href="#">tag</a>,</li>
                                                            <!-- <li><a href="#">Nature</a></li> -->
                                                        </ul>
                                                    </div>

                                                    <div class="col-6">
                                                        <ul class="post-share">
                                                            <li><i class="fa fa-share-alt" style="font-size:large;"></i><a target="_blank" id="shareBtn">Share</a></li>
                                                            <!-- <li><a href="https://facebook.com" target="_blank" id="shareBtn">Facebook</a>,</li>
                                                        <li><a href="https://twitter.com" target="_blank" id="shareBtn"> Twitter</a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="box_sundar">
                                            <img src="images/dublar1.jpg" alt="">
                                            <!-- <h4>Sundarban</h4> -->
                                            <br><br><br><br>
                                            <p>
                                                The Sundarban is the world's largest single block of tidal halophytic mangrove forest. It can be found in Bangladesh. There are numerous tour
                                                destinations there. One of them is Dublar Char Island. Dublar Char, a lovely island recognized for its scenic scenery, is well-known for its
                                                fishing and is a haven for anglers with an abundance of fish fauna. One can go fishing here and have a firsthand taste of this exciting hobby.
                                                The island boasts all of the natural splendor of the world's most famous islands. River Passur flows on the island's eastern side, while River
                                                Shibsha flows on the western side. Furthermore, this island is well-known for its breathtaking views.
                                                <br><br>

                                                The island has all of the natural splendor of any world-renowned island. It is a beautiful island where herds of spotted deer can often be seen
                                                grazing. A leisurely walk around the island gives the traveller with the opportunity to see various wild animals. With water all around and a
                                                diverse fish species, Dublar Char provides an unforgettable experience to visitors.
                                                </span>
                                                <!-- <button id="btn" onclick="MoreLess()">Read More</button> -->
                                            </p>
                                            <btn href="javascript:void();" class="readmore-btn">Read More</btn>
                                        </div>

                                        <!-- Dublar Char Island end -->


                                        <!-- Karamjol Start -->


                                        <div class="down-content" id="karamjol">
                                            <span>Karamjol</span>
                                            <a href="post-details.html">
                                                <h4>A ranger station deep in the forest that serves as a deer-breeding center in Sundarban.</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#" target="_blank" style="font-weight: bold;">Wikipedia</a></li>
                                                <li><a href="#">Date</a></li>
                                            </ul>
                                            <br>


                                            <!-- <p>summary</p> -->
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="post-tags" style="font-size:large;">
                                                            <li><i class="fa fa-tags"></i></li>
                                                            <li><a href="#">tag</a>,</li>
                                                            <!-- <li><a href="#">Nature</a></li> -->
                                                        </ul>
                                                    </div>

                                                    <div class="col-6">
                                                        <ul class="post-share">
                                                            <li><i class="fa fa-share-alt" style="font-size:large;"></i><a target="_blank" id="shareBtn">Share</a></li>
                                                            <!-- <li><a href="https://facebook.com" target="_blank" id="shareBtn">Facebook</a>,</li>
                                                        <li><a href="https://twitter.com" target="_blank" id="shareBtn"> Twitter</a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="box_sundar">
                                            <img src="images/KARAMJOL.jpg" alt="">
                                            <!-- <h4>Sundarban</h4> -->
                                            <br><br><br><br>
                                            <p>
                                                Karmajal is a beautiful site to visit in Sundarban. Thousands of visitors flock to Karamjol, a ranger station deep in the forest that also acts
                                                as a deer breeding center, to admire and witness the most valuable species of wildlife in Bangladesh. Bangladesh boasts several amazing wildlife
                                                species that are unique to the country, and Karamjol is one of the entry points to the magnificent Sundarban nature sanctuary.
                                                <br><br>

                                                Visitors who want to see the spectacular wildlife of Bangladesh in Karamjol and Sundarban must first obtain permission from the Forest Officer
                                                before entering the forest, and Cholera vaccines must be taken before leaving for Karamjol. Dress appropriately for the tropical temperature,
                                                wear comfortable walking shoes or boots with rubber soles, bring plenty of drinking water, insect repellent, a medical kit, anti-diarrhea medication,
                                                and anti-malarial medication.
                                                <br><br>

                                                Guided excursions of the Sundarban Wildlife Sanctuary can be organized from Karamjol. Sundarban's 38 500 square kilometers were classified as a wildlife
                                                sanctuary in 1966, making hunting illegal. The primary goal of this national park is to preserve and conserve rare and endangered creatures such as Royal
                                                Tigers. Sundarban is relieved that an estimated 400 Royal Bengal Tigers now live in peace within the sanctuary, and the spotted deer population has
                                                increased to about 30,000 individuals.

                                                <br><br>
                                                Visitors will be able to see a wide variety of mammals, insects, bird species (260 species), reptiles, and fish (120 species). Visitors
                                                can expect to see Gangetic River Dophins, Salt-Water Crocodiles, deer, wild boar, ducks, sandpipers, moths, monkeys, snakes, foxes, and
                                                the elusive and graceful Royal Bengal Tiger. The serene rivers and lush woodlands immerse tourists into a magnificent nature paradise.
                                                <br><br>
                                                Karamjol and the Sundarban Wildlife Sanctuary's beautiful natural world await the daring wanderer. Standing in one of the world's
                                                largest mangrove belts, enigmatic forests and swamp area, and amidst the magnificent jungle of Bangladesh is an experience that will
                                                stay with people who visit for the rest of their lives.

                                                </span>
                                                <!-- <button id="btn" onclick="MoreLess()">Read More</button> -->
                                            </p>
                                            <btn href="javascript:void();" class="readmore-btn">Read More</btn>
                                        </div>

                                        <!-- Karamjol end -->

                                        <!-- hiron_point Start -->


                                        <div class="down-content" id="hiron_point">
                                            <span>Hiron Point</span>
                                            <a href="post-details.html">
                                                <h4>Hiron Point is a sanctuary, this place is a safe haven for tigers, deer, monkeys, birds, and reptiles.</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#" target="_blank" style="font-weight: bold;">Wikipedia</a></li>
                                                <li><a href="#">Date</a></li>
                                            </ul>
                                            <br>


                                            <!-- <p>summary</p> -->
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="post-tags" style="font-size:large;">
                                                            <li><i class="fa fa-tags"></i></li>
                                                            <li><a href="#">tag</a>,</li>
                                                            <!-- <li><a href="#">Nature</a></li> -->
                                                        </ul>
                                                    </div>

                                                    <div class="col-6">
                                                        <ul class="post-share">
                                                            <li><i class="fa fa-share-alt" style="font-size:large;"></i><a target="_blank" id="shareBtn">Share</a></li>
                                                            <!-- <li><a href="https://facebook.com" target="_blank" id="shareBtn">Facebook</a>,</li>
                                                        <li><a href="https://twitter.com" target="_blank" id="shareBtn"> Twitter</a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="box_sundar">
                                            <img src="images/hironpoint.jpg" alt="">
                                            <!-- <h4>Sundarban</h4> -->
                                            <br><br><br><br>
                                            <p>
                                                Hiron Point is a designated sanctuary in the Sundarbans' southern region. Nilkamol is another name for Nilkamol. The Khulna
                                                Range is located on the western bank of the Kunga River. Sundarbans, the world's biggest mangrove forest, is a UNESCO World Heritage Site.
                                                <br><br>

                                                As a sanctuary, Hiron Point provides a safe refuge for tigers, deer, monkeys, birds, and reptiles. As a result,
                                                it is one of the best spots in the Sundarbans to see the Royal Bengal Tiger and other live species.
                                                <br><br>

                                                Chitra deer, wild boar, and other Sundarbans creatures can be seen from Hiron Point. There are Halcyon,
                                                yellow chestnut Halcyon, blackhead fishery Halcyon, huge egret, medal buck, and other birds. There are numerous crab habitats.
                                                There are also different varieties of butterflies.

                                                <br><br>

                                                <b>Spots to Visit Near Hiron Point: </b><br><br>

                                                You can view some other interesting places if you travel to Hiron Point, which is part of Sundarbans. As an example,

                                                <br><br>
                                                1. Herbaria
                                                2. Verirkhal
                                                3. Nilkamol
                                                4. Triangle (Tinkona) Island
                                                5. Tiger Hill
                                                6. Jamtala Beach
                                                7. Watch Tower of Jamtala
                                                8. Katka Forest Office
                                                9. Gorar Ban

                                                <br><br>
                                                The trees of Keora and Golpata flank this area on both sides. In this area of Sundarbans, you will also encounter a variety of birds.


                                                <br><br>





                                                </span>
                                                <!-- <button id="btn" onclick="MoreLess()">Read More</button> -->
                                            </p>
                                            <btn href="javascript:void();" class="readmore-btn">Read More</btn>
                                        </div>

                                        <!-- Hiron Point end -->

                                        <!-- Kotka Beach Start -->


                                        <div class="down-content" id="Kotka">
                                            <span>Kotka Beach</span>
                                            <a href="post-details.html">
                                                <h4>Kotka beach is one of the most stunning tourist destinations in the Sundarbans.</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#" target="_blank" style="font-weight: bold;">Wikipedia</a></li>
                                                <li><a href="#">Date</a></li>
                                            </ul>
                                            <br>


                                            <!-- <p>summary</p> -->
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="post-tags" style="font-size:large;">
                                                            <li><i class="fa fa-tags"></i></li>
                                                            <li><a href="#">tag</a>,</li>
                                                            <!-- <li><a href="#">Nature</a></li> -->
                                                        </ul>
                                                    </div>

                                                    <div class="col-6">
                                                        <ul class="post-share">
                                                            <li><i class="fa fa-share-alt" style="font-size:large;"></i><a target="_blank" id="shareBtn">Share</a></li>
                                                            <!-- <li><a href="https://facebook.com" target="_blank" id="shareBtn">Facebook</a>,</li>
                                                        <li><a href="https://twitter.com" target="_blank" id="shareBtn"> Twitter</a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="box_sundar">
                                            <img src="images/kotkabetch.jpg" alt="">
                                            <!-- <h4>Sundarban</h4> -->
                                            <br><br><br><br>
                                            <p>
                                                Katka is one of Sunderban's heritage sites. Katka is a good base for safaris and a
                                                good place to see tigers and birds. Katka is well-known for its abundance of unusual
                                                and gorgeous wild creatures. At Katka, one can view a variety of wild animals ranging
                                                from tigers to deer, as well as various birds and monkeys. In the mornings and nights,
                                                one can hear nature's song mingled with wild fowls.
                                                <br><br>

                                                Kotka is also abundant in vegetation and animals. According to a survey, there are around 245 species
                                                and 334 varieties of plants in The Sundarbans. Furthermore, several extinct bird species such as the
                                                Grey Eagle, vultures, and hornbills. Kotka is home to about fifty different bird species.
                                                <br><br>

                                                The enormous expanse of grassy meadows extending from Katka to Kachikhali
                                                (Tiger Point) is a good path for individuals interested in animal trekking.
                                                If you are a daring visitor, you should not miss this location.

                                                </span>
                                                <!-- <button id="btn" onclick="MoreLess()">Read More</button> -->
                                            </p>
                                            <btn href="javascript:void();" class="readmore-btn">Read More</btn>
                                        </div>

                                        <!-- Kotka Beach end -->


                                        <!-- Harbaria Beach Start -->


                                        <div class="down-content" id="harbaria">
                                            <span>Harbaria</span>
                                            <a href="post-details.html">
                                                <h4>Harbaria Sundarban Eco-Tourism Center area is known as the house of the tiger and one of the dangerous areas in Sundarban. </h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#" target="_blank" style="font-weight: bold;">Wikipedia</a></li>
                                                <li><a href="#">Date</a></li>
                                            </ul>
                                            <br>


                                            <!-- <p>summary</p> -->
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="post-tags" style="font-size:large;">
                                                            <li><i class="fa fa-tags"></i></li>
                                                            <li><a href="#">tag</a>,</li>
                                                            <!-- <li><a href="#">Nature</a></li> -->
                                                        </ul>
                                                    </div>

                                                    <div class="col-6">
                                                        <ul class="post-share">
                                                            <li><i class="fa fa-share-alt" style="font-size:large;"></i><a target="_blank" id="shareBtn">Share</a></li>
                                                            <!-- <li><a href="https://facebook.com" target="_blank" id="shareBtn">Facebook</a>,</li>
                                                        <li><a href="https://twitter.com" target="_blank" id="shareBtn"> Twitter</a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="box_sundar">
                                            <img src="images/harbaria/Harbaria.jpg" alt="">
                                            <!-- <h4>Sundarban</h4> -->
                                            <br><br><br><br>
                                            <p>
                                                Harbaria Eco Tourism Center is the world's largest littoral mangrove forest. Sundarban
                                                is located in the Khulna Division. The Forest Department initiated the establishment
                                                of this center in the Chandpai Range. This center is around 70 kilometers from Khulna.
                                                The eco-tourism center's golden/green/red nameplate is located on the banks of the
                                                Harbaria canal. The forest office is a little ahead. A swinging bridge crosses
                                                a tiny canal at this tourism center. Across the hanging bridge lies a huge pond.
                                                In the middle of the pond is a resting spot with a small Golpata hut or pavilion.
                                                <br><br>

                                                There are benches all around the house where you can sit. A wooden bridge
                                                connects the pond's edge to the home. The pond was dug in 1997-98 as part
                                                of a Forest Department initiative in commemoration of Birshrestho Sipahi
                                                Mostafa Kalam. The one-kilometer wooden walking trail leads to a dense woodland.<a href="harbaria-sundarban-eco-tourism-place.php" style="font-weight:600;">>More Info</a>



                                                </span>
                                                <!-- <button id="btn" onclick="MoreLess()">Read More</button> -->
                                            </p>
                                            <btn href="javascript:void();" class="readmore-btn">Read More</btn>
                                        </div>

                                        <!-- Harbaria end -->

                                        <!-- tinkona Beach Start -->


                                        <div class="down-content" id="tinkona">
                                            <span>Tin Kona Island</span>
                                            <a href="post-details.html">
                                                <h4>Harbaria Sundarban Eco-Tourism Center area is known as the house of the tiger and one of the dangerous areas in Sundarban. </h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#" target="_blank" style="font-weight: bold;">Wikipedia</a></li>
                                                <li><a href="#">Date</a></li>
                                            </ul>
                                            <br>


                                            <!-- <p>summary</p> -->
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="post-tags" style="font-size:large;">
                                                            <li><i class="fa fa-tags"></i></li>
                                                            <li><a href="#">tag</a>,</li>
                                                            <!-- <li><a href="#">Nature</a></li> -->
                                                        </ul>
                                                    </div>

                                                    <div class="col-6">
                                                        <ul class="post-share">
                                                            <li><i class="fa fa-share-alt" style="font-size:large;"></i><a target="_blank" id="shareBtn">Share</a></li>
                                                            <!-- <li><a href="https://facebook.com" target="_blank" id="shareBtn">Facebook</a>,</li>
                                                        <li><a href="https://twitter.com" target="_blank" id="shareBtn"> Twitter</a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="box_sundar">
                                            <img src="images/tinkona.jpg" alt="">
                                            <!-- <h4>Sundarban</h4> -->
                                            <br><br><br><br>
                                            <p>
                                                Bangladesh is one of the most beautiful countries in the world.
                                                It offers numerous tourist attractions. All of the locations
                                                are quite appealing and popular. One of them is Sundarban.
                                                It is a more stunning location for tourists. The world's
                                                largest mangrove forest (140,000 ha). Sundarban is the
                                                home of the world-famous Royal Bengal Tiger, and it is
                                                home to approximately 400 tigers. Sundarban is home to
                                                approximately 30,000 lovely spotted deer. Sundarban has
                                                numerous tourist attractions. Tin Kona Island, which
                                                translates to "three-cornered Island," is another
                                                famous animal viewing location in Sundarbans.
                                                Tin Kona Island is highly known for its deer and tigers,
                                                and it is possible to see actual animals there. This island
                                                has an exquisite, but wild beauty that is intertwined with wild
                                                forests and estuaries.
                                                <br><br>

                                                Many people come to this island to get away from the hustle and
                                                bustle of city life and to find an ideal resting location surrounded
                                                by the wild beauty of forests and nature's bounties.



                                                </span>
                                                <!-- <button id="btn" onclick="MoreLess()">Read More</button> -->
                                            </p>
                                            <btn href="javascript:void();" class="readmore-btn">Read More</btn>
                                        </div>

                                        <!-- tinkona end -->

                                        <!-- tinkona Beach Start -->


                                        <div class="down-content" id="jamtala">
                                            <span>Beach in Sundarban Jamatola</span>
                                            <a href="post-details.html">
                                                <h4>Jamtala is one of the most attractive places near Katka</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#" target="_blank" style="font-weight: bold;">Wikipedia</a></li>
                                                <li><a href="#">Date</a></li>
                                            </ul>
                                            <br>


                                            <!-- <p>summary</p> -->
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="post-tags" style="font-size:large;">
                                                            <li><i class="fa fa-tags"></i></li>
                                                            <li><a href="#">tag</a>,</li>
                                                            <!-- <li><a href="#">Nature</a></li> -->
                                                        </ul>
                                                    </div>

                                                    <div class="col-6">
                                                        <ul class="post-share">
                                                            <li><i class="fa fa-share-alt" style="font-size:large;"></i><a target="_blank" id="shareBtn">Share</a></li>
                                                            <!-- <li><a href="https://facebook.com" target="_blank" id="shareBtn">Facebook</a>,</li>
                                                        <li><a href="https://twitter.com" target="_blank" id="shareBtn"> Twitter</a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="box_sundar">
                                            <img src="images/jamtala/jamtala1.jfif" alt="">
                                            <!-- <h4>Sundarban</h4> -->
                                            <br><br><br><br>
                                            <p>
                                                Jamtala is one of the most beautiful areas around Katka.
                                                Jamtala's observation tower. The Royal Bengal Tiger can
                                                be viewed again in the vast room from where there will
                                                be hundreds of deer sticks. The Badamtala is the name
                                                of the core location of Kanchikhali and Kutka. Badamtala
                                                is a deserted seaside resort.
                                                <br><br>
                                                <a href="sundarban-jamatola-beach-watchtower.php" style="font-weight:600;">>More Info</a>



                                                </span>
                                                <!-- <button id="btn" onclick="MoreLess()">Read More</button> -->
                                            </p>
                                            <btn href="javascript:void();" class="readmore-btn">Read More</btn>
                                        </div>

                                        <!-- Jamtala  end -->
                                    </div>


                                    <!-- sundarban end -->


                                </div>
                            </div>


                            <!-- <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="assets/images/blog-post-02.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>Healthy</span>
                                        <a href="post-details.html">
                                            <h4>Etiam id diam vitae lorem dictum</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 24, 2020</a></li>
                                            <li><a href="#">36 Comments</a></li>
                                        </ul>
                                        <p>You can support us by contributing a little via PayPal. Please contact <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">TemplateMo</a> via Live Chat or Email. If you have any question or feedback about this template, feel free to talk to us. Also, you may check other CSS templates such as <a rel="nofollow" href="https://templatemo.com/tag/multi-page" target="_parent">multi-page</a>, <a rel="nofollow" href="https://templatemo.com/tag/resume" target="_parent">resume</a>, <a rel="nofollow" href="https://templatemo.com/tag/video" target="_parent">video</a>, etc.</p>
                                        <div class="post-options">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-tags"></i></li>
                                                        <li><a href="#">Best Templates</a>,</li>
                                                        <li><a href="#">TemplateMo</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="post-share">
                                                        <li><i class="fa fa-share-alt"></i></li>
                                                        <li><a href="#">Facebook</a>,</li>
                                                        <li><a href="#">Twitter</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="assets/images/blog-post-03.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>Fashion</span>
                                        <a href="post-details.html">
                                            <h4>Donec tincidunt leo nec magna</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#">May 14, 2020</a></li>
                                            <li><a href="#">48 Comments</a></li>
                                        </ul>
                                        <p>Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.</p>
                                        <div class="post-options">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-tags"></i></li>
                                                        <li><a href="#">HTML CSS</a>,</li>
                                                        <li><a href="#">Photoshop</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="post-share">
                                                        <li><i class="fa fa-share-alt"></i></li>
                                                        <li><a href="#">Facebook</a>,</li>
                                                        <li><a href="#">Twitter</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-12">
                                <div class="main-button">
                                    <a href="blog.html">View All Posts</a>
                                </div>
                            </div> -->


                            <!-- Frequently Asked Questions start -->
                            <div class="col-lg-12">
                                <div class="sidebar-item comments">
                                    <div class="content">
                                        <ul>
                                            <div class="sidebar-item tags">
                                                <div class="sidebar-heading">
                                                    <h2>Frequently Asked Questions About Bangladesh's Sundarban Mangrove Forest </h2>
                                                    <!-- <h3>Find More Information Place by Place</h3> -->
                                                </div>
                                                <div class="content">
                                                    <div class="accordion">
                                                        <div class="accordion-item">
                                                            <div class="accordion-item-header">
                                                                <a>How do you get from Dhaka to the Sundarbans?</a>
                                                            </div>
                                                            <div class="accordion-item-body">
                                                                <div class="accordion-item-body-content">
                                                                    The Sundarbans can be reached in a variety of ways.
                                                                    It is up to tourists to decide which method to enter.
                                                                    However, the majority of visitors enter through Khulna.
                                                                    This is the most convenient and cost-effective method.
                                                                    You may get from Dhaka to Khulna by bus, train, or launch.
                                                                </div>
                                                                <div class="accordion-item-body-content">
                                                                    The buses to Khulna run from 6 a.m. to 11 p.m.
                                                                    Dhaka to Khulna by road takes 7 hours and 45 minutes.
                                                                    Varied firms' launches leave Dhaka's Sadarghat Launch
                                                                    Terminal on a daily basis for Khulna.
                                                                </div>
                                                                <div class="accordion-item-body-content">
                                                                    The non-AC bus fare from Khulna is roughly BDT 600-700,
                                                                    while the AC bus fare is around BDT 1400. You must exit
                                                                    the bus and take a rickshaw or an auto to the launch ghat.
                                                                    And if you take the train to Khulna, you don't have to get
                                                                    out at the station and take the car because the station and
                                                                    the launch port are close together. There are buses that
                                                                    run directly from Sayedabad to Mongla. These semi-chair
                                                                    coach buses depart between 8 and 8.30 p.m. and arrive
                                                                    in Mongla between 5 and 6 a.m. BDT 450 is the fare.
                                                                </div>
                                                                <div class="accordion-item-body-content">
                                                                    Visitors can also call tour firms to have a hassle-free
                                                                    and cost-effective tour experience. </div>
                                                                <div class="accordion-item-header">
                                                                    <a>How do you reach Sundarbans from you district?</a>
                                                                </div>
                                                                <div class="accordion-item-body-content">
                                                                    follow map and added map
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <div class="accordion-item-header">
                                                                <a>What hotels are in close proximity to Sundarban?</a>
                                                            </div>
                                                            <div class="accordion-item-body">
                                                                <div class="accordion-item-body-content">
                                                                    There are various locations to stay in the Sundarbans,
                                                                    including Nilkamal at Hiran Point, Kachikhali at Tiger
                                                                    Point, and the Forest Department Rest House at Katka.
                                                                    Staying at Nilkamal costs BDT 3,000 per room for domestic
                                                                    tourists and BDT 5,000 for foreigners. Each room at
                                                                    Kachikhali will cost BDT 3,000, with foreigners paying
                                                                    BDT 5,000. Foreigners will pay BDT 5,000 per room in
                                                                    Katka, while locals would pay BDT 2,000.
                                                                    <a href="https://www.google.com/travel/hotels/Sundarbans?q=near%20hotel%20in%20sundarban&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4515404%2C4597339%2C4649665%2C4703207%2C4718358%2C4722900%2C4723331%2C4741665%2C4757164%2C4758493%2C4762561%2C4779784%2C4786958%2C4790928%2C4794648%2C4812027%2C4812118%2C4812573%2C4813183%2C4814050&hl=en-BD&gl=bd&ssta=1&ts=CAESCgoCCAMKAggDEAAaLgoQEgw6ClN1bmRhcmJhbnMaABIaEhQKBwjmDxAHGBcSBwjmDxAHGBgYATICEAAqCwoHKAE6A0JEVBoA&rp=OAFAAEgCogEKU3VuZGFyYmFucw&ap=SAAwA2gB&ictx=1&ved=0CAAQ5JsGahgKEwjoz8SlhoP5AhUAAAAAHQAAAAAQugI&utm_campaign=sharing&utm_medium=link&utm_source=htls" target="_blank">Find More Hotels for your chooose Go here</a>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <div class="accordion-item-header">
                                                                <a>When Is the Best Time to Visit Sundarbans?</a>
                                                            </div>
                                                            <div class="accordion-item-body">
                                                                <div class="accordion-item-body-content">
                                                                    <ul style="padding-left: 1rem;">
                                                                        <li>Sundarbans can be visited at any time of year.
                                                                            The greatest time to visit the Sundarbans,
                                                                            however, is from mid-October to mid-April.
                                                                            This is the peak season for travelers to visit
                                                                            this lovely woodland.</li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <div class="accordion-item-header">
                                                                What restaurants are close to Sunsarban?
                                                            </div>
                                                            <div class="accordion-item-body">
                                                                <div class="accordion-item-body-content">
                                                                    <ul style="padding-left: 1rem;">
                                                                        <li>.Rovers Cafe (0.1 miles from Sundarbans)</li>
                                                                        <li>.Citylight Cafe & Restaurant (0.3 miles from Sundarbans)</li>
                                                                        <li>.Mughal's Dine (0.3 miles from Sundarbans)</li>
                                                                        <li>.Bistro C (0.3 miles from Sundarbans)</li>
                                                                        <li>.We Hungry (0.5 miles from Sundarbans)</li>
                                                                        <li>.Pasta Express (0.4 miles from Sundarbans)</li>
                                                                        <li>.New Azmiri Grill & Bar-B-Q (0.5 miles from Sundarbans)</li>
                                                                        <li>.KFC Khulna (0.6 miles from Sundarbans)</li>
                                                                        <li>.Deshi Kitchen (0.9 miles from Sundarbans)</li>
                                                                        <li>.Shawarma House (1 miles from Sundarbans)</li>
                                                                        <li>.Kababz(1 miles from Sundarbans)</li>
                                                                        <li>.Pizzaology (1.1 miles from Sundarbans)</li>
                                                                        <li>.Guhaa Restaurant (1.2 miles from Sundarbans)</li>
                                                                        <li>.Foodsta (1.6 miles from Sundarbans)</li>
                                                                        <li>.Safe'n'Save (3.3 miles from Sundarbans)</li>
                                                                        <li>.Sureswar Hotel and Restaurant (3.6 miles from Sundarbans)</li>
                                                                        <li>.Mejban bari (5.5 miles from Sundarbans)</li>
                                                                        <li>.castle Salam (8.4 miles from Sundarbans)</li>
                                                                        <li>.Al Jamil's Fish Grill (8.4 miles from Sundarbans)</li>
                                                                        <li>.Firefly Restaurant (8.4 miles from Sundarbans)</li>


                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <div class="accordion-item-header">
                                                                next work add new pages khulna all site like tripadivisor.
                                                            </div>
                                                            <div class="accordion-item-body">
                                                                <div class="accordion-item-body-content">
                                                                    CORS, aka Cross-Origin Resource Sharing, is a mechanism that enables many resources (e.g. images, stylesheets, scripts, fonts) on a web page to be requested from another domain outside the domain from which the resource originated.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Frequently Asked Questions end -->




                            <div class="col-lg-12">
                                <div class="sidebar-item comments">
                                    <div class="sidebar-heading">
                                        <h2>4 comments</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <div class="author-thumb">
                                                    <img src="assets/images/comment-author-01.jpg" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h4>Charles Kate<span>May 16, 2020</span></h4>
                                                    <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                                                </div>
                                            </li>
                                            <li class="replied">
                                                <div class="author-thumb">
                                                    <img src="assets/images/comment-author-02.jpg" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h4>Thirteen Man<span>May 20, 2020</span></h4>
                                                    <p>In porta urna sed venenatis sollicitudin. Praesent urna sem, pulvinar vel mattis eget.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="author-thumb">
                                                    <img src="assets/images/comment-author-03.jpg" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                                                    <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                                                </div>
                                            </li>
                                            <li class="replied">
                                                <div class="author-thumb">
                                                    <img src="assets/images/comment-author-02.jpg" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h4>Thirteen Man<span>May 22, 2020</span></h4>
                                                    <p>Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item submit-comment">
                                    <div class="sidebar-heading">
                                        <h2>Your comment</h2>
                                    </div>
                                    <div class="content">
                                        <form id="comment" action="#" method="post">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="name" type="text" id="name" placeholder="Your name" required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="email" type="text" id="email" placeholder="Your email" required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <fieldset>
                                                        <input name="subject" type="text" id="subject" placeholder="Subject">
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <textarea name="message" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <button type="submit" id="form-submit" class="main-button">Submit</button>
                                                    </fieldset>
                                                    <br><br>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar-item search">
                                    <form id="search_form" name="gs" method="GET" action="#">
                                        <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sidebar-item categories">
                                    <div class="sidebar-heading">
                                        <h2>Google map</h2>
                                    </div>
                                    <div class="content">
                                        <div id="map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">

                                <div class="sidebar-item recent-posts">
                                    <div class="sidebar-heading">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div class="card align-items-center" style="max-width: 540px;">
                                        <img src="images/s1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#sundarban" style="font-size: 15px;" class="card-title">Sundarban</a>
                                            <p class="card-text">Sundarbans Is The World's Largest Mangrove Forest... </p>
                                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                        </div>
                                    </div>
                                    <div class="card align-items-center" style="max-width: 540px;">
                                        <img src="images/dublar1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#dublar" style="font-size: 15px;" class="card-title">DUBLAR CHAR ISLAND</a>
                                            <p class="card-text">The Sundarban Is The World's Largest Single Block Of Tidal Halophytic Mangrove Forest. ... </p>
                                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                        </div>
                                    </div>

                                    <div class="card align-items-center" style="max-width: 540px;">
                                        <img src="images/KARAMJOL.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#karamjal" style="font-size: 15px;" class="card-title">KARAMJOL</a>
                                            <p class="card-text">Karmajal Is A Beautiful Site To Visit In Sundarban. ... </p>
                                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                        </div>
                                    </div>

                                    <div class="card align-items-center" style="max-width: 540px;">
                                        <img src="images/hironpoint.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#hiron_point" style="font-size: 15px;" class="card-title">HIRON POINT</a>
                                            <p class="card-text">Hiron Point Is A Designated Sanctuary In The Sundarbans' Southern Region. ... </p>
                                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                        </div>
                                    </div>

                                    <div class="card align-items-center" style="max-width: 540px;">
                                        <img src="images/kotkabetch.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#sundarban" style="font-size: 15px;" class="card-title">KOTKA BEACH</a>
                                            <p class="card-text">Katka Is One Of Sunderban's Heritage Sites. Katka Is A Good Base For Safaris And A Good Place To See Tigers And Birds. .. </p>
                                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                        </div>
                                    </div>

                                    <div class="card align-items-center" style="max-width: 540px;">
                                        <img src="images/jamtala/Harbaria.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#harbaria" style="font-size: 15px;" class="card-title">HARBARIA</a>
                                            <p class="card-text">Harbaria Eco Tourism Center Is The World's Largest Littoral Mangrove Forest. Sundarban Is Located In The Khulna Division... </p>
                                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                        </div>
                                    </div>

                                    <div class="card align-items-center" style="max-width: 540px;">
                                        <img src="images/tinkona.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#tinkona" style="font-size: 15px;" class="card-title">TIN KONA ISLAND</a>
                                            <p class="card-text">Bangladesh Is One Of The Most Beautiful Countries In The World. It Offers Numerous Tourist Attractions... </p>
                                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                        </div>
                                    </div>

                                    <div class="card align-items-center" style="max-width: 540px;">
                                        <img src="images/jamtala1 (1).jfif" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a href="#jamtola" style="font-size: 15px;" class="card-title">BEACH IN SUNDARBAN JAMATOLA</a>
                                            <p class="card-text">Jamtala Is One Of The Most Beautiful Areas Around Katka. Jamtala's Observation Tower... </p>
                                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-12" id=moreplace>
                                <div class="sidebar-item tags">
                                    <div class="sidebar-heading">
                                        <h2>Tag Clouds </h2>
                                        <h3>Find More Information Place by Place</h3>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <!-- <a href="sundarban-bangladesh" style="color:#ff3300; " <i class="fa fa-external-link"></i>>You see more tourist place under Sundarban</a> -->
                                            <li><a href="Khulna-Sundarban-bangladesh.php">-Sundarban's All-You can see more tourist place under Sundarban</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="sidebar-item tags">
                                    <div class="sidebar-heading">
                                        <h2>Frequently Asked Questions About Bangladesh's Sundarban Mangrove Forest </h2>
                                        <!-- <h3>Find More Information Place by Place</h3> -->
                                    </div>
                                    <div class="content">
                                        <div class="accordion">
                                            <div class="accordion-item">
                                                <div class="accordion-item-header">
                                                    <a>How do you get from Dhaka to the Sundarbans?</a>
                                                </div>
                                                <div class="accordion-item-body">
                                                    <div class="accordion-item-body-content">
                                                        The Sundarbans can be reached in a variety of ways.
                                                        It is up to tourists to decide which method to enter.
                                                        However, the majority of visitors enter through Khulna.
                                                        This is the most convenient and cost-effective method.
                                                        You may get from Dhaka to Khulna by bus, train, or launch.
                                                    </div>
                                                    <div class="accordion-item-body-content">
                                                        The buses to Khulna run from 6 a.m. to 11 p.m.
                                                        Dhaka to Khulna by road takes 7 hours and 45 minutes.
                                                        Varied firms' launches leave Dhaka's Sadarghat Launch
                                                        Terminal on a daily basis for Khulna.
                                                    </div>
                                                    <div class="accordion-item-body-content">
                                                        The non-AC bus fare from Khulna is roughly BDT 600-700,
                                                        while the AC bus fare is around BDT 1400. You must exit
                                                        the bus and take a rickshaw or an auto to the launch ghat.
                                                        And if you take the train to Khulna, you don't have to get
                                                        out at the station and take the car because the station and
                                                        the launch port are close together. There are buses that
                                                        run directly from Sayedabad to Mongla. These semi-chair
                                                        coach buses depart between 8 and 8.30 p.m. and arrive
                                                        in Mongla between 5 and 6 a.m. BDT 450 is the fare.
                                                    </div>
                                                    <div class="accordion-item-body-content">
                                                        Visitors can also call tour firms to have a hassle-free
                                                        and cost-effective tour experience. </div>
                                                    <div class="accordion-item-header">
                                                        <a>How do you reach Sundarbans from you district?</a>
                                                    </div>
                                                    <div class="accordion-item-body-content">
                                                        follow map and added map
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-item-header">
                                                    <a>What hotels are in close proximity to Sundarban?</a>
                                                </div>
                                                <div class="accordion-item-body">
                                                    <div class="accordion-item-body-content">
                                                        There are various locations to stay in the Sundarbans,
                                                        including Nilkamal at Hiran Point, Kachikhali at Tiger
                                                        Point, and the Forest Department Rest House at Katka.
                                                        Staying at Nilkamal costs BDT 3,000 per room for domestic
                                                        tourists and BDT 5,000 for foreigners. Each room at
                                                        Kachikhali will cost BDT 3,000, with foreigners paying
                                                        BDT 5,000. Foreigners will pay BDT 5,000 per room in
                                                        Katka, while locals would pay BDT 2,000.
                                                        <a href="https://www.google.com/travel/hotels/Sundarbans?q=near%20hotel%20in%20sundarban&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4515404%2C4597339%2C4649665%2C4703207%2C4718358%2C4722900%2C4723331%2C4741665%2C4757164%2C4758493%2C4762561%2C4779784%2C4786958%2C4790928%2C4794648%2C4812027%2C4812118%2C4812573%2C4813183%2C4814050&hl=en-BD&gl=bd&ssta=1&ts=CAESCgoCCAMKAggDEAAaLgoQEgw6ClN1bmRhcmJhbnMaABIaEhQKBwjmDxAHGBcSBwjmDxAHGBgYATICEAAqCwoHKAE6A0JEVBoA&rp=OAFAAEgCogEKU3VuZGFyYmFucw&ap=SAAwA2gB&ictx=1&ved=0CAAQ5JsGahgKEwjoz8SlhoP5AhUAAAAAHQAAAAAQugI&utm_campaign=sharing&utm_medium=link&utm_source=htls" target="_blank">Find More Hotels for your chooose Go here</a>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-item-header">
                                                    <a>When Is the Best Time to Visit Sundarbans?</a>
                                                </div>
                                                <div class="accordion-item-body">
                                                    <div class="accordion-item-body-content">
                                                        <ul style="padding-left: 1rem;">
                                                            <li>Sundarbans can be visited at any time of year.
                                                                The greatest time to visit the Sundarbans,
                                                                however, is from mid-October to mid-April.
                                                                This is the peak season for travelers to visit
                                                                this lovely woodland.</li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-item-header">
                                                    What restaurants are close to Sunsarban?
                                                </div>
                                                <div class="accordion-item-body">
                                                    <div class="accordion-item-body-content">
                                                        <ul style="padding-left: 1rem;">
                                                            <li>.Rovers Cafe (0.1 miles from Sundarbans)</li>
                                                            <li>.Citylight Cafe & Restaurant (0.3 miles from Sundarbans)</li>
                                                            <li>.Mughal's Dine (0.3 miles from Sundarbans)</li>
                                                            <li>.Bistro C (0.3 miles from Sundarbans)</li>
                                                            <li>.We Hungry (0.5 miles from Sundarbans)</li>
                                                            <li>.Pasta Express (0.4 miles from Sundarbans)</li>
                                                            <li>.New Azmiri Grill & Bar-B-Q (0.5 miles from Sundarbans)</li>
                                                            <li>.KFC Khulna (0.6 miles from Sundarbans)</li>
                                                            <li>.Deshi Kitchen (0.9 miles from Sundarbans)</li>
                                                            <li>.Shawarma House (1 miles from Sundarbans)</li>
                                                            <li>.Kababz(1 miles from Sundarbans)</li>
                                                            <li>.Pizzaology (1.1 miles from Sundarbans)</li>
                                                            <li>.Guhaa Restaurant (1.2 miles from Sundarbans)</li>
                                                            <li>.Foodsta (1.6 miles from Sundarbans)</li>
                                                            <li>.Safe'n'Save (3.3 miles from Sundarbans)</li>
                                                            <li>.Sureswar Hotel and Restaurant (3.6 miles from Sundarbans)</li>
                                                            <li>.Mejban bari (5.5 miles from Sundarbans)</li>
                                                            <li>.castle Salam (8.4 miles from Sundarbans)</li>
                                                            <li>.Al Jamil's Fish Grill (8.4 miles from Sundarbans)</li>
                                                            <li>.Firefly Restaurant (8.4 miles from Sundarbans)</li>


                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-item-header">
                                                    next work add new pages khulna all site like tripadivisor.
                                                </div>
                                                <div class="accordion-item-body">
                                                    <div class="accordion-item-body-content">
                                                        CORS, aka Cross-Origin Resource Sharing, is a mechanism that enables many resources (e.g. images, stylesheets, scripts, fonts) on a web page to be requested from another domain outside the domain from which the resource originated.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>
        function initMap() {

            var options = {
                center: {
                    lat: 23.810331,
                    lng: 90.412521
                },
                zoom: 8
            }

            map = new google.maps.Map(document.getElementById("map"),
                options)

        }
        // read more start
        $(".readmore-btn").on('click', function() {
            $(this).parent().toggleClass("showContent");

        });

        // read more end


        //share link start



        const shareBtn = document.getElementById('shareBtn')

        shareBtn.addEventListener('click', event => {

            // Check for Web Share api support
            if (navigator.share) {
                // Browser supports native share api
                navigator.share({
                        text: 'Please read this great article: ',
                        url: 'https://www.google.com/'
                    }).then(() => {
                        console.log('Thanks for sharing!');
                    })
                    .catch((err) => console.error(err));
            } else {
                // Fallback
                alert("The current browser does not support the share function. Please, manually share the link")
            }
        });

        //share link end

        //FAQ drop down button Start

        const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

        accordionItemHeaders.forEach(accordionItemHeader => {
            accordionItemHeader.addEventListener("click", event => {

                // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

                // const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
                // if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
                //   currentlyActiveAccordionItemHeader.classList.toggle("active");
                //   currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
                // }

                accordionItemHeader.classList.toggle("active");
                const accordionItemBody = accordionItemHeader.nextElementSibling;
                if (accordionItemHeader.classList.contains("active")) {
                    accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
                } else {
                    accordionItemBody.style.maxHeight = 0;
                }

            });
        });


        //FAQ dero down end
    </script>





    <!-- all blog end -->



    <!--- /footer-top ---->
    <?php include('includes/footer.php'); ?>
    <!-- signup -->
    <?php include('includes/signup.php'); ?>
    <!-- //signu -->
    <!-- signin -->
    <?php include('includes/signin.php'); ?>
    <!-- //signin -->
    <!-- write us -->
    <?php include('includes/write-us.php'); ?>
    <!-- //write us -->

    <script src="assets/js/jquery-3.4.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/material-scrolltop.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- owl carousal js link -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- owl carousal js link end-->

    <!-- swiper cdn js link -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- swiper cdn js link end -->

    <!-- jquery cdn link -->
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>


    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSqqwDUOH0FFgKk_9oTcPOKikHcQg47j4&callback=initMap">
    </script>



    <!-- jquery cdn link end-->

    <!-- ndgallery er jonno magnific popup js cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- ndgallery er jonno magnific popup js cdn link end -->





    <script src="js/suggestions.js"></script>
    <script src="js/scriptt.js"></script>
    <script src="js/mapapp.js"></script>
    <!-- <button class="material-scrolltop" type="button">
        <span>↑</span>
    </button> -->
</body>

</html>