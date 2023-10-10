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
            <i class="bx bxs-plus-square"></i> Tambah Konten
        </button>

        <div class="modal fade" id="ExtralargeModal" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Konten</h5>

                            <!-- No Labels Form -->
                            <form action="<?=base_url('admin/konten/simpan')?>" method="POST"
                                enctype="multipart/form-data" class=" row g-3">
                                <div class="col-md-12">
                                    <input name="judul" type="text" class="form-control" id="floatingInput"
                                        placeholder="Judul">
                                </div>
                                <div class="col-md-12">
                                    <select name="id_kategori" class="form-control" id="floatingInput"
                                        placeholder="kategori">
                                        <?php foreach($kategori as $cems){?>
                                        <option value="<?= $cems['id_kategori']?>"><?= $cems['nama_kategori']?>
                                        </option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class=" col-md-12">
                                    <textarea name="keterangan" type="text" class="form-control" id="floatingInput"
                                        placeholder="keterangan"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input name="foto" type="file" class="form-control" accept="image/png, image/jpeg"
                                        id=" floatingInput" placeholder="foto"></input>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
                        <h5 class="card-title">Kategori Konten</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kategori Konten</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Kreator</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $no=1; foreach ($konten as $cems) {?>
                                <tr>
                                    <th scope="row"><?=$no; ?></th>
                                    <td><?= $cems['tanggal']; ?></td>
                                    <td><?= $cems['judul']; ?></td>
                                    <td><?= $cems['nama_kategori']; ?></td>
                                    <td><?= $cems['keterangan']; ?></td>
                                    <td><?= $cems['username']; ?></td>
                                    <td>
                                        <img src="<?=base_url('assets/upload/konten/'.$cems['foto'])?>"
                                            style="width: 200px; height: 150px;" alt="">
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/konten/hapus/'.$cems['foto'])?>"
                                            onClick="return confirm('Apakah anda yakin akan menghapus data ini ?')" i
                                            class="bi bi-trash btn btn-danger"></i>
                                        </a>
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#ubah<?= $no;?>">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>
                                        <div class="modal fade" id="ubah<?= $no; ?>" tabindex="-1">
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
                                                            <h5 class="card-title">Edit Konten</h5>

                                                            <form action="<?=base_url('admin/konten/update')?>"
                                                                method="POST" enctype="multipart/form-data"
                                                                class=" row g-3">
                                                                <input type="hidden" name="nama_foto"
                                                                    value="<?= $cems['foto']; ?>">
                                                                <div class="col-md-12">
                                                                    <input name="judul" type="text" class="form-control"
                                                                        id="floatingInput" value="<?=$cems['judul']?>">
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <select name="id_kategori" class="form-control"
                                                                        id="floatingInput" placeholder="kategori">
                                                                        <?php foreach($kategori as $cs){?>
                                                                        <option
                                                                            <?php if($cs['id_kategori']==$cems['id_kategori']) {echo "selected";} ?>
                                                                            value="<?= $cs['id_kategori']?>">
                                                                            <?= $cs['nama_kategori']?>
                                                                        </option>
                                                                        <?php }?>
                                                                    </select>
                                                                </div>
                                                                <div class=" col-md-12">
                                                                    <textarea name="keterangan" type="text"
                                                                        class="form-control" id="floatingInput"
                                                                        placeholder="keterangan"><?=$cems['keterangan']?> </textarea>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <input name="username" type="text" class="form-control"
                                                                        id="floatingInput" value="<?=$cems['username']?>" readonly>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <input name="foto" type="file" class="form-control"
                                                                        accept="image/png, image/jpeg"
                                                                        id=" floatingInput" placeholder="foto"></input>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </form><!-- End No Labels Form -->
                                                        </div>
                                                    </div>
                                                    <!-- End No Labels Form -->

                                                </div>
                                            </div>
                                        </div>
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