<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Beranda</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/front/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/front/') ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/') ?>assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/') ?>assets/css/owl.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/') ?>assets/css/lightbox.css">
    <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body>

    <!-- Sub Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                    <div class="left-content">
                        <p>This is an educational <em>HTML CSS</em> template by TemplateMo website.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="right-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <?= $konfig->judul_web; ?>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="<?= base_url(); ?>">Home</a></li>

                            <li class="has-sub">
                                <a href="javascript:void(0)">Kategori</a>
                                <ul class="sub-menu">
                                    <?php foreach ($kategori as $kt) { ?>
                                    <li><a href="<?= $kt['id_kategori'] ?>">
                                            <?= $kt['nama_kategori'] ?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li><a href=" <?= site_url('auth') ?>">Login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <section class=" heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>DAERAH </h6>
                    <h2>
                        <?= $nama_kategori; ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class=" col-lg-12">
                            <div class="row grid">
                                <?php foreach ($konten as $kn) { ?>
                                <div class="col-lg-4 templatemo-item-col all a<?= $kn['id_kategori'] ?>">

                                    <div class=" meeting-item">
                                        <div class="thumb">
                                            <div class="price">
                                                <span>
                                                    <?= $kn['tanggal'] ?>
                                                </span>
                                            </div>
                                            <a href="<?= base_url('home/artikel/' . $kn['slug']) ?>"><img
                                                    src=" <?= base_url('assets/upload/konten/' . $kn['foto']) ?>">
                                            </a>
                                        </div>
                                        <div class="down-content">
                                            <a href="<?= base_url('home/artikel/' . $kn['slug']) ?>">
                                                <h4>
                                                    <?= $kn['judul'] ?>
                                                </h4>
                                            </a>
                                            <p>
                                                <?= $kn['keterangan'] ?>
                                            </p><br>
                                            <p>Wisata
                                                <?= $kn['nama_kategori'] ?> | by:
                                                <?= $kn['username'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="main-button-red">
                                    <a href="<?= base_url('home/index/') ?>">Wisata Lainnya</a>
                                </div>
                            </div>
                            <div class="footer">
                                <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
                                    <br>
                                    Profile: <a href="https://templatemo.com" target="_parent"
                                        title="free css templates">
                                        <?= $konfig->profil_web; ?>
                                    </a>
                                    <br>
                                    Sosial Media: <a href="<?= $konfig->instagram; ?>" target="_blank"
                                        title="Build Better UI, Faster">
                                        Instagram</a>
                                    <br>
                                    Contact: <a href="<?= $konfig->no_wa; ?>" target="_blank"
                                        title="Build Better UI, Faster">
                                        Hubungi Admin</a>
                                    <br>
                                    Dimana Kami: <a href="<?= $konfig->alamat; ?>" target="_blank"
                                        title="Build Better UI, Faster">
                                        Tempat</a>
                                    <br>
                                    Email: <a href="<?= $konfig->email; ?>" target="_blank"
                                        title="Build Better UI, Faster">
                                        E-Mail</a>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/front/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url('assets/front/') ?>assets/js/isotope.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>assets/js/owl-carousel.js"></script>
    <script src="<?= base_url('assets/front/') ?>assets/js/lightbox.js"></script>
    <script src="<?= base_url('assets/front/') ?>assets/js/tabs.js"></script>
    <script src="<?= base_url('assets/front/') ?>assets/js/isotope.js"></script>
    <script src="<?= base_url('assets/front/') ?>assets/js/video.js"></script>
    <script src="<?= base_url('assets/front/') ?>assets/js/slick-slider.js"></script>
    <script src="<?= base_url('assets/front/') ?>assets/js/custom.js"></script>
    <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos
                },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function() {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').
                siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
        e.preventDefault();
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
        checkSection();
    });
    </script>
</body>


</body>

</html>