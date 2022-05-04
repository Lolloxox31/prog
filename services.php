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
                    <li class="nav-item p-1"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item p-1"><a class="nav-link" href="index.php#testimonials">Testimonials</a></li>
                    <li class="nav-item p-1"><a class="nav-link" href="index.php#services">Services</a></li>
                    <li class="nav-item p-1"><a class="nav-link" href="index.php#contact">Contact</a></li>
                    <li class="nav-item p-1"><a class="nav-link" href="index.php#about">About</a></li>
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
            </ul>
           
       
            <!-- Tab panes -->
            <div class="tab-content">
            <!-- Pagina wedding -->
            <div class="tab-pane container <?php if (empty($_POST['wedding'])){ echo "fade";}else{echo "active";}; ?>" id="home">
                <div class="row">
                    <div class="column">
                        <img src="assets\img\services\wedding\1.jpg">
                        <img src="assets\img\services\wedding\5.jpg">
                        <img src="assets\img\services\wedding\10.jpg">
                    </div>
                    <div class="column">
                        <img src="assets\img\services\wedding\2.jpg">
                        <img src="assets\img\services\wedding\6.jpg">
                        <img src="assets\img\services\wedding\11.jpg">
                    </div>
                    <div class="column">
                        <img src="assets\img\services\wedding\3.jpg">
                        <img src="assets\img\services\wedding\7.jpg">
                        <img src="assets\img\services\wedding\9.jpg">
                    </div>
                    <div class="column">
                        <img src="assets\img\services\wedding\4.jpg">
                        <img src="assets\img\services\wedding\8.jpg"> 
                    </div>
                </div>
            </div>
             <!-- Pagina party -->
            <div class="tab-pane container <?php if (empty($_POST['party'])){ echo "fade";}else{echo "active";}; ?>" id="menu1">

                <div class="row">
                        <div class="column">
                            <img src="assets\img\services\party\1.jpg">
                            <img src="assets\img\services\party\5.jpg">
                            <img src="assets\img\services\party\9.jpg">
                        
                        </div>
                        <div class="column">
                            <img src="assets\img\services\party\2.jpg">
                            <img src="assets\img\services\party\6.jpg">
                            <img src="assets\img\services\party\10.jpg">
                    
                        
                        </div>
                        <div class="column">
                        <img src="assets\img\services\party\3.jpg">
                        <img src="assets\img\services\party\7.jpg">
                        <img src="assets\img\services\party\11.jpg">
                        
                        
                        </div>
                        <div class="column">
                            <img src="assets\img\services\party\4.jpg">
                            <img src="assets\img\services\party\8.jpg">
                            <img src="assets\img\services\party\12.jpg">
                            
        
                        </div>
                </div>
            </div>
            <!-- Pagina sport -->
            <div class="tab-pane container <?php if (empty($_POST['sport'])){ echo "fade";}else{echo "active";}; ?>" id="menu2">
               <div class="row">
                        <div class="column">
                            <img src="assets\img\services\sport\1.jpg">
                            <img src="assets\img\services\sport\5.jpg">
                            <img src="assets\img\services\sport\9.jpg">
                        
                        </div>
                        <div class="column">
                            <img src="assets\img\services\sport\2.jpg">
                            <img src="assets\img\services\sport\6.jpg">
                            <img src="assets\img\services\sport\10.jpg">
                    
                        
                        </div>
                        <div class="column">
                        <img src="assets\img\services\sport\3.jpg">
                        <img src="assets\img\services\sport\7.jpg">
                        <img src="assets\img\services\sport\11.jpg">
                        
                        
                        </div>
                        <div class="column">
                            <img src="assets\img\services\sport\4.jpg">
                            <img src="assets\img\services\sport\8.jpg">
                            <img src="assets\img\services\sport\12.jpg">
                            
                        </div>
                </div>


            </div>
            </div>
        </div>
        

    </section>
  <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Mario Rossi</div></div>
    </footer>


    
 
  
</body>
</html>