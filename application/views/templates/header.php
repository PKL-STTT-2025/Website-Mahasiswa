<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?? $judul ?? 'CI App'; ?></title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    .header-top, .navbar {
      background-color: #1A2E45 !important;
      color: white !important;
    }

    .header-top a,
    .header-top i,
    .navbar .nav-link {
      color: #ffc107 !important;
    }

    .navbar .nav-link:hover {
      color: white !important; 
    }

    .badge {
      margin-left: 10px;
    }

    body {
      background-color: #FAFAFA;
    }
  </style>
</head>

<body>

  <div class="header-top py-2 border-bottom">
    <div class="container d-flex justify-content-between align-items-center flex-wrap small">
      <div>
        <i class="fas fa-phone-alt me-2 text-warning"></i> (021) 1357911 
        &nbsp; | &nbsp;
        <i class="fas fa-envelope me-2 text-warning"></i> info@kampus.ac.id
      </div>
      <div>
        <a href="https://facebook.com/namakampus" target="_blank" class="text-decoration-none me-3">
          <i class="fab fa-facebook fa-lg"></i>
        </a>
        <a href="https://instagram.com/namakampus" target="_blank" class="text-decoration-none">
          <i class="fab fa-instagram fa-lg"></i>
        </a>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand text-white" href="<?= base_url(); ?>">CI App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="<?= base_url(); ?>">Home</a>
          <a class="nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
          <a class="nav-link" href="<?= base_url(); ?>dosen">Dosen</a>
          <a class="nav-link" href="<?= base_url(); ?>matakuliah">Mata Kuliah</a>
          <a class="nav-link" href="<?= base_url(); ?>about">About</a>
        </div>
      </div>
    </div>
  </nav>

  
