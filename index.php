<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flip the Burger</title>
        <link rel="stylesheet" href="style/style.css">
        <?php require 'includes/connect.php' ?>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


    </head>

    <header>
        <div class="widthwrapperheader">
            <div id="logowrapper">
                <a href="index.html">
                    <img src="img/logo.png" id="desklogo" alt="Flip the Burger Logo">
                    <img src="img/logomobil.png" id="mobillogo" alt="Flip the Burger Logo">
                </a>
            </div>
            <nav id="desknav" class="cl-effect-4">
                <li><a href="#order">Order</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#social">Social</a></li>
                <li><a href="#gallery" style="padding-right: 0px;">Gallery</a></li>
            </nav><!-- desktop nav -->
            <div class="nav-toggle"></div>
            <nav class="mobilnav">
                <div class="toggleclose"></div>
                <div class="marginwrap">
                    <ul class="burgerlist">
                        <li><a href="#order">Order</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#location">Location</a></li>
                        <li><a href="#social">Social</a></li>
                        <li><a href="#gallery" style="padding-right: 0px;">Gallery</a></li>
                    </ul>
                </div>  
            </nav> <!--mobil nav-->
        </div>
    </header>



    <body>
        <div id="overflowxwrapper">
            <section id="attention">
                <div id="mobilblackbox"></div>
                <section id="attentiontextwrapper">
                    <div class="attentionstarwrapper">
                        <img src="img/attentionstar.png">
                    </div>
                    <h1 id="attentionh1">Flip the Burger</h1>
                    <h2 id="attentionh2">A Different Kind of Art</h2>
                    <div class="attentionstarwrapper">
                        <img src="img/attentionstar.png">
                    </div>
                    <div class="mobilattentionstars">
                        <img src="img/attentionstar.png">
                        <img src="img/attentionstar.png">
                        <img src="img/attentionstar.png">
                    </div>
                </section>
                <img src="img/burgerattention.jpg" id="attentionbg">
                <img src="img/lefthand.png" id="lefthand">
                <img src="img/righthand.png" id="righthand">
            </section>

            <section class="flipcontainer">
                <div class="offsetanchor" id="order"></div>
                <div id="ordercard" class="flipped card">
                    <section class="front">
                        <button class="orderbutton flipbutton"></button>
                    </section>
                    <section class="back">



                       
                    </section>
                </div>
            </section>

            <section class="contentwrapper" id="menusection">
                <div class="offsetanchor" id="menu"></div>
                <img src="img/burger.png" id="menuburgerimg">
                <section class="widthwrapper">
                    <div class="sectiontextboxleft">
                        <h2 class="module">Our Menu</h2>
                        <p class="module">Our Menu here at Flip the Burger might not be the most diverse, but this allows us to put the care and effort into each and every burger to ensure you that you will always leave satisfied.<br> <span class="module">Our menu includes</span></p>
                        <ul>
                            <li class="module">The Burger - Classic grilled burger.</li>
                            <li class="module">The Menu - The Burger, homemade fries and a soda.</li>
                            <li class="module">The Snack Box - Mozerella sticks, chilli cheese and onion rings.</li>
                            <li class="module">The Drinks - Soda, cocio, water or coffee.</li>
                        </ul>
                        <div class="cl-effect-20 module">
                            <a href="menu.pdf">
                                <span data-hover="See the full menu">See the full menu</span>
                            </a>
                        </div>


                    </div>
                </section>
            </section> <!-- Menu -->

            <section class="flipcontainer">
                <div class="offsetanchor" id="location"></div>
                <div id="locationcard" class="flipped card">
                    <section class="front" id="mapsection">

                        <div id="map"></div>
                        <div id="locationtextbox">
                            <h2 class="module">Our Location</h2>
                            <ul>
                                <li class="module">Torvegade 1</li>
                                <li class="module">6000 Kolding</li>
                                <li class="module">TLF: 71 43 44 57</li>
                            </ul>

                            <div class="cl-effect-20 module">
                                <a class="locationbutton">
                                    <span data-hover="More about us!">More about us!</span>
                                </a>
                            </div>

                        </div>

                    </section>
                    <section class="back">
                        <button class="locationbutton flipbutton"></button>
                    </section>
                </div>
            </section> <!-- Location -->


            <section class="sectionplaceholder">
                <div class="offsetanchor" id="social"></div>
                <h1>Social Media</h1>
                <button class="orderbutton flipbutton"></button>
            </section> <!-- Social Media -->


            <section class="sectionplaceholder">
                <div class="offsetanchor" id="gallery"></div>
                <h1>Gallery</h1>
            </section> <!-- Gallery -->

        </div>
    </body>

    <script>

    </script>

    <footer>

    </footer>
    <script src="js/script.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/map.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTNka5TklevgyBMCcF-8awi2HS3ZNbgKw&callback=initMap"></script>
    <script src="js/common.js"></script>
</html>
