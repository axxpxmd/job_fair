<main class="main">
    <section class="pt-100 login-register">
        <div class="container">
            <div class="row login-register-cover">
                <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                    <div class="text-center">
                        <h2 class="mt-10 mb-5 text-brand-1">Reset Password</h2>
                        <p class="font-sm text-muted mb-30">Masukan alamat email yang terdaftar.</p>
                    </div>
                    <form class="login-register text-start mt-20" action="#">
                        <div class="form-group">
                            <label class="form-label" for="input-1">Email *</label>
                            <input class="form-control" id="input-1" type="text" required="" name="emaill" placeholder="stevenjob@gmail.com">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-brand-1 hover-up w-100" type="submit" name="continue">Lanjutkan</button>
                        </div>
                        <div class="text-muted text-center">Sudah Punya Akun? <a href="{{ route('login') }}" class="text-primary">Login</a></div>
                    </form>
                </div>
                <div class="img-1 d-none d-lg-block"><img class="shape-1" src="assets/imgs/page/login-register/img-5.svg" alt="JobBox"></div>
                <div class="img-2"><img src="assets/imgs/page/login-register/img-3.svg" alt="JobBox"></div>
            </div>
        </div>
    </section>
</main>
