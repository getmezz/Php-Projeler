
<?php

include 'admin/netting/baglan.php';

$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

 ?>




<!DOCTYPE html>
    <html class="no-js" lang="tr">
    <head>

        <!--- basic page needs
        ================================================== -->
        <meta charset="UTF-8">
        <title><?php echo $ayarcek['ayar_title'];   ?></title>
        <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
        <meta name="keywords" content="<?php echo $ayarcek ['ayar_keywords']; ?> ">
        <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">

        <!-- mobile specific metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/vendor.css">
        <link rel="stylesheet" href="css/main.css">




       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- script
        ================================================== -->
        <script src="js/modernizr.js"></script>

        <!-- favicons
        ================================================== -->

        <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
        <link rel="icon" href="icon.ico" type="image/x-icon">


    </head>

    <body id="top">

        <!-- preloader
        ================================================== -->
        <div id="preloader">
            <div id="loader" class="dots-fade">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>


        <!-- header
        ================================================== -->
        <header class="s-header header">

            <div class="header__logo">
                <a class="logo" href="index.php">
                    <img src="<?php echo $ayarcek ['ayar_logo']; ?>" alt="<?php echo $ayarcek ['ayar_title'];  ?> logosu">
                </a>
            </div> <!-- end header__logo -->

            <a class="header__search-trigger" href="#0"></a>
            <div class="header__search">

                <form role="search" method="post" class="header__search-form" action="index.php?s=arama.php">
                    <label>
                        <span class="hide-content">Sayfada Ara:</span>
                        <input type="search" class="search-field" placeholder="Kelime Giriniz" value="" name="kelime" title="Kelime Giriniz" autocomplete="off">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>

                <a href="#0" title="Aramayı Kapat" class="header__overlay-close">Kapat</a>

            </div>  <!-- end header__search -->

            <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
            <nav class="header__nav-wrap">

                <h2 class="header__nav-heading h6">Navigate to</h2>

                <ul class="header__nav">
                    <li class="current"><a href="index.php" title="">Anasayfa</a></li>
                    <li class="has-children">
                        <a href="category.php" title="">Kategoriler</a>
                        <ul class="sub-menu">
                            <li><a href="category.php">Lifestyle</a></li>
                            <li><a href="category.html">Health</a></li>
                            <li><a href="category.html">Family</a></li>
                            <li><a href="category.html">Management</a></li>
                            <li><a href="category.html">Travel</a></li>
                            <li><a href="category.html">Work</a></li>
                        </ul>
                    </li>
                    
                    <li class="has-children">
                        <a href="frmlar.php" title="">Forumlar</a>
                        <ul class="sub-menu">
                     <li><a href="frmekle.php">Forum Ekle</a></li>
                            </ul>
                            </li>
                   
                    <li><a href="about.php" title="">Hakkımızda</a></li>
                    <li><a href="contact.php" title="">Bize Ulaşın</a></li>
                </ul> <!-- end header__nav -->

                <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Kapat</a>

            </nav> <!-- end header__nav-wrap -->

        </header> <!-- s-header -->
        
        
        

