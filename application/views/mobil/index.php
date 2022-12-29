<!-- Begin Page Content -->
<div class="container-fluid"> <?= $this->session->flashdata('message'); ?> <div class="row">
        <div class="col-lg-12"> <?php if (validation_errors()) { ?> <div class="alert alert-danger" role="alert"> <?= validation_errors(); ?> </div> <?php } ?> <?= $this->session->flashdata('message'); ?> <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#mobilBaruModal"><i class="fas fa-file-alt"></i> Buku Baru</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Transmisi Mobil</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody> <?php $a = 1;
                        foreach ($kategori as $km) { ?> <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $km['namakategori_mobil']; ?></td>
                            <td><?= $km['transmisikategori_mobil']; ?></td>
                            <td><?= $km['hargakategori_mobil']; ?></td>
                            </td>
                            <td> <a href="<?= base_url('mobil/ubahMobil') . $km['idkategori_mobil']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a> <a href="<?= base_url('mobil/hapusMobil/') . $km['idkategori_mobil']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $km['namakategori_mobil']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a> </td>
                        </tr> <?php } ?> </tbody>
            </table>
        </div>
    </div>
</div> <!-- /.container-fluid -->
</div> <!-- End of Main Content -->
<!-- Modal Tambah mobil baru-->
<div class="modal fade" id="mobilBaruModal" tabindex="-1" role="dialog" aria-labelledby="mobilBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mobilBaruModalLabel">Tambah Mobil</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="<?= base_url('mobil'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group"> <input type="text" class="form-control form-control-user" id="namakategori_mobil" name="Nama Mobil" placeholder="Masukkan Nama Mobil"> </div>
                    <div class="form-group"> <select name="idkategori_mobil" class="form-control form-control-user">
                            <option value="">Pilih Kategori</option> <?php foreach ($kategori as $km) { ?> <option value="<?= $km['idkategori_mobil']; ?>"><?= $km['namakategori_mobil']; ?></option> <?php } ?>
                        </select> </div>
                    <div class="form-group"> <input type="text" class="form-control form-control-user" id="transmisikategori_mobil" name="Transmisi Mobil" placeholder="Masukkan Transmisi"> </div>