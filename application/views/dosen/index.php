<div class="container">

    <?php if ($this ->session->flashdata ('flash') ) :?>
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Dosen <strong> berhasil!</strong> <?= $this-> session-> flashdata('flash'); ?>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-10">
             <div class= "row mt-3">
                <div class="col-md-6">
                    <a href="<?= base_url(); ?>dosen/tambah"class="btn btn-primary">Tambah Data Dosen</a>
                </div>
            </div>
            <h3 class="mt-3">Daftar Dosen</h3>

                        <div class="row mt-3">
                <div class="col md 6">
                    <form action="<?= base_url('dosen'); ?>" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari data dosen.." name="keyword">
                            <button class="btn btn-outline-primary" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <?php if (empty($dosen)) : ?>
                        <div class="alert alert-danger" role="alert">
                            Data dosen tidak ditemukan.
                        </div>
                    <?php else : ?>
                        <ul class="list-group">
                            <?php foreach ($dosen as $dsn) : ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>NIP</th>
                        <th>Mata Kuliah</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach ($dosen as $dsn): ?>
                <tr>
                    <th><?= $no++; ?></th>
                    <td><?= $dsn['nama']; ?></td>
                    <td><?= $dsn['nip']; ?></td>
                    <td><?= $dsn['matakuliah']; ?></td>
                    <td><?= $dsn['email']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>dosen/detail/<?= $dsn['id']; ?>" class="btn btn-warning btn-sm">Detail</a>
                        <a href="<?= base_url(); ?>dosen/ubah/<?= $dsn['id']; ?>" class="btn btn-success btn-sm">Ubah</a>
                        <a href="<?= base_url(); ?>dosen/hapus/<?= $dsn['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>

            </thead>

        </div>
    </div>
</div>