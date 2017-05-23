<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flip the Burger</title>
        <meta name="description" content="Flip the Burger restaurant in center of Kolding. Fresh and delicious ingredients. Quality fast food at a competetive price. Location is in heart of Kolding near Koldinghus and Kolding's universities.">

        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" type="text/css" href="style/animate.css">
        <link rel="stylesheet" href="style/font-awesome.min.css">
        <link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon.png">

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


    </head>



    <body>

        <header>
            <div class="widthwrapperheader">
                <div id="logowrapper">
                    <a href="index.php">
                        <img src="img/logo.png" id="desklogo" alt="Flip the Burger Logo">
                        <img src="img/logomobil.png" id="mobillogo" alt="Flip the Burger Logo">
                    </a>
                </div>
                <nav class="cl-effect-4">
                    <ul id="desknav">
                        <li><a href="#order">Order</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#location">Location</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                    </ul>
                </nav><!-- desktop nav -->

                <div class="nav-toggle"></div>
                <div class="show-basket"><span id="basket-sum">0</span></div>
                <nav class="mobilnav">
                    <div class="toggleclose"></div>
                    <div class="marginwrap">
                        <ul class="burgerlist">
                            <li><a href="#order">Order</a></li>
                            <li><a href="#menu">Menu</a></li>
                            <li><a href="#location">Location</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                        </ul>
                    </div>  
                </nav> <!--mobil nav-->
            </div>
        </header>

        <div id="overflowxwrapper">
            <section id="attention">
                <div id="mobilblackbox"></div>
                <section id="attentiontextwrapper">
                    <div class="attentionstarwrapper">
                        <img src="img/attentionstar.png" alt="">
                    </div>
                    <h1 id="attentionh1">Flip the Burger</h1>
                    <h2 id="attentionh2">A Different Kind of Art</h2>
                    <div class="attentionstarwrapper">
                        <img src="img/attentionstar.png" alt="">
                    </div>
                    <div class="mobilattentionstars">
                        <img src="img/attentionstar.png" alt="">
                        <img src="img/attentionstar.png" alt="">
                        <img src="img/attentionstar.png" alt="">
                    </div>
                </section>
                <img src="img/burgerattention.jpg" id="attentionbg" alt="Creation of a burger">
                <img src="img/lefthand.png" id="lefthand" alt="left hand creating burger">
                <img src="img/righthand.png" id="righthand" alt="right hand creating burger">
            </section>

            <section class="flipcontainer" id="ordersection">
                <div class="offsetanchor" id="order"></div>
                <div id="ordercard" class="flipped card">
                    <section class="front">

                        <div id="order-left">
                            <h2 class="module">Make your order</h2>
                            <form id="order-form" >
                                <div class="input-container module">
                                    <label for="name">
                                        <i class="fa fa-lg fa-fw fa-user"></i>
                                    </label>
                                    <input name="order-name" id="name" type="text" placeholder="Name" class="orderinputfield">
                                </div>
                                <div class="input-container module">
                                    <label for="phone">
                                        <i class="fa fa-lg fa-fw fa-phone"></i>
                                    </label>
                                    <input name="order-phone" id="phone" type="text" placeholder="Phone number" class="orderinputfield">
                                </div>
                            </form>
                            <div class="cl-effect-20 module">
                                <a class="orderfrontflip">
                                    <span data-hover="Order now!">Order now!</span>

                                </a>
                                <div class="buttondisable"></div>
                            </div>
                        </div>
                        <div id="order-right">
                            <h2 class="module">Order before you pick up to save time and money!</h2>
                            <p class="module">Order here and get <span>20% off!</span> <br><br> By ordering online you will help us save time and in return we can offer you an even better deal!</p>
                        </div>
                    </section>
                    <section class="back" id="orderside">
                        <div class="widthwrapper">
                            <div id="menu-wrapper">
                                <button class="orderbutton closeflipbutton"><img src="img/icon/returnwhite.png" alt=""></button>
                                <div class="burger-wrapper">
                                    <div class="menu-title"><h3>Burgers</h3></div>
                                    <div class="menu-description"><p>Salad, mayonnaise, ketchup, beef, tomatoes and pickles.</p></div>
                                    <div class="menu-entry">
                                        <div class="product-name"><p class="product-title">Burger</p></div>
                                        <div class="product-price"><p id="product-db-price">kr. 49.00</p></div>
                                        <div class="add-product"><button class="add-btn add-to-check-out" data-prodID=5>+</button></div>
                                    </div>
                                    <div class="menu-entry">
                                        <div class="product-name"><p class="product-title">Burger Menu</p></div>
                                        <div class="product-price"><p>kr. 89.00</p></div>
                                        <div class="add-product"><button class="add-btn add-to-check-out" data-prodID=6>+</button></div>
                                        <div class="menu-description"><p>1x The Burger, 1x Fries and a Soda.</p></div>
                                    </div>
                                </div>
                                <div class="burger-wrapper">
                                    <div class="menu-title"><h3>Additional</h3></div>
                                    <div class="menu-entry">
                                        <div class="product-name"><p class="product-title">Snack box</p></div>
                                        <div class="product-price"><p>kr. 39.00</p></div>
                                        <div class="add-product"><button class="add-btn add-to-check-out" data-prodID=7>+</button></div>
                                        <div class="menu-description"><p>1x Mozzarella sticks, 2x Chili cheese, 2x Onion rings and fries.</p></div>
                                    </div>
                                    <div class="menu-entry">
                                        <div class="product-name"><p class="product-title">Fries</p></div>
                                        <div class="product-price"><p>kr. 29.00</p></div>
                                        <div class="add-product"><button class="add-btn add-to-check-out" data-prodID=8>+</button></div>
                                    </div>

                                </div>
                            </div>
                            <form action="includes/saveOrder.php" method="post">
                                <input id="order-line" name="order_details" type="hidden" value="">
                                <div id="check-out-wrapper">
                                    <div class="check-out" id="check-out">
                                    </div>
                                    <div class="check-out alignbottom">
                                        <hr class="line">
                                        <div id="product-cost">
                                            <div class="cost-wrap" >
                                                <div class="cost-title">Subtotal</div>
                                                <div class="cost-price"><textarea readonly class="price-style" name="subtotal" id="subtotal">kr. 0.00</textarea></div>
                                            </div>
                                            <div class="cost-wrap" >
                                                <div class="cost-title">Discount (20%)</div>
                                                <div class="cost-price"><textarea readonly class="price-style" name="discount" id="discount">kr. 0.00</textarea></div>
                                            </div>
                                            <div class="cost-wrap" id="totalcostwrap">
                                                <div class="cost-title">Total</div>
                                                <div class="cost-price"><textarea readonly class="price-style"  name="sumtotal" id="sumtotal">kr. 0.00</textarea></div>
                                            </div>
                                        </div>
                                        <hr class="line">
                                        <div id="check-out-msg">
                                            <p id="message-title">Order message</p>
                                            <textarea id="message-area" name="message"></textarea>
                                        </div>
                                        <input name="name" type="hidden">
                                        <input name="phone_nr" type="hidden">
                                        <div id="check-out-confirm">
                                            <div class="close-basket"></div>
                                            <input type="submit" name="submit" class="confirm-btn" value="To Checkout"> 
                                        </div>
                                    </div>     
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </section>

            <section class="contentwrapper" id="menusection">
                <div class="offsetanchor" id="menu"></div>
                <img src="img/burger.png" id="menuburgerimg" alt="The Burger Menu">
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

            <section class="flipcontainer" id="locationsection">
                <div class="offsetanchor" id="location"></div>
                <div id="locationcard" class="flipped card">
                    <section class="front" id="mapsection">

                        <div id="map"></div>
                        <div id="locationtextbox">
                            <h2 class="module">Our Location</h2>
                            <p class="module">Come visit us in the heart of Kolding</p>
                            <ul>
                                <li class="module">Torvegade 1</li>
                                <li class="module">6000 Kolding</li>
                                <li class="module">TLF: (+45) 71 43 44 57</li>
                            </ul>

                            <div class="cl-effect-20 module">
                                <a class="locationbutton">
                                    <span data-hover="See opening hours!">See opening hours!</span>
                                </a>
                            </div>

                        </div>
                        <div id="locationtextboxmobil">
                            <hr class="line">
                            <h2 class="module">Our Location</h2>
                            <ul>
                                <li class="module">Torvegade 1</li>
                                <li class="module">6000 Kolding</li>
                                <li class="module">TLF: 71 43 44 57</li>
                            </ul>

                            <div class="cl-effect-20 module">
                                <a class="locationbutton">
                                    <span data-hover="See opening hours!">See opening hours!</span>
                                </a>
                            </div>
                            <hr class="line">
                        </div>

                    </section>
                    <section class="back" id="aboutus">
                        <div class="widthwrapper">

                            <div id="aboutusleft">
                                <div id="aboutusreturn"></div>
                                <h2>Opening Hours</h2>
                                <p>We are open almost every day of the week, so you can get the burger you crave!</p>
                                <ul>
                                    <li><span>Monday</span>Closed</li>
                                    <li><span>Tuesday</span>11:00 - 20:00</li>
                                    <li><span>Wednesday</span>11:00 - 20:00</li>
                                    <li><span>Thursday</span>11:00 - 20:00</li>
                                    <li><span>Friday</span>11:00 - 04:30</li>
                                    <li><span>Saturday</span>11:00 - 04:30</li>
                                    <li><span>Sunday</span>11:00 - 20:00</li>
                                </ul>
                            </div>
                            <img src="img/aboutus.png" id="aboutusimg" alt="Owners of Flip the Burger">
                        </div>
                    </section>
                </div>
            </section> <!-- Location -->

            <section class="socialwrapper">
                <div class="offsetanchor" id="gallery"></div>
                <div id="facebook">
                    <h3 class="module">Follow us on Facebook</h3>
                    <iframe id="facebookmodule" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffliptheburgerkolding&tabs=timeline&width=500&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="500" height="500" style="border:none; overflow:hidden" class="module"></iframe>
                </div>
                <div id="instagram">
                    <h2 class="module">Instagram Gallery</h2>
                    <div id="instafeed" class="module"></div>
                    <div class="cl-effect-20 module" id="see-more-btn">
                        <a href="https://www.instagram.com/explore/locations/1029302781/">
                            <span data-hover="See more photos">See more photos</span>
                        </a>
                    </div>
                </div>

            </section>

        </div>

        <footer>
            <div class="widthwrapper">
                <div class="footercontentwrapper">
                    <h4>Opening hours</h4>
                    <ul id="openinghoursfooter">
                        <li><span>Monday</span>Closed</li>
                        <li><span>Tuesday</span>11:00 - 20:00</li>
                        <li><span>Wednesday</span>11:00 - 20:00</li>
                        <li><span>Thursday</span>11:00 - 20:00</li>
                        <li><span>Friday</span>11:00 - 04:30</li>
                        <li><span>Saturday</span>11:00 - 04:30</li>
                        <li><span>Sunday</span>11:00 - 20:00</li>
                    </ul>
                </div>
                <div class="footercontentwrapper">
                    <h4>Contact us</h4>
                    <ul id="footercontactus">

                        <li><i class="fa fa-lg fa-fw fa-phone"></i>(+45) 71 43 44 57</li>
                        <li><i class="fa fa-lg fa-fw fa-map-marker"></i>Torvegade 1, Kolding 6000</li>
                        <li><i class="fa fa-lg fa-fw fa-envelope"></i>burger@fliptheburger.com</li>
                    </ul>

                </div>



                <div id="footersocialwrapper">
                    <h4>Follow us on Facebook</h4>
                    <a href="#"><i class="fa fa-lg fa-fw fa-facebook"></i></a>
                </div>
            </div>


            <script src="js/script.js"></script>
            <script src="js/smoothscroll.js"></script>
            <script src="js/map.js"></script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTNka5TklevgyBMCcF-8awi2HS3ZNbgKw&callback=initMap"></script>
            <script src="js/common.js"></script>
            <script type="text/javascript" src="js/instafeed.min.js"></script>
        </footer>
    </body>
</html>
