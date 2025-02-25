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
    
        <div class="navwrap2 abs sticky" id="myNavwrap">
    <nav>
        <div class="navwrap" id="myNavwrap1">
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/prom/"; include($IPATH."navbar.php"); ?>
            </span>
             </div>
            </nav>
    </div>
       <div class="contentwrap">
    <div class="innertop">
    
    <div style="height: 51vh;" class="nichts">
    <h1 style="    text-align: center;padding: 20vh;">Η σελίδα αυτή είναι προσωρινά μη διαθέσιμη </h1>
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
