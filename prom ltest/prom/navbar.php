    <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
    <?php $cur_dir = explode('\\', getcwd()); ?>
    <?php $x = $cur_dir[count($cur_dir) - 1]; ?>
    <?php $actual_link = (isset($_SERVER['HTTPS']) ?
        "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
    <div class="logo">
        <a href="/index.php" title="Αρχική σελίδα" target=""> <img id="navimgid" class="navimg" src="/images/31.png" alt="promitheas nikaias logo" height="120px"></a>
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
                <li><a class="<?= ($activePage == 'index' && $x != '/var/www/vhosts/gspromitheas.gr/httpdocs/blog') ? 'active' : ''; ?>" href="/index.php" title="Αρχική σελίδα" target="">Αρχική σελίδα</a></li>
                <li class="dropdown"><a  href="/about.php" class="<?= ($activePage == 'about' or $activePage == 'sanda'
                                                    or $activePage == 'kungfu' or $activePage == 'shuaijiao' or $activePage == 'gengym' or $activePage == 'basket' or
                                                    $activePage == 'taichi' or $activePage == 'qigong') ? 'active' : 'dropbtn'; ?>" class="dropbtn" title="Ο σύλλογος μας" target="">Ο Συλλογός μας </a>
                    <div class="dropdown-content">
                        <a href="/kungfu.php">WUSHU KUNGFU</a>
                        <a href="/sanda.php">SANDA</a>
                        <a href="/shuaijiao.php">SHUAI JIAO</a>
                        <a href="/taichi.php">TAI CHI</a>
                        <a href="/qigong.php">QIGONG</a>
                    </div>
                </li>


                <li> <a class="<?= ($activePage == 'trainers') ? 'active' : ''; ?>" href="/trainers.php" title="Προπονητές" target="">Προπονητές </a></li>
                <li> <a class="<?= ($activePage == 'schedule') ? 'active' : ''; ?>" href="/schedule.php" title="Πρόγραμμα" target="">Πρόγραμμα</a></li>
                <li class="dropdown"><a class="<?= ($actual_link == 'https://gspromitheas.gr/blog/album/' or $actual_link == 'https://gspromitheas.gr/blog/' or $actual_link == 'https://gspromitheas.gr/blog/arxeionea/') ? 'active' : 'dropbtn'; ?>" href="https://gspromitheas.gr/blog/arxeionea/" class="dropbtn" title="ΑΡΧΕΙΟ/ΑΡΘΡΑ" target="">Αρχείο/Άρθρα </a>
                    <div class="dropdown-content">

                        <a class="<?= ($actual_link == 'https://gspromitheas.gr/blog/album/') ? 'active' : ''; ?>" href="https://gspromitheas.gr/blog/album/" title="Πολυμέσα" target="">Φωτογραφίες</a>
                        <a class="<?= ($actual_link == 'https://gspromitheas.gr/blog/') ? 'active' : ''; ?>" href="/blog" title="Άρθρα" target="">Άρθρα </a>

                    </div>
                </li>


                <li> <a class="<?= ($activePage == 'contact') ? 'active' : ''; ?>" href="/contact.php" title="Επικοινωνία" target="">Επικοινωνία</a></li>

            </ul>
        </div>

    </span>