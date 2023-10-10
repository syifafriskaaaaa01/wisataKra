<div class="pagetitle">
    <h1><?= $judul;?></h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active"><?= $judul; ?></li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">
        <h2>hei <?= $this->session->userdata('nama');?></h2>

    </div>
</section>