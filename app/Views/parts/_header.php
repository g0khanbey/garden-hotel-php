<nav>
        <div class="container">
            <div class="row">
                <header class="header">
                    <div class="header-left">
                        <a href="./index.php">
                            <img class="logo" src="./assets/media/logo_acikbeyaz.png" alt="grh-logo">
                        </a>
                    </div>

                    <div class="header-right">
                        <div class="nav-menu" id="navi-menu">
                            <ul class="nav-items">
                                <li class="list-items">
                                    <a class="header-link" id="active-nav" href="./index.php">Ana Sayfa</a>
                                </li>
                                <li class="list-items">
                                    <a class="header-link" href="./gallery">Bilet Al</a>
                                </li>
                                <li class="list-items">
                                    <a class="header-link" href="./about">Hakkımızda</a>
                                </li>
                                <li class="list-items">
                                    <a class="header-link" href="./amenities">Yardım</a>
                                </li>
                                <li class="list-items">
                                    <a class="header-link" href="./contacts">İletişim</a>
                                </li>

                                <li class="list-items">
                                    <a class="header-link" href="./faqs">SSS</a>
                                </li>
                            </ul>
                            <div class="vertical"></div>

                            <?php
                            
                                if(isset($_SESSION['giris']) && $_SESSION['giris'] == true) { ?>
                            <button class="head-btn" onclick="window.location.href = './account'">
                                Hesabım
                            </button>
                            <?php }
                            else {  ?>

                            <button class="head-btn" onclick="window.location.href = './login'">
                                Giriş
                            </button>

                            <button class="head-btn" onclick="window.location.href = './register'">
                                Kayıt Ol
                            </button>
                            <?php
                            } ?>

                        </div>

                        <!-- Mobile Menu / Mobile için menu -->
                        <div class="mobile-menu" id="hamburger">
                            <i id="openMenu" class="fa-solid fa-bars fa-2xl" style="color: #2c333d;"></i>
                            <i id="closeMenu" class="hide fa-solid fa-x fa-2xl " style="color: #2c333d;"></i>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </nav>