<section class="flat-title-page back-ground-style">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page">Detail Artikel</h2>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="<?= base_url(); ?>artikel/index">Beranda</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500">Detail Artikel</h4>
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
                <article class="post-inner">
                    <div class="post-media">
                        <img src="<?= base_url('assets/images/artikel3.png'); ?>" alt="images">
                    </div>
                    <div class="post-content margin-bottom-38">
                        <ul class="post-meta">
                            <li class="author section-14px-regular"><a>Admin</a></li>
                            <li class="date section-14px-regular"><a><?= date("d F Y", strtotime($data->tanggal_publikasi)) ?></a>
                            </li>
                            <li class="comment section-14px-regular">0 Comments</li>
                        </ul>
                        <h2 class="section-24px-montserrat"><?= $data->title; ?></h2>
                        <p class="margin-top-20 margin-bottom-25"><?= $data->deskripsi; ?>
                        </p>

                        <p class="margin-bottom-25">Pengalaman Brigjen (Purnawirawan) Junior Tumilaar yang
                            diminta masyarakat yg menjadi "korban"
                            kasus Bojong Senen/Sentul sempat menjadi viral di medsos cukup menarik perhatian
                            masyarakat karena ia sempat
                            ditahan dan diperiksa atasannya karena dianggap melanggar kode etik sebagai
                            anggota TNI yang masih aktif.
                            "Saya diminta menjadi penasihat mereka yg merasa menjadi korban atas tindakan
                            penggusuran tanah dan rumah mereka oleh
                            PT Sentul City", ujarnya. Ia pun berkisah , sebagai anggota TNI ia merasa
                            terpanggil untuk membela rakyat sesuai
                            dengan tugas dan kuwajibannya menjadi pembela rakyat yang memerlukan bantuannya.
                        </p>
                        <!--
                                        <blockquote class="margin-bottom-25">
                                        <p class="section-14px-regular font-weight-700 text-808">“ Consulting is defined
                                            the practise of providing is third party with expertise on a matters in
                                            exchange a free advisory or implementation services ”</p>
                                    </blockquote>
                                    <p class="margin-bottom-15">Becomes an interactive story that can engage users.
                                        Designers have a lot of tools to make a story more intersting. You can align
                                        your image to the leftcenter with a caption, link and alt text New Journey to
                                        the Marstaking.</p>
                                    <ul class="list-note-content section-16px-regular line-height-29">
                                        <li><span class="text-accent">Marketing consulting Online Business</span><span>–
                                                an app becomes ans interactive story that can engage users. Designers
                                                have tools to make</span></li>
                                        <li><span class="text-accent">Marketing consulting Online Business</span><span>–
                                                an app becomes ans interactive story that can engage users. Designers
                                                have tools to make</span></li>
                                    </ul>
                                    <div class="post-gallery">
                                        <div class="span_1_of_3 gallery-item border-radius-8">
                                            <img src="images/blog-details-post-2.jpg" alt="images">
                                        </div>
                                        <div class="span_1_of_3 gallery-item border-radius-8">
                                            <img src="images/blog-details-post-3.jpg" alt="images">
                                        </div>
                                    </div>
                                    <p class="margin-bottom-15">Becomes an interactive story that can engage users.
                                        Designers have a lot of tools to make a story more intersting. You can align
                                        your image to the leftcenter with a caption, link and alt text New Journey to
                                        the Marstaking an independen center with a caption, link and alt text New
                                        Journey to the Mars.</p>
                                    -->
                    </div>
                    <hr>
                    <ul class="entry-tags section-14px-regular link-style-4">
                        <li><span class="tags-post section-16px-regular font-weight-500 text-accent">Tags
                                :</span></li>
                        <li><a><?= $data->tag; ?></a></li>
                    </ul>
                </article>
                <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="20" data-smobile="20"></div>
                <div id="comment" class="border-radius-4">
                    <h2 class="widget-title section-22px-montserrat margin-bottom-50">Leave A Reply</h2>
                    <form method="post" id="contactform" class="comment-form" action="./contact/contact-process.php" accept-charset="utf-8" novalidate="novalidate">
                        <div class="text-wrap clearfix">
                            <fieldset class="name-wrap">
                                <input type="text" id="name" class="tb-my-input" name="name" tabindex="1" placeholder="Name" value="" size="32" aria-required="true" required="">
                            </fieldset>
                            <fieldset class="email-wrap">
                                <input type="email" id="email" class="tb-my-input" name="email" tabindex="2" placeholder="Email" value="" size="32" aria-required="true" required="">
                            </fieldset>
                        </div>
                        <fieldset class="message-wrap">
                            <textarea id="comment-message" name="comment" rows="10" tabindex="4" placeholder="Type Comments Here ..." aria-required="true"></textarea>
                        </fieldset>
                        <input type="checkbox" id="checkbox"> <span class="section-14px-regular text-808">Don’t show your email address</span><br>
                        <button name="submit" type="submit" id="comment-reply" class="arrow-btn btn-st style-5 margin-top-37">Submit Now</button>
                    </form>
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
                                    <div class="thumb-image border-radius-4 margin-bottom-17">
                                        <img src="<?= base_url('assets/images/artikel6-thumb.jpg'); ?>" alt="images">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="detail-artikel6.html" class="section-16px-regular font-weight-500 line-height-25">MUKHTAR
                                            TOMPO <br>
                                            Tujuh Putusan Pengadilan yang Tak Bergigi</a><br>
                                        <a href="detail-artikel6.html" class="date section-14px-regular">27
                                            Juni
                                            2022 </a>
                                    </div>
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