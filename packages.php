<?php
//Test comment
//packages.php
require('header.php');
require('./models/Packages.php');

$thisPackage;

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

  if( !isset($_GET['setOption']) ){
    echo $redirect;
  }else{
    $setOption = $_GET['setOption'];
  }

  if( !isset($_GET['upsellPackage']) ){
    $upsellPackage = '';
  }else{
    $upsellPackage = $_GET['upsellPackage'];
  }

  //var_dump($weddingMonth);

  $available = true;
  if($setOption == 'layeredarch' && $weddingMonth == 1){
    $available = false;
  }

  if($setOption == 'modernround' && $weddingMonth == 2){
    $available = false;
  }

  if($setOption == 'vintagemirror' && $weddingMonth == 3){
    $available = false;
  }

  if($setOption == 'darkwalnut' && $weddingMonth == 4){
    $available = false;
  }

  if($setOption == 'rusticwood' && $weddingMonth == 5){
    $available = false;
  }

  //var_dump($available);

  $availableTrue = $available ? 'd-block' : 'd-none';
  $availableFalse = !$available ? 'd-block' : 'd-none';

  //selected logic to handle extras package upsell
  if($upsellPackage == 'fullset'){
    $fullSelected = 'selected';
  }
  else{
    $fullSelected = '';
  }
  
  if($upsellPackage == 'pick6' || $upsellPackage == 'vmpick6'){
    $sixSelected = 'selected';
  }else{
    $sixSelected = '';
  }

  if($upsellPackage == 'platinum'){
    $platinumSelected = 'selected';
  }else{
    $platinumSelected = '';
  }
  if($upsellPackage == 'gold'){
    $goldSelected = 'selected';
  }else{
    $goldSelected = '';
  }


  $layeredArch = '
  <option class= "option-style" value= "fullset"'.$fullSelected.'>Full Set- $849</option>
  <option class= "option-style" value= "pick6"'.$sixSelected.'>Pick 6- $749</option>
  <option class= "option-style" value= "pick4">Pick 4- $649</option>
';
$modernRound = '
  <option class= "option-style" value= "fullset"'.$fullSelected.'>Full Set- $799</option>
  <option class= "option-style" value= "pick6"'.$sixSelected.'>Pick 6- $699</option>
  <option class= "option-style" value= "pick4">Pick 4- $599</option>
';
$vintageMirror ='
  <option class= "option-style" value= "platinum"'.$platinumSelected.'>Platinum Package Rental- $849</option>
  <option class= "option-style" value= "gold"'.$goldSelected.'>Gold Package Rental- $799</option>
  <option class= "option-style" value= "vmpick6"'.$sixSelected.'>Pick 6- $649</option>
  <option class= "option-style" value= "vmpick4">Pick 4- $599</option>
';
$walnutRustic= '
  <option class= "option-style" value= "fullset"'.$fullSelected.'>Full Set- $299</option>
  <option class= "option-style" value= "pick6"'.$sixSelected.'>Pick 6- $245</option>
  <option class= "option-style" value= "pick4">Pick 4- $199</option>
';
$layeredArchFullSetPackageDetails = '
<form class="formClass" name="packageList" id="packageListForm" action="extras.php" method="get">

