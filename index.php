<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="photographer"/>
    <meta name="author" content="Lorenzo Arcioni"/>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.mio.js"></script>
    <script type="text/javascript" language="javascript" src="js/my.js"></script>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Mario Rossi Photography</title>
    <?php
        //Host: localhost
        //usr:  lorenzo
        //pwd:  lorenzo
        //db:   lorenzoarcioni
        /*Il db deve avere due tabelle:
            messaggi:   -name
                        -email
                        -phone
                        -message

            recensioni: -recensione
                        -nome
        */
        $db_name   = "lorenzoarcioni";
        $db_usr    = "lorenzo";
        $db_passwd = "lorenzo";
        $db_host   = "localhost";
        $connection=mysqli_connect($db_host, $db_usr, $db_passwd);
        $db=mysqli_select_db($connection, $db_name);
    ?>
</head>
<body onload="loaded()">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-1 px-lg-1">
            <a class="navbar-brand logo" id="logo" href="#top">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" 
                    data-toggle="collapse" data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse flo" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 text-center">
                    <li class="nav-item p-1"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="nav-item p-1"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item p-1"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item p-1"><a class="nav-link" href="#about">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    
    <header class="masthead">
        <!-- container generale-->
        <div class="container px-4 px-lg-5 h-100">
            <!--Divider-->
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <!--Container testo sopra al divider-->
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Mario Rossi Photography</h1>
                    <hr class="divider" />
                </div>
                 <!--Container bottone piu testo sotto al divider-->
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">You don't take a photograph. You ask quietly to borrow it.</p>
                    <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Carousel -->
    <div class="carousel-bg bg-dark" data-interval="2">
        <div class="row gx-4 bg gx-lg-0 h-100 align-items-center justify-content-center text-center">
            <div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel1">
                <h2 class="text-white mt-0">My photos</h2>
                <hr class="divider divider-light" />
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
            
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets\img\portfolio\thumbnails\4.jpg" alt="Los Angeles" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Photo 1</h3>
                            <p>Description 1</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets\img\portfolio\thumbnails\1.jpg" alt="Chicago" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Photo 2</h3>
                            <p>Description 2</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets\img\portfolio\thumbnails\2.jpg" alt="New York" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Photo 3</h3>
                            <p>Description 3</p>
                        </div>
                    </div>
                </div>
            
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Cards -->
    <section class="bg-dark" id="services">
        <div class="container text-center">
            <h2 class="text-white mt-0">Choose your photo shoot!</h2>
            <hr class="divider divider-light" />
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div id="card1" class="card">
                        <img src="assets\img\wedding.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Wedding</h5>
                            <p id="card1" class="card-text">Album di nozze con effetti UNICI (artigianali e rilegati a
                                                            mano, sono personalizzabili al 100%)
                                                            . Selezionerete voi i materiali, i colori, gli effetti e 
                                                            i dettagli che vorrete per il vostro album. Tra gli effetti che
                                                            proponiamo siamo conosciuti per le pitture a mano sulle foto,
                                                            l'uso di aerografo, glitter e carte fine art; altrimenti sono disponibili
                                                            le opzioni solo digitale.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div id="card2" class="card ">
                        <img src="assets\img\party.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Party</h5>
                            <p id="card2" class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div id="card3" class="card ">
                        <img src="assets\img\sport.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Sport</h5>
                            <p id="card3" class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div id="card4" class="card">
                        <img src="assets\img\wedding.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Portraits</h5>
                            <p id="card4" class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div id="card5" class="card">
                        <img src="assets\img\wedding.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Still Life</h5>
                            <p id="card5" class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div id="card6" class="card">
                        <img src="assets\img\wedding.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Street</h5>
                            <p id="card6" class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials-->
    <section class="testimonial page-section text-center" id="testimonials">
        <div class="container">

            <div class="heading white-heading">
            T e s t i m o n i a l
            </div>
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <!--<img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />-->
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 1</h4>
                        </div>
                    </div>
                    <?php
                        $query = "SELECT * FROM recensioni";
                        $q=mysqli_query($connection, $query);
            
                        while ($row = mysqli_fetch_assoc($q)) {
                            echo '<div class="carousel-item">
                                  <div class="testimonial4_slide">
                                  <p>';
                            echo $row['recensione'].'</p><h4>';
                            echo $row['nome'].'</h4></div></div>';
                        }
                        
                    ?>
                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <h3 class="text-white mt-0">Write a review</h3>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5 mt-5">
                <div class="col-lg-6">
                    <form id="reviewForm" action="index.php#testimonials" method="POST" name="reviewForm" onsubmit="return validaReview();">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="nome" id="nome" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" id="nr2" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="messaggio" id="messaggio" maxlength="300" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" id="mr2" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton2" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="about page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">We've got what you need!</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
                    <a class="btn btn-primary btn-xl" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Let's Get In Touch!</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Contattami e richiedi un preventivo!</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <form id="contactForm" action="index.php#contact" method="POST" name="form" onsubmit="return validaForm();">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" id="nr" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" id="er" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" id="ei" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="phone" type="number" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" id="pr" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="message" id="message" maxlength="300" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" id="mr" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="bi-phone fs-2 mb-3 text-muted"></i>
                    <div>+1 (555) 123-4567</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Mario Rossi</div></div>
    </footer>
    <?php
        //Messaggi
        if(isset($_POST["name"]) && isset($_POST["message"]) && isset($_POST["email"]) && isset($_POST["phone"])){
            $email=$_POST["email"];
            $name=$_POST["name"];
            $msg=$_POST["message"];
            $phone=$_POST["phone"];
            $query = "INSERT INTO `messaggi` 
                      (`name`, `email`, `phone`, `message`) 
                      VALUES 
                      ("."'".$name."','".$email."','".$phone."','".$msg."')";
            
            $q=mysqli_query($connection, $query);
            mysqli_close($connection);
        }
        if(isset($_POST["nome"]) && isset($_POST["messaggio"])){
            $name=$_POST["nome"];
            $msg=$_POST["messaggio"];
            $query = "INSERT INTO `recensioni` 
                      (`recensione`, `nome`) 
                      VALUES 
                      ("."'".$msg."','".$name."')";
            
            $q=mysqli_query($connection, $query);
            mysqli_close($connection);
        }
    ?>
</body>
</html>