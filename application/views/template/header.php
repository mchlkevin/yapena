<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>

    <meta charset="utf-8">

    <title><?php echo $judul; ?></title>
    <!-- Bootstrap CSS -->

    <meta name="author" content="themesflat.com">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css');?>">
    

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/icomoon.css');?>">
    
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css');?>">

    <link rel="shortcut icon" href="<?= base_url('assets/images/Favicon.png');?>">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url('assets/images/Favicon.png');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/swiper-bundle.min.css');?>" />

</head>

<body class="header-fixed">
    <!--
    <div id="preload" class="preload-container">
        <div class="preload-logo"></div>
    </div>
    -->
    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">

            <div id="site-header-wrap">

                <!--
                <div id="top-bar">
                    <div id="top-bar-inner">
                        <div class="top-bar-inner-wrap">
                            <div class="top-bar-content">
                                <div class="inner text-white link-style-2">
                                    <span class="phone content section-16px-regular"><a href="tel:012345678">(+706)
                                            898-0752</a></span>
                                    <span class="mail content section-16px-regular"><a
                                            href="/cdn-cgi/l/email-protection#335c5f464b1d5756405a545d73545e525a5f1d505c5e"><span
                                                class="__cf_email__"
                                                data-cfemail="89e6e5fcf1a7edecfae0eee7c9eee4e8e0e5a7eae6e4">[email&#160;protected]</span></a></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            -->

                <header id="site-header">
                    <div id="site-header-inner">
                        <div class="wrap-inner clearfix">
                            <div id="site-logo" class="clearfix">
                                <div id="site-log-inner">
                                    <a href="<?= base_url(); ?>home" rel="home" class="main-logo">
                                        <img src="<?= base_url('assets/images/logo yapena.jpeg');?>" alt="images">
                                    </a>
                                </div>
                            </div>
                            <div class="nav-title">
                                <p>YAPENA</p>
                            </div>
                            <div class="mobile-button">
                                <span></span>
                            </div>

                            <nav id="main-nav" class="main-nav">
                                <ul id="menu-primary-menu" class="menu">
                                    <li class="menu-item <?= $page == 'home' ? 'current-menu-item' : '' ?>">
                                        <a href="<?= base_url(); ?>home">Beranda</a>
                                    </li>
                                    <li class="menu-item <?= $page == 'about' ? 'current-menu-item' : '' ?>">
                                        <a href="<?= base_url(); ?>about">Tentang Yapena</a>
                                    </li>
                                    <!--
                                    <li class="menu-item menu-item-has-children">
                                        <a href="services.html">Services</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="services.html">Services</a></li>
                                            <li class="menu-item"><a href="service-single.html">Service Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="aktivitas.html">Portfolio</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="aktivitas.html">Portfolio</a></li>
                                            <li class="menu-item"><a href="portfolio-single.html">Portfolio Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                -->
                                    <li class="menu-item <?= $page == 'artikel' ? 'current-menu-item' : '' ?>">
                                        <a href="<?= base_url(); ?>artikel">Artikel</a>
                                        <!--
                                        <ul class="sub-menu right-sub-menu">
                                            <li class="menu-item"><a href="artikel.html">Blog</a></li>
                                            <li class="menu-item"><a href="detail-artikel.html">Blog Single</a></li>
                                        </ul>
                                    -->
                                    </li>
                                    <li class="menu-item <?= $page == 'activity' ? 'current-menu-item' : '' ?>">
                                        <a href="<?= base_url(); ?>activity">Aktivitas</a>
                                    </li>
                                    <!--<li class="menu-item">
                                        <a href="organisasi.html">Organisasi</a>
                                    </li>-->
                                    <li class="menu-item <?= $page == 'contact' ? 'current-menu-item' : '' ?>">
                                        <a href="<?= base_url(); ?>contact">Hubungi Kami</a>
                                    </li>
                                </ul>
                            </nav>
                            <!--
                            <div class="header-menu">
                                <a href="#" class="header-menu-trigger icon-Group-1199"></a>
                            </div>
                        -->
                        </div>
                        <div class="side-menu__block">
                            <div class="side-menu__block-overlay custom-cursor__overlay"></div>
                            <div class="side-menu__block-inner">
                                <div class="side-menu__top justify-content-end">
                                    <a href="<?= base_url(); ?>home" class="side-menu__toggler side-menu__close-btn"><img src="<?= base_url('assets/images/close-1-1.png');?>" alt="images"></a>
                                </div>
                                <div class="side-menu__top-introduce">
                                    <a href="<?= base_url(); ?>home" rel="home" class="main-logo">
                                        <img src="<?= base_url('assets/images/logo yapena.jpeg');?>" alt="images">
                                    </a>
                                    <p>Etiam efficitur, metus in cursus imperdiet, neque nisl porta erat, nec volutpat
                                        felis lacus a tellus. Nunc tristique nulla nisi, a viverra dui auctor vitae.
                                        Vestibulum mollis commodo leo in hendrerit. Nam convallis ac lacus luctus
                                        vestibulum. Donec cursus tellus id neque convallis blandit.</p>
                                    <hr>
                                </div>
                                <div class="side-menu__top-lastest">
                                    <div class="side-menu__title">
                                        My Latest Work
                                    </div>
                                    <div class="side-menu__lastest">
                                        <div class="side-menu__lastest-item">
                                            <img src="<?= base_url('assets/images/side-menu-latest-1.jpg');?>" alt="images">
                                            <div class="side-menu__lastest-layer">
                                                <a href="detail-artikel.html" class="side-menu__lastest-icon"></a>
                                            </div>
                                        </div>
                                        <div class="side-menu__lastest-item">
                                            <img src="<?= base_url('assets/images/side-menu-latest-2.jpg');?>" alt="images">
                                            <div class="side-menu__lastest-layer">
                                                <a href="detail-artikel.html" class="side-menu__lastest-icon"></a>
                                            </div>
                                        </div>
                                        <div class="side-menu__lastest-item">
                                            <img src="<?= base_url('assets/images/side-menu-latest-3.jpg')?>" alt="images">
                                            <div class="side-menu__lastest-layer">
                                                <a href="detail-artikel.html" class="side-menu__lastest-icon"></a>
                                            </div>
                                        </div>
                                        <div class="side-menu__lastest-item">
                                            <img src="<?= base_url('assets/images/side-menu-latest-4.jpg');?>" alt="images">
                                            <div class="side-menu__lastest-layer">
                                                <a href="detail-artikel.html" class="side-menu__lastest-icon"></a>
                                            </div>
                                        </div>
                                        <div class="side-menu__lastest-item">
                                            <img src="<?= base_url('assets/images/side-menu-latest-5.jpg');?>" alt="images">
                                            <div class="side-menu__lastest-layer">
                                                <a href="detail-artikel.html" class="side-menu__lastest-icon"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="side-menu__top-social">
                                    <ul class="widget-social">
                                        <li>Follow Me :</li>
                                        <li><a href="#">Fb.</a></li>
                                        <li><a href="#">Be.</a></li>
                                        <li><a href="#">Tw.</a></li>
                                        <li><a href="#">In.</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </header>

            </div>