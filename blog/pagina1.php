
<?php
 ob_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="photographer"/>
    <meta name="author" content="Lorenzo Arcioni"/>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.mio.js"></script>
    <script type="text/javascript" language="javascript" src="../js/my.js"></script>
    <script src="https://unpkg.com/vue@3"></script>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="style.css">
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
        $db_name   = "esempio";
        $db_usr    = "root";
        $db_passwd = "lorenzo";
        $db_host   = "localhost";
        $connection=mysqli_connect($db_host, $db_usr);
        $db=mysqli_select_db($connection, $db_name);
    ?>

</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div>

        </div>
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
                    <li class="nav-item p-1"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item p-1"><a class="nav-link" href="../index.php#testimonials">Testimonials</a></li>
                    <li class="nav-item p-1"><a class="nav-link" href="../index.php#services">Services</a></li>
                    <li class="nav-item p-1"><a class="nav-link" href="../blog/pagina1.php">Blog</a></li>
                    <li class="nav-item p-1"><a class="nav-link" href="../index.php#contact">Contact</a></li>
                    <li class="nav-item p-1"><a class="nav-link" href="../index.php#about">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead_blog">
        <!-- container generale-->
        <div class="container px-4 px-lg-5 h-100">
            <!--Divider-->
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <!--Container testo sopra al divider-->
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white-75 mb-4 " style="font-family:Brush Script MT, Brush Script Std, cursive;">Mario Rossi Blog</h1>
                </div>
                 <!--Container bottone piu testo sotto al divider-->
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">You don't take a photograph. You ask quietly to borrow it.</p>
                </div>
            </div>
        </div>
    </div>
    </header>
    <!-- Post -->
    
    <section class=" blog text-black">
        <div class="container">
            <nav id="paginazione" aria-label="Page navigation example">
                <ul class="pagination pagination-lg">
                    <li class="page-item active" aria-current="page">
                    <span class="page-link">1</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="pagina2.php#paginazione">2</a></li>
                   
                </ul>
            </nav>
            <div id="app">
                <div v-for="x in pagina1">
                    <div class="clearfix your-div" style="padding: 20px; border-radius:10px; background-color:white">
                        <H1 style="padding: 10px;">{{x.titolo}}</H1>
                        <img  v-bind:src=x.foto class="col-md-6 float-md-end mb-3 ms-md-3 img-fluid " style="border-radius: 10px;" alt="...">
                        <p style="padding: 10px;">
                            {{x.testo}}
                        </p>
                        <span>
                            <div class="row">
                                <div class="col">
                                    <p class="text-muted" >Pubblicazione: {{x.data}}</p>
                                </div>
                            </div>
                        </span>
                    </div>
                    
                    <br>

                </div>
            </div>
            <script type="application/javascript" src="app.js"></script>       
        </div>
        
    </section>
    <!--Commenti-->

   


    <!--footer-->
    <div class="bg-light" id="footer">
        <div class="container">
            <footer class="py-5">
                <div class="row">
                <div class="col-lg-4">
                    <h5>Contatti</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><strong class="p-0 text-muted">MARIO ROSSI  PHOTOGRAPHER </strong></li>
                    <li class="nav-item mb-2"><p  class=" p-0 text-muted">Via Gatti, 011<br>
                                                                                            44370 Roma, Italia <br>
                                                                                            P.IVA  06178910421</p></li>
                    <li class="nav-item mb-2"><p  class=" p-0 text-muted">Tel. +39 611 34082535</p></li>
                    <li class="nav-item mb-2"><p  class="  text-muted">E-mail rossi@gmail.com</p></li>
                    
                    </ul>
                </div>

             

                <div class="col-lg-4 ">
                    <h5>Clienti</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><img src="..\assets\img\LG-Logo.png" width="100" class="nav-link p-0 text-muted"></li>
                    <li class="nav-item mb-2"><img src="..\assets\img\samsung.png" width="100" class="nav-link p-0 text-muted"></li>
                    <li class="nav-item mb-2  px-3"><img src="..\assets\img\apple.png" width="70" class="nav-link p-0 text-muted"></li>
                    <li class="nav-item mb-2  px-3"><img src="..\assets\img\mercedes.png" width="70" class="nav-link p-0 text-muted"></li>
                    </ul>
                </div>

                <div class="col-lg-4 ">
                    <form id="newsletterForm" action="pagina1.php#footer" method="POST"  onsubmit="return validaIscrizione();" >
                    <h5>Iscriviti alla mia Newsletter</h5>
                    <p>Monthly digest of whats new and exciting from us.</p>
                    <div class="d-flex w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input name="newsletter" name="newsletter" id="email" type="email" class="form-control" placeholder="Email address" data-sb-validations="required,email">

                        <button class="btn btn-primary" type="submit" style="border-radius: 10px; background-color:orangered; border-color:orangered;">Inscriviti</button>
                    </div>
                    <div class="invalid-feedback" id="em" data-sb-feedback="email:required">An email is required.</div>
                    <div class="invalid-feedback" id="ea" data-sb-feedback="email:email">Email is not valid.</div>
                    </form>
                </div>
                </div>

                <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>Copyright &copy; 2022 - Mario Rossi.</p>
                
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><img src="..\assets\img\facebooklogo.png" alt="" height="30" width="30"></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><img src="..\assets\img\instagramlogo.png" alt="" height="30" width="30"></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><img src="..\assets\img\twitter.png" alt="" height="30" width="30"></a></li>
                </ul>
                </div>
            </footer>
        </div>
    </div>

    <?php
        if(isset($_POST["newsletter"])){
            $newsletter=$_POST["newsletter"];
        
            $query = "INSERT INTO `newsletter` 
                    (`email`) 
                    VALUES 
                    ("."'".$newsletter."')";
            
            $q=mysqli_query($connection, $query);
            mysqli_close($connection);
            header("Location: pagina1.php");
        }
   ?>
    
    
</body>
</html>