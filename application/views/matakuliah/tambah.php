<div class="container">
    <div class="row at mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Mata Kuliah
                </div>
                <div class="card-body">
                    <form action="<?= base_url('matakuliah/tambah'); ?>" method="post">
                        <div class="form-group">
                            <label for="matakuliah">Mata Kuliah</label>
                            <select class="form-control" id="matakuliah" name="matakuliah">
                                <option value="Pengantar Teknik Industri">Pengantar Teknik Industri</option>
                                <option value="Teknik Pengukuran">Teknik Pengukuran</option>
                                <option value="Otomasi & Kendali Mekanik">Otomasi & Kendali Mekanik</option>
                                <option value="Pemrograman Web">Pemrograman Web</option>
                            </select>
                            <small class="form-text text-danger"><?= form_error('matakuliah'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="sandi">Sandi</label>
                            <input type="text" name="sandi" class="form-control" id="sandi">
                            <small class="form-text text-danger"><?= form_error('sandi'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="sks">SKS</label>
                            <input type="text" name="sks" class="form-control" id="sks">
                            <small class="form-text text-danger"><?= form_error('sks'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="text" name="semester" class="form-control" id="semester">
                            <small class="form-text text-danger"><?= form_error('semester'); ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary btn-sm">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
