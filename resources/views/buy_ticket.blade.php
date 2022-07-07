<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Festive Walk Karawang</title>
  <meta content="beli tiket rumah hantu" name="description">
  <meta content="beli tiket" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">  
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">  
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">  
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">  
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">  
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">  
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">    

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/ticket.css') }}" rel="stylesheet">
  <link href="{{ asset('css/button_add_minus.css') }}" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: Bootslander - v4.7.2
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<div id="app">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>Festive Walk Karawang</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#features">Beli Tiket</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>          
          
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Mall Karawang Pertama Dengan Tema <span>Festival</span></h1>
            <h2>Di Mall Kami sedang diadakan wahana rumah hantu jakarta</h2>
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Ayo Lihat</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{asset('img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Rumah Hantu Alas Roban</h3>
            <p>Wahana Rumah Hantu DRIVE THRU!
               Segera di Mal Galuh Mas 😯😱.</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-car"></i></div>
              <h4 class="title"><a href="">Drive Thru</a></h4>
              <p class="description">Tantang nyalimu dengan masuk ke rumah hantu, dengan memakai mobil atau di pakai mobil yang disediakan tim rumah hantu</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-camera-off"></i></div>
              <h4 class="title"><a href="">Merekam</a></h4>
              <p class="description">Di larang merekam tanpa izin dari pihak rumah hantu ketika di dalam wahana rumah hantu</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-ghost"></i></div>
              <h4 class="title"><a href="">Siap Nyali</a></h4>
              <p class="description">Masuk ke wahana kamu harus siap nyali yaa hihii </p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
        <div class="row content">

        <div class="section-title" data-aos="fade-up">
          <h2>Beli Tiketnya</h2>
          <p>Beli tiket rumah hantu</p>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="d-flex justify-content-center">
            <div class="card" style="width: auto;">   
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <div class="row"><p>Rumah Hantu Drive Thru</p>
                  <small>Rumah hantu festive walk karawang</small></div>
                  <img class="rounded" src="{{ asset('img/rumahhantujkt.jpg') }}" alt="" style="width: 50px;height: 50px;" >
                </div>
                
              </div>
              <div class="card-body d-flex align-items-center flex-column mb-3 panel_ticket" id="panel_ticket">
                <div style="
    font-weight: bold;     
    color: rgb(51, 51, 51);">Pilih tanggal kedatanganmu</div> <br>
                <v-date-picker @dayclick="onDayClick" :locale="{ id: 'id',  masks: { weekdays: 'WWW' } }" :model-config="modelConfig" mode="date" title-position="left" color="blue" :min-date='new Date(2022,7,17)' :max-date='new Date(2022, 8, 30),' v-model='selectedDate' >
                   
                </v-date-picker>        
                <div class="col-md-3">
                  <input type="text" placeholder="select date" class="form-control mt-2" id="dateSelected" v-model='selectedDate' :value='selectedDate' readonly>
                </div>        
                

                <div class="card mt-2" style="width: 100%; margin: 20px;">
             
                  <div class="card-body ticketitem" id="ticket_box">
                    <div class="notif_ticket" ></div>
                    <div class="ticket" v-for="ticket in tickets" :key="ticket.id">
                      <div class="items">
                      <p class="ticket-title">@{{ ticket.ticket_name  }}</p>  <br>
                    
                      <!-- <input type="hidden" class="price" name="ticket_price[1]" value="30000"> -->
                                       
                    
                    <p class="ticket-description"> <i class="bi bi-clock"></i> @{{ ticket.ticket_date }} , 16.00 - 22.00 WIB  </p>
                    <div class="readmore">
                      <p class="ticket-description">Syarat dan ketentuan</p>
                      <ol>
                        <li class="ticket-description"><p >Tiket hanya berlaku sesuai kebijakan</p></li>
                        <li class="ticket-description"><p>Tiket masuk belum termasuk tiket konser</p></li>
                        <li class="ticket-description"><p>Tiket berlaku 1 kali kunjungan</p></li>
                        <li class="ticket-description"><p>Tiket tidak dapat dikembalikan (non refundable)</p></li>
                      </ol>
                    </div>
                    

                    <br>
                    <div class="d-flex flex-row-reverse bd-highlight">
                      <div class="p-2 bd-highlight qtyControl" style="width: 115px !important;">
                        <div class="input-group input-group-sm">
                        <button class="btn btn-outline-primary btn-number" type="button" disabled="disabled"
                          data-type="minus" :data-field="'quant['+ticket.id+']'">
                          <i class="bx bx-minus"></i>
                        </button>
                        <input type="text" :name="'quant['+ticket.id+']'" class="form-control input-sm input-number qt" value="0" min="0"
                          max="10">
                        <input type="hidden" :name="'id_ticket['+ticket.id+']'" :value="ticket.id">
                        <input type="hidden" :name="'price['+ticket.id+']'" class="input-number price" :value="ticket.ticket_price">
                        <input type="hidden" :name="'fullprice['+ticket.id+']'" class="input-number full-price" value="0">
                        <button class="btn btn-outline-primary btn-number" data-type="plus" :data-field="'quant['+ticket.id+']'">
                          <i class="bx bx-plus"></i>
                        </button>
                      </div>
                      </div>
                      
                       <div class="p-2 bd-highlight"><p class="mr-2">Rp. @{{ ticket.ticket_price }} </p> </div>                      
                    </div>
                    <hr>
 
                    </div>
                  </div>

                              

                  </div>
                  

                  <div class="card-footer">
                    <div class="d-flex bd-highlight">    
                      <input type="hidden" name="total_price" id="total_price" value=""> 
                      <div class="p-2 flex-grow-1 bd-highlight all_qty">Subtotal (<span style="font-style: italic;"></span> Tiket)</div>
                      <div class="p-2 bd-highlight total"> <span> Rp. </span></div>
                      <div class="p2 bd-highlight"><button class="btn btn-primary" id="btn_payment" disabled="disabled">Beli Tiket</button></div>
                    </div>                                            
                  </div>

                  </div>
                </div>   
                
                <!-- payment chanel view -->
                <div class="card-body" id="payment_panel" class="payment_panel" style="display: none">
                  <h3>Ringkasan Pembelian</h3>

                  <div class="description">Informasi Pembeli</div>
                  
                  <hr>

                  <form class="row g-3">
                    <div class="col-md-12">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" name="cust_email" class="form-control" id="inputEmail4">
                    </div>                    
                    <div class="col-12">
                      <label for="phoneNumber" class="form-label">Nomor Handphone</label>
                      <input type="number" name="cust_phone" class="form-control" id="phoneNumber" placeholder="08129323121">
                    </div>
                    <div class="col-6">
                      <label for="namaDepan" class="form-label">Nama Depan</label>
                      <input type="text" name="cust_firstname" class="form-control" id="namaDepan"
                        placeholder="Nama Depan">
                    </div>
                    <div class="col-6">
                      <label for="namaBelakang" class="form-label">Nama Belakang</label>
                      <input type="text" name="cust_lastname" class="form-control" id="namaBelakang"
                        placeholder="Nama Belakang">
                    </div>
                   <div class="col-md-12">
                     <label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
                     <div class="form-check">
                       <input class="form-check-input" name="cust_gender" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="lakilaki">
                       <label class="form-check-label" for="flexRadioDefault1">
                        Laki laki
                       </label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" name="cust_gender" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="perempuan"
                         >
                       <label class="form-check-label" for="flexRadioDefault2">
                         Perempuan
                       </label>
                     </div>
                   </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="cust_agree" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Saya setuju terhadap <a href="#">Syarat dan Ketentuan</a>  tiketing dan <a href="#">Kebijakan Privasi</a> tiketing
                        </label>
                      </div>
                    </div>                   
                  </form>

                  <div class="card-footer">
                    <div class="d-flex flex-row bd-highlight">     
                      <div class="p-2 flex-grow-1 bd-highlight"><a href="#featured" class="scrollTok"> <i class='bx bx-arrow-back'></i> Kembali</a></div>                      
                      <div class="p2 bd-highlight"><button class="btn btn-primary" id="btn_lanjutkan">Lanjutkan</button></div>
                    </div>                                            
                  </div>
                </div>

                <!-- end payment chanel  -->

                <div class="card-body" id="panel_payment2" style="display: none;">
                  <div class="row">
                    <div class="col-md-4">
                      Nomor Pesanan
                    </div>
                    <div class="col-md-6">
                    : V30226-2BBF3FC-943
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      Email Pembeli
                    </div>
                    <div class="col-md-6">
                     : galangpr@gmail.com
                    </div>
                  </div>
                  <small class="text-primary">*Informasi dikirimkan ke email</small>
                

                <hr>

                <div class="card-body">
                  Pilih Metode pembayaran

                    <div class="row">
                     <div class='col col-md-3 text-center'>
                       <input type="radio" name="payment_method" id="bank_transfer" class="d-none imgbgchk" value="5000">
                       <label for="bank_transfer"><small>bank transfer</small>
                         <img src="{{ asset('icon/banktficon.png') }}" alt="Image 1">
                         <div class="tick_container">
                           <div class="tick"><i class="bi bi-check"></i></div>
                         </div>
                       </label>
                     </div>
                     <div class='col col-md-3 text-center'>
                       <input type="radio" name="payment_method" id="credit_card" class="d-none imgbgchk" value="">
                       <label for="credit_card"><small>kartu kredit</small>
                         <img src="{{ asset('icon/creditcard.png') }}" alt="Image 2">
                         <div class="tick_container">
                           <div class="tick"><i class="bi bi-check"></i></div>
                         </div>
                       </label>
                     </div>
                 
                   </div>

                </div>

                <div class="card-footer">
                   <div class="d-flex justify-content-between bd-highlight">     
                      <div class="p-2 flex-grow-1 bd-highlight all_qty">Subtotal (<span style="font-style: italic;"></span> Tiket)</div>
                      <div class="p-2 bd-highlight total"> <span style="font-style: bold;">Total tiket Rp.</span></div>
                      
                    </div>
                    <div class="d-flex justify-content-end bd-highlight">
                      <input type="hidden" name="admin_fee" id="biaya_admin">
                      <div class="p-2 bd-highlight admin_fee"> <span style="font-style: bold;">Biaya Admin Rp. </span></div>                      
                    </div>
                     <div class="d-flex justify-content-end bd-highlight">                      
                      <div class="p-2 bd-highlight grand"> <span style="font-style: bold;"> Grand total Rp. </span></div>
                    </div>
                    
                    <div class="d-flex justify-content-end bd-highlight">                     
                      <div class="p2 bd-highlight"><button class="ticket_btn" id="btn_checkout">Beli Tiket</button></div>
                    </div>
                </div>

                </div>

                
                
              </div>
          
           </div>
          </div>          
          
        </div>
      </div>
      
      </div>
    </section>
    <!-- End Features Section -->
   
    <!-- ======= Details Section ======= -->
    <section class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{ asset('/img/details-2.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Beli Tiket Online Tidak Usah Antri.</h3>
            <p class="fst-italic">
             Kamu dapat dengan mudah membeli tiket secara online,
             Berikut keuntungan membeli tiket online :
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Tanpa harus mengantri.</li>
              <li><i class="bi bi-check"></i> Bisa bayar pakai bermacam bank.</li>
              <li><i class="bi bi-check"></i> Bisa Bayar Pakai kartu kredit.</li>
              <li><i class="bi bi-check"></i> Dapat Jalur khusus tiket online ketika masuk.</li>
            </ul>
            <p>
              Gimana? enak bukan? yuk beli tiket onlinenya sekarang!
            </p>
          </div>
        </div>

         

      </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Check our Gallery</p>
        </div>

        <div class="row g-0" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="{{ asset('img/gallery/gallery-1.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-1.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="{{ asset('img/gallery/gallery-2.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-2.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="{{ asset('img/gallery/gallery-3.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="{{ asset('img/gallery/gallery-4.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="{{ asset('img/gallery/gallery-5.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="{{ asset('img/gallery/gallery-6.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-6.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="{{ asset('img/gallery/gallery-7.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-7.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{ asset('img/gallery/gallery-8.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-8.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Hubungi</h2>
          <p>Hubungi Kami</p>
        </div>        

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Festive Walk, Jl. Arteri Galuh Mas, Sukaharja, Telukjambe Timur, Karawang, Jawa Barat 41361</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@festivewalk.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 267 643 388</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

        <div class="row mt-4">
          <div class="col-lg-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5168041681313!2d107.28944386476974!3d-6.327008795421184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977a691eabf5f%3A0x7287cd4d3bc5cb23!2sFestive%20Walk%20Karawang!5e0!3m2!1sid!2sid!4v1655863509851!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>            
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Festive Walk Karawang</h3>
              <p class="pb-3"><em>Festive Walk memadukan pusat perbelanjaan dengan condotel setinggi 12 lantai. Mal ini dibangun di atas lahan seluas 3 hektar di area Central Business Park (CBP), kawasan emas Galuh Mas Karawang.</em></p>
              <p>
                Festive Walk,  <br>
                Jl. Arteri Galuh Mas, Sukaharja, Karawang<br><br>
                <strong>Phone:</strong> +62 267 643 388<br>
                <strong>Email:</strong> info@festivewalk.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tenancy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Entertainment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Goods</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>IT</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="{{ asset('js/jquery.expander.js') }}"></script>

  <!-- REQUIREMENT KALENDER AND TIKETING -->

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/vue@3.2.37/dist/vue.global.min.js"></script> -->
  <script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/axios@0.27.2/dist/axios.min.js'></script>


    <!-- 2. Link VCalendar Javascript (Plugin automatically installed) -->
    <script src='https://unpkg.com/v-calendar'></script>

    <!--3. Create the Vue instance-->

    <script type="application/javascript">   

       $(document).ready(function () {
           $('.readmore').expander({
               slicePoint: 50
           });
         
       }); 
       </script> 
     
       <script>
        // axios vue
           new Vue({
           
               el: '#app',
               data() {
                   const now = new Date(2022, 7, 17)
                   const later = new Date(2022, 8, 30)
                   return {
                       tickets : {},
                       days: [],
                       selectedDate: null,
                       availableDates: [{
                           start: now,
                           end: later
                       }],
                       modelConfig: {
                           type: 'string',
                           mask: 'DD-MM-YYYY', // Uses 'iso' if missing
                       },
                   }
               }, 
               //test script on select date!
              methods: {
               
                onDayClick(day) {
                const idx = this.days.findIndex(d => d.id === day.id); 
                 $('.notif_ticket').empty();
                 $(".all_qty span").html("0");
                 $(".total span").html("Total tiket Rp.0");
                 $("#btn_payment").prop('disabled', true);
                // const element = document.getElementById('#item_tiket');
                const tanggal = { tanggal: day.id };
                          axios.post('{{ route('ticket') }}',tanggal)
                              .then((response)=>{
                                $('.ticket').show(); 
                                 
                                this.tickets = response.data.data;
                                console.log(response.data.data);

                              //  $('.ticketitem').html('<div class="items"> <p class="ticket-title">Tiket Wahana Rumah Hantu Weekday</p> <br> <!-- <input type="hidden" class="price" name="ticket_price[1]" value="30000"> --> <p class="ticket-description"> <i class="bi bi-clock"></i> 17 Agustus 2022 , 16.00 - 22.00 WIB </p> <div class="readmore"> <p class="ticket-description">Syarat dan ketentuan</p> <ol> <li class="ticket-description"><p >Tiket hanya berlaku sesuai kebijakan</p></li> <li class="ticket-description"><p>Tiket masuk belum termasuk tiket konser</p></li> <li class="ticket-description"><p>Tiket berlaku 1 kali kunjungan</p></li> <li class="ticket-description"><p>Tiket tidak dapat dikembalikan (non refundable)</p></li> </ol> </div> <br> <div class="d-flex flex-row-reverse bd-highlight"> <div class="p-2 bd-highlight qtyControl" style="width: 115px !important;"> <div class="input-group input-group-sm"> <button class="btn btn-outline-primary btn-number" type="button" disabled="disabled" data-type="minus" data-field="quant[1]"> <i class="bx bx-minus"></i> </button> <input type="text" name="quant[1]" class="form-control input-sm input-number qt" value="0" min="0" max="10"> <input type="hidden" name="id_ticket[1]" value="tkt1"> <input type="hidden" name="price[1]" class="input-number price" value="300000"> <input type="hidden" name="fullprice[1]" class="input-number full-price" value="0"> <button class="btn btn-outline-primary btn-number" data-type="plus" data-field="quant[1]"> <i class="bx bx-plus"></i> </button> </div> </div> <div class="p-2 bd-highlight showButton" id="show_button" style="display:none;"><button id="btn_add" class="btn btn-primary ml-2">Tambah</button></div> <div class="p-2 bd-highlight"><p class="mr-2">Rp.30.000 </p> </div> </div> </div> <hr> <div class="items"> <p class="ticket-title">Tiket Wahana Rumah Hantu Weekday</p> <br> <!-- <input type="hidden" class="price" name="ticket_price[2]" value="25000"> --> <p class="ticket-description"> <i class="bi bi-clock"></i> 17 Agustus 2022 , 16.00 - 22.00 WIB </p> <div class="readmore"> <p class="ticket-description">Syarat dan ketentuan</p> <ol> <li class="ticket-description"><p >Tiket hanya berlaku sesuai kebijakan</p></li> <li class="ticket-description"><p>Tiket masuk belum termasuk tiket konser</p></li> <li class="ticket-description"><p>Tiket berlaku 1 kali kunjungan</p></li> <li class="ticket-description"><p>Tiket tidak dapat dikembalikan (non refundable)</p></li> </ol> </div> <br> <div class="d-flex flex-row-reverse bd-highlight"> <div class="p-2 bd-highlight qtyControl" style="width: 115px !important;"> <div class="input-group input-group-sm"> <button class="btn btn-outline-primary btn-number" type="button" disabled="disabled" data-type="minus" data-field="quant[2]"> <i class="bx bx-minus"></i> </button> <input type="text" name="quant[2]" class="form-control input-sm input-number qt" value="0" min="0" max="10"> <input type="hidden" name="id_ticket[2]" value="tkt2"> <input type="hidden" name="price[2]" class="input-number price" value="250000"> <input type="hidden" name="fullprice[2]" class="input-number full-price" value="0"> <button class="btn btn-outline-primary btn-number" data-type="plus" data-field="quant[2]"> <i class="bx bx-plus"></i> </button> </div> </div> <div class="p-2 bd-highlight showButton" id="show_button" style="display:none;"><button id="btn_add" class="btn btn-primary ml-2">Tambah</button></div> <div class="p-2 bd-highlight"><p class="mr-2">Rp.30.000 </p> </div> </div> </div> <hr>');
                              //   // element.innerHTML = response.data.data;
                                
                              //  console.log(response.data.data);
                              //  $('.readmore').expander({
                              //       slicePoint: 50
                              //   });
                              })
                              .catch((error) => {
                                // $('.ticket').remove(); 
                                // $('.ticketitem').remove(); 
                                $('.ticket').hide(); 

                                $('.notif_ticket').append('<h3 class="text-muted">Ticket tidak tersedia</h3>');
                                $(".all_qty span").html("0");
                                  $(".total span").html("Total tiket Rp.0");
                                  $("#btn_payment").prop('disabled', true);
                                  // console.log(error); //Logs a string: Error: Request failed with status code 400/401/404
                                });
                                      
                // alert(day.id);
              },
            }
           })
    </script>

    <script type="application/javascript">
      $('#btn_payment').click(function(e){
        $('.panel_ticket').attr("style", "display: none !important");        
        $('#payment_panel').show(); 
        
          $('html, body').animate({
              scrollTop: $("#features").offset().top
          }, );
      });

      $('#btn_lanjutkan').click(function(e){
        $('#payment_panel').attr("style", "display: none !important");        
        $('#panel_payment2').show(); 
        
          $('html, body').animate({
              scrollTop: $("#features").offset().top
          }, );
      });
      

      $(".scrollTok").on('click', function(e) {
          e.preventDefault();
          var target = $(this).attr('href');
            $('.panel_ticket').attr("style", "display: ");
            $('#payment_panel').hide();         
        });
    </script>

    
    <script src="{{ asset('js/btnEvent.js') }}"></script> 

    <!-- END REQUIREMENT KALENDER AND TIKETING -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script>
        const payButton = document.querySelector('#btn_checkout');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();
 
            snap.pay('{{ $snapToken }}', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                }
            });
        });
    </script>
  </div>
</body>

</html>