<label for="packageCheckList" class="rental-head">Choose Your Set Items ( FULL SET INCLUDES ALL OF THE FOLLOWING ITEMS ):</label>
                <br>
                <br>
                <input name = "check_list[]" value = "Customized welcome sign" type="checkbox">
                <label class = "option-style">Customized welcome sign (choice of trellis half arch or smooth half arch insert up to 25 words text)</label>
                <br>
                <input  name = "check_list[]" value = "3 piece seating chart half arch set "  type="checkbox">
                <label  class = "option-style">3 piece seating chart half arch set (print service for cards is available for a small additional fee)</label>
                <br>
                <input  name = "check_list[]"  value = "Table numbers 1-30"  type="checkbox">
                <label  class = "option-style">Table numbers 1-30</label>
                <br>
                <input  name = "check_list[]" value = "Gold Card Terrarium with choice of “Gifts & Cards” sign" type="checkbox">
                <label  class = "option-style">Gold Card Terrarium with choice of “Gifts & Cards” sign</label>
                <br>
                <input  name = "check_list[]" value = "5 “Reserved” signs" type="checkbox">
                <label  class = "option-style">5 “Reserved” signs</label>
                <br>
                <input  name = "check_list[]"value = "Up to 2 Double Half Arch Small signs" type="checkbox">
                <label  class = "option-style">Up to 2 Double Half Arch Small signs (“Gifts & Cards,” “Take One,” “Dont Mind if I Do,” “In Loving Memory”)</label>
                <br>
                <input  name = "check_list[]" value = "Up to 2 Sunset Small signs" type="checkbox">
                <label  class = "option-style">Up to 2 Sunset Small signs (“Please Sign Our Guestbook,” “Gifts & Cards,” “In Loving Memory”)</label>
                <br>
                <input  name = "check_list[]" value = "1 Double Half Arch Medium sign" type="checkbox">
                <label  class = "option-style">1 Double Half Arch Medium sign (“Cheers,” “The Bar,” “Guestbook,” or Custom Acrylic Text)</label>
                <br>
                <input  name = "check_list[]" value = "1 Double Full Arch Medium sign" type="checkbox">
                <label  class = "option-style">1 Double Full Arch Medium sign (“Signature Drinks,” or Custom Acrylic Text)</label>
                <br>
                <input  name = "check_list[]" value = "Unplugged Ceremony sign" type="checkbox">
                <label  class = "option-style">Unplugged Ceremony sign</label>
                <br>
                <input  name = "check_list[]" value = "Hairpin Record Player Prop" type="checkbox">
                <label  class = "option-style">Hairpin Record Player Prop</label>
                <br>
                <input  name = "check_list[]" value = ""Mr & Mrs" Custom Head Table Keepsake is a free gift in addition to the items above" type="checkbox">
                <label  class = "option-style">"Mr & Mrs" Custom Head Table Keepsake is a free gift in addition to the items above</label>
                <br>
                <br>

</form>
';
$modernRoundFullSetPackageDetails = '
<form class="formClass" id= "packageList" name="packageListForm" id="extrasForm" action="extras.php" method="get">

<label for="packageCheckList" class="rental-head">Choose Your Set Items ( FULL SET INCLUDES ALL OF THE FOLLOWING ITEMS ):</label>
                <br>
                <br>
                <input  type="checkbox">
                <label class = "option-style">Large Custom Welcome (round center becomes a keepsake) </label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">1-30 free standing table numbers</label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">Modern Locking Card Box or Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">Set of “Reserved” signs (5)</label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">2 Selections of Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">2 Selections of Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">All Full Set Rental Clients receive 1 SMALL COMPLIMENTARY 3-D CUSTOMIZATION on a small sign in addition to their Round Welcome Sign Keepsake</label>
                <br>
                <br>
                <input type="submit" value="Continue">

</form>
';
$darkWalnutFullSetPackageDetails = '
<form class="formClass" name="packageList" id="packageListForm" action="extras.php" method="get">

<label for="packageCheckList" class="rental-head">Choose Your Set Items ( FULL SET INCLUDES ALL OF THE FOLLOWING ITEMS ):</label>
                <br>
                <br>
                <input  type="checkbox">
                <label class = "option-style">Large Custom Welcome (round center becomes a keepsake) </label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">1-30 free standing table numbers</label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">Modern Locking Card Box or Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">Set of “Reserved” signs (5)</label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">2 Selections of Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">2 Selections of Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</label>
                <br>
                <input  type="checkbox">
                <label class = "option-style">All Full Set Rental Clients receive 1 SMALL COMPLIMENTARY 3-D CUSTOMIZATION on a small sign in addition to their Round Welcome Sign Keepsake</label>
                <br>
                <br>
                <input type="submit" value="Continue">

</form>
';
$packageListValue = "";

if($setOption == 'layeredarch'){
  $optionMarkup = $layeredArch;
  $thisPackage = new LayeredArchPackage();
  // for packages checklist
  $packageListMarkup = $layeredArchFullSetPackageDetails;
}
if($setOption == 'modernround'){
    $optionMarkup = $modernRound;
    $thisPackage = new ModernRoundPackage();
    $packageListMarkup = $modernRoundFullSetPackageDetails;

}
if($setOption == 'vintagemirror'){
    $optionMarkup = $vintageMirror;
    $thisPackage = new VintageMirrorPackage();
}
if($setOption ==  'darkwalnut'){
  $optionMarkup = $walnutRustic;
  $thisPackage = new DarkWalnutPackage();
}
if($setOption == 'rusticwood'){
  $optionMarkup = $walnutRustic;
  $thisPackage = new RusticWoodPackage();
}

