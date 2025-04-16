<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Dosen
                </div>
                <div class="card-body">
                    <form action="<?= base_url('dosen/ubah/' . $dosen['id']); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $dosen['id']; ?>">


                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $dosen['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" name="nip" class="form-control" id="nip" value="<?= $dosen['nip']; ?>">
                            <small class="form-text text-danger"><?= form_error('nip'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="matakuliah">Mata Kuliah</label>
                            <select class="form-control" id="matakuliah" name="matakuliah">
                                <?php foreach ($matakuliah as $matkul) : ?>
                                    <option value="<?= $matkul; ?>" <?= $matkul == $dosen['matakuliah'] ? 'selected' : ''; ?>>
                                        <?= $matkul; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= $dosen['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary btn-sm">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
