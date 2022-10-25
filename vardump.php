<?php

//vardump.php
require('header.php');

$redirect = '<script>
window.location.href="pickYourSet.php";
</script>';
  
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

  if( !isset($_GET['setOption']) ){
    echo $redirect;
  }else{
    $setOption = $_GET['setOption'];
  }

  //package
  if( !isset($_GET['packageChoice']) ){
    echo $redirect;
  }else{
    $packageChoice = $_GET['packageChoice'];
  }


  if( !isset($_GET['weddingDate']) ){
    echo $redirect;
  }else{
    $weddingDate = $_GET['weddingDate'];
    $dateArray = date_parse($weddingDate);
    $weddingMonth = $dateArray['month'];
  }

  //extras
  $hexarborLang ='';
  $vintagesofaLang ='';
  $antiquejugsLang ='';
  $winejugLang ='';
  $clearjarsLang ='';
  $bluejarsLang ='';
  $deliveryLang ='';

  $extras = [];

  if( !isset($_GET['hexarbor']) ){
    //nothing
  }else{
    $hexarbor = true;
    $hexarborLang = 'Hexagonal Arbor';
    array_push($extras, 'Hexagonal Arbor');
  }

  if( !isset($_GET['vintagesofa']) ){
    //nothing
  }else{
    $vintagesofa = true;
    $vintagesofaLang = 'Vintage Sofa';
    array_push($extras, 'Vintage Sofa');
  }

  if( !isset($_GET['antiquejugs']) ){
    //nothing
  }else{
    $antiquejugs = true;
    $antiquejugsLang = 'Antique Jugs';
    array_push($extras, 'Antique Jugs');
  }

  if( !isset($_GET['winejug']) ){
    //nothing
  }else{
    $winejug = true;
    $winejugLang = 'Wine Jug';
    array_push($extras, 'Wine Jug');
  }

  if( !isset($_GET['clearjars']) ){
    //nothing
  }else{
    $clearjars = true;
    $clearjarsLang = 'Clear Jars';
    array_push($extras, 'Clear Jars');
  }

  if( !isset($_GET['bluejars']) ){
    //nothing
  }else{
    $bluejars = true;
    $bluejarsLang = 'Blue Jars';
    array_push($extras, 'Blue Jars');
  }

  if( !isset($_GET['delivery']) ){
    //nothing
  }else{
    $delivery = true;
    $deliveryLang = 'Delivery';
    array_push($extras,'Delivery');
  }

?>

<h1 class="text-center">Selections </h1>

<div class="text-start">
    
    <?php
        echo 'First Name: '.$fname;
        echo '<br>';
        echo 'Last Name: '.$lname;
        echo '<br>';
        echo 'Phone Number: '.$phone;
        echo '<br>';
        echo 'Email: '.$email;
        echo '<br>';
        echo 'Set Option: '.$setOption;
        echo '<br>';
        echo 'Package: '.$packageChoice;
        echo '<br>';
        echo 'Wedding Date: '.$weddingDate;
        echo '<br>';
        echo 'Extras: ';

            foreach ($extras as $extra){
                echo '<br>';
                echo '- ' .$extra ;
            }

    ?>
</div>


<?php
//footer
require('footer.php');
?>