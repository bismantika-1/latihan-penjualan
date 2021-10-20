<div class="container">
    <div class="row nt-3">
        <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">Detail Barang</h5>
            <div class="card-body">
                <h5 class="card-title"><?= $barang['nama_barang']; ?></h5>
                <p class="card-text"><?= $barang['harga']; ?></p>
                <p class="card-text"><?= $barang['stok']; ?></p>
                <a href="<?= base_url(); ?>barang" class="btn btn-primary">kembali</a>
            </div>
            </div>





        </div>
    </div>
</div>