<!DOCTYPE HTML>
<html>

<head>

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



                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="lined-heading" style="font-size: 25px;font-weight:bold;"><span>Popular Tourist Places in Bangladesh</span></h2>
                                            </div>
                                        </div>
                                        <div class="box_sundar">
                                            <!-- <h4>Sundarban</h4> -->
                                            <p style="margin-top:15px;">
                                                Discover the most famous tourist attractions in Bangladesh from all major destinations.
                                                In various areas of Bangladesh, there are approximately 1,500 tourist attractions.
                                                <a href="Dhaka Division">Dhaka Division</a>, <a href="Chittagong Division">Chittagong Division</a>, <a href="Sylhet Division">Sylhet Division</a>, <a href="Khulna Division">Khulna Division</a>, and <a href="Rangpur Division">Rangpur
                                                    Division</a> are the key regions in Bangladesh having top travel destinations. <a href="Dhaka">Dhaka</a>,
                                                <a href="Chittagong">Chittagong</a>, <a href="Cox's Bazar">Cox's Bazar</a>, <a href="#">Sylhet</a>, and <a href="#">Bandarban</a> are the major districts.
                                                <br><br>
                                                Bangladesh is a vibrant South Asian country famed for its historical sites, deep forests,
                                                tribal culture, and adventure activities like water skiing, rowing, yachting,
                                                mountaineering, and river cruising. When it was liberated from Pakistan in 1971,
                                                the country gained independence.

                                                <span id="dots">...</span>
                                                <br><br>


                                                <span>
                                                    Bangladesh is famed for its Dhaka Muslin, which is regarded the finest of its kind.
                                                    Bangladesh is a must-see destination for visitors and travelers looking to enjoy
                                                    the beauty of pure natural forests as well as a rich historic legacy and culture.
                                                    The country has various architectural treasures and is known around the world for
                                                    its incredible tribal culture.

                                                    <br><br>

                                                    The winter season, from October to February, is often regarded as the ideal
                                                    time to visit Bangladesh because the weather is dry. Summers in May, June,
                                                    and July are extremely hot.

                                                    <br><br>

                                                    The <a href="#">Cox's Bazar Beach</a>, which stretches for around 125 kilometers and is
                                                    regarded the world's longest unbroken natural beach, is one of
                                                    Bangladesh's great attractions. The <a href="#">Sunderbans</a> are the world's
                                                    largest mangrove forests and the Royal Bengal Tiger's natural habitat.
                                                    The freshwater rivers meet the saltwater of the Bay of Bengal here,
                                                    resulting in an extraordinarily biodiverse environment. The <a href="#">Ahsan
                                                        Manzil</a>, the historic residence of Dhaka's Nawabs, is now a museum
                                                    on the banks of the Buriganga River. There are also situated
                                                    significant archaeological sites in the country, which include
                                                    <a href="#">Somapura Vihara</a>, <a href="#">Mahasthangarh</a>, etc. The <a href="#">Lalbagh Fort </a>is a Mughal
                                                    Palace built by Muhammad Azam Shah in 1678 A.D. It is also a popular tourist attraction.

                                                </span>
                                                <!-- <button id="btn" onclick="MoreLess()">Read More</button> -->

                                            </p>
                                            <btn href="javascript:void();" class="readmore-btn" style="border-radius:3px;">Read More</btn>

                                        </div>
                                    </div>
                                    <!-- <div class="down-content" id="#">
                                        <h2 style="margin-left: -30px;">Explore Tourist Attractions in the Following Categories</h2>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="lined-heading" style="font-size: 25px;font-weight:bold;"><span>Explore Tourist Attractions in the Following Categories</span></h2>
                                        </div>
                                    </div>
                                    <div class="box_sundar">
                                        <div class="container_popular" style="margin-top:30px;">
                                            <div class="row">

                                                <div class="col-md-6 col-sm-6">
                                                    <div class="card_popular">
                                                        <img src="../all_division_places/images/Museums1.jfif" alt="">
                                                        <div class="card-text-popular">
                                                            <a href="http://localhost/tourhotel/all_division_places/museums_popular_Tour_place.php">
                                                                <h3>MUSEUMS</h3>
                                                            </a>
                                                            <h5>Nice place</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="card_popular">
                                                        <img src="../all_division_places/images/park1.jpg" alt="">
                                                        <div class="card-text-popular">
                                                            <a href="http://localhost/tourhotel/all_division_places/parks_popular_Tour_place.php">
                                                                <h3>PARKS</h3>
                                                            </a>
                                                            <h5>Nice place</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container_popular">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="card_popular">
                                                        <img src="../all_division_places/images/Landmarks1.jpg" alt="">
                                                        <div class="card-text-popular">
                                                            <a href="http://localhost/tourhotel/all_division_places/landmarks_popular_Tour_place.php">
                                                                <h3>LANDMARKS</h3>
                                                            </a>
                                                            <h5>Nice place</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="card_popular">
                                                        <img src="../all_division_places/images/Nature Attractions1.jfif" alt="">
                                                        <div class="card-text-popular">
                                                            <a href="http://localhost/tourhotel/all_division_places/nature_attraction_popular_Tour_place.php">
                                                                <h3>ATTRACTIONS IN NATURE</h3>
                                                            </a>
                                                            <h5>Nice place</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container_popular">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="card_popular">
                                                        <img src="../all_division_places/images/Zoos.jpg" alt="">
                                                        <div class="card-text-popular">
                                                            <a href="http://localhost/tourhotel/all_division_places/zoo_popular_Tour_place.php">
                                                                <h3>ZOOS</h3>
                                                            </a>
                                                            <h5>Nice place</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="card_popular">
                                                        <img src="../all_division_places/images/articles1.jfif" alt="">
                                                        <div class="card-text-popular">
                                                            <a href="http://localhost/tourhotel/all_division_places/articles_popular_Tour_place.php">
                                                                <h3>ARTICLES</h3>
                                                            </a>
                                                            <h5>Nice place</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- sundarban end -->
                                </div><br><br>

                                <div class="col-md-12">
                                    <h2 class="lined-heading" style="font-size: 25px;font-weight:bold;"><span>Search By Places by Division</span></h2>
                                </div>
                                <div class="box_sundar" style="margin-top:20px;">
                                    <p>Bangladesh's tourist attractions are classified into eight categories.
                                        To find tourist sites in a given division, select a region from the list below.</p>
                                    <ul class="row province-list">

                                        <li class="col-sm-3 col-xs-6">
                                            <a href="http://localhost/tourhotel/all_division_places/barishal-division_popular_place.php">Barishal Division</a>
                                        </li>
                                        <li class="col-sm-3 col-xs-6">
                                            <a href="http://localhost/tourhotel/all_division_places/chitta_division_popular_place.php">Chattogram Division</a>
                                        </li>
                                        <li class="col-sm-3 col-xs-6">
                                            <a href="/dhaka-division/">Dhaka Division</a>
                                        </li>
                                        <li class="col-sm-3 col-xs-6">
                                            <a href="/khulna-division/">Khulna Division</a>
                                        </li>
                                        <li class="col-sm-3 col-xs-6">
                                            <a href="/mymensingh-division/">Rajshahi Division</a>
                                        </li>
                                        <li class="col-sm-3 col-xs-6">
                                            <a href="/rajshahi-division/">Rangpur Division</a>
                                        </li>
                                        <li class="col-sm-3 col-xs-6">
                                            <a href="/rangpur-division/">Mymensingh Division</a>
                                        </li>
                                        <li class="col-sm-3 col-xs-6">
                                            <a href="/sylhet-division/">Sylhet Division</a>
                                        </li>
                                    </ul>


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





    <script src="assets/js/jquery-3.4.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="assets/js/material-scrolltop.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>


    <!-- <button class="material-scrolltop" type="button">
        <span>↑</span>
    </button> -->
</body>

</html>