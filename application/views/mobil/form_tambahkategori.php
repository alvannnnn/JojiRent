<!-- <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<div class="modal fade" id="kategoriBaruModal" tabindex="-1" role="dialog" aria-labelledby="kategoriBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kategoriBaruModalLabel">Tambah Mobil</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span> </button>
            </div>
            <form action="<?= base_url('mobil/kategori'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group"> <select name="kategori" class="form-control form-control-user">
                            <option value="">Pilih Mobil</option> <?php $k = ['Mitsubishi Xpander', 'Daihatsu All New Xenia'];
                                                                    for ($i = 0; $i < 2; $i++) { ?> <option value="<?= $k[$i]; ?>"><?= $k[$i]; ?></option> <?php } ?>
                        </select> </div>
                    <div class="form-group"> <select name="kategori" class="form-control form-control-user">
                            <option value="">Pilih Transmisi</option> <?php $k = ['Automatic', 'Manual'];
                                                                        for ($i = 0; $i < 2; $i++) { ?> <option value="<?= $k[$i]; ?>"><?= $k[$i]; ?></option> <?php } ?>
                        </select> </div>
                    <div class="form-group">
                        <input name="harga-baru" placeholder="Harga" class="form-control form-control-user" type="number">
                    </div>
                    <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            <i class="fas fa-ban"></i> Close</button> <button type="submit" class="btn btn-primary">
                            <i class="fas fa-plus-circle"></i> Tambah</button> </div>
            </form>
        </div>
    </div>
</div> -->

<!-- Begin Page Content -->
<!-- <div class="container-fluid"> <?= $this->session->flashdata('pesan'); ?> <div class="row">
        <div class="col-lg-5"> <?php if (validation_errors()) { ?> <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?> </div> <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#kategoriBaruModal"><i class="fas fa-file-alt"></i> Tambah Mobil</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Transmisi Mobil</th>
                        <th scope="col">Harga Sewa Mobil</th>
                    </tr>
                </thead>
                <tbody> <?php $a = 1;
                        foreach ($kategori_mobil as $km) { ?> <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $km['namakategori_mobil']; ?></td>
                            <td><?= $km['transmisikategori_mobil']; ?></td>
                            <td><?= $km['hargakategori_mobil']; ?></td>
                            </td>
                            <td> <a href="<?= base_url('mobil/ubahMobil') . $km['namakategori_mobil']; ?>" class="badge badge-info">
                                    <i class="fas fa-edit"></i> Ubah</a> <a href="<?= base_url('mobil/hapusMobil/') . $km['namakategori_mobil']; ?>" onclick="return confirm
                            ('Kamu yakin akan menghapus <?= $judul . ' ' . $km['namakategori_mobil']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a> </td>
                        </tr> <?php } ?> </tbody>
            </table>
        </div>
    </div> -->
</div> <!-- /.container-fluid -->
<!-- </div> End of Main Content -->