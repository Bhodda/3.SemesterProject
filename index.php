<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flip the Burger</title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" type="text/css" href="style/animate.css">
        <link rel="stylesheet" href="style/font-awesome.min.css">
        <link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon.png">
        <?php require 'includes/connect.php' ?>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


    </head>

    <header>
        <div class="widthwrapperheader">
            <div id="logowrapper">
                <a href="index.php">
                    <img src="img/logo.png" id="desklogo" alt="Flip the Burger Logo">
                    <img src="img/logomobil.png" id="mobillogo" alt="Flip the Burger Logo">
                </a>
            </div>
            <nav id="desknav" class="cl-effect-4">
                <li><a href="#order">Order</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#social">Social</a></li>
                <li><a href="#gallery">Gallery</a></li>
            </nav><!-- desktop nav -->

            <div class="nav-toggle"></div>
            <div class="show-basket"></div>
            <nav class="mobilnav">
                <div class="toggleclose"></div>
                <div class="marginwrap">
                    <ul class="burgerlist">
                        <li><a href="#order">Order</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#location">Location</a></li>
                        <li><a href="#social">Social</a></li>
                        <li><a href="#gallery">Gallery</a></li>
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

            <section class="flipcontainer" id="ordersection">
                <div class="offsetanchor" id="order"></div>
                <div id="ordercard" class="flipped card">
                    <section class="front">

                        <div id="order-left">
                            <h2 class="module">Make your order</h2>
                            <form id="order-form" >
                                <div class="input-container module">
                                    <label for="Name">
                                        <i class="fa fa-lg fa-fw fa-user"></i>
                                    </label>
                                    <input name="name" id="name" type="text" placeholder="Name">
                                </div>
                                <div class="input-container module">
                                    <label for="Phone">
                                        <i class="fa fa-lg fa-fw fa-phone"></i>
                                    </label>
                                    <input name="phone" id="phone" type="text" placeholder="Phone number">
                                </div>
                            </form>
                            <div class="cl-effect-20 module">
                                <a class="orderfrontflip">
                                    <span data-hover="Order now!">Order now!</span>
                                </a>
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
                                <button class="orderbutton closeflipbutton">x</button>
                                <div id="burger-wrapper">
                                    <div class="menu-title"><h3>Burgers</h3></div>
                                    <div class="menu-description"><p>Salad, mayonnaise, ketchup, beef, tomatoes and pickles.</p></div>
                                    <div class="menu-entry">
                                        <div class="product-name"><p class="product-title">The Burger</p></div>
                                        <div class="product-price"><p>kr. 49,00</p></div>
                                        <div class="add-product"><button class="add-btn add-to-check-out" id="product1">+</button></div>
                                    </div>
                                    <div class="menu-entry">
                                        <div class="product-name"><p class="product-title">The Burger Menu</p></div>
                                        <div class="product-price"><p>kr. 89,00</p></div>
                                        <div class="add-product"><button class="add-btn add-to-check-out" id="product10">+</button></div>
                                        <div class="menu-description"><p>1x The Burger, 1x Fries and a Soda.</p></div>
                                    </div>
                                </div>
                                <div id="burger-wrapper">
                                    <div class="menu-title"><h3>Additional</h3></div>
                                    <div class="menu-entry">
                                        <div class="product-name"><p class="product-title">Snack box</p></div>
                                        <div class="product-price"><p>kr. 39,00</p></div>
                                        <div class="add-product"><button class="add-btn add-to-check-out" id="product9">+</button></div>
                                        <div class="menu-description"><p>1x Mozzarella sticks, 2x Chili cheese, 2x Onion rings and fries.</p></div>
                                    </div>
                                    <div class="menu-entry">
                                        <div class="product-name"><p class="product-title">Fries</p></div>
                                        <div class="product-price"><p>kr. 29,00</p></div>
                                        <div class="add-product"><button class="add-btn add-to-check-out" id="product17">+</button></div>
                                    </div>

                                </div>
                            </div>
                            <form action="includes/saveOrder.php" method="post">
                                <div id="check-out-wrapper">
                                    <div class="check-out" id="check-out" name="order_details">
                                    </div>
                                    <div class="check-out alignbottom">
                                        <hr class="line">
                                        <div id="product-cost">
                                            <div class="cost-wrap" >
                                                <div class="cost-title">Subtotal</div>
                                                <div class="cost-price"><textarea readonly class="price-style" name="subtotal" id="subtotal">kr. 0,00</textarea></div>
                                            </div>
                                            <div class="cost-wrap" >
                                                <div class="cost-title">Discount (20%)</div>
                                                <div class="cost-price"><textarea readonly class="price-style" name="discount" id="discount">kr. 0,00</textarea></div>
                                            </div>
                                            <div class="cost-wrap" >
                                                <div class="cost-title">Total</div>
                                                <div class="cost-price"><textarea readonly class="price-style"  name="sumtotal" id="sumtotal">kr. 0,00</textarea></div>
                                            </div>
                                        </div>
                                        <hr class="line">
                                        <div id="check-out-msg">
                                            <p id="message-title">Order message</p>
                                            <textarea id="message-area" name="message"></textarea>
                                        </div>

                                        <div id="check-out-confirm">
                                            <div class="close-basket"></div>
                                            <input type="submit" name="submit" class="confirm-btn" value="To Checkout"> 
                                            </input>
                                    </div>     
                                </div>
                            </form>


                        </div>
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
                                    <span data-hover="More about us!">More about us!</span>
                                </a>
                            </div>
                            <hr class="line">
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

            </section> <!-- Social Media -->


            <section class="sectionplaceholder">
                <div class="offsetanchor" id="gallery"></div>
                <h1>Gallery</h1>
            </section> <!-- Gallery -->

        </div>
    </body>


    <footer>

    </footer>
    <script src="js/script.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/map.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTNka5TklevgyBMCcF-8awi2HS3ZNbgKw&callback=initMap"></script>
    <script src="js/common.js"></script>
</html>
