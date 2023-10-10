<div id="hilang">
    <?=$this->session->flashdata('alert')?> <div class=" pagetitle">
        <h1><?= $judul;?>
        </h1>
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
                <i class="bx bx-user-plus"></i> Tambah Pengguna
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
                                <h5 class="card-title">Inputkan</h5>

                                <!-- No Labels Form -->
                                <form action="<?=site_url('admin/user/simpan')?>" method="POST" class="row g-3">
                                    <div class="col-md-12">
                                        <input name="nama" type="text" class="form-control" id="floatingInput"
                                            placeholder="Nama">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password">
                                    </div>

                                    <div class="col-md-6">
                                        <select name="level" id="inputState" class="form-select">
                                            <option selected>Level</option>
                                            <option value="Siswa">Pengguna</option>
                                            <option value="Admin">Admin</option>
                                        </select>
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
                                        <th scope="col">Username</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  $no=1; foreach ($users as $cems) {?>
                                    <tr>
                                        <th scope="row"><?=$no; ?></th>
                                        <td><?= $cems['username']; ?></td>
                                        <td><?= $cems['nama']; ?></td>
                                        <td><?= $cems['level']; ?></td>
                                        <td>
                                            <a href="<?= site_url('admin/user/hapus/'.$cems['id_user'])?>" onClick="return confirm(' Apakah anda yakin akan menghapus data ini
    ?')" i class="bi bi-trash btn btn-danger"></i>
                                            </a>
                                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                data-bs-target="#ExtralargeModal<?= $no?>">
                                                <i class="bi bi-pencil-fill"></i>
                                            </button>
                                            <div class="modal fade" id="ExtralargeModal<?= $no?>" tabindex="-1">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Input</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                            </button>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Inputkan</h5>

                                                                <!-- No Labels Form -->
                                                                <form action="<?=base_url('admin/user/update')?>"
                                                                    method="POST" class="row g-3">
                                                                    <input type="hidden" name="id_user"
                                                                        value="<?= $cems['id_user']; ?>">
                                                                    <div class=" col-md-12">
                                                                        <label class="form-label"> Nama</label>
                                                                        <input name="nama" type="text"
                                                                            class="form-control"
                                                                            value="<?= $cems['nama'];?>">
                                                                        </input>
                                                                        <div class=" col-md-12">
                                                                            <label class="form-label"> Username</label>
                                                                            <input type="text" name="username"
                                                                                class="form-control"
                                                                                value="<?= $cems['username'];?>"
                                                                                readonly>
                                                                            </input>
                                                                        </div>
                                                                        <br>
                                                                        <div class="text-center">
                                                                            <button name="simpan" type=" submit" class=" btn
                                                                        btn-primary">Submit</button>
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