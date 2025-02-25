<!DOCTYPE html>
<html lang="el">

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/"; include($IPATH."head.php"); ?>

<body class="back">
  <div class="contentwrap">
    <div class="">
      <div class="navwrap2 abs sticky" id="myNavwrap">
        <nav class="navwrap" id="myNavwrap1">

          <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/";
          include($IPATH . "navbar.php"); ?>
      </div>

      </span>

      </nav>
    </div>

    <div class="row">
      <div class="bio">
        <img class="bioimg" src="./images/papacha.png" alt="Smiley face">
        <div class="biocontent">
          <p>
            <strong>ΗΜ. ΓΕΝΝΗΣΕΩΣ</strong>: 6/6/1969<br>
            <strong>ΤΟΠΟΣ ΓΕΝΝΗΣΗΣ</strong>: ΠΕΙΡΑΙΑΣ<br>
            <strong>ΑΡ. ΜΗΤΡΩΟΥ</strong>: Ε433<br>
            <strong>ΑΡ. ΑΔΕΙΑΣ</strong>: 33066<br>
          </p>
          <p class="biotext">

            Ο <strong>ΠΑΠΑΧΑΡΑΛΑΜΠΟΥΣ ΒΑΣΙΛΕΙΟΣ</strong>, ξεκίνησε την ενασχολησή του με τα μαχητικά σπορ
            και τις πολεμικές τέχνες το 1984 με ελευθέρα πάλη, τις περιόδους 1986-1987
            και 1998-2000 μεταπήδησε για λόγο στην πυγμαχία. Το 1990 ήρθε σε επαφή με το
            Kung Fu σε διάφορα στυλ, όπου και ασχολείται εως σήμερα. Απο το 2004
            ασχολείται με το Shaolin Nan Quan Kung Fu. Το 2005, έλαβε μέρος στη σχολή
            προπονητών της Ελληνικής ομοσπονδίας ΓΟΥ ΣΟΥ ΚΟΥΝΓΚ ΓΟΥ, αναγνωρισμένη απο την Γ.Γ.Α.
            όπου και πήρε το πτυχίο προπονητή. Ασχολείται με την προπονητική απο το 1998
            και απο το 2010 είναι προπονητής στον Γ.Σ. "Ο Προμηθέας" στην Νίκαια. Είναι επίσης κριτής
            Qingda- Sanda της Ε.Ο.Γ.Σ.Κ.Φ. και της παγκόσμιας ομοσπονδίας (IWUF). Το 2019 του
            απονεμήθηκε ο τίτλος του προπονητή Shuai Jiao απο την Guang Wu Shuai jiao Association.
          </p>
        </div>
      </div>

    </div>


  </div>
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