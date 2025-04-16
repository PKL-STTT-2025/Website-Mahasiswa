<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mata Kuliah
                </div>
                <div class="card-body">
                    <form action="<?= base_url('matakuliah/ubah/' . $matakuliah['id']); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $matakuliah['id']; ?>">


                    <div class="form-group">
                    <label for="matakuliah">Mata Kuliah</label>
                         <select class="form-control" id="matakuliah" name="matakuliah">
                            <?php foreach ($list_matakuliah as $matkul) : ?>
                                <option value="<?= $matkul; ?>" <?= $matkul == $matakuliah['matakuliah'] ? 'selected' : ''; ?>>
                                    <?= $matkul; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                     </div>

                        <div class="form-group">
                            <label for="sandi">Sandi</label>
                            <input type="text" name="sandi" class="form-control" id="sandi" value="<?= $matakuliah['sandi']; ?>">
                            <small class="form-text text-danger"><?= form_error('sandi'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="sks">SKS</label>
                            <input type="text" name="sks" class="form-control" id="sks" value="<?= $matakuliah['sks']; ?>">
                            <small class="form-text text-danger"><?= form_error('sks'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="text" name="semester" class="form-control" id="semester" value="<?= $matakuliah['semester']; ?>">
                            <small class="form-text text-danger"><?= form_error('semester'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary btn-sm">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
