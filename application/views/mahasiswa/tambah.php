<div class="container">

    <div class="row at mt-3">
        <div class="col-md-6">

                    <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                <form action="" method="post">
            <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                    <small class="form-text text-danger"><?= form_error('nama');?></small>
                  </div>
            <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" name="nrp" class="form-control" id="nrp">
                    <small class="form-text text-danger"><?= form_error('nrp');?></small>
                  </div>
            <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="text">
                    <small class="form-text text-danger"><?= form_error('email');?></small>
                  </div>
                        <label for= "jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan"name="jurusan">
                        <option value="Teknik Informatika"> Teknik Informatika</option>
                        <option value="Teknik Industri"> Teknik Industri</option>
                        <option value="Teknik Mesin"> Teknik Mesin</option>
                    </select>
                </div>
                <button type="submit" name="tambah"class="btn btn-primary btn-sm">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
                </div>
                </div>
        
        
