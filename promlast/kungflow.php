<!DOCTYPE html>
<html lang="el">

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/"; include($IPATH."head.php"); ?>

<body class="back">
  <div class="contentwrap">
    <div class="kungflowtheme">

      <div class="navwrap2" id="myNavwrap">
        <nav class="navwrap" id="myNavwrap1">

          <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/";
          include($IPATH . "navbar.php"); ?>
          </span>
        </nav>
      </div>


      <p class="protitle">KUNG FLOW </p>

    </div>
    <div class="ourclub">
      <div class="inner">

        <div class="sullogos">
          <h2>Kung Flow</h2>
          <p>
          Το kung flow στοχεύει στη βελτίωση της δύναμης, της ευλυγισίας, της 
          ισορροπίας και της συνειδητότητας του σώματος. Οι κύριοι στόχοι τουγω είναι:<br><br>

1.	Ενδυνάμωση του κέντρου του σώματος: Το kung flow επικεντρώνεται στη δύναμη του “κέντρου” 
(core), δηλαδή των μυών της κοιλιάς, της μέσης, της λεκάνης και της πλάτης. 
Η ενδυνάμωση αυτών των μυών βοηθά στη σταθερότητα του κορμού και στη σωστή στάση.
<br><br>
2.	Βελτίωση της ευλυγισίας: Μέσω των ασκήσεων,  αυξάνεται η ελαστικότητα 
των μυών και η κινητικότητα των αρθρώσεων, κάτι που συμβάλλει στη μείωση του κινδύνου τραυματισμών.<br><br>
3.	Βελτίωση της ισορροπίας και του συντονισμού: Οι ασκήσεις δίνουν έμφαση
 στην ισορροπία και στον έλεγχο της κίνησης, συμβάλλοντας στην καλύτερη 
 συντονιστικότητα και την ευχέρεια στις καθημερινές κινήσεις.<br><br>
4.	Σωστή στάση σώματος: Μέσω της εκγύμνασης του κέντρου και της βελτίωσης
 της κινητικότητας, βοηθά στη βελτίωση της στάσης του σώματος, κάτι που 
 μειώνει την καταπόνηση και τον πόνο στη σπονδυλική στήλη.<br><br>
5.	Αύξηση της αντοχής: Στο kung flow βελτιώνουμε την αντοχή των μυών μέσω
 της σταδιακής και ελεγχόμενης αύξησης της δυσκολίας των ασκήσεων.<br><br>
6.	Συνειδητότητα σώματος: Ενσωματώνουμε την αρχή της συνειδητής αναπνοής 
και της επίγνωσης των κινήσεων. Αυτό βοηθά να αναπτυχθεί καλύτερη σύνδεση με το σώμα και έλεγχος των κινήσεων.<br><br>
7.	Ανακούφιση από το άγχος: Η ήρεμη, συγκεντρωμένη κίνηση και η χρήση 
ελεγχόμενης αναπνοής βοηθούν στη χαλάρωση και την ανακούφιση από το άγχος, κάτι που βελτιώνει την ψυχική ευεξία.<br><br>

Το kung flow προσαρμόζεται στις ανάγκες και τους στόχους του κάθε ατόμου,
 είτε αφορά τη βελτίωση της φυσικής κατάστασης είτε την αποκατάσταση και την ευεξία.
</p>
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