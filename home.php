<?php
    session_start();



    if(isset($_SESSION["user_id"])){

        $mysqli = require __DIR__ . "/database.php";

        $sql = "SELECT * FROM  user
                WHERE id= {$_SESSION["user_id"]} ";

        $result = $mysqli->query($sql);

        $user = $result->fetch_assoc();
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <script src="js/home.js" defer></script>
    <link rel="stylesheet" type="text/css"
        href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    
<body>
    <header>
        <div class="vtour">
            <button><a href="vtour.php"> Virtual Tour </a> </button>
        </div>
        
        <div id="user_icon">
        <i class="fa fa-user , fa-2x" large aria-hidden="true"></i>
        <?php  if(isset($user)):  ?>
            <p"" class="username"> Welcome <?= htmlspecialchars($user["fname"]) ; ?> </p>
            <p><a href="index.html"> Log out </a></p> 
            <?php else: ?>
                <p class="username"><a href ="index.html"> Log in </a> or <a href="index.html">Sign up</a> </p>
            <?php endif; ?>
        </div>

    </header>

    <div class="container">
        <h2>Trips</h2>
        <div class="row">

            <div class="col-md-3">
                <div class="trip1">
                <img src="imgs/lighthouse.jpeg" id="cimage" alt="">
                    <div class="overlay">
                    <button type="button" class="btn btn secondary" title="Info" id="tooltip">
                        <i class="fa fa-info" aria-hidden="true" ></i></button><span id="tooltiptext">Meetup Loaction:Accra Mall <br><br> Departure time: 10:00am </span>

                    <button type="button" class="btn btn secondary" title="Make Payment">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>    </button> 
                
                    <button type="button" class="btn btn secondary" title="Book a Seat">
                        <i class="fa fa-plus" aria-hidden="true"></i></button>
                          
                    </div>
                            <div class="product-bottom ">
                                <h3>Jamestown Lighthouse</h3>
                                <h5>GH₵ 100.00</h5>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-3">
                        <div class="trip1">
                            <img src="imgs/boti_falls.jpeg" id="cimage" alt="">
                            <div class="overlay">
                                <button type="button" class="btn btn secondary" title="Info">
                                    <i class="fa fa-info" aria-hidden="true"></i></button><span id="tooltiptext">Meetup Loaction:Accra Mall <br><br> Departure time: 10:00am </span> 
                                <button type="button" class="btn btn secondary" title="Make Payment">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn secondary" title="Book a Seat">
                                    <i class="fa fa-plus" aria-hidden="true"></i></button>
                            </div>
                            <div class="product-bottom ">
                                <h3>Boti Falls</h3>
                                <h5>GH₵ 180.00</h5>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-3">
                        <div class="trip1">
                            <img src="imgs/cape_3pts.jpeg" id="cimage" alt="">
                            <div class="overlay">
                                <button type="button" class="btn btn secondary" title="Quick Shop">
                                    <i class="fa fa-info" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn secondary" title="Make Payment">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn secondary" title="Book a Seat">
                                    <i class="fa fa-plus" aria-hidden="true"></i></button>
                            </div>
                            <div class="product-bottom ">
                                <h3>Cape Three Points</h3>
                                <h5>GH₵ 200.00</h5>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-3">
                        <div class="trip1">
                            <img src="imgs/nkrumah_mus.jpeg" id="cimage" alt="">
                            <div class="overlay">
                                <button type="button" class="btn btn secondary" title="Quick Shop">
                                    <i class="fa fa-info" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn secondary" title="Make Payment">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn secondary" title="Book a Seat">
                                    <i class="fa fa-plus" aria-hidden="true"></i></button>
                            </div>
                            <div class="product-bottom ">
                                <h3>Kwame Nkruah Musuem</h3>
                                <h5>Price</h5>
                            </div>
                        </div>
                    </div>

        </div>
    </div>
 <br>
 <br>



 <div class="slideshow-container">
 
 <div class="mySlides fade">
   <div class="numbertext">1 / 3</div>
   <img src="imgs/cape_castle.jpeg" style="width:100%">
   <div class="text">Cape Coast Castle</div>
 </div>
 
 <div class="mySlides fade">
   <div class="numbertext">2 / 3</div>
   <img src="imgs/cape_3pts.jpeg" style="width:100%">
   <div class="text">Cape Three Points</div>
 </div>
 
 <div class="mySlides fade">
   <div class="numbertext">3 / 3</div>
   <img src="imgs/boti_falls.jpeg" style="width:100%">
   <div class="text">Boti Waterfalls</div>
 </div>
 
 </div>
 <br>
 
 <div style="text-align:center">
   <span class="dot"></span> 
   <span class="dot"></span> 
   <span class="dot"></span> 
 </div>

 <footer>
    <div>
        <p>Subscripton</p>
        <input type="text" placeholder="Your Email">
        <button>Subscribe</button><br>
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-youtube" aria-hidden="true"></i>
        <i class="fas fa-instagram    "></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
    </div>
    <div>
        <a href=""><p>How to Book</p></a>
        <ul>
            <li> <a href="#"> </a> </li>
        </ul>
    </div>
    <div>
        <p>Contact Us</p>
        <ul>
            <li> <a href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> Addres</a> </li>
            <li> <a href="#"> </a><i class="fa fa-phone"> </i> +233 3456 432 </a> </li>
            <li> <a href="#"> <i class="fa fa-envelope"></i> @gmail </a> </li>
        </ul>
    </div>
</footer>
 
</body>
</html>  