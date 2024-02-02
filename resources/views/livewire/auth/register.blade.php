<main class="">
    <section class="pt-100 login-register">
        <div class="container">
            <div class="row login-register-cover">
                <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                    <div class="text-center">
                        <h4 class="mt-10 mb-5 text-brand-1">REGISTER</h4>
                        <h4 class="mt-10 mb-5 text-brand-1">AKUN BARU</h4>
                        <div class="divider-text-center"><span>Masukin Email dan Password</span></div>
                    </div>
                    <form class="login-register text-start mt-20" action="#">
                        <div class="form-group">
                            <label class="form-label" for="email">Email *</label>
                            <input class="form-control" id="email" type="email" required name="email" placeholder="Alamat Email">
                            <span class="fs-11 text-black-50 font-italic">Masukkan email yang valid</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Password *</label>
                            <input class="form-control" id="password" type="password" required name="password" placeholder="************">
                            <span class="fs-11 text-danger font-italic">Password minimal 8 karakter, huruf besar dan kecil, angka, serta spesial karakter (@$!#%*?&)</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="confirm_password">Konfirmasi Password *</label>
                            <input class="form-control" id="confirm_password" type="password" required name="confirm_password" placeholder="************">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">DAFTAR</button>
                        </div>
                        <div class="text-muted text-center">Sudah Punya Akun? <a href="{{ route('login') }}" class="text-primary">Login</a></div>
                    </form>
                </div>
                <div class="img-1 d-none d-lg-block"><img class="shape-1" src="assets/imgs/page/login-register/img-4.svg" alt="JobBox"></div>
                <div class="img-2"><img src="assets/imgs/page/login-register/img-3.svg" alt="JobBox"></div>
            </div>
        </div>
    </section>
</main>
