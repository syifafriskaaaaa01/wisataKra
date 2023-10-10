<div class="card">
    <div class="card-body">
        <h5 class="card-title">Tambah Caraousel</h5>

        <!-- No Labels Form -->
        <form action="<?=base_url('admin/caraousel/simpan')?>" method="POST" enctype="multipart/form-data"
            class=" row g-3">
            <div class="col-md-12">
                <input name="judul" type="text" class="form-control" id="floatingInput" placeholder="Judul">
            </div>
            <div class="col-md-12">
                <input name="foto" type="file" class="form-control" accept="image/png, image/jpeg" id=" floatingInput"
                    placeholder="foto"></input>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form><!-- End No Labels Form -->
    </div>
</div>
<?php foreach($caraousel as $cems){?>
<div class="card">
    <img src="<?php echo base_url('assets/upload/caraousel/'.$cems['foto'])?>" class="card-img-top">
    <div class="card-body">
        <h5><?= $cems['judul'];?></h5>
        <a href="<?php echo base_url('admin/caraousel/hapus/'.$cems['foto'])?>"
            onClick="return confirm('Apakah anda yakin akan menghapus data ini ?')" class="btn btn-primary">Hapus
        </a>
    </div>
</div>
<?php }?>