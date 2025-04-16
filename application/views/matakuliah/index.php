<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mata Kuliah <strong>berhasil!</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-10">
            <div class="row mt-3">
                <div class="col-md-6">
                    <a href="<?= base_url(); ?>matakuliah/tambah" class="btn btn-primary">Tambah Mata Kuliah</a>
                </div>
            </div>

            <h3 class="mt-3">Daftar Mata Kuliah</h3>

            <div class="row mt-3">
                <div class="col md 6">
                    <form action="<?= base_url('matakuliah'); ?>" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari Mata Kuliah.." name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-10">
                    <?php if (empty($matakuliah)) : ?>
                        <div class="alert alert-danger" role="alert">
                            Mata Kuliah tidak ditemukan.
                        </div>
                    <?php else : ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mata Kuliah</th>
                                    <th>Sandi</th>
                                    <th>SKS</th>
                                    <th>Semester</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($matakuliah as $matkul): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $matkul['matakuliah']; ?></td>
                                        <td><?= $matkul['sandi']; ?></td>
                                        <td><?= $matkul['sks']; ?></td>
                                        <td><?= $matkul['semester']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>matakuliah/detail/<?= $matkul['id']; ?>" class="btn btn-warning btn-sm">Detail</a>
                                            <a href="<?= base_url(); ?>matakuliah/ubah/<?= $matkul['id']; ?>" class="btn btn-success btn-sm">Ubah</a>
                                            <a href="<?= base_url(); ?>matakuliah/hapus/<?= $matkul['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?');">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
