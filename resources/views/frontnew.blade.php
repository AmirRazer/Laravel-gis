@extends('frontendnew.app')
@section('content')


<body class="index-page">

  
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1 class="">Aplikasi Pemetaan Umkm</h1>
            <p class="">Kabupaten Kudus</p>
            <div class="d-flex">
              <a href="{{route('index')}}" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('Arsha/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="zoom-in">

        <div class="swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
    
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="">About Us</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="content" data-aos="fade-up" data-aos-delay="100">
            <p>
             Aplikasi Pemetaan UMKM Kabupaten Kudus adalah sebuah platform digital yang dirancang untuk 
             memetakan dan memvisualisasikan sebaran Usaha Mikro, Kecil, dan Menengah (UMKM) di Kabupaten Kudus.
              Dengan aplikasi ini, pengguna dapat dengan mudah melihat lokasi, jenis usaha, dan informasi terkait
               lainnya dari UMKM yang ada di wilayah tersebut.Aplikasi Pemetaan UMKM Kabupaten Kudus diharapkan dapat 
               menjadi alat yang bermanfaat bagi semua pihak dalam mendukung perkembangan UMKM di wilayah tersebut, 
               serta meningkatkan kesejahteraan ekonomi masyarakat.
            </p>
           
          </div>

         
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class=""><span class="">Manfaat </span><strong>Aplikasi ini</strong></h3>
              <p class="">
               Bebrapa manfaat yang bisa kamu dapatkan apabila menggunakan aplikasi ini 
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">

                <h3><span>01</span> Mempermudah Akses Informasi</h3>
                <div class="faq-content">
                  <p>Memberikan akses informasi yang mudah dan cepat mengenai lokasi dan sebaran UMKM di Kabupaten Kudus.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>02</span> Fasilitasi Kolaborasi</h3>
                <div class="faq-content">
                  <p>Mendorong kolaborasi antara pelaku usaha, pemerintah, dan masyarakat dalam pengembangan UMKM.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>03</span> Mendukung Pengembangan UMKM</h3>
                <div class="faq-content">
                  <p>Membantu pemerintah dan pelaku usaha dalam merencanakan dan mengembangkan UMKM secara lebih efisien serta 
                    Memudahkan pencarian dan akses ke berbagai UMKM di Kabupaten Kudus.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="{{asset('Arsha/assets/img/why-us.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Skills Section -->
    <!-- /Skills Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Fitur</h2>
        <p>Beberapa fitur yang ada seperti</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Pemetaan UMKM</a></h4>
              <p>memungkinkan pengguna untuk melihat semua UMKM yang telah terdaftar di aplikasi pada peta interaktif.
                 Pengguna dapat dengan mudah mengidentifikasi lokasi setiap UMKM di Kabupaten Kudus.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Lihat Sebaran UMKM</a></h4>
              <p>memberikan tampilan statistik dan analitik tentang sebaran UMKM di Kabupaten Kudus. Pengguna dapat melihat jumlah UMKM per kategori, daerah dengan konsentrasi UMKM tertinggi
                    
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="service-details.html" class="stretched-link">Detail Usaha</a></h4>
              <p>memungkinkan pengguna untuk melihat informasi detail tentang setiap UMKM yang terdaftar.
                 Informasi ini mencakup nama usaha, alamat, kontak, deskripsi usaha, foto usaha, dan ulasan dari pelanggan.</p>
            </div>
          </div><!-- End Service Item -->

          <!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

      <img src="{{asset('Arsha/assets/img/cta-bg.jpg')}}" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Call To Action</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <!-- /Portfolio Section -->

    <!-- Team Section -->
   <!-- /Team Section -->

    <!-- Pricing Section -->
  <!-- /Pricing Section -->

    <!-- Testimonials Section -->
  <!-- /Testimonials Section -->

    <!-- Faq 2 Section -->
    <section id="faq-2" class="faq-2 section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pertanyaan yang sering muncul</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apa itu Aplikasi Pemetaan UMKM Kabupaten Kudus</h3>
                <div class="faq-content">
                  <p>Aplikasi Pemetaan UMKM Kabupaten Kudus adalah platform digital yang digunakan untuk memetakan dan 
                    memvisualisasikan sebaran Usaha Mikro, Kecil, dan Menengah (UMKM) di Kabupaten Kudus. Aplikasi ini 
                    membantu pengguna melihat lokasi, jenis usaha, dan informasi terkait lainnya dari UMKM di wilayah tersebut.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3> Bagaimana cara mendaftar di aplikasi ini?</h3>
                <div class="faq-content">
                  <p>Untuk mendaftar, buka aplikasi dan pilih opsi "Daftar". Isi formulir pendaftaran dengan informasi yang 
                    diperlukan seperti nama, alamat email, dan nomor telepon. Setelah itu, buat kata sandi yang aman dan klik
                     "Daftar". Anda akan menerima email konfirmasi untuk mengaktifkan akun Anda.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Bisakah saya mendaftarkan UMKM saya sendiri di aplikasi ini?</h3>
                <div class="faq-content">
                  <p>Ya, Anda bisa. Masuk ke aplikasi dan pilih opsi "Daftarkan UMKM". Isi formulir dengan informasi lengkap tentang usaha Anda, 
                    seperti nama usaha, kategori, alamat, kontak, dan deskripsi usaha. Unggah foto usaha dan klik "Kirim". Tim kami akan 
                    meninjau dan memverifikasi informasi sebelum UMKM Anda ditampilkan di peta.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah aplikasi ini gratis digunakan?</h3>
                <div class="faq-content">
                  <p>Ya, aplikasi ini gratis untuk digunakan oleh semua pengguna. Namun, kami juga menyediakan beberapa fitur premium yang dapat diakses dengan berlangganan untuk layanan tambahan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah informasi UMKM saya aman di aplikasi ini?</h3>
                <div class="faq-content">
                  <p>Kami sangat menjaga keamanan dan privasi informasi UMKM Anda. Semua data yang Anda berikan dienkripsi dan disimpan dengan aman di server kami. Kami tidak akan membagikan informasi pribadi Anda tanpa izin Anda. Untuk informasi lebih lanjut, silakan baca kebijakan privasi kami.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Faq 2 Section -->

    <!-- Contact Section -->
 <!-- /Contact Section -->

  </main>
@endsection

 