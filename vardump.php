<?php

//vardump.php
require('header.php');

require('../weddingRentals.conf.php');
require('utilities/DatabaseConnector.php');
require('./models/Packages.php');
require('./models/Extras.php');

$myDB = new DatabaseConnector();
$db = $myDB->getdb();

$redirect = '<script>
window.location.href="pickYourSet.php";
</script>';

if( !isset($_GET['weddingDate']) ){
  echo $redirect;
}else{
  $weddingDate = $_GET['weddingDate'];
  $dateArray = date_parse($weddingDate);
  $weddingMonth = $dateArray['month'];
}

if( !isset($_GET['packageCode']) ){
  echo $redirect;
}else{
  $packageCode = $_GET['packageCode'];
  $thisPackage = Packages::getPackageByCode($packageCode);
}

if( !isset($_GET['extrasCode']) ){
  echo $redirect;
}else{
  $extrasCode = $_GET['extrasCode'];
  $thisExtras = new Extras();
  $thisExtras->decode($extrasCode);
}

  
  if( !isset($_GET['fname']) ){
    echo $redirect;
  }else{
    $fname = $_GET['fname'];
  }
 
  if( !isset($_GET['lname']) ){
    echo $redirect;
  }else{
    $lname = $_GET['lname'];
  }

  if( !isset($_GET['phone']) ){
    echo $redirect;
  }else{
    $phone = $_GET['phone'];
  }

  if( !isset($_GET['email']) ){
    echo $redirect;
  }else{
    $email = $_GET['email'];
  }

//****************************************Insert to Database *****************************************************/

//$query = "INSERT INTO `customers`(`email`, `fname`, `lname`, `phone`) VALUES ('".$email."','".$fname."','".$lname."','".$phone."')";
//$db->query($query);

//$query = "INSERT INTO `extras`(`email`, `fname`, `lname`, `phone`) VALUES ('".$email."','".$fname."','".$lname."','".$phone."')";
//$db->query($query);

//$query = "INSERT INTO `customers`(`email`, `fname`, `lname`, `phone`) VALUES ('".$email."','".$fname."','".$lname."','".$phone."')";
//$db->query($query);


?>

<h1 class="text-center">Thank you for choosing Walnut Ridge</h1>
<p class="text-center">The Walnut Ridge Wedding Rental Team will be confirming your order soon</p>
<p class="text-center">A copy of the information below will be emailed to you</p><br><br>


    <div class="row justify-content-center">
        <div class="col-2">
        <h3>First Name: </h3>
        <span class="text-color"><?php echo $_GET['fname'] ?></span>
        </div>
        <div class="col-2">
        <h3>Last Name: </h3>
        <p><?php echo $_GET['lname'] ?></p>
      </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-2">
        <h3>Email: </h3>
        <span class="text-color"><?php echo $_GET['email'] ?></span>
        </div>
        <div class="col-2">
        <h3>Phone Number: </h3>
        <p><?php echo $_GET['phone'] ?></p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-2">
        <h3>Set Option: </h3>
        <span class="text-color"><?php echo $thisPackage->getSetNameLang(); ?></span>
        </div>
        <div class="col-2">
        <h3>Package: </h3>
        <p><?php echo $thisPackage->getSubsetTypeLang(); ?></p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-2">
        <h3>Wedding Date: </h3>
        <span class="text-color"><?php echo $_GET['weddingDate'] ?></span>
        </div>
        <div class="col-2">
            <h3>Extras:</h3> 
            <p>
            <?php foreach ($thisExtras->getSelectedExtrasArrayLang() as $extra){
                            echo '- ' .$extra ;
                            echo '<br>';
                    } 
            ?>
            </p>
        </div>
    </div>


  
<?php
$setOption = $thisPackage->getSetName();
$setOptionLang = $thisPackage->getSetNameLang();
$packageChoice = $thisPackage->getSubsetType();
$packageChoiceLang = $thisPackage->getSubsetTypeLang();

//Sending the email
  //recipient
  //$to = "britanytorres888@gmail.com";

  //subject
  //$subject = "Walnut Ridge Wedding Rental Reservation Confirmation";

  //message
  //$message ="
  //<html>
  //<head>
    //<title>Walnut Ridge Wedding Rental Reservation Confirmation</title>
  //</head>
  //<body>
  //<h1>Thank you for choosing Walnut Ridge</h1>
  //<p>The Walnut Ridge Wedding Rental Team will be confirming your order soon</p>
  //<p>A copy of the information below will be emailed to you</p><br><br>

  //<h3>First name: </h3>
  //<p>".echo $fname."</p>
  //<h3>Last name: </h3>
  //<p>".echo $lname."</p>
  //<h3>Email: </h3>
  //<p>".echo $email."</p>
  //<h3>Phone Number: </h3>
  //<p>".echo $phone."</p>
  //<h3>Set Option: </h3>
  //<p>".echo $setOptionLang."</p>
  //<h3>Package: </h3>
  //<p>".echo $packageChoiceLang."</p>
  //<h3>Wedding Date: </h3>
  //<p>".echo $weddingDate."</p>
  //<h3>Extras: </h3>
  //<p>". foreach ($extras as $extra){
    //echo '- ' .$extra ;
    //echo '<br>';
    //} 
    //."</p>

  //</body>
  //</html
  //";

  //$message = wordwrap($message, 70);

  //headers
  //$headers = "From: Walnut Ridge Wedding Rentals <walnutridge@wedding.com>" . "\r\n" .
  //$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  //send email
  //mail($to, $subject, $message, $headers);
?>


<?php
//footer
require('footer.php');
?>