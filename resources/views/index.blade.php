<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <link rel="icon" href="{{asset('images/logo.png')}}" />
    <title>PT Unipure Indonesia</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="unipure_indonesia" content="PT Unipure Indonesia" />
    <meta name="keywords" content="PT Unipure Indonesia" />
    <meta name="description" content="Company Profile" />

    <link rel="stylesheet" type="text/css" href="{{asset('icomoon/icomoon.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="preloader"></div>

    <div class="nav nav-overlay">
      <div class="nav__content">
        <div class="container">
          <div
            class="row p-4 p-md-0 flex-column-reverse flex-md-row g-md-5 nav__block"
          >
            <div class="col-md-6">
              <ul class="nav-link nav__list d-md-block">
                <li class="nav-link nav__list-item">
                  <a href="index.html" class="hover-target">Home</a>
                </li>
                <li class="nav-link nav__list-item">
                  <a href="#about" class="hover-target">About Us</a>
                </li>
                <li class="nav-link nav__list-item">
                  <a href="#services" class="hover-target">Services</a>
                </li>
                <li class="nav-link nav__list-item">
                  <a href="#portfolio" class="hover-target">Portfolio</a>
                </li>
                {{-- <li class="nav-link nav__list-item">
                  <a href="{{route('dashboard')}}" class="hover-target">Admin Panel</a>
                </li> --}}
              </ul>
            </div>
            <div class="col-md-6 text-white">
              <h3 class="text-white fw-bold nav__block-item">Contact info</h3>
              <ul class="list-unstyled text-light nav__block-item">
                <li class="menu-item">
                  <i class="icon icon-location me-2"></i>Jl. Raya Kapuk Muara
                  No. 28 Penjaringan Jakarta Utara
                </li>
                <li class="menu-item">
                  <i class="icon icon-phone me-2"></i>021 5694 4498
                </li>
                <li class="menu-item">
                  <i class="icon icon-envelope-o me-2"></i
                  ><a href="#" class="text-white">unipure@hotmail.com</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="main-logo">
      <a href="index.html">
        <img src="{{asset('images/logo-1.png')}}" alt="Unipure logo" />
      </a>
    </div>

    <div class="side-nav-bar">
      <input id="menu-toggle" type="checkbox" />
      <label class="menu-btn" for="menu-toggle">
        <span></span>
      </label>
    </div>

    <section id="intro" class="scrollspy-section">
      <div class="main-slider">
        <div class="slider-item jarallax" data-speed="0.2">
          <img
            src="{{asset('images/SERPONG JAYA.png')}}"
            alt="banner"
            class="jarallax-img"
          />
          <div class="banner-content">
            <h2 class="banner-title txt-fx">future living space</h2>
            <!-- <div class="btn-wrap">
						<a href="#" class="btn-with-line">View Project</a>
					</div> -->
          </div>
          <!--banner-content-->
        </div>
        <!--slider-item-->

        <div class="slider-item jarallax" data-speed="0.2">
          <img
            src="{{asset('images/SPRING HILL.jpg')}}"
            alt="banner"
            class="jarallax-img"
          />
          <div class="banner-content">
            <h2 class="banner-title txt-fx">a choice for quality</h2>
            <!-- <div class="btn-wrap">
						<a href="#" class="btn-with-line">View Project</a>
					</div> -->
          </div>
          <!--banner-content-->
        </div>
        <!--slider-item-->

        <div class="slider-item jarallax" data-speed="0.2">
          <img
            src="{{asset('images/THE GREEN COURT CENGKARENG.jpg')}}"
            alt="banner"
            class="jarallax-img"
          />
          <div class="banner-content">
            <h2 class="banner-title txt-fx">harmony and living modern</h2>
            <!-- <div class="btn-wrap">
						<a href="#" class="btn-with-line">View Project</a>
					</div> -->
          </div>
          <!--banner-content-->
        </div>
        <!--slider-item-->
      </div>
      <!--slider-->

      <div class="button-container">
        <button class="prev slick-arrow">
          <i class="icon icon-chevron-thin-left"></i>
        </button>
        <button class="next slick-arrow">
          <i class="icon icon-chevron-thin-right"></i>
        </button>
      </div>
    </section>

    <!-- About US -->
    <section id="about" class="scrollspy-section padding-xlarge">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header">
              <div class="title">
                <span>who are we</span>
              </div>
              <h2 class="section-title">About Us</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <figure class="jarallax-keep-img">
              <img
                src="{{asset('images/SERPONG JAYA.png')}}"
                alt="about us"
                class="jarallax-img single-image"
              />
            </figure>
          </div>
          <div class="col-md-6 description text-lead">
            <!-- <p><strong>PT. UNIPURE INDONESIA adalah suatu bentuk perusahaan perdagangan umum dan jasa dibidang
						manufaktur untuk memproduksi jendela dan pintu berbahan upvc serta daun pintu plywood. Selain
						memproduksi PT. UNIPURE INDONESIA juga sebagai aplikator baik interior maupun eksterior.</strong></p> -->
            <p>
              PT. UNIPURE INDONESIA adalah suatu bentuk perusahaan perdagangan
              umum dan jasa dibidang manufaktur untuk memproduksi jendela dan
              pintu berbahan upvc serta daun pintu plywood.
            </p>
            <p>
              Selain memproduksi PT. UNIPURE INDONESIA juga sebagai aplikator
              baik interior maupun eksterior.
            </p>

            <div class="btn-wrap">
              <a
                href="#produk"
                class="btn btn-accent btn-xlarge btn-rounded mb-5"
                >Produk kami</a
              >
            </div>
          </div>
        </div>

        <div class="row">
          <h1>Visi</h1>
          <h2>“CREATING A FUTURE LIVING SPACE FOR MANKIND”</h2>

          <h1>Misi</h1>
          <div class="col-md-6 description text-lead">
            <ol>
              <li>
                Menghasilkan dan memberikan produk yang berkualitas, modern dan
                dinamis
              </li>
              <li>
                Berperan serta dalam menciptakan lapangan pekerjaan dan
                menciptakan kesejahteraan bersama bagi perusahaan, karyawan dan
                mitra kerja.
              </li>
              <li>
                Memberikan hasil kerja dan produk yang optimal serta menjalin
                hubungan yang baik dengan selalu ramah, tepat waktu, komitmen
                dan konsistensi demi memberikan kepuasan lebih kepada seluruh
                pelanggan PT. Unipure Indonesia.
              </li>
            </ol>
          </div>
          <div class="col-md-6 description text-lead">
            <ol start="4">
              <li>
                Membangun budaya dan tenaga kerja yang berkualitas dan
                professional.
              </li>
              <li>
                Membangun kerja sama / Kemitraan usaha secara professional dan
                proporsional dengan institusi / Instansi yang terkait, guna
                berperan serta pada perkembangan pembangunan di Indonesia.
              </li>
              <li>
                Menjadikan PT. Unipure Indonesia sebagai perusahaan yang
                berstandar nasional yang ikut berperan dalam pesatnya
                perkembangan pembangunan di Indonesia.
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="scrollspy-section padding-large">
      <div class="container">
        <div class="row">
          <div class="section-header col-12">
            <div class="title">
              <span>what we do</span>
            </div>
            <h2 class="section-title">Products and Services</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="services-item">
              <span class="number">01</span>
              <h3>Kusen UPVC</h3>
              <p>
                Membuat berbagai jenis kusen pintu dan jendela yang terbuat dari
                bahan Profil UPVC (Unplasticise Poly Vinyl Chloride) Merk Conch.
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="services-item">
              <span class="number">02</span>
              <h3>Kusen Alumunium Conch</h3>
              <p>CONCH 70 SERIES FINISH GOOD ALUMINIUM WINDOWS SYSTEM.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="services-item">
              <span class="number">03</span>
              <h3>Green Door</h3>
              <p>
                HOLLOW CORE, HOLLOW CORE WITH HONEYCOMB CORE, SOLID ENGINEERING
                CORE
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="services-item">
              <span class="number">04</span>
              <h3>Kinlong</h3>
              <p>HARDWARE SUPPORT BY KINLONG</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="portfolio" class="scrollspy-section bg-dark padding-large">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header">
              <div class="title">
                <span>Some of Our Works</span>
              </div>
              <h2 id="produk" class="section-title light">Produk kami</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div
          id="filters"
          class="button-group d-flex flex-wrap gap-4 py-5"
          data-aos="fade-up"
          >
          
          @forelse($products as $product)
          <a
            href="#"
            class="btn btn-outline-light rounded-pill text-uppercase is-checked"
            data-filter=".{{$product->id}}"
            >{{$product->name}}</a
          >
          @empty 
          @endforelse
          </div>
        </div>

     
        <div
          class="grid p-0 clearfix row row-cols-2 row-cols-lg-3 row-cols-xl-3"
          data-aos="fade-up"
        >
         @forelse($pictures as $picture)
          <div class="col mb-4 portfolio-item {{$picture->product_id}}">
            <a
              href="{{Storage::url($picture->url)}}"
              class="image-link"
              title="{{$picture->name}}"
              ><img
                src="{{Storage::url($picture->url)}}"
                class="img-fluid"
                alt="portfolio"
                /></a>
            </div>
          @empty 
          @endforelse
        </div>
      </div>
    </section>

    <section class="project-and-clients">
      <div class="container my-5">
        <h1 class="text-center mb-4">Our Projects</h1>
        <div class="row justify-content-center">
          @forelse($projects as $project)
          <!-- Portfolio Item -->
          <div class="col-md-4 mb-4 portfolio-item">
            <div class="d-flex flex-column align-items-center text-center">
              <a
                href="{{Storage::url($project->url)}}"
                class="image-link"
                title="{{$project->name}}"
              >
                <img
                  src="{{Storage::url($project->url)}}"
                  class="img-fluid mb-2"
                  alt="portfolio"
                  style="width: 250px; height: 250px"
                />
              </a>
              <p class="mt-2">{{$project->name}}</p>
            </div>
          </div>
          @empty 
          @endforelse
        </div>

        <h1 class="text-center mb-4 mt-5">Our Clients</h1>
        <div class="row justify-content-center align-items-center">
          <!-- Tambahkan logo client di sini -->
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/hkinovasisolusi.png')}}"
              alt="Client 1"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/abipraya.png')}}"
              alt="Client 2"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img src="{{asset('images/client/perumnas.jpg')}}" class="client-logo img-fluid" />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/ppconstruction.png')}}"
              alt="Client 4"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/hocky.png')}}"
              alt="Client 5"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/jayaproperty.png')}}"
              alt="Client 6"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/kmy.jpg')}}"
              alt="Client 6"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/ateraland.png')}}"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/intiland.png')}}"
              alt="Client 6"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/recta.png')}}"
              alt="Client 6"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/binakarya.png')}}"
              alt="Client 6"
              class="client-logo img-fluid"
            />
          </div>
          <!-- Tambahkan logo client di sini -->
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/pramuka-city.png')}}"
              alt="Client 1"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/mahata-tb.jpg')}}"
              alt="Client 2"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/mahata gonda.jpg')}}"
              alt="Client 3"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/sentra-timur.jpg')}}"
              alt="Client 4"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/paragon.png')}}"
              alt="Client 5"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/rsbakti-timah.png')}}"
              alt="Client 6"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/anwa residence.png')}}"
              alt="Client 6"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/springhill golf residence.png')}}"
              alt="Client 7"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/royale springhill residence.jpg')}}"
              alt="Client 8"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/swiss belhotel arjuna.png')}}"
              alt="Client 9"
              class="client-logo img-fluid"
            />
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 text-center">
            <img
              src="{{asset('images/client/cibubur residence (1).png')}}"
              alt="Client 10"
              class="client-logo img-fluid"
            />
          </div>
        </div>
      </div>
    </section>

    <footer id="footer" class="bg-dark text-white padding-large">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <!-- <div class="about"> -->
            <img
              src="{{asset('images/logo.png')}}"
              alt="logo"
              class="footer-logo"
              style="width: 100px"
            />
            <p class="mt-2">PT. Unipure Indonesia</p>
            <p>A choice for quality, Harmony and living modern</p>
            <!-- </div> -->
          </div>

          <div class="col-md-4">
            <div class="footer-menu menu-item-02">
              <h5 class="text-white">quick links</h5>
              <ul class="menu-list">
                <li class="menu-item">
                  <a href="index.html">home</a>
                </li>
                <li class="menu-item">
                  <a href="#about">about us </a>
                </li>
                <li class="menu-item">
                  <a href="#services">services</a>
                </li>
                <li class="menu-item">
                  <a href="#portfolio">portfolios</a>
                </li>
                <li class="menu-item">
                  <a target="_blank" href="{{route('dashboard')}}">Admin</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-4">
            <div class="footer-menu menu-item-03">
              <h5 class="text-white">contact info</h5>
              <ul class="menu-list">
                <li class="menu-item">
                  <i class="icon icon-location"></i>Jl. Raya Kapuk Muara No. 28
                  Penjaringan Jakarta Utara
                </li>
                <li class="menu-item">
                  <i class="icon icon-phone"></i>021 5694 4498
                </li>
                <li class="menu-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-instagram"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                    />
                  </svg>
                  <a
                    href="https://www.instagram.com/ptunipureindonesia/profilecard/?igsh=MWsxbnl3MzVtajF6eA=="
                    target="_blank"
                  >
                    &nbsp; UNIPURE - Kusen UPVC dan Alumunium
                  </a>
                </li>
                <li class="menu-item">
                  <i class="icon icon-envelope-o"></i
                  ><a href="#" class="mail-id">unipure@hotmail.com</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <a href="https://wa.me/6281288430092" target="_blank" id="whatsapp-button">
      <img
        src="https://cdn-icons-png.flaticon.com/512/733/733585.png"
        alt="WhatsApp"
      />
    </a>

    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('js/ui-easing.js')}}"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
  </body>
</html>