$packageMarkup = '
<div class= row>
<div class="col-12 center">
<div class="form-group">     
<label for="packageChoice" class="rental-head">Choose Your Package:</label>

<br>
<select class="form-control select-style" id="packageChoice" name="packageChoice" onchange=" countHowManyBoxesAreChecked(); displayPackageDetails();">
'.$optionMarkup.'
</select>
</div>
</div>    
</div>   
';





$packageCheckList = '
            '.$packageListMarkup.'
           
';



?>



<script>
  document.getElementById("headerImage").style.backgroundImage = "url('img/headerImages/signonTable.jpg')";
  document.getElementById("headerImage").style.backgroundPosition = "50% 67%";
  document.getElementById("headerImage").style.height = "300px";

  window.onload = (event) => {
    displayPackageDetails();
    getCheckedBoxes();
  };

</script>



    <div class = "container-fluid">
      <div class = "row" style="height:300px">      
        <div class = "col-3 d-none d-md-block"></div>
        <div class = "col-1 d-none d-md-block"></div>
        <div class = "col-md-4 text-center center">

            <p id="availableTrue">
                <br>
                <form name="conntinue2extras" id="conntinue2extras" action="extras.php" method="get" class="form-align <?php echo $availableTrue;?>">
                    Great!  This set is available on <?php echo $weddingDate;?>
                    <br>
                    <br>
                    <input type="hidden" id="packageCode" name="packageCode" value="<?php echo $thisPackage->getCode();?>">
                    <input type="hidden" id="weddingDate" name="weddingDate" value="<?php echo $weddingDate;?>"> 
                    <input class="collapse" type="hidden" id="packageListCollapse" name="packageList" value="">
                  
                    <?php 
                      echo $packageMarkup; 
                    ?>
                    <button class = "btn btn-primary button" type="submit" onclick = "getCheckedBoxes()"  >Continue</button>  
          
                </form>               
            </p>

            <p id="availableFalse">
                <br>
                <form name="conntinue2extras" id="conntinue2extras" action="pickYourSet.php" method="get" class="<?php echo $availableFalse;?>">
                    Sorry, this set is not available on <?php echo $weddingDate;?>
                    <br>
                    <br>
                    <input type="hidden" id="weddingDate" name="weddingDate" value="<?php echo $weddingDate;?>">
                    <input type="hidden" id="displaySets" name="displaySets" value="<?php echo $displaySets;?>">
                    <input type="hidden" id="packageList" name="packageList" value="2">
                    <input type="hidden" id="setOption" name="setOption" value="">
                    <button type="submit">Try a Different Set</button>   
                </form>            
            </p>


        </div>
        <div class = "col-1 d-none d-md-block"></div>
        <div class = "col-3 d-none d-md-block"></div>
      </div><!--end of row--> 
      
      </div><!--End of container-fluid-->




    <!-- Collapse that displays the Package checkboxes  -->
    <div class="collapse" id="collapseDiv">
      <div class="card card-body">

      <form class="formClass" id= "packageList" name="packageList" id="extrasForm" action="extras.php" method="get">
      <input type="hidden" id="packageList" name="packageList" value="<?php echo $packageCheckList;?>">
      </form>
    </div>
    <!-- Card collapse -->


  <script>

  function displayPackageDetails() {

    var optionChoice = document.getElementById("packageChoice").selectedIndex;
      optionChoiceValue = document.getElementsByTagName("option")[optionChoice].value;
      optionChoiceDetails = document.getElementsByTagName("option")[optionChoice].text;
      //console.log( optionChoiceValue + " was chosen");
      //console.log( "Option choice details: " + optionChoiceDetails);

      if(optionChoiceValue != null ){
        document.getElementById("collapseDiv").className = "collapse show";
      }
      if(optionChoiceDetails == "Full Set- $849" || optionChoiceDetails == "Full Set- $799"  ){
        // check every checkbox
        checkAllBoxes();
        countHowManyBoxesAreChecked();

      }
      if( optionChoiceDetails == "Pick 6- $749" || optionChoiceDetails == "Pick 6- $699" ) {

        // allow user to pick just 6 boxes
        clearCheckBoxes();
        countHowManyBoxesAreChecked();
      }
      if( optionChoiceDetails == "Pick 4- $649" || optionChoiceDetails == "Pick 4- $599" ) {

        // allow user to pick just 4 boxes
        clearCheckBoxes();
        countHowManyBoxesAreChecked();

      }
  }

  function countHowManyBoxesAreChecked(){
    var optionChoice = document.getElementById("packageChoice").selectedIndex;
    var optionChoiceDetails = document.getElementsByTagName("option")[optionChoice].text;
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for(var i = 0; i < checkboxes.length; i++ ){
      

      checkboxes[i].onchange = function(){
        getCheckedBoxes();
        var count = 0;


        for(var i = 0; i < checkboxes.length; i++ ){
          var box = checkboxes[i];
          if (box.checked) {
            count++;
          }
          if( (count < 4) && (optionChoiceDetails == "Pick 4- $649" || optionChoiceDetails == "Pick 4- $599") ){
            enableAllCheckboxes();
          }
          if( (count = 4) && (optionChoiceDetails == "Pick 4- $649" || optionChoiceDetails == "Pick 4- $599") ){
            check4Boxes();
          }
          if( (count < 6) && (optionChoiceDetails == "Pick 6- $749" || optionChoiceDetails == "Pick 6- $699")){
            enableAllCheckboxes();
          }
          if( (count = 6) && (optionChoiceDetails == "Pick 6- $749" || optionChoiceDetails == "Pick 6- $699")){
            check6Boxes();
            break;
          }
          
        }         
      }
        
    }
  }
    

  function check6Boxes() {
    var count = 0;
    var maxCount = 6;
    var boxesThatAreChecked = [];
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');

     
    for(var i = 0; i < checkboxes.length; i++ ){
      var box = checkboxes[i];
      if (box.checked) {
        count++;
        boxesThatAreChecked.push(box);
      }
     if(boxesThatAreChecked.length == maxCount){
        //console.log("MAX COUNT HAS BEEN REACHED " + count);

        // if checkbox is not in boxesThatAreChecked - disable it
      for(var i = 0; i < checkboxes.length; i++ ){
        if( !boxesThatAreChecked.includes(checkboxes[i])){
          checkboxes[i].disabled = true;
        }

      }
      }

    }
  
  }
  function enableAllCheckboxes(){
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for(var i = 0; i < checkboxes.length; i++ ){
      var box = checkboxes[i];
      box.disabled = false;

    }

  }


  function check4Boxes() {
    var count = 0;
    var maxCount = 4;
    var boxesThatAreChecked = [];
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');

    for(var i = 0; i < checkboxes.length; i++ ){
      var box = checkboxes[i];
      if (box.checked) {
        count++;
        boxesThatAreChecked.push(box);
      }
     if(boxesThatAreChecked.length == maxCount){
        console.log("MAX COUNT HAS BEEN REACHED " + count);

        // if checkbox is not in boxesThatAreChecked - disable it
      for(var i = 0; i < checkboxes.length; i++ ){
        if( !boxesThatAreChecked.includes(checkboxes[i])){
          checkboxes[i].disabled = true;
        }
        

      }
      }

    }
  
  }

  function clearCheckBoxes() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var checkbox of checkboxes) {
      checkbox.checked = false;
      checkbox.disabled = false;
    }
  }

      
  function checkAllBoxes() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var checkbox of checkboxes) {
      checkbox.checked = true;
      checkbox.disabled = false;

    }
  }




  function getCheckedBoxes(){
    console.log("value function is called");

    var checkedBoxes = new Array();
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    var valueToPass = "";

    for (var checkbox of checkboxes) {
      if( checkbox.checked ){
        checkedBoxes.push(checkbox.value);
        valueToPass += (checkbox.value + ", ");
      }
    }
    //console.log(checkedBoxes);
    var packageListValue = document.getElementById("packageListCollapse");


    packageListValue.setAttribute("value", valueToPass );  
    console.log("The current 'value': " + packageListValue.getAttribute("value"));
    
    
    var x = "<?php echo "$packageListValue"?>";
    x = valueToPass;

  }
    

  
    
  </script>


  

<?php
//footer
require('footer.php');
?>
