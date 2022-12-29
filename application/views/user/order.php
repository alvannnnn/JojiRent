<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">CAR LIST</h1>
    <div class="row">

        <?php foreach ($mobil as $mb) : ?>
            <div class="col-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/mobil/') . $mb['foto_mobil'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $mb['nama_mobil'] ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?= $mb['transmisi_mobil'] ?></< /li>
                        <li class="list-group-item">Rp. <?= number_format($mb['hargasewa_mobil'], 0, ',', '.') ?></< /li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="<?= base_url('views/user/bayar') ?>" type="button" class="btn btn-primary">Order Now!</a>
                    </div>
                </div>

            </div>
        <?php endforeach ?>
    </div>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->