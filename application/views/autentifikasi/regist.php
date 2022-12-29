<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">

                <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-0">haiii</span>
                </div>

                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form action="<?= base_url('Auth/input_regist') ?>" style="width: 23rem;" method="POST">

                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Regist</h3>

                        <div class="form-outline mb-4">
                            <input type="text" id="nama" class="form-control form-control-lg" placeholder="Nama" name="nama_user" value="<?= set_value('name_user'); ?>">
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" id="email" class="form-control form-control-lg" placeholder="Email" name="email_user" value="<?= set_value('email_user'); ?>">
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="password1" class="form-control form-control-lg" placeholder="Password" name="password_user" value="<?= set_value('password_user'); ?>">
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="password2" class="form-control form-control-lg" placeholder=" Repeat Password" name="repeat_password_user" value="<?= set_value('repeat_password_user'); ?>">
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-info btn-lg btn-block" type="submit">Daftar</button>
                        </div>

                        <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                        <a href="<?= base_url('Auth') ?>" class="link-info">Login here</a></p>

                    </form>

                </div>

            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="<?= base_url() ?>/assets/img/img3.webp" alt="Login image" class="w-100 vh-100" style="object-fit: cover; width: 1280px; height:1920px; object-position: left;">
            </div>
        </div>
    </div>
</section>