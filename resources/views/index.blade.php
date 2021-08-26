@extends('layouts.index') 
@section('content')
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="50" data-aos-once="true" style="color: var(--gray-dark);background: rgb(18,21,209);">
        <div class="container"><a class="navbar-brand" href="#" style="color: var(--blue);"><img style="height: 40px;border-style: none;border-color: rgb(18,21,209);" src="./assets/img/bima.jpg?h=ff7b670f02e7103ba809cd73b6525ebe"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background: var(--light);"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="color: var(--red);"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonial" style="font-family: Roboto, sans-serif;color: var(--light);">Testimonial</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="font-family: Roboto, sans-serif;color: var(--light);">Information</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq" style="font-family: Roboto, sans-serif;color: var(--light);">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fitur" style="font-family: Roboto, sans-serif;color: var(--light);">Feature</a></li>
                    <li class="nav-item"><a class="nav-link" href="#footerpad" style="font-family: Roboto, sans-serif;color: var(--light);">Contact</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="true" data-toggle="dropdown" style="font-family: Roboto, sans-serif;color: var(--light);">Pricing</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#price1">First Item</a><a class="dropdown-item" href="#price2">Second Item</a><a class="dropdown-item" href="#price3">Third Item</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div data-aos="slide-right" style="height: 376px;margin-bottom: 54px;">
        <div class="ritt-container">
            <h2 style="font-size: 22px;text-align: center;font-family: Roboto, sans-serif;margin-bottom: 40px;">Aplikasi Dengan Fitur Terlengkap Untuk Digital Printing Anda</h2><img src="./assets/img/gambar%20bima.jpg?h=2a88590d9755c053f7debe0b7d80dc4d" style="width: 100%;">
        </div>
    </div>
    <header></header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p data-aos="slide-right" style="font-family: Roboto, sans-serif;text-align: center;font-size: 18px;font-style: normal;"><strong>Anda Punya Usaha Printing Tapi Masih Serba Manual ?</strong></p>
            </div>
            <div class="col-md-12">
                <p data-aos="slide-left" style="font-size: 18px;text-align: center;font-family: Roboto, sans-serif;"><strong>Manajemen Produksi Tidak Tertata Rapi ?</strong></p>
            </div>
            <div class="col-md-12">
                <p data-aos="slide-right" style="font-size: 18px;text-align: center;font-family: Roboto, sans-serif;"><strong>Manajemen Keuangan Berantakan?</strong></p>
            </div>
            <div class="col-md-12">
                <p data-aos="slide-left" style="font-size: 18px;text-align: center;font-family: Roboto, sans-serif;"><strong>Karyawan Bingung Menentukan Harga Setiap Orderan ?</strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p data-aos="slide-right" style="font-size: 18px;text-align: center;font-family: Roboto, sans-serif;"><strong>Udah Nyoba Berbagai Software Penjualan Tapi Ngga Cocok Dengan Usaha Printing Anda</strong></p>
            </div>
            <div class="col-md-12">
                <p data-aos="slide-right" style="font-size: 18px;text-align: center;font-family: Roboto, sans-serif;"><strong>Ingin Usaha Printing Anda Auto Pilot?</strong></p>
            </div>
            <div class="col-md-12" style="height: 60PX;background: var(--light);margin-bottom: 80px;">
                <p class="text-center" data-aos="slide-right" style="font-size: 20PX;text-align: center;font-family: Roboto, sans-serif;height: 30PX;margin: 5px;line-height: 27px;color: var(--indigo);"><strong>KAMI HADIR SEBAGAI SOLUSI UNTUK MENJAWAB MASALAH BISNIS PRINTING ANDA</strong></p>
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-left" id="fitur">
        <div class="intro">
            <h2 class="text-center" data-aos="fade-up">Fitur</h2>
            <p class="text-center" data-aos="fade-up">Berikut Fitur- fitur canggih yang akan memudahkan pekerjaan bisnis Digital Printing anda :</p>
        </div>
        <div class="row features">
            <div class="col-sm-6 col-lg-4 item" data-aos="fade-right"><i class="fas fa-cash-register icon" style="font-size: 25px;"></i>
                <h3 class="name" style="font-size: 25px;font-family: Roboto, sans-serif;">POS ( Point Of Sales ) / Kasir</h3>
                <p class="description">Sistem penjualan yang mudah dan terprogram mulai dari proses order di CS hingga proses akhir produksi yang rapi dan termonitor. Dilengkapi dengan harga UMUM dan Harga MEMBER , serta harga berjenjang utk tiap produknya.</p>
            </div>
            <div class="col-sm-6 col-lg-4 item" data-aos="fade-down"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-hand-thumbs-up icon" style="font-size: 25px;">
                    <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"></path>
                </svg>
                <h3 class="name" style="font-size: 25px;font-family: Roboto, sans-serif;">Kemudahan Pengoprasian</h3>
                <p class="description">Dengan User Experience yang mudah digunakan, serta hak akses tiap jabatan mulai dari Desainer Grafis , Kasir , Operator , Kasir , Manager sudah disesuaikan berdasarkan tugas masing - masing.</p>
            </div>
            <div class="col-sm-6 col-lg-4 item" data-aos="fade-left"><i class="material-icons icon" style="font-size: 25px;">work</i>
                <h3 class="name" style="font-size: 25px;font-family: Roboto, sans-serif;">Surat Perintah Kerja ( SPK ) dan Jadwal Produksi</h3>
                <p class="description">Alur produksi serta item produksi dapat dipantau dengan rapi , mulai dari bahan, jumlah cetak , dimensi berdasarkan SPK yang dikeluarkan.</p>
            </div>
            <div class="col-sm-6 col-lg-4 item" data-aos="fade-left"><i class="fa fa-mouse-pointer icon" style="font-size: 25px;"></i>
                <h3 class="name" style="font-size: 25px;font-family: Roboto, sans-serif;">Counter Klik A3+</h3>
                <p class="description">Anda dapat memonitor klik charge mesin A3+ anda untuk mensingkronkan tagihan dari vendor mesin A3+ dan juga penjualan anda.</p>
            </div>
            <div class="col-sm-6 col-lg-4 item" data-aos="fade-up"><i class="la la-money icon" style="font-size: 25px;"></i>
                <h3 class="name" style="font-family: Roboto, sans-serif;font-size: 25px;">Laporan Keuangan Lengkap dan Akurat</h3>
                <p class="description">Dilengkapi Laporan Laba Rugi , Arus Kas, Volume Penjualan , dan juga Laporan Utang Piutang Pelanggan dan Supplier, sehingga Keuangan anda dapat terkendali.</p>
            </div>
            <div class="col-sm-6 col-lg-4 item" data-aos="fade-right"><i class="fas fa-user-shield icon" style="font-size: 25px;"></i>
                <h3 class="name" style="font-family: Roboto, sans-serif;font-size: 25px;">100% Terjamin Keamanan dan Privasi Database Anda</h3>
                <p class="description">Jaminan 100% database perusahaan anda aman, karena server terdapat di lokasi toko anda sendiri , bisa offline dan juga online.</p>
            </div>
        </div>
    </div>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <section id="testimonial" class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Testimonials </h2>
                <p class="text-center">apa kata mereka tentang BIMAGEN2.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Luar biasa aplikasi sangat cocok untuk digital printing.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="./assets/img/ICON%20BIMA%20RAI.png?h=8d334b1a17ee6652240b6d0c61cfcf60">
                        <h5 class="name">B21 Print</h5>
                        <p class="title">CEO of Company Inc.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">ayo digitalisasi usaha anda dengan BIMAGEN2 </p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="./assets/img/3.jpg?h=49c84e5ff6de0f9745dc6273e8c4a18b">
                        <h5 class="name">Printing</h5>
                        <p class="title">Founder of Style Co.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">sangat membantu buat usaha percetakan saya yang memiliki 4 cabang</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="./assets/img/2.jpg?h=0aa6f5d1ee699a8e925d1fa94dd34813">
                        <h5 class="name">Zulkar Printing </h5>
                        <p class="title">Owner of Creative Ltd.</p>
                    </div>
                </div>
               
                
              
            </div>
        </div>
    </section>
    <div class="carousel slide" data-ride="carousel" data-interval="10000" id="carousel-t">
        <div class="carousel-inner"></div>
        <div><a class="carousel-control-prev" href="#carousel-t" role="button" data-slide="prev"><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-t" role="button" data-slide="next"></a></div>
        <ol class="carousel-indicators"></ol>
    </div>
    <section class="features-clean"></section>
    <div></div>
    <div class="container">
        <div class="row" id="price">
            <div class="col-sm-4 text-center" data-aos="zoom-in" id="price1">
                <ul class="list-group">
                    <li class="list-group-item heading">
                        <h1 style="font-family: Roboto, sans-serif;">PAKET LITE</h1>
                        <h4 style="font-size: 15px;">Cocok Untuk Pemula</h4><span class="price">Rp 2,5 Juta</span>
                    </li>
                    <li class="list-group-item"><span><i class="fa fa-check"></i>Aktivasi Lisensi Untuk 1 PC</span></li>
                    <li class="list-group-item"><span><i class="fa fa-check"></i>FREE Support &amp; Maintenance Selama 6 Bulan</span></li>
                    <li class="list-group-item"><span><i class="fa fa-check"></i>&nbsp;Offline Server</span></li>
                    <li class="list-group-item"><span><i class="fa fa-remove"></i>&nbsp; Printer POS</span></li>
                    <li class="list-group-item"><span><i class="fa fa-remove"></i>&nbsp; PC Server</span></li>
                    <li class="list-group-item"><div class="button">
    <p class="btnText">Coba </p> 
    <div class="btnTwo" id="hargalite" onclick="refreshExistingTab()">
      <p class="btnText2"><i class="fa fa-plus" aria-hidden="true"></i></p>
    </div>
 </div></li>
                </ul>
            </div>
            <div class="col-sm-4 text-center" data-aos="zoom-in" id="price2">
                <ul class="list-group">
                    <li class="list-group-item heading">
                        <h1 style="font-family: Roboto, sans-serif;">PAKET BASIC</h1>
                        <h4 style="font-size: 15px;">Pilihan Tepat</h4><span class="price">Rp 5 Juta</span>
                    </li>
                    <li class="list-group-item"><span><i class="fa fa-check"></i>Aktivasi Lisensi Untuk 5 PC</span></li>
                    <li class="list-group-item"><span><i class="fa fa-check"></i>&nbsp;FREE Support &amp; Maintenance Selama 6 Bulan</span></li>
                    <li class="list-group-item"><span><i class="fa fa-check"></i>&nbsp;Offline &amp; Online Server</span></li>
                    <li class="list-group-item"><span><i class="fa fa-check"></i>&nbsp;FREE Printer POS</span></li>
                    <li class="list-group-item"><span><i class="fa fa-remove"></i>&nbsp;PC Server</span></li>
                    <li class="list-group-item"><div class="button">
    <p class="btnText">COBA</p>
    <div class="btnTwo" id="hargalite" onclick="refreshExistingTab()" >
        <!-- <a href="./register.html"> -->
      <p class="btnText2"><i class="fa fa-plus" aria-hidden="true"></i></p></a>
    </div>
 </div></li>
                </ul>
            </div>
            <div class="col-sm-4 text-center" data-aos="zoom-in" id="price3">
                <ul class="list-group">
                    <li class="list-group-item heading">
                        <h1 style="font-family: Roboto, sans-serif;">PAKET PRO</h1>
                        <h4 style="font-size: 15px;">Untuk Para Jawara Printing</h4><span class="price">Rp 10 Juta</span>
                    </li>
                    <li class="list-group-item"><span><i class="fa fa-check"></i>Aktivasi Lisensi Untuk 8 PC</span></li>
                    <li class="list-group-item"><span><i class="fa fa-check"></i>&nbsp;FREE Support &amp; Maintenance Selama 6 Bulan</span></li>
                    <li class="list-group-item"><span><i class="fa fa-check"></i>&nbsp;Offline &amp; Online Server</span></li>
                    <li class="list-group-item"><span><i class="fa fa-check"></i>&nbsp;FREE Printer POS</span></li>
                    <li class="list-group-item"><span><i class="fa fa-check"></i>&nbsp;PC Server</span></li>
                    <li class="list-group-item"><div class="button">
    <p class="btnText">COBA</p>
    <div class="btnTwo"  id="hargalite" onclick="refreshExistingTab()">
      <p class="btnText2"><i class="fa fa-plus" aria-hidden="true"></i></p>
    </div>
 </div></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="faq">
                <div>
                    <div class="container-fluid">
                        <section id="faq" style="padding: 2px;margin: 11px;">
                            <hr class="star-dark mb-5">
                            <h2 class="text-uppercase text-center" style="font-size: 48;">FAQ</h2><br ><div class="container">
    <div class="faqelement">
        <button 
            class="btn btn-primary faq on" type="button" style="  box-shadow: none;
            ">Apakah aplikasi ini via web  ?
            </button>
        <div class="panel">
            <p>Aplikasi ini berbasis desktop PC dan Mobile apps android , bukan web based. </p>
        </div>
    </div><br />
    <div class="faqelement"><button class="btn btn-primary faq on" type="button" style="box-shadow: none;"
        > Aplikasinya online atau offline ?</button>
        <div class="panel">
            <p>Aplikasi ini offline , dan bisa dibuat online utk pake basic dan pro. </p>
        </div>
        </div>
        <br />
        <div class="faqelement"><button class="btn btn-primary faq on" type="button" style="box-shadow: none;"
            >Apakah berbayar bulanan atau ada biaya anual fee ?</button>
        <div class="panel">
            <p>Lisensi aplikasi ini bersifat permananen dan full life time. Tidak ada anual fee atau biaya bulanan. Cukup 1x beli untuk selamanya. </p>
        </div>
    </div>
    <br />
        <div class="faqelement"><button class="btn btn-primary faq on" type="button" style="box-shadow: none;"
            >Bagaimana keamanan data saya terjaga ?</button>
        <div class="panel">
            <p>Kami menjamin 100% keamanan privasi data perusahaan anda. Karena server 100% ada di toko anda sendiri dan offline , dan anda dapat mengelola datanya sendiri. </p>
        </div>
    </div>
    <br />
        <div class="faqelement"><button class="btn btn-primary faq on" type="button" style="box-shadow: none;"
            > Bagaimana dengan training, maintenance dan support dari penyedia aplikasi bima gen 2?</button>
        <div class="panel">
            <p>Kami memberikan layanan training gratis via online , dan kontrak FREE service dan maintenance selama 6 bulan .   </p>
        </div>
    </div>
    
