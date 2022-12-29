<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-5">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div> <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#kategoriBaruModal"><i class="fas fa-file-alt"></i> Tambah Mobil</button>
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
                        foreach ($daftar_mobil as $dm) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $dm['nama_mobil']; ?></td>
                            <td><?= $dm['transmisi_mobil']; ?></td>
                            <td><?= $dm['hargasewa_mobil']; ?></td>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#ubahMobil"><i class="fas fa-file-alt"></i> Tambah Mobil</button>

                                <a type="button" class="badge badge-info" data-toggle="modal" data-target="#ubahMobil<?= $dm['id_mobil']; ?>">
                                    <i class="fas fa-edit"></i> Ubah
                                </a>
                                <a href="<?= base_url('mobil/hapusMobil/') . $dm['id_mobil']; ?>" onclick="return confirm
                            ('Kamu yakin akan menghapus <?= $dm['nama_mobil']; ?> ?');" class="badge badge-danger">
                                    <i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                    <?php $this->load->view('mobil/ubah_mobil_modal'); ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- /.container-fluid -->
<!-- </div> End of Main Content -->
<div class="modal fade" id="kategoriBaruModal" tabindex="-1" role="dialog" aria-labelledby="kategoriBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kategoriBaruModalLabel">Form Tambah Mobil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('mobil/tambahMobil'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="nama" placeholder="Nama Mobil" class="form-control form-control-user">
                    </div>

                    <div class="form-group">
                        <input type="text" name="transmisi" placeholder="Transmisi Mobil" class="form-control form-control-user">
                    </div>

                    <div class=" form-group">
                        <input name="harga" placeholder="Harga" class="form-control form-control-user" type="number">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            <i class="fas fa-ban"></i> Close</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-plus-circle"></i> Tambah
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>