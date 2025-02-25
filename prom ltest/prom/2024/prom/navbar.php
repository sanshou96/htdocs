    
        <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
           
                <div class="logo">
                    <a href="index.php" title="Αρχική σελίδα" target=""> <img id="navimgid" class="navimg" src="images/31.png" alt="promitheas nikaias logo" height="120px"></a>
                </div>
                <span class="nav">
                    <div class="liwrap">
                    <div class="icon-bar" onclick="Show()">
                        <i></i>
                        <i></i>
                        <i></i>
                    </div>

                   <ul id="nav-lists">
               <li class="close"><span onclick="Hide()">×</span></li>
               <li><a class="<?= ($activePage == 'index') ? 'active':''; ?>"  href="index.php" title="Αρχική σελίδα" target="">Αρχική σελίδα</a></li>
                <li class="dropdown"><a class="<?= ($activePage == 'about' or $activePage == 'sanda'
                or $activePage == 'kungfu'or $activePage == 'shuaijiao'or $activePage == 'gengym'or $activePage == 'basket'or
                 $activePage == 'taichi'or $activePage == 'qigong') ? 'active':'dropbtn'; ?>"
                 href="about.php" class="dropbtn" title="Ο σύλλογος μας" target="">Ο Συλλογός μας </a><div class="dropdown-content">
      <a href="kungfu.php">WUSHU KUNGFU</a>
      <a href="sanda.php">SANDA</a>
      <a href="shuaijiao.php">SHUAI JIAO</a>
      <a href="Taichi.php">TAI CHI</a>
      <a href="qigong.php">QIGONG</a>
                    <a href="gengym.php">ΓΕΝΙΚΗ ΓΥΜΝΑΣΤΙΚΗ</a>
                    <a href="basket.php">ΜΠΑΣΚΕΤ</a>
                    
    </div></li>
                
               <li> <a class="<?= ($activePage == 'trainers') ? 'active':''; ?>" href="trainers.php" title="Προπονητές" target="">Προπονητές</a></li>
               <li> <a class="<?= ($activePage == 'schedule') ? 'active':''; ?>" href="schedule.php" title="Πρόγραμμα" target="">Πρόγραμμα</a></li>
               <li> <a class="<?= ($activePage == 'articles') ? 'active':''; ?>" href="articles.php" title="Άρθρα" target="">Άρθρα</a></li>
               <li> <a class="<?= ($activePage == 'multimedia') ? 'active':''; ?>" href="multimedia.php" title="Πολυμέσα" target="">Πολυμέσα</a></li>
               <li> <a class="<?= ($activePage == 'contact') ? 'active':''; ?>" href="contact.php" title="Επικοινωνία" target="">Επικοινωνια</a></li>
              
            </ul>
                    </div>
           
        </span>
        
   