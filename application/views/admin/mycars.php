<!-- <div class="container-fluid">
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
                </ul>
            </div>

        </div>
    <?php endforeach ?>
</div>
</div>