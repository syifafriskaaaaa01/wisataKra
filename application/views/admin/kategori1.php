<div class="pagetitle">
    <h1><?= $judul;?></h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active"><?= $judul; ?></li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<div class="card">
    <div class="card-body mt-4">
        <!-- Extra Large Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
            <i class="bx bxs-plus-square"></i> Tambah Kategori
        </button>
        <div class="modal fade" id="ExtralargeModal" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Input</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input Kategori</h5>

                            <!-- No Labels Form -->
                            <form action="<?=base_url('admin/kategori/simpan')?>" method="POST" class="row g-3">
                                <div class="col-md-12">
                                    <input name="nama_kategori" type="text" class="form-control" id="floatingInput"
                                        placeholder="Nama Kategori">
                                </div>
                                <div class="text-center">
                                    <button name="simpan" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form><!-- End No Labels Form -->
                        </div>
                    </div>
                </div><!-- End Extra Large Modal-->
            </div>
        </div>
    </div>
</div>
<div class="card">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datatables</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $no=1; foreach ($kategori as $cems) {?>
                                <tr>
                                    <th scope="row"><?=$no; ?></th>
                                    <td><?= $cems['nama_kategori']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/kategori/hapus/'.$cems['id_kategori'])?>"
                                            onClick="return confirm('Apakah anda yakin akan menghapus data ini ?')" i
                                            class="bi bi-trash btn btn-danger"></i>
                                        </a>
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#ExtralargeModal<?= $no?>">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>
                                        <div class="modal fade" id="ExtralargeModal<?= $no?>" tabindex="-1">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                        </button>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Edit Kategori</h5>

                                                            <!-- No Labels Form -->
                                                            <form action="<?=base_url('admin/kategori/update')?>"
                                                                method="POST" class="row g-3">
                                                                <input type="hidden" name="id_kategori"
                                                                    value="<?= $cems['id_kategori']; ?>">
                                                                <div class=" col-md-12">
                                                                    <label class="form-label"> Nama</label>
                                                                    <input name="nama_kategori" type="text"
                                                                        class="form-control"
                                                                        value="<?= $cems['nama_kategori'];?>">
                                                                    </input>
                                                                </div>
                                                                <br>
                                                                <div class="text-center">
                                                                    <button name="simpan" type=" submit" class=" btn
                                                                        btn-primary">Submit
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- End No Labels Form -->
                                                </div>
                                            </div>
                                        </div><!-- End Extra Large Modal-->
                                    </td>
                                </tr>
                                <?php $no++;}?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</div>