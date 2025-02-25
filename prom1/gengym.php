<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Δημήτρης Καρσλίδης-Dimitris Karslidis">
    <meta name="description" content="Στον γυμναστικό σύνδεσμο Προμηθέα λειτουργούν τμήματα παραδοσιακού KUNG FU , SANDA(CHINESE BOXING), PERSONAL TRAINING , καθώς επίσης τμήμα ΚΑΛΑΘΟΣΦΑΙΡΙΣΗΣ και ΓΕΝΙΚΗΣ ΓΥΜΝΑΣΤΙΚΗΣ.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="image1.png" type="image/x-icon">
    <title>Προμηθέας Νίκαιας</title>
    <link rel="stylesheet" href="styles/prom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
      <link rel="stylesheet" href="styles/mediaqueries.css">
</head>
    <body class="back">
         <div class="contentwrap">
<div class="gengymtheme">

<div class="navwrap2" id="myNavwrap">
    <nav class="navwrap" id="myNavwrap1">
        
            
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/prom/"; include($IPATH."navbar.php"); ?>    
        </span>
    </nav>
</div>
    
    
    
        <p class="protitle">ΓΕΝΙΚΗ ΓΥΜΝΑΣΤΙΚΗ </p>
       
    </div>
    <div class="ourclub">
    <div class="inner">
        
        <div class="sullogos">
           <h2>Γενική Γυμναστική </h2>
        <p class="textblock">Ο όρος «Γενική Γυμναστική» ή «Γυμναστική για όλους» αναφέρεται
           στον συνδυασμό των αγωνισμάτων της ενόργανης, της ρυθμικής και της αεροβικής γυμναστικής.
           <br><br>Τα τελευταία χρόνια το συγκεκριμένο άθλημα κερδίζει έδαφος παγκοσμίως, καθώς όλο
            και περισσότεροι ασχολούνται με αυτό το είδος 
           γυμναστικής. Στοχεύει σε όλες της ηλικίες και δίνει την δυνατότητα εκγύμνασης 
           σε πολλά επίπεδα. Δεν απαιτεί πολύωρες προπονήσεις και δεν ανήκει στην κατηγορία
            του πρωταθλητισμού με κύριο χαρακτηριστικό της την άσκηση για όλους.
            <br><br>Τα βασικά στοιχεία του αθλήματος είναι ο πειραματισμός, ο αυθορμητισμός, 
            η εκφραστικότητα και η ανακάλυψη νέων τρόπων γύμνασης που προσφέρουν υγεία και ευεξία. Συνδυάζει
             την κίνηση με την θεατρικότητα και την συνοδεία μουσικής επένδυσης καθώς και τη χρήση αυτοσχέδιων ή μη οργάνων. 
</p>
          
        </div>
           
        </div>
        </div>
   <footer id="footer">
   <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/prom/"; include($IPATH."footer.html"); ?>
    </footer>



</body>
<script>
var navList = document.getElementById("nav-lists");
function Show() {
  
navList.classList.add("_Menus-show");
      document.getElementById("myNavwrap1").style.height = "0px";
    document.getElementById("navimgid").style.marginTop = "120px";
   
}

function Hide(){
    
navList.classList.remove("_Menus-show");
    document.getElementById("myNavwrap1").style.height = "120px";
    document.getElementById("navimgid").style.marginTop = "0px";
}
    
window.onscroll = function() {myFunction1()};

var header = document.getElementById("myNavwrap");
var sticky = navwrap2.offsetTop;

function myFunction1() {
  if (window.pageYOffset >100) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}    
</script>

</html>