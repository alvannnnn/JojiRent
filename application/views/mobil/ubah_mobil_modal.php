<?php foreach ($daftar_mobil as $dm) : ?>
    <div class="modal fade" id="#ubahMobil" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kategoriBaruModalLabel">Form Ubah Mobil</h5>
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
                                <i class="fas fa-plus-circle"></i> Tambah</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>