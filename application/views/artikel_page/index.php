<section class="flat-title-page back-ground-style">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page">Artikel</h2>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="<?= base_url(); ?>home">Beranda</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500">Artikel</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="flat-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="artikel1">
                    <!-- <article class="main-post-box">
                        <div class="featured-post">
                            <div class="entry-image">
                                <img src="assets/images/artikel6.jpeg" alt="images">
                            </div>
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li class="author"><a href="artikel.html">Admin</a></li>
                                <li class="date"><a href="artikel.html">27 Juni 2022</a></li>
                                <li class="comment">0 Comments</li>
                            </ul>
                            <a href="detail-artikel6.html" class="section-24px-montserrat">MUKHTAR TOMPO
                                <br>
                                Tujuh Putusan Pengadilan yang Tak Bergigi</a>
                            <p>Mengantongi kemenangan di tujuh putusan – mulai dari pengadilan tingkat
                                pertama, banding, hingga kasasi dan peninjauan kembali – ternyata tidak
                                menjamin kepastian mendapatkan kembali haknya. Hal itu dialami oleh tujuh
                                ahli waris H. Fachruddin Daeng Romo.
                            </p>
                        </div>
                    </article> -->
                    <article class="main-post-box">
                        <?php foreach ($dataArtikel as $dt) : ?>
                            <div class="featured-post">
                                <div class="entry-image">
                                    <img src="assets/images/artikel3.png" alt="images">
                                </div>
                            </div>
                            <div class="post-content">
                                <ul class="post-meta">

                                    <li class="author"><a href="artikel.html"><?= $dt['username'] ?></a></li>
                                    <li class="date"><a href="artikel.html"><?= date("d F Y", strtotime($dt['tanggal_publikasi'])) ?></a></li>
                                    <li class="comment">0 Comments</li>

                                </ul>
                                <a href="detail-artikel3.html" class="section-24px-montserrat"><?= $dt['title'] ?></a>
                                <p><?= $dt['deskripsi'] ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </article>
                </div>
                <div id="artikel2">
         
              
                  
                </div>
                <div class="themesflat-pagination clearfix">
                    <ul>
                        <li><a href="#" class="prev margin-right-10" id="page-prev">PREV</a></li>
                        <li><a href="#" class="page-numbers current" id="page1">01</a></li>
                        <li><a href="#" class="page-numbers" id="page2">02</a></li>
                        <li><a href="#" class="next margin-left-10" id="page-next">NEXT</a></li>
                        <!--<li><a href="#" class="page-numbers current">03</a></li>
                                    <li><a href="#" class="page-numbers">04</a></li>
                                    <li><a href="#" class="page-numbers">05</a></li>
                                    -->
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="side-bar">
                    <div class="widget-search-box">
                        <h2 class="widget-title section-22px-montserrat margin-bottom-38">Cari Artikel</h2>
                        <div class="widget-search">
                            <form action="#" method="get" role="search" class="search-form">
                                <input type="search" class="search-field" placeholder="Search..." value="" name="s" title="Search for" required>
                                <button class="search-submit" type="submit" title="Search"></button>
                            </form>
                        </div>
                    </div>
                    <div class="widget-popular-post">
                        <h2 class="widget-title section-22px-montserrat margin-bottom-38">Artikel Terbaru
                        </h2>
                        <div class="widget-popular-post-inner display-flex">
                            <ul class="widget-post-item margin-bottom-5">
                                <li>
                                    <?php foreach ($dataArtikel as $dt) : ?>
                                        <div class="thumb-image border-radius-4 margin-bottom-17">
                                            <img src="assets/images/artikel6-thumb.jpg" alt="images">
                                        </div>
                                        <div class="thumb-content">
                                            <a href="detail-artikel6.html" class="section-16px-regular font-weight-500 line-height-25"><?= $dt['title'] ?></a><br>
                                            <a href="detail-artikel6.html" class="date section-14px-regular"><?= date("d F Y", strtotime($dt['tanggal_publikasi'])) ?></a>
                                        </div>
                                    <?php endforeach; ?>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!--
                                <div class="widget-gallery-instagram">
                                    <h2 class="widget-title section-22px-montserrat margin-bottom-38">Gallery from
                                        Instagram</h2>
                                    <div class="widget-gallery-instagram-box">
                                        <ul class="widget-gallery-item">
                                            <li>
                                                <div class="thumb-instagram">
                                                    <img src="images/instag-post-1.jpg" alt="images">
                                                    <div class="thumb-overlay-effect">
                                                        <a href="#" class="instagram-icon-thumb"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="thumb-instagram">
                                                    <img src="images/instag-post-2.jpg" alt="images">
                                                    <div class="thumb-overlay-effect">
                                                        <a href="#" class="instagram-icon-thumb"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="thumb-instagram">
                                                    <img src="images/instag-post-3.jpg" alt="images">
                                                    <div class="thumb-overlay-effect">
                                                        <a href="#" class="instagram-icon-thumb"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="thumb-instagram">
                                                    <img src="images/instag-post-4.jpg" alt="images">
                                                    <div class="thumb-overlay-effect">
                                                        <a href="#" class="instagram-icon-thumb"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="thumb-instagram">
                                                    <img src="images/instag-post-5.jpg" alt="images">
                                                    <div class="thumb-overlay-effect">
                                                        <a href="#" class="instagram-icon-thumb"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="thumb-instagram">
                                                    <img src="images/instag-post-6.jpg" alt="images">
                                                    <div class="thumb-overlay-effect">
                                                        <a href="#" class="instagram-icon-thumb"></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-recent-post">
                                    <h2 class="widget-title section-22px-montserrat margin-bottom-38">Recent post</h2>
                                    <ul class="widget-recent-post-item">
                                        <li>
                                            <div class="thumb-image border-radius-4">
                                                <img src="images/recent-post-1.jpg" alt="images">
                                            </div>
                                            <div class="thumb-content">
                                                <a href="detail-artikel.html"
                                                    class="section-16px-regular font-weight-500 line-height-25">If they
                                                    make a move we
                                                    will hit them in the head</a><br>
                                                <a href="detail-artikel.html" class="date section-14px-regular">15 Jun,
                                                    2021 </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb-image border-radius-4">
                                                <img src="images/recent-post-2.jpg" alt="images">
                                            </div>
                                            <div class="thumb-content">
                                                <a href="detail-artikel.html"
                                                    class="section-16px-regular font-weight-500 line-height-25">When an
                                                    unknown prin
                                                    ter galley</a><br>
                                                <a href="detail-artikel.html" class="date section-14px-regular">15 Jun,
                                                    2021 </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb-image border-radius-4">
                                                <img src="images/recent-post-3.jpg" alt="images">
                                            </div>
                                            <div class="thumb-content">
                                                <a href="detail-artikel.html"
                                                    class="section-16px-regular font-weight-500 line-height-25">Survived
                                                    not only five
                                                    centuries</a><br>
                                                <a href="detail-artikel.html" class="date section-14px-regular">15 Jun,
                                                    2021 </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget-socials-media">
                                    <h2 class="widget-title section-22px-montserrat margin-bottom-52">Follow us</h2>
                                    <ul class="widget-socials-media-item">
                                        <li><a href="#" class="icon-socials icon-facebook-app-logo1"></a></li>
                                        <li><a href="#" class="icon-socials icon-twitter1"></a></li>
                                        <li><a href="#" class="icon-socials icon-linkedin-11"></a></li>
                                        <li><a href="#" class="icon-socials icon-instagram1"></a></li>
                                        <li><a href="#" class="icon-socials icon-youtube1"></a></li>
                                    </ul>
                                </div>
                                <div class="widget-tags">
                                    <h2 class="widget-title section-22px-montserrat margin-bottom-43">Tags</h2>
                                    <ul class="widget-tags-item">
                                        <li><a href="artikel.html" class="tags-item section-14px-regular">Magazine</a></li>
                                        <li><a href="artikel.html"
                                                class="tags-item active section-14px-regular">creative</a></li>
                                        <li><a href="artikel.html" class="tags-item section-14px-regular">Corporate</a>
                                        </li>
                                        <li><a href="artikel.html" class="tags-item section-14px-regular">Art</a></li>
                                        <li><a href="artikel.html" class="tags-item section-14px-regular">Magazine</a></li>
                                        <li><a href="artikel.html" class="tags-item section-14px-regular">creative</a></li>
                                        <li><a href="artikel.html" class="tags-item section-14px-regular">Corporate</a>
                                        </li>
                                        <li><a href="artikel.html" class="tags-item section-14px-regular">Art</a></li>
                                        <li><a href="artikel.html" class="tags-item section-14px-regular">Magazine</a></li>
                                        <li><a href="artikel.html" class="tags-item section-14px-regular">creative</a></li>
                                    </ul>
                                </div>
                            -->
                </div>
            </div>
        </div>
    </div>
</section>