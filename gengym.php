<!DOCTYPE html>
<html lang="el">

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/"; include($IPATH."head.php"); ?>
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
       <p class="protitle">Λόγω των μέτρων για τον Covid-19 το τμήμα της γενικής γυμναστικής βρίσκεται προσωρινά σε αναστολή. </p>
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