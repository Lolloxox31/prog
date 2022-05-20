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
    <script type="text/javascript" language="javascript" src="enlarge.js"></script>

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
<body onload="loaded()">
   
    <!--

        <a href="">
        <img src="assets/img/Facebook.png" class="fixed-bottom-right"  ></img> 
         </a>
    -->

   
   
   

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
    <!-- Nav tabs -->

    <section class=" services-bg" >
       
        <div class="container" >

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class=<?php if (empty($_POST['wedding'])){ echo "\"nav-link\"";}else{echo "\"nav-link active\"";}; ?>  data-toggle="tab" href="#home">Wedding</a>
                </li>
                <li class="nav-item">
                    <a class=<?php if (empty($_POST['party'])){ echo "\"nav-link\"";}else{echo "\"nav-link active\"";}; ?>   data-toggle="tab" href="#menu1">Party</a>
                </li>
                <li class="nav-item">
                    <a class=<?php if (empty($_POST['sport'])){ echo "\"nav-link\"";}else{echo "\"nav-link active\"";}; ?> data-toggle="tab" href="#menu2">Sport</a>
                </li>
                <li class="nav-item">
                    <a class=<?php if (empty($_POST['portraits'])){ echo "\"nav-link\"";}else{echo "\"nav-link active\"";}; ?> data-toggle="tab" href="#menu3">Portraits</a>
                </li>
                <li class="nav-item">
                    <a class=<?php if (empty($_POST['life'])){ echo "\"nav-link\"";}else{echo "\"nav-link active\"";}; ?> data-toggle="tab" href="#menu4">Still life</a>
                </li>
                <li class="nav-item">
                    <a class=<?php if (empty($_POST['street'])){ echo "\"nav-link\"";}else{echo "\"nav-link active\"";}; ?> data-toggle="tab" href="#menu5">Street</a>
                </li>
            </ul>
           
       
            <!-- Tab panes -->
            <div class="tab-content">
            <!-- Pagina wedding -->
            <div class="tab-pane container <?php if (empty($_POST['wedding'])){ echo "fade";}else{echo "active";}; ?>" id="home">
                <div class="row">
                    <div class="column">
                        <img class="enlargeclick" src="..\assets\img\services\wedding\1.jpg">
                        <img class="enlargeclick" src="..\assets\img\services\wedding\5.jpg">
                        <img class="enlargeclick" src="..\assets\img\services\wedding\10.jpg">
                    </div>
                    <div class="column">
                        <img class="enlargeclick" src="..\assets\img\services\wedding\2.jpg">
                        <img class="enlargeclick" src="..\assets\img\services\wedding\6.jpg">
                        <img class="enlargeclick" src="..\assets\img\services\wedding\11.jpg">
                    </div>
                    <div class="column">
                        <img class="enlargeclick" src="..\assets\img\services\wedding\3.jpg">
                        <img class="enlargeclick" src="..\assets\img\services\wedding\7.jpg">
                        <img class="enlargeclick" src="..\assets\img\services\wedding\9.jpg">
                    </div>
                    <div class="column">
                        <img class="enlargeclick" src="..\assets\img\services\wedding\4.jpg">
                        <img class="enlargeclick"src="..\assets\img\services\wedding\8.jpg"> 
                    </div>
                </div>
            </div>
             <!-- Pagina party -->
            <div class="tab-pane container <?php if (empty($_POST['party'])){ echo "fade";}else{echo "active";}; ?>" id="menu1">

                <div class="row">
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\party\1.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\party\5.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\party\9.jpg">
                        
                        </div>
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\party\2.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\party\6.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\party\10.jpg">
                    
                        
                        </div>
                        <div class="column">
                        <img class="enlargeclick" src="..\assets\img\services\party\3.jpg">
                        <img class="enlargeclick" src="..\assets\img\services\party\7.jpg">
                        <img class="enlargeclick" src="..\assets\img\services\party\11.jpg">
                        
                        
                        </div>
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\party\4.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\party\8.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\party\12.jpg">
                            
        
                        </div>
                </div>
            </div>
            <!-- Pagina sport -->
            <div class="tab-pane container <?php if (empty($_POST['sport'])){ echo "fade";}else{echo "active";}; ?>" id="menu2">
               <div class="row">
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\sport\1.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\sport\5.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\sport\9.jpg">
                        
                        </div>
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\sport\2.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\sport\6.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\sport\10.jpg">
                    
                        
                        </div>
                        <div class="column">
                        <img class="enlargeclick" src="..\assets\img\services\sport\3.jpg">
                        <img class="enlargeclick" src="..\assets\img\services\sport\7.jpg">
                        <img class="enlargeclick" src="..\assets\img\services\sport\11.jpg">
                        
                        
                        </div>
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\sport\4.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\sport\8.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\sport\12.jpg">
                            
                        </div>
                </div>


            </div>


            <div class="tab-pane container <?php if (empty($_POST['portraits'])){ echo "fade";}else{echo "active";}; ?>" id="menu3">
               <div class="row">
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\portraits\1.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\portraits\5.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\portraits\9.jpg">
                        
                        </div>
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\portraits\2.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\portraits\6.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\portraits\10.jpg">
                    
                        
                        </div>
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\portraits\3.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\portraits\7.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\portraits\11.jpg">
                        
                        
                        </div>
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\portraits\4.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\portraits\8.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\portraits\12.jpg">
                            
                        </div>
                </div>
            </div>

            <div class="tab-pane container <?php if (empty($_POST['life'])){ echo "fade";}else{echo "active";}; ?>" id="menu4">
               <div class="row">
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\still life\1.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\still life\5.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\still life\9.jpg">
                        
                        </div>
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\still life\2.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\still life\6.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\still life\10.jpg">
                    
                        
                        </div>
                        <div class="column">
                        <img class="enlargeclick" src="..\assets\img\services\still life\3.jpg">
                        <img class="enlargeclick" src="..\assets\img\services\still life\7.jpg">
                        <img class="enlargeclick" src="..\assets\img\services\still life\11.jpg">
                        
                        
                        </div>
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\still life\4.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\still life\8.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\still life\12.jpg">
                            
                        </div>
                </div>


            </div>

            <div class="tab-pane container <?php if (empty($_POST['street'])){ echo "fade";}else{echo "active";}; ?>" id="menu5">
               <div class="row">
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\street\1.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\street\5.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\street\9.jpg">
                        
                        </div>
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\street\2.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\street\6.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\street\10.jpg">
                    
                        
                        </div>
                        <div class="column">
                        <img class="enlargeclick" src="..\assets\img\services\street\3.jpg">
                        <img class="enlargeclick" src="..\assets\img\services\street\7.jpg">
                        <img class="enlargeclick" src="..\assets\img\services\street\11.jpg">
                        
                        
                        </div>
                        <div class="column">
                            <img class="enlargeclick" src="..\assets\img\services\street\4.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\street\8.jpg">
                            <img class="enlargeclick" src="..\assets\img\services\street\12.jpg">
                            
                        </div>
                </div>
            </div>
            
            
            


            </div>
        </div>
        

    </section>
   <!-- Footer-->

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
                    <form id="newsletterForm" action="..\index.php#footer" method="POST"  onsubmit="return validaIscrizione();" >
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
                <p>Lorenzo Arcioni - Damiano Sparro - Luca D'Assaro</p>
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
            header("Location: services.php");
        }
   ?>

<!-- Contenitore per enlarge -->
<div id="fullpage" onclick="this.style.display='none';"></div>

    
 
  
</body>
</html>