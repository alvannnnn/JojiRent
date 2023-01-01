<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-md-8">
      <div class="card shadow">
        <div class="card-header">
          <strong>Akun yang sedang login</strong>
        </div>
        <div class="card-header" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="<?= base_url('assets/img/profile/') . $user['foto_user']; ?>" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
              <h5 class="card-title"><?= $user['nama_user']; ?></h5>
              <p class="card-text"><?= $user['email']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>