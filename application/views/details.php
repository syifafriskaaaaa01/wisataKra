<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education Template - Meeting Detail Page</title>

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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="index.html">Contact Us</a></li>
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

    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Wisata
                        <?= $konten->nama_kategori; ?>
                    </h6>
                    <h2>
                        <?= $konten->judul; ?>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="meeting-single-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>
                                            <?= $konten->tanggal; ?>
                                        </span>
                                    </div><img src="<?= base_url('assets/upload/konten/' . $konten->foto) ?>">
                                </div>
                                <div class="down-content">
                                    <a href="meeting-details.html">
                                        <h4>
                                            <?= $konten->judul; ?>
                                        </h4>
                                    </a>
                                    <p>
                                        <?= $konfig->judul_web; ?> | Wisata
                                        <?= $konten->nama_kategori; ?> - by:
                                        <?= $konten->username; ?> admin
                                    </p>
                                    <p class="description">
                                        <?= $konten->keterangan; ?>

                                        <br><br>You are allowed to use this edu meeting CSS template for your school or
                                        university or business. You can feel free to modify or edit this layout. You are
                                        not allowed to redistribute the template ZIP file on any other template website.
                                        Please contact us for more information.
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="hours">
                                                <h5>Hours</h5>
                                                <p>Monday - Friday: 07:00 AM - 13:00 PM<br>Saturday- Sunday: 09:00 AM -
                                                    15:00 PM</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="location">
                                                <br>
                                                <h5>Location</h5>
                                                <p>Jl.
                                                    <?= $konten->nama_kategori; ?>,
                                                    <br>Jawa Tengah, Indonesia
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="share">
                                                <h5>Share:</h5>
                                                <ul>
                                                    <li><a href="<?= $konfig->instagram; ?>">Instagram</a>,</li>
                                                    <li><a href="<?= $konfig->facebook; ?>">Facebook</a>,</li>
                                                    <li><a href="<?= $konfig->no_wa; ?>">Contact</a>,</li>
                                                    <li><a href="<?= $konfig->email; ?>">E-Mail</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button-red">
                                <a href="<?= base_url('home/index/') ?>">Wisata Lainnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
                <br>
                Profile: <a href="https://templatemo.com" target="_parent" title="free css templates">
                    <?= $konfig->profil_web; ?>
                </a>
                <br>
                Sosial Media: <a href="<?= $konfig->instagram; ?>" target="_blank" title="Build Better UI, Faster">
                    Instagram</a>
                <br>
                Contact: <a href="<?= $konfig->no_wa; ?>" target="_blank" title="Build Better UI, Faster">
                    Hubungi Admin</a>
                <br>
                Dimana Kami: <a href="<?= $konfig->alamat; ?>" target="_blank" title="Build Better UI, Faster">
                    Tempat</a>
                <br>
                Email: <a href="<?= $konfig->email; ?>" target="_blank" title="Build Better UI, Faster">
                    E-Mail</a>

            </p>
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