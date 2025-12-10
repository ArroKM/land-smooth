@extends('components.layouts.app')

@section('content')
    <!-- Start Banner
    ============================================= -->
    <div class="banner-area bg-shape text-light with-fixed-nav bg-cover-bottom heading-capitalized" style="background-image: url({{ asset('assetss/img/shape/bg-5.png') }});">
        <div class="container">
            <div class="double-items">
                <div class="row align-center">
                    <div class="col-lg-7 info">
                        <h5 class="wow fadeInLeft">Unlimited Comunication</h5>
                        <h3 class="wow fadeInDown" style="font-size: 40px;" data-wow-duration="1s">Platform <strong>HT Digital</strong> untuk Kebutuhan Bisnis & Industri</h3>
                        <a href="https://app.smooht.com/registration" class="btn circle btn-md btn-light effect wow fadeInUp" data-wow-duration="1.8s" href="#">Get Started Now</a>
                    </div>
                    <div class="col-lg-5 thumb width-120 wow fadeInRight" data-wow-duration="1s">
                        <div class="thumb-innner">
                            <img src="{{ asset('assetss/img/illustration/SmooHT-2.png') }}" alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Process
    ============================================= -->
    <div class="our-process-area features-area box-less default-padding bottom-less">
        <div class="container">
            <div class="process-box text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-5">
                        <div class="item wow fadeInUp" data-wow-delay="500ms">
                            <div class="icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4>Skalabilitas</h4>
                            <p style="text-align: left;">
                                Penskalaan menjadi mudah dengan manajemen multi-perangkat serta saluran dan pengguna yang tidak terbatas. SmooHT tumbuh bersama Anda.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-5">
                        <div class="item wow fadeInUp" data-wow-delay="600ms">
                            <div class="icon">
                                <i class="fas fa-hdd"></i>
                            </div>
                            <h4>Pengelolaan</h4>
                            <p style="text-align: left;">
                                Dengan konsol terpusat kami, terapkan dalam satu hari ke ribuan pengguna, tentukan siapa yang berbicara dengan siapa, dan hapus atau tambahkan akun sesuai kebutuhan. Anda memegang kendali.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-5">
                        <div class="item wow fadeInUp" data-wow-delay="700ms">
                            <div class="icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4>Keamanan</h4>
                            <p style="text-align: left;">
                                Bicaralah dengan bebas. Komunikasi pribadi dan aman dienkripsi dari ujung ke ujung tanpa risiko intersepsi atau interferensi.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <div class="single-item col-lg-3 col-md-5">
                        <div class="item wow fadeInUp" data-wow-delay="700ms">
                            <div class="icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h4>Integrasi</h4>
                            <p style="text-align: left;">
                                Kami bekerja sama dengan Anda, secara harfiah. Integrasikan API dan SDK kami dengan mudah ke dalam alat dan aplikasi internal Anda, dan perluas LMR Anda dengan gateway.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Process -->

    <!-- Start Our Benefits
    ============================================= -->
    <div class="benifits-area reverse bg-gray default-padding">
        <!-- Fixed Shape -->
        <div class="shape-top">
            <img src="{{ asset('assetss/img/shape/10.png') }}" alt="Shape">
        </div>
        <!-- Fixed Shape -->
        <div class="container">
            <div class="row">

                <div class="col-lg-6 wow fadeInDown thumb">
                    <img src="{{ asset('assetss/img/img-hd.png') }}" alt="Thumb">
                </div>

                <div class="col-lg-6 wow fadeInUp info">
                    <h5>SMOOHT</h5>
                    <h2><strong>Platform Universal, Lintas Perangkat dan
                            Jaringan</strong></h2>
                    <p>
                        HT Digital Digitalkie dapat digunakan di smartphone Android, iOS dan Dekstop, dengan jaringan Wifi maupun jaringan internet dari provider apapun.
                    </p>
                    <ul>
                        <li>
                            <h5>Skalabilitas</h5>
                        </li>
                        <li>
                            <h5>Pengelolaan</h5>
                        </li>
                        <li>
                            <h5>Keamanan</h5>
                        </li>
                        <li>
                            <h5>Integrasi</h5>
                        </li>
                    </ul>
                    <a href="https://app.smooht.com/registration" class="btn circle btn-md btn-gradient">Get Started Now</a>
                </div>

            </div>
        </div>
    </div>
    <!-- End Our Benefits -->

    <!-- Start Tabs
    ============================================= -->
    <div class="tabs-content-area default-padding-top">
        <div class="container">
            <div class="center-tabs">
                <div class="row">
                    <div class="col-lg-4">
                        <ul id="tabs" class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">Reach</a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">Dispatch</a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tab3" data-toggle="tab" class="nav-link">Never</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div id="tabsContent" class="tab-content wow fadeInUp" data-wow-delay="0.5s">
                            <div id="tab1" class="tab-pane fade active show">
                                <div class="row align-center">
                                    <div class="col-lg-12 info">
                                        <h5>Reach</h5>
                                        <h2>Reach everyone, everywhere, every way</h2>
                                        <p>
                                            Harus berbicara dengan supervisor di Michigan dari lokasi Anda di Florida? Salin itu. Butuh alamat dan bukti pengantaran? 10-4. Fitur teks dan foto kami akan menyelesaikannya. Kami siap membantu Anda, dari Alpha hingga Zulu.
                                        </p>
                                        <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Baca selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <div class="row align-center">
                                    <div class="col-lg-12 info">
                                        <h5>Dispatch</h5>
                                        <h3>Dispatch intelligently</h3>
                                        <p>
                                            SmooHT Dispatch Hub secara otomatis memprioritaskan panggilan mendesak, dengan mudah menetapkan ulang permintaan, dan memotong obrolan. Pembaruan peta secara real-time membuat pengiriman tetap diketahui dan pekerja tetap fokus.
                                        </p>
                                        <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" class="tab-pane fade">
                                <div class="row align-center">
                                    <div class="col-lg-12 info">
                                        <h5>Never</h5>
                                        <h2>Never miss a thing </h2>
                                        <p>
                                            Baked into Smooht adalah kemampuan untuk memutar ulang pesan apa pun kapan saja, memungkinkan pekerja mencurahkan perhatian penuh mereka pada masalah yang ada, menyelesaikannya tanpa gangguan, dan kemudian melanjutkan ke tugas berikutnya.
                                        </p>
                                        <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Tabs -->

    <!-- Start Services Area
    ============================================= -->
    <div class="services-area carousel-shadow default-padding">
        <!-- Fixed Shape  -->
        <div class="shape-left-bottom shape opacity-default">
            <img src="{{ asset('assetss/img/shape/4.png') }}" alt="Shape">
        </div>
        <!-- Fixed Shape  -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Frontline</h5>
                        <h2>
                            Fitur Frontline Aplikasi Mobile
                        </h2>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-lg">
            <div class="services-items wow fadeInUp services-stage-carousel owl-carousel owl-theme text-center">
                <!-- Single Item -->
                <div class="item">
                    <div class="icon">
                        <img src="{{ asset('assetss/img/mic.png') }}" style="width: 100px;">
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Realtime Push to Talk Communication</a>
                        </h4>
                        <!-- <p>
                            Realtime Push to Talk Communication
                        </p>
                        <a href="#"><i class="fas fa-arrow-right"></i> Read More</a> -->
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item">
                    <div class="icon">
                        <img src="{{ asset('assetss/img/network.png') }}" style="width: 100px;">
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Kemudahan Berpindah Channel</a>
                        </h4>
                        <!-- <p>
                            Except had sex limits county enough the figure former add. Do sang my he next mr soon. It merely waited do unable.
                        </p>
                        <a href="#"><i class="fas fa-arrow-right"></i> Read More</a> -->
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item">
                    <div class="icon">
                        <img src="{{ asset('assetss/img/message.png') }}" style="width: 100px;">
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Pesan Teks dan Multimedia</a>
                        </h4>
                        <!-- <p>
                            Except had sex limits county enough the figure former add. Do sang my he next mr soon. It merely waited do unable.
                        </p>
                        <a href="#"><i class="fas fa-arrow-right"></i> Read More</a> -->
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item">
                    <div class="icon">
                        <img src="{{ asset('assetss/img/sos.png') }}" style="width: 100px;">
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Tombol Keadaan Darurat SOS</a>
                        </h4>
                        <!-- <p>
                            Except had sex limits county enough the figure former add. Do sang my he next mr soon. It merely waited do unable.
                        </p>
                        <a href="#"><i class="fas fa-arrow-right"></i> Read More</a> -->
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item">
                    <div class="icon">
                        <img src="{{ asset('assetss/img/switch.png') }}" style="width: 100px;">
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Switch Online & Offline</a>
                        </h4>
                        <!-- <p>
                            Except had sex limits county enough the figure former add. Do sang my he next mr soon. It merely waited do unable.
                        </p>
                        <a href="#"><i class="fas fa-arrow-right"></i> Read More</a> -->
                    </div>
                </div>
                <!-- End Single Item -->

                <div class="item">
                    <div class="icon">
                        <img src="{{ asset('assetss/img/rec.png') }}" style="width: 100px;">
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Rekaman Suara</a>
                        </h4>
                        <!-- <p>
                            Except had sex limits county enough the figure former add. Do sang my he next mr soon. It merely waited do unable.
                        </p>
                        <a href="#"><i class="fas fa-arrow-right"></i> Read More</a> -->
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Services Area
    ============================================= -->
    <div class="services-area carousel-shadow default-padding">
        <!-- Fixed Shape  -->
        <div class="shape-left-bottom shape opacity-default">
            <img src="{{ asset('assetss/img/shape/4.png') }}" alt="Shape">
        </div>
        <!-- Fixed Shape  -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Back Office</h5>
                        <h2>
                            Fitur Back Office & Dashboard
                        </h2>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-lg">
            <div class="services-items wow fadeInUp services-stage-carousel owl-carousel owl-theme text-center">
                <!-- Single Item -->
                <div class="item">
                    <div class="icon">
                        <img src="{{ asset('assetss/img/management.png') }}" style="width: 100px;">
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Manajemen Pengguna</a>
                        </h4>
                        <p>
                            Kelola seluruh tim secara terpusat dari back office Smooht
                        </p>
                        <a href="#"><i class="fas fa-arrow-right"></i> Pelajari lebih lengkap</a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item">
                    <div class="icon">
                        <img src="{{ asset('assetss/img/network.png') }}" style="width: 100px;">
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Manajemen Channel</a>
                        </h4>
                        <p>
                            Buat channel percakapan sesuai kebutuhan tim. Atur akses setiap orang untuk dapat bergabung di saluran yang Anda buat.
                        </p>
                        <a href="#"><i class="fas fa-arrow-right"></i> Pelajari lebih lengkap</a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item">
                    <div class="icon">
                        <img src="{{ asset('assetss/img/dashboard.png') }}" style="width: 100px;">
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Dashboard Monitoring</a>
                        </h4>
                        <p>
                            Tinjau & Pantau Seluruh Aktivitas Anggota
                        </p>
                        <a href="#"><i class="fas fa-arrow-right"></i> Pelajari lebih lengkap</a>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Why Choose Us
    ============================================= -->
    <div class="choose-us-area">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 thumb wow fadeInLeft">
                    <img src="{{ asset('assetss/img/dunia.png') }}" alt="Thumb">
                </div>
                <div class="col-lg-6 info wow fadeInUp" data-wow-delay="0.5s">
                    <h2>Komunikasi Realtime Push-to-talk Tanpa Batas</h2>
                    <p>
                        Sebuah HT Digital yang menunjang percakapan komunikasi secara real-time dengan menggunakan jaringan internet dan jangkauan tak terbatas. Kontrol koordinasi tim kapan pun, dimana pun tanpa kendala dan batasan.
                    </p>
                    <ul>
                        <li>
                            <h5>Jangkauan Global</h5>
                            <p>
                                Hingga 100%
                            </p>
                        </li>
                        <li>
                            <h5>Pengalaman Besar</h5>
                            <p>
                                Pekerja ahli
                            </p>
                        </li>
                        <li>
                            <h5>Kenyamanan</h5>
                            <p>
                                Untuk mencapai target Anda
                            </p>
                        </li>
                        <li>
                            <h5>Kekuatan Tim</h5>
                            <p>
                                Kepuasan klien
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- End Why Choose Us -->
    <div class="choose-us-area">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 thumb wow fadeInLeft">
                    <h2>Biaya Rendah Perawatan Rendah</h2>
                    <p>
                        Aplikasi berjalan sempurna di sistem operasi Android yang bisa diinstal di semua perangkat smartphone. Cocok untuk efisiensi operasional, meminimalisir investasi device tambahan dan maintenance perangkat konvensional hanya dengan sebuah aplikasi HT Digital yang sudah dilengkapi dengan fitur komperhensif.
                    </p>
                </div>
                <div class="col-lg-6 info wow fadeInUp" data-wow-delay="0.5s">
                    <img src="{{ asset('assetss/img/3.png') }}" alt="Thumb">
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="choose-us-area">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 thumb wow fadeInLeft">
                    <img src="{{ asset('assetss/img/keamanan.png') }}" alt="Thumb">
                </div>
                <div class="col-lg-6 info wow fadeInUp" data-wow-delay="0.5s">
                    <h2>Kemudahan Penggunaan dan Jaminan Keamanan</h2>
                    <p>
                        Implementasi instant, atur semua melalui satu dashboard backoffice kemudian mulai percakapan dengan tim Anda. Hilangkan keraguan keamanan percakapan internal tim Anda diakses pihak diluar kewenangan Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="choose-us-area">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 thumb wow fadeInLeft">
                    <h2>Didesign untuk Kebutuhan Enterprise</h2>
                    <p>
                        HT Digital yang dilengkapi dengan berbagai fitur untuk menunjang komunikasi, kolaborasi, produktivitas dan pengelolaan data komprehensif untuk aktivitas operasional bisnis. Dapatkan benefit lebih dengan mengoptimalkan fitur dashboard backofficce.
                    </p>
                </div>
                <div class="col-lg-6 info wow fadeInUp" data-wow-delay="0.5s">
                    <img src="{{ asset('assetss/img/enterprise.png') }}" alt="Thumb">
                </div>
            </div>
        </div>
    </div>

    <!-- Start Team
    ============================================= -->
    <!-- End Team -->

    <div class="services-area carousel-shadow default-padding">
        <!-- Fixed Shape  -->
        <div class="shape-left-bottom shape opacity-default">
            <img src="{{ asset('assetss/img/shape/4.png') }}" alt="Shape">
        </div>
        <!-- Fixed Shape  -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Solution</h5>
                        <h2>
                            HT Digital push-to-talk untuk Semua
                        </h2>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-lg">
            <div class="services-items wow fadeInUp services-stage-carousel owl-carousel owl-theme">
                <!-- Single Item -->
                <div class="item bg-primary">
                    <!-- <div class="icon">
                        <img src="assetss/img/management.png" style="width: 100px;">
                    </div> -->
                    <div class="info" style="text-align: left;">
                        <h4>
                            <a style="color: white;" href="#">Retail</a>
                        </h4>
                        <p style="color: white;">
                            Bekali staff terdepan toko retail anda dengan staff lainnya atau dengan bagian gudang di belakang.
                        </p>
                        <!-- <a href="#"><i class="fas fa-arrow-right"></i> Pelajari lebih lengkap</a> -->
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item bg-primary">
                    <!-- <div class="icon">
                        <img src="assetss/img/management.png" style="width: 100px;">
                    </div> -->
                    <div class="info" style="text-align: left;">
                        <h4>
                            <a style="color: white;" href="#">Security</a>
                        </h4>
                        <p style="color: white;">
                            Pastikan semuanya aman. Pantau dan laporkan setiap kejadian dengan seluruh tim keamanan anda.
                        </p>
                        <!-- <a href="#"><i class="fas fa-arrow-right"></i> Pelajari lebih lengkap</a> -->
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item bg-primary">
                    <!-- <div class="icon">
                        <img src="assetss/img/management.png" style="width: 100px;">
                    </div> -->
                    <div class="info" style="text-align: left;">
                        <h4>
                            <a style="color: white;" href="#">Transportation</a>
                        </h4>
                        <p style="color: white;">
                            Buat koordinasi driver dengan pusat. Pantau dan pastikan keamanan armada dan rute melalui komunikasi PTT.
                        </p>
                        <!-- <a href="#"><i class="fas fa-arrow-right"></i> Pelajari lebih lengkap</a> -->
                    </div>
                </div>
                <div class="item bg-primary">
                    <!-- <div class="icon">
                        <img src="assetss/img/management.png" style="width: 100px;">
                    </div> -->
                    <div class="info" style="text-align: left;">
                        <h4>
                            <a style="color: white;" href="#">Kawasan Industri</a>
                        </h4>
                        <p style="color: white;">
                            Buat Channel push-to-talk setiap bagian atau menyeluruh untuk memastikan operasional dan layanan berjalan baik.
                        </p>
                        <!-- <a href="#"><i class="fas fa-arrow-right"></i> Pelajari lebih lengkap</a> -->
                    </div>
                </div>
                <div class="item bg-primary">
                    <!-- <div class="icon">
                        <img src="assetss/img/management.png" style="width: 100px;">
                    </div> -->
                    <div class="info" style="text-align: left;">
                        <h4>
                            <a style="color: white;" href="#">Construction</a>
                        </h4>
                        <p style="color: white;">
                            Push-to-talk untuk komunikasi di area proyek untuk memastikan keamanan maupun pengawasan antar tim proyek.
                        </p>
                        <!-- <a href="#"><i class="fas fa-arrow-right"></i> Pelajari lebih lengkap</a> -->
                    </div>
                </div>
                <div class="item bg-primary">
                    <!-- <div class="icon">
                        <img src="assetss/img/management.png" style="width: 100px;">
                    </div> -->
                    <div class="info" style="text-align: left;">
                        <h4>
                            <a style="color: white;" href="#">Hospitality</a>
                        </h4>
                        <p style="color: white;">
                            Beri layanan terbaik bagi customer anda. Komunikasikan dengan cepat dan sigap apa yang mereka butuhkan.
                        </p>
                        <!-- <a href="#"><i class="fas fa-arrow-right"></i> Pelajari lebih lengkap</a> -->
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- Start Case Studies
    ============================================= -->

    <!-- Start Subscribe
    ============================================= -->
    <div class="subscribe-area default-padding-top text-center">
        <div class="container">
            <div class="sebscribe-items wow fadeInUp">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 form">
                        <h2>Try Smooht free for <strong>14 days</strong></h2>
                        <form action="https://app.smooht.com/registration">
                            <input type="email" placeholder="Enter your email" class="form-control" name="email">
                            <button type="submit">Get Started</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subscribe -->

    <section class="section faq" id="faq">
        <!-- Star Faq
        ============================================= -->
        <div class="faq-area default-padding">
            <div class="container">
                <div class="faq-items">
                    <div class="row align-center">

                        <div class="col-lg-6">
                            <div class="faq-content wow fadeInUp">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Apa perbedaan Aplikasi HT Smooht sebagai HT digital dengan HT Analog konvensional?
                                            </h4>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    Modulasi: HT Analog menggunakan modulasi analog, Smooht menggunakan jaringan internet.

                                                    Jangkauan: Kemampuan sinyal internet yang bisa menjangkau jarak jauh dibandingkan dengan sinyal radio HT analog dengan keterbatasan jarak.

                                                    Device: Smooht bisa berjalan diberbagai device yang berbeda, smartphone, device POC dan masih banyak lagi.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Apakah Aplikasi HT Smooht lebih aman dari HT Analog?
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    Umumnya teknologi HT digital memiliki fitur enkripsi yang lebih aman dibanding dengan HT konvensional yang berbasis frequensi untuk jalur komunikasinya.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Bagaimana dengan jaminan keamanan data Smooht?
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    Data pengguna disimpan di server Smooht yang sudah disiapkan untuk masing-masing perusahaan.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Apakah Aplikasi HT Smooht bisa diinstal di semua smartphone?
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    Aplikasi HT Digital Smooht bisa berjalan di berbagai device dengan sistem operasi Android dan iOS serta dilengkapi operator back office sebagai dashboard monitoring melalui web. Bisa juga di device HT POC.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="thumb wow fadeInLeft" data-wow-delay="0.5s">
                                <img src="{{ asset('assetss/img/illustration/17.png') }}" alt="Thumb">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Faq -->
    </section>

    <!-- start contact -->
    <section class="section contact" id="contact">
        @livewire("home")
        <!--end container-->
    </section>
@endsection
