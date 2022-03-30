<!DOCTYPE html>
<html>
    <head>
        <?php  
             $connection=mysqli_connect("localhost", "root", "", "my_lorenzoarcioniphotograph");
             //$db=mysqli_select_db("my_lorenzoarcioniphotograph");
             if(!$connection)
             	die ('Non riesco a connettermi');
	    ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Lorenzo Arcioni Photography</title>
<!-- 
Moonlight Template 
http://www.templatemo.com/tm-512-moonlight
-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/templatemo-main.css"><!--

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">-->

       <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
<!--
	<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '4201923966535937',
          xfbml      : true,
          version    : 'v11.0'
        });
        FB.AppEvents.logPageView();
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
	</script>
--> 
    <div class="sequence">
  
      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>
      
    </div>
    
  
        <nav>
          <div class="logo">
              <img src="img/logo.png" alt="">
          </div>
          <div class="mini-logo">
              <img src="img/mini_logo.png" alt="">
          </div>
          <ul style='align-items:  center; margin-left: 0px'>
            <li><a href="#1"><i class="fa fa-home"></i><em>Home</em></a></li>
            <li><a href="#2"><i class="fa fa-user"></i> <em>About</em></a></li>
            <li><a href="#3"><i class="fa fa-pencil"></i> <em>Entries</em></a></li>
            <li><a href="#4"><i class="fa fa-image"></i> <em>Work</em></a></li>
            <li><a href="#5"><i class="fa fa-envelope"></i> <em>Contact</em></a></li>
          </ul>
        </nav>
        
        <div class="slides">
          <div class="slide" id="1">
            <div class="content first-content">
              <div class="container-fluid">
                  <div class="col-md-3">
                      <div class="author-image"><img src="img/author_image.png" alt=""></div>
                  </div>
                  <div class="col-md-9">
                      <h2>Lorenzo Arcioni</h2>
                      <p>I am just a kid who has never grown up. I still keeping asking these 'How' and 'Why' questions. Occasionally I find an answer.</p>
                      <div class="fb-btn"><a href="https://www.instagram.com/" target='_blank'>Instagram</a></div>
                      <div class="fb-btn" style='margin-left: 10px'><a href="https://www.facebook.com/" target="_blank">facebook</a></div>
                  </div>
              </div>
            </div>
          </div>
          <div class="slide" id="2">
            <div class="content second-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="left-content">
                            <h2>About Me</h2>
                            <p>Ambitious boy born and raised in Italy and now resides in Sacrofano (RM).</p> 
                            <p>An adventurous lifestyle with a knack for change are what make him 
                               constantly growing as a person. Both inspired and humbled daily by others 
                               around him.</p>
                            <p>The blending of lifestyle type photography with the push of 
                               adventure, are what make up his unique aesthetic.</p>
                            <p>He engages in videography
                               as well capturing the moments in all their glory. </p>
                          <div class="main-btn"><a href="#3">Read More</a></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                          <img src="img/about_image.jpg" alt="">
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="slide" id="3">
            <div class="content third-content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="first-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="left-content">
                                                <h2>My Gear</h2>
                                                    <ul style='margin-left: 12px'>
                                                        <li style='color: #FFFFFF; margin-bottom: -8px;'><p>Sony alpha 6000</p></li>
                                                        <li style='color: #FFFFFF; margin-bottom: -8px;'><p>Sony 70-350 G F 4.5-6.3 OSS</p></li>
                                                        <li style='color: #FFFFFF; margin-bottom: -8px;'><p>Sony 16-50 F 3.5-5.6 OSS</p></li>
                                                        <li style='color: #FFFFFF; margin-bottom: -8px;'><p>Lumix DMC-FZ62 25 – 600 mm F 2.8-5.2 OSS</p></li>
                                                        <li style='color: #FFFFFF; margin-bottom: -8px;'><p>HUAWEI Matebook D</p></li>
                                                        <li style='color: #FFFFFF; margin-bottom: -8px;'><p>A Baby Drone and Gimbal (soon)</p></li>
                                                    </ul>
                                                <div class="main-btn"><a href="#4">Continue Reading</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right-image">
                                                <img src="img/first_service.jpg" alt="first service">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="second-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="left-image">
                                                <img src="img/second_service.jpg" alt="second service">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right-content">
                                                <h2>My Style</h2>
                                                <p>I've a lot of things to say about my ideas, 
                                                   but I want to be brief, the most important 
                                                   theme in my presentations is the Nature that express itself 
                                                   in all its forms, usually I have to represent Nature in all its purity by adding
                                                   to the shots an idea of personal color, emphasizing its primary color.</p>
                                                <p>In addition to nature I have fun taking lifestyle pictures!</p>   
                                                <div class="main-btn"><a href="#4">Continue Reading</a></div>
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
          <div class="slide" id="4">
            <div class="content fourth-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/first_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Canyon</h2>
                                            <p>In a Canyon with a river</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/first_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/second_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Doggy</h2>
                                            <p>One of my dogs</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/second_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/third_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Trumpet</h2>
                                            <p>My Passion</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/third_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/fourth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Leaf</h2>
                                            <p>Walking in a wood</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/fourth_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/fifth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Quiet Afternoon</h2>
                                            <p>Fotage of Quiet Afternoon</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/fifth_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/sixth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seastorm</h2>
                                            <p>A reef during a seastorm</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/sixth_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/seventh_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>searocks</h2>
                                            <p>A massive rock</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/seventh_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/eight_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Trees</h2>
                                            <p>Firs tree</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/eight_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/ninth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seagull</h2>
                                            <p>Marine life</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/ninth_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/ten_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Forest</h2>
                                            <p>Lost in The Forest</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/ten_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="slide" id="5">
            <div class="content fifth-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div id="map">
                            <div class="image">
                                <img src="img/DSC09559.jpg">
                            </div>
    <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                        </div>
                    </div>
                    <div class="col-md-6">
                    	<h2 style="color: white">SEND ME A MESSAGE</h2>
                        <form id="contact" name="modulo" action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Now</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
       <div class="footer">
          <div class="content">
              <p>Copyright &copy; 2021 Lorenzo Arcioni</p>
          </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>-->
    <script src="js/main.js"></script>-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        

        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>
<?php
if(isset($_POST["name"]) && isset($_POST["message"]) && isset($_POST["email"])){
$mail=$_POST["email"];
$name=$_POST["name"];
$msg=$_POST["message"];
$q=mysqli_query($connection,"INSERT INTO `messaggi` 
               (`nome`, `mail`, `messaggio`) 
               VALUES 
               ("."'"."$name"."'".","."'"."$mail"."'".","."'"."$msg"."'".")");
if(!$q)
	die ('query fallita!');
mysqli_close();
}   
?>