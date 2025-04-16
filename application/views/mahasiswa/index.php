<div class="container">

        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong>berhasil!</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            </div>
        <?php endif; ?>

        <div class="row mt-3">
            <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
            </div>
        </div>

    <div class="row mt-3">
        <div class="col md 6">
        <form action="<?= base_url('mahasiswa'); ?>" method="post">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari data mahasiswa.." name="keyword">
            <button class="btn btn-outline-primary" type="submit">Cari</button>
            </div>
        </form>
        </div>
    </div>

  <div class="row mt-4">
    <div class="col-md-12">
      <h3>Daftar Mahasiswa</h3>
      <?php if (empty($mahasiswa)) : ?>
        <div class="alert alert-danger" role="alert">
          Data mahasiswa tidak ditemukan.
        </div>
      <?php else : ?>
        <table class="table table-striped table-hover mt-3">
          <thead class="white">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NRP</th>
              <th>Email</th>
              <th>Jurusan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($mahasiswa as $mhs) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['nrp']; ?></td>
                <td><?= $mhs['email']; ?></td>
                <td><?= $mhs['jurusan']; ?></td>
                <td>
                  <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-warning btn-sm">Detail</a>
                  <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="btn btn-success btn-sm">Ubah</a>
                  <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>
    </div>
  </div>
</div>
