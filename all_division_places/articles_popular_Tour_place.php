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
    <link rel="stylesheet" href="css/popular_place.css">

    <link rel="stylesheet" href="css/indexx.css">
    <link rel="stylesheet" href="../all_division_placescss/includes/places.css">
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
        height: 135px;
        overflow: hidden;
    }

    .box_sundar btn {
        display: inline-block;
        color: #fff;
        background-color: #ff3300;
        text-decoration: none;
        font-size: 15px;
        padding: 1.5px 5px;
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
        min-height: 4.5rem;
        line-height: 1.25rem;
        font-weight: bold;
        font-size: 15px;
        display: flex;
        align-items: center;
        position: relative;
        cursor: pointer;
    }

    .accordion-item-header:hover {
        background-color: #ff3300;
    }

    .accordion-item-header::after {
        content: "\002B";
        font-size: 3rem;
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
        line-height: 2.5rem;
        border-top: 1px solid;
        border-image: linear-gradient(to right, transparent, #34495e, transparent) 1;
        font-size: 13px;
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

    /* place start header  */
    header2 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 15px;

    }

    header2 ul {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    header2 ul li {
        position: relative;
        list-style: none;
    }

    header2 ul li a {
        position: relative;
        margin: 0 5px;
        text-decoration: none;
        color: #fff;
        letter-spacing: 1px;
        font-weight: 500px;
        font-weight: bold;
    }

    header2 ul li a:hover {
        background-color: #ff3300;

    }

    /* place end header */

    /* gallery here popular place start */
    .container_popular {
        margin-top: 3%;
    }

    .card_popular {
        position: relative;
        overflow: hidden;

    }

    .card_popular:before {
        position: absolute;
        content: '';
        width: 80%;
        height: 220%;
        background: rgba(235, 53, 131, 0.7);
        top: -50%;
        left: -100%;
        z-index: 1;
        transform: rotate(25deg);
        transform-origin: center top 0;
        transition: .5s;
    }

    .card_popular:hover:before {
        left: 10%;

    }

    .card_popular img {
        width: 100%;
        height: 200px;
    }

    .card-text-popular {
        width: 100%;
        padding: 0 20%;
        position: absolute;
        top: -100%;
        color: #fff;
        left: 0;
        z-index: 2;
        transition: 1.1s;
    }

    .card-text-popular h3 {
        font-family: poppins;
        font-size: 25px;
    }

    .card_popular:hover .card-text-popular {
        top: 80px;
    }


    /* galleru here popupar place end */

    /* popular place by division start */
    .province-list li {
        color: #ff3300;
    }

    .province-list li {
        padding: 10px;
        border-right: 2px solid #fff;
        border-left: 2px solid #fff;
        margin-bottom: 4px;
        background-color: #f9faf1;
        text-align: center;
        color: black;
        font-size: 13px;
    }

    .province-list li:hover {
        background-color: #ff3300;
    }

    .col-xs-6 {
        width: 50%;
    }

    lg-1,
    .col-xs-2,
    .col-sm-2,
    .col-md-2,
    .col-lg-2,
    .col-xs-3,
    .col-sm-3,
    .col-md-3,
    .col-lg-3,
    .col-xs-4,
    .col-sm-4,
    .col-md-4,
    .col-lg-4,
    .col-xs-5,
    .col-sm-5,
    .col-md-5,
    .col-lg-5,
    .col-xs-6,
    .col-sm-6,
    .col-md-6,
    .col-lg-6,
    .col-xs-7,
    .col-sm-7,
    .col-md-7,
    .col-lg-7,
    .col-xs-8,
    .col-sm-8,
    .col-md-8,
    .col-lg-8,
    .col-xs-9,
    .col-sm-9,
    .col-md-9,
    .col-lg-9,
    .col-xs-10,
    .col-sm-10,
    .col-md-10,
    .col-lg-10,
    .col-xs-11,
    .col-sm-11,
    .col-md-11,
    .col-lg-11,
    .col-xs-12,
    .col-sm-12,
    .col-md-12,
    .col-lg-12 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .col-xs-1,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12 {
        float: left;
    }

    .province-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    /* popular place by division end */
</style>

<body>
    <?php include('includes/header.php'); ?>
    <br><br><br><br><br><br>
    <!-- <div class="banner-3">
        <div class="container">
            <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TMS- Find Route Services
            </h1>
        </div>
    </div> -->







    <section id="#" class="container list-group list-group-flush" style="margin-bottom:-100px">


        <br><br><br><br>
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark">
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
                <section>
                    <header2>
                        <ul class="navbar-toggler">
                            <li><a href="museums_popular_Tour_place.php">Museums</a></li>
                            <li><a href="parks_popular_Tour_place.php">Parks</a></li>
                            <li><a href="landmarks_popular_Tour_place.php">Landmarks</a></li>
                            <li><a href="nature_attraction_popular_Tour_place.php">Attractions in Nature</a></li>
                            <li><a href="zoo_popular_Tour_place.php">Zoos</a></li>
                            <li><a href="articles_popular_Tour_place.php">Articles</a></li>
                        </ul>
                    </header2>
                </section>

        </div>
        <div class="page-content" style="margin-top:-20px;margin-bottom:-10px;height: auto !important; min-height: 0px !important;">


            <div class="bc-links">
                <ol class="breadcrumb">
                    <li style="font-size:15px;">
                        <a href="index_popular_Tour_place.php">Home</a>
                    </li>
                    <li class="active" style="font-size:15px;">
                        Articles
                    </li>
                </ol>
            </div>

        </div>



        <!-- <h1 style="color:blue;text-align:center;font-weight: bold;">Most Beautiful Places under <span style="color:#ff3300;">Sundarban</span> </h1> -->
        <!-- <h3 style="text-align: center;">this all photos are Khulna division</h3> -->
        <!-- <hr class="mb-5" /> -->
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

                                    <div class="blog-thumb">


                                        <div class="down-content" id="#">
                                            <h2 style="margin-left: -30px;">Articles</h2>
                                        </div>
                                        <div class="box_sundar">
                                            <!-- <h4>Sundarban</h4> -->
                                            <p style="margin-top:15px;">
                                                This section contains a large number of articles about travel and tourism in Bangladesh. Read them to learn essential information, suggestions, and insights about numerous tourist destinations, attractions, and related services in Bangladesh.

                                                <!-- <button id="btn" onclick="MoreLess()">Read More</button> -->

                                            </p>
                                            <btn href="javascript:void();" class="readmore-btn" style="border-radius:3px;">Read More</btn>

                                        </div>
                                    </div>
                                    <!-- <div class="down-content" id="#">
                                        <h2 style="margin-left: -30px;">Explore Tourist Attractions in the Following Categories</h2>
                                    </div>
                                    <div class="box_sundar">

                                    </div> -->
                                    <!-- sundarban end -->
                                </div>
                            </div>


                            <!--- /banner ---->
                            <!--- rooms ---->


                            <div class="room-bottom">

                                <div class="rom-btm">
                                    <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                                        <img src="images/p1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="room-midle wow fadeInUp animated" data-wow-delay=".5s">
                                        <h3 style="font-size:20px;display:flex;">Kuakata Travel Guide</h3>

                                    </div>
                                    <p>Kuakata is famous for its beautiful beach, the skyline over
                                        the Bay of Bengal and the mangrove forest. Find other top
                                        attractions of Kuakata besides the beach, how to go there,
                                        and other useful information before you have a trip to Kuakata. <a href="#">[Read More]</a></p>
                                    <!-- <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                                        <a href="#" class="view">Details</a>
                                    </div> -->
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="room-bottom">

                                <div class="rom-btm">
                                    <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                                        <img src="images/p1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="room-midle wow fadeInUp animated" data-wow-delay=".5s">
                                        <h3 style="font-size:20px;display:flex;">Kuakata Travel Guide</h3>

                                    </div>
                                    <p>Kuakata is famous for its beautiful beach, the skyline over
                                        the Bay of Bengal and the mangrove forest. Find other top
                                        attractions of Kuakata besides the beach, how to go there,
                                        and other useful information before you have a trip to Kuakata. <a href="#">[Read More]</a></p>
                                    <!-- <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                                        <a href="#" class="view">Details</a>
                                    </div> -->
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="room-bottom">

                                <div class="rom-btm">
                                    <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                                        <img src="images/p1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="room-midle wow fadeInUp animated" data-wow-delay=".5s">
                                        <h3 style="font-size:20px;display:flex;">Kuakata Travel Guide</h3>

                                    </div>
                                    <p>Kuakata is famous for its beautiful beach, the skyline over
                                        the Bay of Bengal and the mangrove forest. Find other top
                                        attractions of Kuakata besides the beach, how to go there,
                                        and other useful information before you have a trip to Kuakata. <a href="#">[Read More]</a></p>
                                    <!-- <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                                        <a href="#" class="view">Details</a>
                                    </div> -->
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="room-bottom">

                                <div class="rom-btm">
                                    <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                                        <img src="images/p1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="room-midle wow fadeInUp animated" data-wow-delay=".5s">
                                        <h3 style="font-size:20px;display:flex;">Kuakata Travel Guide</h3>

                                    </div>
                                    <p>Kuakata is famous for its beautiful beach, the skyline over
                                        the Bay of Bengal and the mangrove forest. Find other top
                                        attractions of Kuakata besides the beach, how to go there,
                                        and other useful information before you have a trip to Kuakata. <a href="#">[Read More]</a></p>
                                    <!-- <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                                        <a href="#" class="view">Details</a>
                                    </div> -->
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="room-bottom">

                                <div class="rom-btm">
                                    <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                                        <img src="images/p1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="room-midle wow fadeInUp animated" data-wow-delay=".5s">
                                        <h3 style="font-size:20px;display:flex;">Kuakata Travel Guide</h3>

                                    </div>
                                    <p>Kuakata is famous for its beautiful beach, the skyline over
                                        the Bay of Bengal and the mangrove forest. Find other top
                                        attractions of Kuakata besides the beach, how to go there,
                                        and other useful information before you have a trip to Kuakata. <a href="#">[Read More]</a></p>
                                    <!-- <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                                        <a href="#" class="view">Details</a>
                                    </div> -->
                                    <div class="clearfix"></div>
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
                                        <h2>Frequently Asked Questions About Bangladesh's Tourist places </h2>
                                    </div>
                                    <p>The articles that follow will give you with interesting information, valuable advice, and insights into tourist destinations in Bangladesh.</p>
                                    <div class="content">
                                        <div class="accordion">
                                            <div class="accordion-item">
                                                <div class="accordion-item-header">
                                                    <a>Why do you visit this website?</a>
                                                </div>
                                                <div class="accordion-item-body">
                                                    <div class="accordion-item-body-content">
                                                        This webpage makes it simple to discover major tourist destinations such as <a href="#">MUSEUMS</a>,
                                                        <a href="#">PARKS</a>, <a href="#">LANDMARKS</a>,
                                                        <a href="#">NATURAL ATTRACTIONS</a>,
                                                        <a href="#">Zoo</a>, and read
                                                        <a href="#">ARTICLES</a>.
                                                        and also discover all places <a href="#place_division">SEARCH BY PLACES BY DIVISION</a>.
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-item-header">
                                                    <a>What hotels are in close proximity to your location?</a>
                                                </div>
                                                <div class="accordion-item-body">
                                                    <div class="accordion-item-body-content">
                                                        You can see all the hotels thats your choose.
                                                        <a href="#" target="_blank">Find More Hotels for your chooose Go here</a>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-item-header">
                                                    <a>When Is the Best Time to Visit Bangladesh tour places?</a>
                                                </div>
                                                <div class="accordion-item-body">
                                                    <div class="accordion-item-body-content">
                                                        <ul style="padding-left: 1rem;">
                                                            <li>The Winter Season, From October To February,
                                                                Is Often Regarded As The Ideal Time To Visit Bangladesh
                                                                Because The Weather Is Dry. Summers In May, June, And July
                                                                Are Extremely Hot.
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-item-header">
                                                    What restaurants are close to proximity to your location?
                                                </div>
                                                <div class="accordion-item-body">
                                                    <div class="accordion-item-body-content">
                                                        You can see all the restaurants thats your choose.
                                                        <a href="#" target="_blank">Find More restaurants for your chooose Go here</a>
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
                            <script>
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
                            <!-- Frequently Asked Questions end -->
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