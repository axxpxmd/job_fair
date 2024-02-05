<main class="">
    <section class="pt-100 login-register">
        <div class="container">
            <div class="row login-register-cover">
                <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                    <div class="text-center">
                        <p class="font-sm text-brand-2">SELAMAT DATANG! </p>
                        <h2 class="mt-10 mb-5 text-brand-1">Job Fair</h2>
                        <h2 class="mt-10 mb-5 text-brand-1">Tangerang Selatan</h2>
                        <div class="divider-text-center"><span>Masukin Email dan Password</span></div>
                    </div>
                    <form class="login-register text-start mt-20" action="#">
                        <div class="form-group">
                            <label class="form-label" for="email">Email *</label>
                            <input class="form-control" id="email" type="email" required name="email" placeholder="Alamat Email">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Password *</label>
                            <input class="form-control" id="password" type="password" required name="password" placeholder="************">
                        </div>
                        <div class="login_footer form-group d-flex justify-content-between">
                            <label class="cb-container">
                                <input type="checkbox">
                                <span class="text-small">ingat saya</span>
                                <span class="checkmark"></span>
                            </label>
                            <a class="text-primary" href="{{ route('resetPassword') }}">Lupa Password</a>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Login</button>
                        </div>
                        <div class="text-muted text-center">Belum Punya Akun? <a href="{{ route('register') }}" class="text-primary">Daftar</a></div>
                    </form>
                </div>
                <div class="img-1 d-none d-lg-block"><img class="shape-1" src="assets/imgs/page/login-register/img-4.svg" alt="JobBox"></div>
                <div class="img-2"><img src="assets/imgs/page/login-register/img-3.svg" alt="JobBox"></div>
            </div>
        </div>
    </section>
</main>
