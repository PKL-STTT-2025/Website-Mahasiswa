<div class="container">
    <div class="row mt-3">
        <div class="colmd-6">

        <div class="card">
            <div class="card-header">
                Detail Data Mata Kuliah
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $matakuliah ['matakuliah']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?=$matakuliah ['sandi']; ?></h6>
                <p class="card-text"><?= $matakuliah ['sks']; ?></p>
                <p class="card-text"><?= $matakuliah ['semester']; ?></p>
                <a href="<?= base_url('matakuliah'); ?>" class="btn btn-primary">Kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>