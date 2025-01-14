<?php
require('header.php');
?>


<script>
  document.getElementById("headerImage").style.backgroundImage = "url('img/headerImages/modernRoundHeader.jpg')";
  document.getElementById("headerImage").style.backgroundPosition = "50% 45%";
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Round</title>
    <link href="extras.css" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid upper">
        <div class="row">
          <div class="col-md-3"><img src="img/logo.png" class="logo"> </div>
            <div class="col-md-9"></div>
        </div>
    </div>
    <!--
    -------------------- NAV BAR ---------------------------------------------------------------
  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <!--a class="navbar-brand" href="#">Navbar</a-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sign Rental Sets
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="layeredArchSet.html">Layered Arch</a></li>
              <li><a class="dropdown-item" href="modernround.html">Modern Round</a></li>
              <li><a class="dropdown-item" href="vintagemirror.html">Vintage Mirror</a></li>
              <li><a class="dropdown-item" href="darkwalnut.html">Dark Walnut</a></li>
              <li><a class="dropdown-item" href="rusticWoodSet.html">Rustic Wood</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="extras.html">Extras</a></li>
            </ul>
          </li>
          <!--li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li-->
        </ul>
      </div>
    </div>
  </nav>
<!-------- End of NAV BAR ---------------------->
  <!--carousel style-->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img style="width:75%;height:20%" src="img/modernRoundImages/carousel1.jpg" class= "img-size" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img style="width:75%;height:20%" src="img/modernRoundImages/carousel2.jpg" class= "img-size" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img style="width:75%;height:20%" src="img/modernRoundImages/carousel3.jpg" class= "img-size" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img style="width:75%;height:20%" src="img/modernRoundImages/carousel4.jpg" class= "img-size" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img style="width:75%;height:20%" src="img/modernRoundImages/carousel5.jpg" class= "img-size" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h2 class="section-head">MODERN ROUND RENTAL PIECES</h2>
  <div id="buttonDiv" class="row justify-content-center">
    <button id="checkAvailabilityButton" type="submit" class="btn">CHECK AVAILABILITY</button></button>
  </div>

  <!--side-by-side large picture section-->
  <section>
    <!--<div class="container text-center">-->
       <div class="side">
           <div class="image">
               <img src="img/modernRoundImages/side1.jpg" class="img-fluid" alt="mirror on an easel with a welcome message">
           </div>
           <div class="text-right">
               <h6>PERSONALIZED 3-D LASER CUT WELCOME SIGN</h6>
               <p>Comes with custom-welded base and leather attachment strapping.</p>
               <p>Center of welcome sign becomes a keepsake for your home. </p>
               <p>Can be selected as a part of any modern round rental package.</p>
           </div>
       </div>

       <div class="side">
           <div class="text-left">
              <h6>XL LASER CUT METAL DISPLAY SIGN WITH LEATHER STRAPPING</h6>
              <p>Made for use as a seating chart, order of events, menu, or cocktail menu.</p> 
              <p>Must be rented as part of a package.</p>
              <p>Displays escort cards or custom-lettered paper with hidden magnets.</p>
              <p>Various 3-D headings are available.</p>
              <p>Magnetic feature may be forgone and the entire piece can be customized as order of events, menu, etc.</p>
           </div>
           <div class="image">
               <img src="img/modernRoundImages/side2.jpg" class="img-fluid" alt="mirror on easel with 12 cards attached on">
           </div>
       </div>

       <div class="side">
           <div class="image">
               <img src="img/modernRoundImages/side3.jpg" class= "img-fluid" alt="Two mirrors on easels">
           </div>
           <div class="text-right"> 
               <h6>TABLE NUMBERS</h6>
               <p>1-30 signs included in Rental Set </p>
               <p>Additional numbers available upon request.</p>
           </div>
       </div>

       <div class="side">
        <div class="text-left"> 
            <h6>MODERN LOCKING CARD BOX</h6>
            <p>Free-standing metal card-box with leather details holds and protects your cards.</p>
            <p>Lock & Key included with rental.</p>
        </div>
        <div class="image">
            <img src="img/modernRoundImages/side4.jpg" class= "img-fluid" alt="Two mirrors on easels">
        </div>
       </div>

       <div class="side">
        <div class="image">
            <img src="img/modernRoundImages/side5.jpg" class= "img-fluid" alt="Two mirrors on easels">
        </div>
        <div class="text-right"> 
            <h6>RESERVED SIGNS</h6>
            <p>Set of 5 signs</p>
        </div>
    </div>
    </div>
 </section>
 <hr>
 <!--small square sign with custom welded bracket-->
    <section>
        <h2 class="section-head" class="smallHead"><strong>Small Square Sign with Custom Welded Bracket</strong></h2>
        <center>
            <div class=text-box>
                <p id="setDescription" class="description"><p>Choose from “In Loving Memory,”  “Take One,” “Gifts and Cards” and/or custom 3-D text.</p>                
            </div>
        </center>
        <div class="row justify-content-around">
            <div class="col-4">
                <img src="img/modernRoundImages/sss1.jpg" class="img-fluid" alt="medium square mirror on an easel">
            </div>
            <div class="col-4">
                <img src="img/modernRoundImages/sss2.jpg" class="img-fluid" alt="medium round mirror on an easel">
            </div>
            <div class="col-4">
                <img src="img/modernRoundImages/sss3.jpg" class="img-fluid" alt="medium round mirror on an easel">
            </div>
            
        </div>
        <hr>
    </section>

