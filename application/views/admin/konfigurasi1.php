<div class="card">
    <div class="card-body">
        <h5 class="card-title">Konfigurasi</h5>

        <!-- No Labels Form -->
        <form action="<?=base_url('admin/konfigurasi/update')?>" method="POST" enctype="multipart/form-data"
            class=" row g-3">
            <div class="col-md-12">
                <input name="judul_web" type="text" class="form-control" id="floatingInput" placeholder="Judul Website"
                    value="<?= $konfig->judul_web; ?>">
            </div>
            <div class=" col-md-12">
                <input name="profil_web" type="text" class="form-control" id="floatingInput" placeholder="Profile"
                    value="<?= $konfig->profil_web; ?>"></input>
            </div>
            <div class="col-md-12">
                <input name="instagram" type="text" class="form-control" id="floatingInput" placeholder="Instagram"
                    value="<?= $konfig->instagram; ?>">
            </div>
            <div class="col-md-12">
                <input name="facebook" type="text" class="form-control" id="floatingInput" placeholder="facebook"
                    value="<?= $konfig->facebook; ?>">
            </div>
            <div class="col-md-12">
                <input name="email" type="text" class="form-control" id="floatingInput" placeholder="E-Mail"
                    value="<?= $konfig->email; ?>">
            </div>
            <div class="col-md-12">
                <input name="alamat" type="text" class="form-control" id="floatingInput" placeholder="Alamat"
                    value="<?= $konfig->alamat; ?>">
            </div>
            <div class="col-md-12">
                <input name="no_wa" type="text" class="form-control" id="floatingInput" placeholder="Whatsapp"
                    value="<?= $konfig->no_wa; ?>">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form><!-- End No Labels Form -->
    </div>
</div>