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
    <div class="innertop">
         <div class="navwrap2 abs sticky" id="myNavwrap">
    <nav class="navwrap" id="myNavwrap1">
     
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/prom/"; include($IPATH."navbar.php"); ?>
                    </div>  
                 
        </span>
            
             </nav>
        </div>
        
<div class="row">  
    <div class="bio">
      <img class="bioimg"  src="./images/papacha.png" alt="Smiley face" >
<p class="biotext">
     
<strong>ΗΜ. ΓΕΝΝΗΣΕΩΣ</strong> :  6/6/1969<br>
<strong>ΤΟΠΟΣ ΓΕΝΝΗΣΗΣ</strong>  :  ΠΕΙΡΑΙΑΣ<br><br>

Ο <strong>ΠΑΠΑΧΑΡΑΛΑΜΠΟΥΣ ΒΑΣΙΛΕΙΟΣ</strong> ΞΕΚΙΝΗΣΕ ΤΗΝ ΕΝΑΣΧΟΛΗΣΗ ΤΟΥ ΜΕ ΤΑ ΜΑΧΗΤΙΚΑ ΣΠΟΡ ΚΑΙ ΠΟΛΕΜΙΚΕΣ ΤΕΧΝΕΣ ΤΟ 1984 ΜΕ ΕΛΕΥΘΕΡΑ ΠΑΛΗ ΤΙΣ ΠΕΡΙΟΔΟΥΣ 1986-1987 ΚΑΙ 1998-2000 ΜΕΤΑΠΗΔΗΣΕ ΓΙΑ ΛΙΓΟ  ΣΤΗΝ ΠΥΓΜΑΧΙΑ   .

ΤΟ 1990 ΗΡΘΕ ΣΕ ΕΠΑΦΗ ΜΕ ΤΟ KUNG FU ΣΕ ΔΙΑΦΟΡΑ ΣΤΥΛ
ΟΠΟΥ ΑΣΧΟΛΕΙΤΑΙ ΕΩΣ ΣΗΜΕΡΑ .

ΑΠΟ ΤΟ 2004  ΑΣΧΟΛΕΙΤΑΙ ΜΕ ΤΟ Shaolin Nan Quan Kung fu.

ΤΟ 2005 ΕΛΑΒΕ ΜΕΡΟΣ ΣΤΗ ΣΧΟΛΗ ΠΡΟΠΟΝΗΤΩΝ  ΤΗΣ ΓΟΥ ΣΟΥ ΚΟΥΝΓΚ ΦΟΥ ΤΗΣ Γ.Γ.Α ΟΠΟΤΕ ΠΗΡΕ ΤΟ ΠΤΥΧΙΟ ΠΡΟΠΟΝΗΤΗ.

ΑΣΧΟΛΕΙΤΑΙ ΜΕ ΤΗΝ ΠΡΟΠΟΝΗΤΙΚΗ ΑΠΟ ΤΟ 1998 ΚΑΙ ΑΠΟ ΤΟ 2010 ΕΙΝΑΙ ΠΡΟΠΟΝΗΤΗΣ ΣΤΟΝ &lt;&lt;Γ.Σ Ο ΠΡΟΜΗΘΕΑΣ>> ΣΤΗ ΝΙΚΑΙΑ.

ΕΙΝΑΙ ΕΠΙΣΗΣ ΚΡΙΤΗΣ QING DA – SANDA ΤΗΣ Ε.Ο.Γ.Σ.Κ.Φ
ΚΑΙ ΤΗΣ ΠΑΓΚΟΣΜΙΑΣ ΟΜΟΣΠΟΝΔΙΑΣ (IWUF).
ΤΟ 2019 ΤΟΥ ΑΠΟΝΕΜΗΘΗΚΕ Ο ΤΙΤΛΟΣ ΤΟΥ ΠΡΟΠΟΝΗΤΗ SHUAI JIAO ΑΠΟ ΤΗΝ GUANG WU SHUAI JIAO ASSOCIATION.
</p>
        
       

</div>
  
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
