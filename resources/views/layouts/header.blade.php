<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo">
                    <a class="d-flex" href="{{ route('home-page') }}">
                        <img alt="jobBox" src="assets/imgs/template/jobhub-logo.svg">
                    </a>
                </div>
            </div>
            <div class="header-nav">
                <nav class="nav-main-menu">
                    <ul class="main-menu">
                        <li><a class="active" href="index.html">Home</a></li>
                        <li class="has-children"><a href="candidates-grid.html">Lowongan</a>
                            <ul class="sub-menu">
                                <li><a href="candidates-grid.html">Lowongan Pekerjaan</a></li>
                                <li><a href="candidate-details.html">Project Based</a></li>
                            </ul>
                        </li>
                        <li><a href="blog-grid.html">Perusahaan</a></li>
                        <li><a href="blog-grid.html">Pelatihan</a></li>
                        <li><a href="blog-grid.html">Tentang</a></li>
                    </ul>
                </nav>
                <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                        class="burger-icon-mid"></span><span class="burger-icon-bottom"></span>
                </div>
            </div>
            <div class="header-right">
                <div class="block-signin"><a class="text-link-bd-btom hover-up" href="{{ route('register') }}">Register</a><a class="btn btn-default btn-shadow ml-40 hover-up" href="{{ route('login') }}">Sign in</a></div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="perfect-scroll">
                <div class="mobile-search mobile-header-border mb-30">
                    <form action="#">
                        <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start-->
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li><a class="active" href="index.html">Home</a></li>
                            <li class="has-children"><a href="candidates-grid.html">Lowongan</a>
                                <ul class="sub-menu">
                                    <li><a href="candidates-grid.html">Lowongan Pekerjaan</a></li>
                                    <li><a href="candidate-details.html">Project Based</a></li>
                                </ul>
                            </li>
                            <li><a href="blog-grid.html">Perusahaan</a></li>
                            <li><a href="blog-grid.html">Pelatihan</a></li>
                            <li><a href="blog-grid.html">Tentang</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-account">
                    <h6 class="mb-10">Your Account</h6>
                    <ul class="mobile-menu font-heading">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Work Preferences</a></li>
                        <li><a href="#">Account Settings</a></li>
                        <li><a href="#">Go Pro</a></li>
                        <li><a href="page-signin.html">Sign Out</a></li>
                    </ul>
                </div>
                <div class="site-copyright">Copyright 2022 &copy; JobBox. <br>Designed by AliThemes.</div>
            </div>
        </div>
    </div>
</div>
