<DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Wood Religion - Barber shop</title> 
        <link rel="shortcut icon" href="images/favicon32r.png"/>
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon32r.png">        
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel='stylesheet' href="style.css">
        <script src="js/bootstrap.min.js"></script>       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>        
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        
        <script>
            $(document).ready(function () {                
                $('#lightbox').hide();
                $('.lightbox_trigger').click(function (e) {

                    //prevent default action (hyperlink)
                    e.preventDefault();

                    //Get clicked link href
                    var image_href = $(this).attr("href");

                    /* 	
                     If the lightbox window HTML already exists in document, 
                     change the img src to to match the href of whatever link was clicked
                     
                     If the lightbox window HTML doesn't exists, create it and insert it.
                     (This will only happen the first time around)
                     */

                    if ($('#lightbox').length > 0) { // #lightbox exists

                        //place href as img src value
                        $('#content').html('<img src="' + image_href + '" />');

                        //show lightbox window - you could use .show('fast') for a transition
                        $('#lightbox').show();
                    } else { //#lightbox does not exist - create and insert (runs 1st time only)

                        //create HTML markup for lightbox window
                        var lightbox =
                                '<div id="lightbox">' +
                                '<p>Click to close</p>' +
                                '<div id="content">' + //insert clicked link's href into img src
                                '<img src="' + image_href + '" />' +
                                '</div>' +
                                '</div>';

                        //insert lightbox HTML into page
                        $('body').append(lightbox);
                    }

                });

                //Click anywhere on the page to get rid of lightbox window
                $('#lightbox').on('click', function () { //must use live, as the lightbox element is inserted into the DOM
                    $('#lightbox').hide();
                });
                $('#left').click(function () {
                var leftPos = $('#imageGallery').scrollLeft();
                    
                $("#imageGallery").animate({
                    scrollLeft: leftPos - 522
            }, 800);
        });

            $('#right').click(function () {
                            var leftPos = $('#imageGallery').scrollLeft();
                            
                            $("#imageGallery").animate({
                                scrollLeft: leftPos + 522
                            }, 800);
                        });
                    });
        </script>
        <script>
            $(document).ready(function() {        
            $( ".cross" ).hide();
            $( ".menu" ).hide();
            $( ".hamburger" ).click(function() {
            $( ".menu" ).slideToggle( "fast", function() {
            $( ".hamburger" ).hide();
            $( ".cross" ).show();
        }); 
        });                
                

            $( ".cross" ).click(function() {
            $( ".menu" ).slideToggle( "fast", function() {
            $( ".cross" ).hide();
            $( ".hamburger" ).show();
        });
        });
        $('.menu li').click(function() {
            $( ".menu" ).slideToggle( "fast", function() {
                        $(".cross").hide();
                        $(".hamburger").show();
                    });
                });
            });
        </script>        
    </head>
    <body>
        
                
        <header class="navbar navbar-default navbar-fixed-top">
            
            <button class="hamburger hidden-lg hidden-md">&#9776;</button>
            <button class="cross hidden-lg hidden-md">&#735;</button>
      
        
        <nav class="main flex-container navbar-custom hidden-xs hidden-sm row">
                    <div class="navbar-header left">
                        <a class="navbar-brand logod" href="#introlink">
                            <img src="images/logos/WR_logo_small.png" alt="Wood religion logo">
                        </a>
                    </div>
                    <ul class="right">                
                        <li><a href="#barbershoplink">BARBERSHOP</a></li>
                        <li><a href="#servicelink">SERVICES</a></li>
                        <li><a href="#gallerylink">GALLERY</a></li>
                        <li><a href="#productslink">PRODUCTS</a></li>
                        <li><a href="#footerlink">CONTACT</a></li>
                        <li><a href="#book_onlinelink"><span class="orange">BOOK ONLINE</span></a></li>
                        <li><a class="active" href="#">ENG<a class="languageSeperater"><span>|</span></a><a href="#">DK</a></a></li>
                    </ul> 
        </nav>

        
        <div class="menu hidden-lg hidden-md navbar navbar-default">
            
            <ul>
                <div class="navbar-header navbar-menu">
                    <a class="img-responsive navbar-brand" href="#introlink">
                        <img src="images/logos/WR_logo_small.png" alt="Wood religion logo">
                    </a>
                </div>
                <li><a href="#barbershoplink">BARBERSHOP</a></li>
                <li><a href="#servicelink">SERVICES</a></li>
                <li><a href="#gallerylink">GALLERY</a></li>
                <li><a href="#productslink">PRODUCTS</a></li>
                <li><a href="#footerlink">CONTACT</a></li>
                <li><a href="#book_onlinelink"><span class="orange">BOOK ONLINE</span></a></li>
                <li><a class="active" href="#">ENG<a class="languageSeperater"><span>|</span></a><a href="#">DK</a></a></li>
            </ul>
        </div>
        
        </header>  
            
        <main>
            <section id='intro' class='row'>
                <a class="anchor" id="introlink"></a>
                <img class='img-responsive col-lg-4 col-lg-push-4 col-md-4 col-md-push-4 col-xs-8 col-xs-push-2' src="images/logos/WR_logo_white_croped.png" alt='Wood Religion logo'>
                <h2 class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>You are welcome to the first authentic Barber Shop in Kolding.<br>
                    All kinds of classic men's haircuts, beard and mustaches trim, beard styling<br>
                    and straight razor shaving.</h2>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a href="#book_onlinelink"><button type="button" class="center-block btn btn-primary">BOOK ONLINE</button></a>
                </div>
            </section>
            <section id="barbershop" class="row">
                <a class="anchor" id="barbershoplink"></a>
                <div class="col-lg-5 col-md-5 col-sm-6 hidden-xs col-lg-offset-1">
                    <img class="img-responsive imgHistory" src="images/Img02b.png"   >
                </div>
                <div id="barbershop_txt" class="col-lg-6 col-md-7 col-sm-6 col-xs-12 text-center">
                    <div class="spacingBox">
                        <h1>BARBER SHOP</h1>
                        <img class="center-block underline" src="images/icons/underline_small2.png" alt="underline">
                        <h2>We are proud to be the most exclusive Barber Shop in Kolding,<br>
                            which offers a truly exclusive experience, friendly atmoshpere and
                            dedicated professionals.</h2>
                        <br>
                        
                        <p>
                            Barber Shop has been always placed for true men. Place where you can hang out,
                            drink good whiskey, talk about bussines and girls. True Barber Shop should always
                            keep traditions, teach and educate how to be a gentleman.<br><br>
                            We opened our doors for a very special reason: We believed in the dream that
                            we can create a new generation of Danish Gentleman. Wood Religion Barber’s
                            professionally trained barbers providing classic men’s haircuts and straight-razor shaves.
                            Thank you all for your trust and your respect.
                        </p>
                        <a href="https://en.wikipedia.org/wiki/Barber"><button type="button" class="btn btn-primary">HISTORY OF BARBER</button></a>
                    </div>
                </div>
            </section>
            <section id='services' class="row">
                <a class="anchor" id="servicelink"></a>
                <h1>SERVICES</h1>
                <img class="center-block underline" sty src="images/icons/underline_small.png" alt="underline">
                <article id="haircut" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img class="img-responsive center-block" src="images/Img03b.png" alt="Haircut">
                    <p>HAIRCUT /<span> 295 DKK</span></p>
                </article>
                <article id="beard" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img class="img-responsive center-block" src="images/Img04b.png" alt="Shave">
                    <p>BEARD /<span> 180 DKK</span></p>
                </article>
                <article id="hairandbeard" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img class="img-responsive center-block" src="images/Img05b.png" alt="Haircut and Shave">
                    <p>HAIR AND BEARD /<span> 400 DKK</span></p>
                </article>
            </section>
            <section id="video" class="row">
                <div class='visible-xs'>
                    <h1 class="heading">EXCLUSIVE EXPERIENCE</h1>
                    <img class="center-block underline" src="images/icons/underline_small2.png" alt="underline">
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6 hidden-xs">
                    <h1 class="heading">EXCLUSIVE EXPERIENCE</h1>
                    <img class="center-block underline" src="images/icons/underline_small2.png" alt="underline">
                    <p><span>Wood Religion Barber Shop</span> offers men's styles of short and long
                    scissor cuts, as well as razor styling and traditional tight clipper cuts.
                    Cuts offered range from antique to classic to cutting-edge.
                    A shampoo before or after the cut is complimentary - just ask your
                    barber.<br><br>
                    Each service is tailored specifically to hair and skin type, and customer
                    requests. Hair cuts include hot towel and razor clean up on the side
                    and back of the neck. Our straight razor shave is accompanied with
                    fresh and fragranced towels.</p>
                    <h1><span>COMPLIMENTARY BEVERAGE WITH
                            EVERY SERVICE</span></h1>                    
                </div>
                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                    <iframe class="visible-lg center-block" width="560" height="315" src="https://www.youtube.com/embed/wdSAc-BfoN8?showinfo=0" frameborder="0" allowfullscreen></iframe>
                    <iframe class="visible-md center-block" width="450" height="300" src="https://www.youtube.com/embed/wdSAc-BfoN8?showinfo=0" frameborder="0" allowfullscreen></iframe>
                    <iframe class="visible-sm center-block" width="350" height="280" src="https://www.youtube.com/embed/wdSAc-BfoN8?showinfo=0" frameborder="0" allowfullscreen></iframe>
                    <iframe class="visible-xs hidden-xxs center-block" width="450" height="250" src="https://www.youtube.com/embed/wdSAc-BfoN8?showinfo=0" frameborder="0" allowfullscreen></iframe>
                    <iframe class="visible-xxs center-block" width="320" height="250" src="https://www.youtube.com/embed/wdSAc-BfoN8?showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </section>
            <section id='book_online' class="row">
                <a class="anchor" id="book_onlinelink"></a>
                <div id="book_signup"class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                    <form action='index.php#book_onlinelink' method='post'>
                        <fieldset>                             
                            
                            <input type="text" id="bookName" name='bookName' placeholder="Name" maxlength="50" required>                            
                            <input type="text" id="bookPhone" name='bookPhone' maxlength="15" placeholder="Phone"maxlength="50" required>
                            <br>
                            <input type="email" id="bookEmail" name='bookEmail' placeholder="E-mail" maxlength="80" required> 
                            <br>                            
                            <select id="type" placeholder="Select a service" name="type">
                                <option value="Haircut">Select a service</option>
                                <option value="Haircut">Haircut</option>
                                <option value="Beard">Beard</option>
                                <option value="Haircut and Beard">Haircut and Beard</option>                    
                            </select>            
                            <br>
                            <input type="date" id="bookDate" name="bookDate">
                            <input type="time" id="bookTime" name="bookTime">
                            <textarea type="text" id="bookMessage" name="bookMessage" placeholder="Message" maxlength="250" ></textarea>
                            <input id="book"  type="submit" name="book" value="BOOK">
                        </fieldset>
                    </form>
                </div>
                <div id="book_opening" class="col-lg-3 col-md-4 col-sm-5 hidden-xs">
                    <p class="col-lg-12 col-xs-12 center-block"><span>OPENING HOURS</span></p>
                    <img  src="images/icons/underline_small.png" alt="underline">
                        <table>
                          <tr>
                            <td>Monday</td>
                            <td>9:00 - 17:30</td>
                          </tr>
                          <tr>
                            <td>Tuesday</td>
                            <td>7:30 - 17:30</td>
                          </tr>
                          <tr>
                            <td>Wednesday</td>
                            <td>9:00 - 17:30</td>
                          </tr>
                          <tr>
                            <td>Thursday</td>
                            <td>9:00 - 20:00</td>
                          </tr>
                          <tr>
                            <td>Friday</td>
                            <td>9:00 - 17:30</td>
                          </tr>
                          <tr>
                            <td>Saturday</td>
                            <td>9:00 - 14:00</td>
                          </tr>
                          <tr>
                            <td>Sunday</td>
                            <td>Closed</td>
                          </tr>
                        </table>
                    
                    <div class="phoneNo">
                        <img src="images/icons/ico_04.png" alt="Phone icon">
                        <p>+45 48 90 30 97</p>
                    </div>
                </div>                
            </section>
            <section id='gallery' class="row mar0">
                <a class="anchor" id="gallerylink"></a>
                <h1 class="text-center">GALLERY</h1>
                <img class="center-block underline" src="images/icons/underline_small2.png" alt="underline">
                <ul id="imageGallery" class="images">
                    <li><a class="lightbox_trigger" href="images/gallery/image1.png"><img src="images/gallery/image1.png" alt="Picture of Wood Religion barbershop" /></a></li>
                    <li><a class="lightbox_trigger" href="images/gallery/image2.png"><img src="images/gallery/image2.png" alt="Picture of Wood Religion barbershop" /></a></li>
                    <li><a class="lightbox_trigger" href="images/gallery/image3.png"><img src="images/gallery/image3.png" alt="Picture of Wood Religion barbershop" /></a></li>
                    <li><a class="lightbox_trigger" href="images/gallery/image4.png"><img src="images/gallery/image4.png" alt="Picture of Wood Religion barbershop" /></a></li>
                    <li><a class="lightbox_trigger" href="images/gallery/image5.png"><img src="images/gallery/image5.png" alt="Picture of Wood Religion barbershop" /></a></li>
                    <li><a class="lightbox_trigger" href="images/gallery/image6.png"><img src="images/gallery/image6.png" alt="Picture of Wood Religion barbershop" /></a></li>
                    <li><a class="lightbox_trigger" href="images/gallery/image7.png"><img src="images/gallery/image7.png" alt="Picture of Wood Religion barbershop" /></a></li>
                    <li><a class="lightbox_trigger" href="images/gallery/image8.png"><img src="images/gallery/image8.png" alt="Picture of Wood Religion barbershop" /></a></li>
                    
                </ul>
                <div class="galleryPreviewArrows">
                    <a id="left" class="previousSlideArrow">&lt;</a>
                    <a id="right" class="nextSlideArrow">&gt;</a>
                    </div>
                
            </section>
            <section id='products' class="row">
                <a class="anchor" id="productslink"></a>
                <div class="col-lg-8 col-md-7 hidden-sm hidden-xs center-block pad0">
                    <img class="productimage" src="images/Img12b.png" alt="Stylish hair and beard products">                    
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 text-center ">
                    <div class="producttext col-lg-12 col-md-12 col-sm-6 col-xs-12">
                        <h1>PRODUCTS</h1>
                        <img class="center-block underline" src="images/icons/underline_small2.png" alt="underline">
                        <p>We proudly offer grooming products from:<br><br>
                            Wood Religion, Uppercut Deluxe, Truefitt<br>
                            and Hill, Proraso, MR. Natty, Murrays,<br>
                            Suavecito, and more.</p>
                        <h2>& GIFT CARDS</h2>
                    </div>
                    <img class="packageimg col-lg-12 col-md-12 col-sm-6 col-xs-12" src="images/Img13.png" alt="Guy offering packed products">
                </div>
            </section>
            <section id='partners' class='text-center'>
                <h1>PARTNERS</h1>
                <img class="center-block underline" src="images/icons/underline_small2.png" alt="underline">
                <div class='partnerimages'>
                    <img src="images/icons/partner_logos1.png" alt="MrNatty">
                    <img src="images/icons/partner_logos2.png" alt="Suavecito">
                    <img src="images/icons/partner_logos3.png" alt="Carlsberg">
                    <img src="images/icons/partner_logos4.png" alt="Mussay's">
                    <img src="images/icons/partner_logos5.png" alt="Jack Daniel's">
                    <img src="images/icons/partner_logos6.png" alt="Proraso">
                </div>                
            </section>
            <section id="signUp" class="row">
                <?php
                if (isset($_POST['send'])){
                echo"<p><span>you have subscribed to Wood Religion newsletter</span></p>";
                }
                ?>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <h1 >SIGN UP </h1><p>for newsletters</p>
                </div>
                <form class="col-lg-8 col-md-12 col-sm-12 col-xs-12" action="index.php#signUp" method="post">                    
                    <input type="text" id="news_name" name="news_name" maxlength="50" placeholder="Name" required>                    
                    <input type="email" id="news_email" name="news_email"maxlength="80" placeholder="E-mail" required>
                    <input type="submit" id="send" name="send" value="SEND">
                </form>
            </section>
           <!-- to ensure the lightbox background does not get overlapped by other elements-->
            <div id="lightbox" class='hidden'>
                    <p>tryk for at lukke</p>
                    <div id="content">
                        <img src="#" />
                    </div>
                </div>
        </main>
        <footer id='footer' class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 mar0">
            <a class="anchor" id="footerlink"></a>
            <div class=" contact col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1>CONTACT</h1>
                <img class="center-block underline" src="images/icons/underline_small.png" alt="underline">
                <h2>Wood Religion <span>BARBER SHOP</span></h2>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="images/icons/ico_03.png" alt="House icon">
                <p>Helligkorsgade 5</p>
                <p class='dBlock mar0'>6000 Kolding</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="images/icons/ico_04.png" alt="Phone icon"><p> +45 48 90 30 97</p>
                <div class='dBlock'>
                <img src="images/icons/ico_02.png" alt="mail icon"><p class='mar0'>info@woodreligion.dk</p>
                </div>
                </div>
                
                <p>Find us also on social media:</p>
                <ul>
                    <li><a href='https://www.facebook.com/woodreligion/?fref=ts'><img src="images/icons/ico_06.png" alt="Facebook icon"</a></li></a>
                    <li><a href='https://www.instagram.com/woodreligion/'><img src="images/icons/ico_07.png" alt="Instagram icon"></a></li>
                    <li><a href='https://www.youtube.com/channel/UC4wBB9vhZyndBFZOQBqRI6w'><img src="images/icons/ico_08.png" alt="Youtube icon"></a></li>
                </ul>
            </div>
            <div class="mapAndOpening col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <a href="https://www.google.dk/maps/place/Ålegården+2,+6000+Kolding"><img  class="img-responsive center-block map" usemap="map" src="images/icons/map2.png" alt="Map location of Wood Religion Kolding"></a>
                
                <div class="center-block row textBoxOpening">
                    <div class="col-lg-5 col-md-12 col-sm-5 col-xs-12 openingHeader">
                    <h2>OPENING HOURS</h2>
                    <img class='orangeLine' src='images/icons/orange_line_72px.png' alt='orange line'>
                    </div>
                    <table class="col-lg-7 col-md-12 col-sm-7 col-xs-12">                    
                        <tr>
                            <td>Mon.</td>
                            <td><span>9:00-17:30</span></td>
                            <td>Thu.</td>
                            <td>9:00-20:00</td>
                        </tr>
                        <tr>
                            <td>Tues.</td>
                            <td><span>7:30-17:30</span></td>
                            <td>Fri.</td>
                            <td>9:00-17:30</td>
                        </tr>
                        <tr>
                            <td>Wed.</td>
                            <td><span>9:00-17:30</span></td>
                            <td>Sat.</td>
                            <td>9:00-14:00</td>
                        </tr>                                    
                    </table>
                </div>
            </div>

        </footer>
        <?php
        ini_set('error_reporting', E_ALL);
        // put your code here
        if (isset($_POST['send'])) {
            $db_user = "winklergrap_dk";
            $db_pass = "Vatar6321";
            $db_name = "winklergraphic_dk_db";
            $db_host = "mysql36.unoeuro.com";

            $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);


            if ($mysqli->connect_errno) {
                printf("Connection to the database failed: %s\n", $mysqli->connect_errno);
                exit();
            } else {
                $news_name = $_POST['news_name'];
                $news_email = $_POST['news_email'];



                $query = "INSERT INTO receivers(name,email) VALUES('$news_name','$news_email')";

                $result = $mysqli->query($query);


                $mysqli->close();
            }
        }
        ?>
        <script type="text/javascript">
             // to ensure that the box does not pop up on load
            $(document).ready(function() {
                $("div#lightbox").removeClass("hidden");
            });
           
        </script>       
  
    </body>
</html>
