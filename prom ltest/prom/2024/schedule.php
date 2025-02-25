<!doctype html>
<html lang="el">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Δημήτρης Καρσλίδης-Dimitris Karslidis">
  <meta name="description" content="Στον γυμναστικό σύνδεσμο Προμηθέα λειτουργούν τμήματα παραδοσιακού KUNG FU , SANDA(CHINESE BOXING), PERSONAL TRAINING , καθώς επίσης τμήμα ΚΑΛΑΘΟΣΦΑΙΡΙΣΗΣ και ΓΕΝΙΚΗΣ ΓΥΜΝΑΣΤΙΚΗΣ.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>
    document.getElementsByTagName("html")[0].className += " js";
  </script>
  <title>Προμηθέας Νίκαιας</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
  <link rel="shortcut icon" href="image1.png" type="image/x-icon">

  <link rel="stylesheet" href="assets/css/style.css?v=2.4">
  <link rel="stylesheet" href="styles/prom.css?v=2.4">
  <link rel="stylesheet" href="styles/mediaqueries.css?v=2.4">

</head>

<body>
  <div class="navwrap2 abs sticky" id="myNavwrap">
    <nav>
      <div class="navwrap" id="myNavwrap1">
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/";
        include($IPATH . "navbar.php"); ?>
        </span>
      </div>

    </nav>
  </div>
  <div class="contentwrap innertop">
    <header class="cd-main-header text-center flex flex-column flex-center">


      <h1 class="text-xl">ΠΡΟΓΡΑΜΜΑ 2023-2024 </h1>
    </header>

    <div class="schedule">
      <img src="/images/schedule.png" alt="Πρόγραμμα 2023 - 2024" style="display:block; margin: auto;">
    </div>
   
    <footer id="footer">
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/";
      include($IPATH . "footer.html"); ?>
    </footer>
</body>

<script>
  var navList = document.getElementById("nav-lists");

  function Show() {

    navList.classList.add("_Menus-show");
    document.getElementById("myNavwrap1").style.height = "0px";
    document.getElementById("navimgid").style.marginTop = "120px";

  }

  function Hide() {

    navList.classList.remove("_Menus-show");
    document.getElementById("myNavwrap1").style.height = "120px";
    document.getElementById("navimgid").style.marginTop = "0px";
  }

  window.onscroll = function() {
    myFunction1()
  };

  var header = document.getElementById("myNavwrap");
  var sticky = navwrap2.offsetTop;

  function myFunction1() {
    if (window.pageYOffset > 100) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
</script>


</html>