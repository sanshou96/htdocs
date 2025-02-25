<!DOCTYPE html>
<html lang="el">


<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/"; include($IPATH."head.php"); ?>
<body class="back">
    
        <div class="navwrap2 abs sticky" id="myNavwrap">
    <nav>
        <div class="navwrap" id="myNavwrap1">
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/"; include($IPATH."navbar.php"); ?>
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
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/"; include($IPATH."footer.html"); ?>
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