<!--Small Horizontal Sign with Custom Welded Bracket-->
    <section>
        <h2 class="section-head" class="smallHead"><strong>Small Horizontal Sign with Custom Welded Bracket</strong></h2>
        <center>
            <div class=text-box>
                <p id="setDescription" class="description"><p>Choose from “Mr & Mrs,” “Guestbook,” “Programs,” “Take One,” “Gifts & Cards” and/or custom 3-D text.</p>                
            </div>
        </center>
        <div class="row justify-content-around">
            <div class="col-4">
                <img src="img/modernRoundImages/shs1.jpg" class="img-fluid" alt="medium square mirror on an easel">
            </div>
            <div class="col-4">
                <img src="img/modernRoundImages/shs2.jpg" class="img-fluid" alt="medium round mirror on an easel">
            </div>
            <div class="col-4">
                <img src="img/modernRoundImages/shs3.jpg" style=height:60% class="img-fluid" alt="medium round mirror on an easel">
            </div>
           <hr> 
        </div>
    </section>
    
    <!--Medium Table Top Sign with Custom Welded Bracket-->
    <section>
        <h2 class="section-head" class="smallHead"><strong>Medium Table Top Sign with Custom Welded Bracket</strong></h2>
        <center>
            <div class=text-box>
                <p id="setDescription" class="description"><p>Choose from “ Welcome to our Unplugged Ceremony” or custom text,</p>
                <p>or</p><p>Magnetic Feature with “In Loving Memory” Heading, “Cocktails” Heading or Custom Heading</p>                
            </div>
        </center>
        <div class="row justify-content-around">
            <div class="col-4">
                <img src="img/modernRoundImages/mtt1.jpg" class="img-fluid" alt="medium square mirror on an easel">
            </div>
            <div class="col-4">
                <img src="img/modernRoundImages/mtt2.jpg" class="img-fluid" alt="medium round mirror on an easel">
            </div>
            <div class="col-4">
                <img src="img/modernRoundImages/mtt3.jpg" style=height:100% class="img-fluid" alt="medium round mirror on an easel">
            </div>
        </div>
         <hr> 
    </section>

    <!--typewriter-->
    <section>
        <!--<div class="container text-center">-->
           <div class="side">
               <div class="image">
                   <img src="img/modernRoundImages/typewriter.jpg" class="img-fluid" alt="mirror on an easel with a welcome message">
               </div>
               <div class="text-right">
                   <h6>VINTAGE INDUSTRIAL TYPE-WRITERWITH MESSAGE TO GUESTS</h6>
                   <p>Travels in handmade</p>
                   <p>Walnut Ridge Shipping Crate.</p>
                   <p>Commonly used for Guestbook Instructions or as part of a Memorial Table.</p>
               </div>
           </div>
    </section>
    <hr>

    <!--modern round rental packages-->
    <section>
        <h2 class="section-head" class="smallHead"><strong>MODERN ROUND RENTAL PACKAGES</strong></h2>
        <h4>Pricing Includes Delivery & Pick Up (30 mile radius)</h4>
        <h4>FULL SET Rental $799</h4>
        <h5>INCLUDES EACH OF THE FOLLOWING 9 ITEMS</h5>
        <div class="package-list">
            <ul>
                <li>Large Custom Welcome (round center becomes a keepsake)</li>
                <li>Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</li>
                <li>1-30 free standing table numbers</li>
                <li>Modern Locking Card Box or Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</li>
                <li>Set of “Reserved” signs (5)</li>
            </ul>
            <ul>
                <li>2 Selections of Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</li>
                <li>2 Selections of Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</li>
                <li>1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</li>
                <li>All Full Set Rental Clients receive 1 SMALL COMPLIMENTARY 3-D CUSTOMIZATION on a small sign in addition to their Round Welcome Sign Keepsake</li>
            </ul>
        </div>
    </section>
    <hr>

    <h4>PICK 6 Rental $699</h4>
        <center>
        <div class="m-4">
            <p>
            <!-- Trigger Buttons HTML -->
                <button type="button" class="pck-btn" class="btn btn-primary ms-4" data-bs-toggle="collapse" data-bs-target="#myCollapse">
                    CHOOSE 6 OF THE FOLLOWING ITEMS</button>
            </p>
        </center>
            <!-- Collapsible Element HTML -->
            <div class="collapse show" id="myCollapse">
                <div class="card card-body">
                    <ul>
                        <li>Large Custom Welcome (round center becomes a keepsake)</li>
                        <li>Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</li>
                        <li>1-30 free standing table numbers</li>
                        <li>Modern Locking Card Box </li>
                        <li>Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</li>
                        <li>Set of “Reserved” signs (5)</li>
                        <li>2 Selections of Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</li>
                        <li>2 Selections of Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</li>
                        <li>1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>

    
        <h4>PICK 4 Rental $599</h4>
        <center>
        <div class="m-4">
            <p>
            <!-- Trigger Buttons HTML -->
                <button type="button" class="pck-btn" class="btn btn-primary ms-4" data-bs-toggle="collapse" data-bs-target="#myCollapse">
                    CHOOSE 4 OF THE FOLLOWING ITEMS</button>
            </p>
        </center>
            <!-- Collapsible Element HTML -->
            <div class="collapse show" id="myCollapse">
                <div class="card card-body">
                    <ul>
                        <li>Large Custom Welcome (round center becomes a keepsake)</li>
                        <li>Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</li>
                        <li>1-30 free standing table numbers</li>
                        <li>Modern Locking Card Box </li>
                        <li>Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</li>
                        <li>Set of “Reserved” signs (5)</li>
                        <li>1 Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</li>
                        <li>1 Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</li>
                        <li>1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>

        <h4>A’ la Carte Modern Round Welcome Sign Rental $275</h4>
        <center>
        <div class="m-4">
            <p>
            <!-- Trigger Buttons HTML -->
                <button type="button" class="pck-btn" class="btn btn-primary ms-4" data-bs-toggle="collapse" data-bs-target="#myCollapse">
                    1 FOLLOWING ITEM</button>
            </p>
        </center>
            <!-- Collapsible Element HTML -->
            <div class="collapse show" id="myCollapse">
                <div class="card card-body">
                    <ul>
                        <li>Includes design fee and round center keepsake. This price does not include delivery. ($500 minimum order for delivery.)</li>
                    </ul>
                </div>
                 <p id="note">NOTE: Welcome Sign Customization is included in all package pricing.  Additional Customization of Magnetic Headings or entire pieces will be subject to added design and supply fees.</p>  
            </div>
        </div>
        <hr>

        <div id="buttonDiv" class="row justify-content-center">
            <button onclick="window.location.href='extras.html';" id="checkAvailabilityButton" type="submit" class="btn">CHECK AVAILABILITY</button></button>
        </div>
        
</body>
</html>

<?php
//footer
require('footer.php');
?>