</div>

    
                            <!-- <div class="container">
                                <hr class="star-dark mb-5">
                            </div>
                        </section>
                        <h1 style="text-align: center;">Information</h1>
                        <hr>
                        <form id="contactForm" action="javascript:void(0);" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden" name="to" value="email@awebsite.com">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div id="successfail"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-6">
                                    <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                    <div class="form-row">
                                        <div class="col-12">
                                            <div class="static-map"><a rel="noopener" href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292" target="_blank"> <img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Daytona International Speedway"></a></div>
                                        </div>
                                        <div class="col-sm-6 col-md-12 col-lg-6">
                                            <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                            <div><span><strong>Name</strong></span></div>
                                            <div><span>email@awebsite.com</span></div>
                                            <div><span>www.awebsite.com</span></div>
                                            <hr class="d-sm-none d-md-block d-lg-none">
                                        </div>
                                        <div class="col-sm-6 col-md-12 col-lg-6">
                                            <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                            <div><span><strong>Office Name</strong></span></div>
                                            <div><span>55 Icannot Dr</span></div>
                                            <div><span>Daytone Beach, FL 85150</span></div>
                                            <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                            <hr class="d-sm-none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Contact Information</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <form id="contactForm" action="javascript:void(0);" method="get"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control" type="hidden" name="to" value="email@awebsite.com">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div id="successfail"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-md-6" id="message">
                                                <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small></h2>
                                                <div class="form-group"><label for="from-name">Name</label><span class="required-input">*</span>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" id="from-name" name="name" required="" placeholder="Full Name">
                                                    </div>
                                                </div>
                                                <div class="form-group"><label for="from-email">Email</label><span class="required-input">*</span>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text" id="from-email" name="email" required="" placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                        <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" id="from-phone" name="phone" required="" placeholder="Primary Phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                        <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-control" id="from-calltime" name="call time">
                                                                    <optgroup label="Best Time to Call">
                                                                        <option value="Morning" selected="">Morning</option>
                                                                        <option value="Afternoon">Afternoon</option>
                                                                        <option value="Evening">Evening</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label for="from-comments">Comments</label><textarea class="form-control" id="from-comments" name="comments" placeholder="Enter Comments" rows="5"></textarea></div>
                                                <div class="form-group">
                                                    <div class="form-row">
                                                        <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                                        <div class="col"><button class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                                    </div>
                                                </div>
                                                <hr class="d-flex d-md-none">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <div class="static-map"><a rel="noopener" href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292" target="_blank"> <img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Daytona International Speedway"></a></div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                                        <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                                        <div><span><strong>Name</strong></span></div>
                                                        <div><span>email@awebsite.com</span></div>
                                                        <div><span>www.awebsite.com</span></div>
                                                        <hr class="d-sm-none d-md-block d-lg-none">
                                                    </div>
                                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                                        <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                                        <div><span><strong>Office Name</strong></span></div>
                                                        <div><span>55 Icannot Dr</span></div>
                                                        <div><span>Daytone Beach, FL 85150</span></div>
                                                        <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                                        <hr class="d-sm-none">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <footer id="footerpad">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-8 mx-auto">
                                <ul class="list-inline text-center">
                                    <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span></a></li>
                                </ul>
                                <p class="copyright text-muted text-center">Copyright © Your Company 2020 | Web Design by Designer</p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="{{ URL::to('assets/js/script.min.js?h=bb27b0e523278e2bedffacc4d1ec4ccf') }}"></script>
    <script>
        

    var childWindow = "";
    var register="register";
        

    function refreshExistingTab(){
        console.log(location);
        // location.reload();
        // location.document = register;
        window.location.href=register;
    }
        // $("#hargalite"). 
        //  click(function(){ 
        //     location.document.href=register;
        //  });
    </script> 
@endsection
