<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ID Tour</title>

  <!-- Add Swiper JS -->
  <link
  rel="stylesheet"
  href="/project-Four Horseman/assets/css/swiper-bundle-min.css"
  />
  <script src="/project-Four Horseman/assets/js/swiper-bundle-min.js"></script>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="/project-Four Horseman/favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="/project-Four Horseman/assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
      <a href="index.html">
        <h1 class="logo">IDTour</h1>
      </a>
      <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>
      <nav class="navbar">
        <ul class="navbar-list">
          <li>
            <a href="/project-Four Horseman/index.html" class="navbar-link">Home</a>
          </li>
          <li>
            <a href="#destinasi" class="navbar-link">Destinations</a>
          </li>
          <li>
            <a href="#populer" class="navbar-link">Popular</a>
          </li>
          <li>
            <a href="#about us" class="navbar-link">About Us</a>
          </li>
          <li>
            <a href="#berita" class="navbar-link">Berita</a>
          </li>
        </ul>
        <a href="/project-Four Horseman/assets/html/login.php" class="btn btn-secondary">Login</a>
      </nav>
    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero"
        style="background-image: url('./assets/images/hero-bg-bottom.png') url('./assets/images/hero-bg-top.png')">
        <div class="container">
          <img src="./assets/images/shape-1.png" width="61" height="61" alt="Vector Shape" class="shape shape-1">
          <img src="./assets/images/shape-2.png" width="56" height="74" alt="Vector Shape" class="shape shape-2">
          <img src="./assets/images/shape-3.png" width="57" height="72" alt="Vector Shape" class="shape shape-3">
          <div class="hero-content">
            <p class="section-subtitle">Jelajahi Tujuan Anda</p>
            <h2 class="hero-title">Partner Perjanalan Terbaikmu</h2>
            <p class="hero-text">
              I travel not to go anywhere, but to go. I travel for travel's sake the great affair is to move.
            </p>
            <div class="btn-group">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="686" height="812" loading="lazy" alt="hero banner"
              class="w-100">
          </figure>
        </div>
      </section>

      <!-- 
        - #DESTINATION
      -->

      <section class="section destination" id="destinasi">
        <div class="container">
          <p class="section-subtitle">Destinasi</p>
          <h2 class="h2 section-title">Pilih Tujuan Anda</h2>
          <ul class="destination-list">
            <li class="w-50">
              <a href="#" class="destination-card">
                <figure class="card-banner">
                  <img src="./assets/images/destination-1.jpg" width="1140" height="1100" loading="lazy"
                    alt="Nusa Penida, Bali" class="img-cover">
                </figure>
                <div class="card-content">
                  <p class="card-subtitle">Pantai</p>
                  <h3 class="h3 card-title">Nusa Penida</h3>
                </div>
              </a>
            </li>
            <li class="w-50">
              <a href="#" class="destination-card">
                <figure class="card-banner">
                  <img src="./assets/images/destination-2.jpg" width="1140" height="1100" loading="lazy"
                    alt="Borobudur, Magelang" class="img-cover">
                </figure>
                <div class="card-content">
                  <p class="card-subtitle">Candi</p>
                  <h3 class="h3 card-title">Borobudur</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="destination-card">
                <figure class="card-banner">
                  <img src="./assets/images/destination-3.jpg" width="1110" height="480" loading="lazy"
                    alt="Bromo, Malang" class="img-cover">
                </figure>
                <div class="card-content">
                  <p class="card-subtitle">Gunung</p>
                  <h3 class="h3 card-title">Bromo</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="destination-card">
                <figure class="card-banner">
                  <img src="./assets/images/destination-4.jpg" width="1110" height="480" loading="lazy"
                    alt="Museum Pendidikan, Suarabaya" class="img-cover">
                </figure>
                <div class="card-content">
                  <p class="card-subtitle">Museum</p>
                  <h3 class="h3 card-title">Museum Pendidikan</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="destination-card">
                <figure class="card-banner">
                  <img src="./assets/images/destination-5.jpg" width="1110" height="480" loading="lazy"
                    alt="Jakarta, Indonesia" class="img-cover">
                </figure>
                <div class="card-content">
                  <p class="card-subtitle">Bali</p>
                  <h3 class="h3 card-title">Indonesia</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="destination-card">
                <figure class="card-banner">
                  <img src="./assets/images/destination-5.jpg" width="1110" height="480" loading="lazy"
                    alt="Mie Aceh, Aceh" class="img-cover">
                </figure>
                <div class="card-content">
                  <p class="card-subtitle">Kuliner</p>
                  <h3 class="h3 card-title">Mie Aceh</h3>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <!-- 
        - #POPULAR
      -->

      <section class="section popular">
        <div class="container">
          <p class="section-subtitle">Rekomendasi</p>
          <h2 class="h2 section-title">Tempat Paling Populer</h2>
          <ul class="popular-list">
            <li>
              <div class="popular-card">
                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/popular-1.jpg" width="740" height="518" loading="lazy"
                      alt="Labuan Bajo, Nusa Tenggara Timur" class="img-cover">
                  </a>
                  <span class="card-badge">
                    <ion-icon name="star-outline"></ion-icon>
                  </span>
                </figure>
                <div class="card-content">
                  <div class="card-wrapper">
                    <div class="card-price">Mulai Dari Rp1.000.000</div>
                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <data value="2">(2)</data>
                    </div>
                  </div>
                  <h3 class="card-title">
                    <a href="#">Labuan Bajo adalah tempat yang sempurna untuk menikmati
                        alam dan budaya Indonesia.</a>
                  </h3>
                  <address class="card-location">Labuan Bajo, Nusa Tenggara Timur</address>
                </div>
              </div>
            </li>
            <li>
              <div class="popular-card">
                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/popular-2.jpg" width="740" height="518" loading="lazy"
                      alt=" Pura Agung Besakih, Bali" class="img-cover">
                  </a>
                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>
                    <time datetime="P12D">12 Days</time>
                  </span>
                </figure>
                <div class="card-content">
                  <div class="card-wrapper">
                    <div class="card-price">Mulai Dari Rp30.000</div>
                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <data value="2">(2)</data>
                    </div>
                  </div>
                  <h3 class="card-title">
                    <a href="#">empat ini adalah tempat suci dengan pemandangan indah
                        dan kisah sejarah yang kaya</a>
                  </h3>
                  <address class="card-location">Pura Agung Besakih, Bali</address>
                </div>
              </div>
            </li>
            <li>
              <div class="popular-card">
                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/popular-3.jpg" width="740" height="518" loading="lazy"
                      alt="Karimunjawa, Jepara" class="img-cover">
                  </a>
                  <span class="card-badge">
                    <ion-icon name="Star-outline"></ion-icon>
                  </span>
                </figure>
                <div class="card-content">
                  <div class="card-wrapper">
                    <div class="card-price">Mulai Dari Rp50.000</div>
                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <data value="2">(2)</data>
                    </div>
                  </div>
                  <h3 class="card-title">
                    <a href="#">Karimunjawa adalah surga tropis yang menawarkan keindahan alam, kehidupan bawah laut yang kaya, dan aktivitas wisata yang beragam.</a>
                  </h3>
                  <address class="card-location">Karimunjawa, Jepara</address>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="section about">
        <div class="container">
          <div class="about-content">
            <p class="section-subtitle">About Us</p>
            <h2 class="h2 section-title">Explore all tour of the world with us.</h2>
            <p class="about-text">
              Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or
              randomised words
              which don't look even slightly believable.
            </p>
            <ul class="about-list">
              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="compass"></ion-icon>
                </div>
                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Tour guide</h3>
                  <p class="about-item-text">
                    Lorem Ipsum available, but the majority have suffered alteration in some.
                  </p>
                </div>
              </li>
              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="briefcase"></ion-icon>
                </div>
                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Friendly price</h3>
                  <p class="about-item-text">
                    Lorem Ipsum available, but the majority have suffered alteration in some.
                  </p>
                </div>
              </li>
              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="umbrella"></ion-icon>
                </div>
                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Reliable tour</h3>
                  <p class="about-item-text">
                    Lorem Ipsum available, but the majority have suffered alteration in some.
                  </p>
                </div>
              </li>
            </ul>
            <a href="#" class="btn btn-primary">Booking Now</a>
          </div>
          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="756" height="842" loading="lazy" alt="" class="w-100">
          </figure>
        </div>
      </section>

      <!-- 
        - #BLOG
      -->

      <section class="section blog">
        <div class="container">
          <p class="section-subtitle">From The Blog Post</p>
          <h2 class="h2 section-title">Latest News & Articles</h2>
          <ul class="blog-list">
            <li>
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/popular-1.jpg" width="740" height="518" loading="lazy"
                      alt="A good traveler has no fixed plans and is not intent on arriving." class="img-cover">
                  </a>
                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>
                    <time datetime="12-04">04 Dec</time>
                  </span>
                </figure>
                <div class="card-content">
                  <div class="card-wrapper">
                    <div class="author-wrapper">
                      <figure class="author-avatar">
                        <img src="./assets/images/author-avatar.png" width="30" height="30" alt="Jony bristow">
                      </figure>
                      <div>
                        <a href="#" class="author-name">Jony bristow</a>
                        <p class="author-title">Admin</p>
                      </div>
                    </div>
                    <time class="publish-time" datetime="10:30">10:30 AM</time>
                  </div>
                  <h3 class="card-title">
                    <a href="#">
                      A good traveler has no fixed plans and is not intent on arriving.
                    </a>
                  </h3>
                  <a href="#" class="btn-link">
                    <span>Read More</span>
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>
              </div>
            </li>
            <li>
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/blog-2.jpg" width="740" height="518" loading="lazy"
                      alt="A good traveler has no fixed plans and is not intent on arriving." class="img-cover">
                  </a>
                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>
                    <time datetime="12-04">04 Dec</time>
                  </span>
                </figure>
                <div class="card-content">
                  <div class="card-wrapper">
                    <div class="author-wrapper">
                      <figure class="author-avatar">
                        <img src="./assets/images/author-avatar.png" width="30" height="30" alt="Jony bristow">
                      </figure>
                      <div>
                        <a href="#" class="author-name">Jony bristow</a>
                        <p class="author-title">Admin</p>
                      </div>
                    </div>
                    <time class="publish-time" datetime="10:30">10:30 AM</time>
                  </div>
                  <h3 class="card-title">
                    <a href="#">
                      A good traveler has no fixed plans and is not intent on arriving.
                    </a>
                  </h3>
                  <a href="#" class="btn-link">
                    <span>Read More</span>
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>
              </div>
            </li>
            <li>
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/blog-3.jpg" width="740" height="518" loading="lazy"
                      alt="A good traveler has no fixed plans and is not intent on arriving." class="img-cover">
                  </a>
                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>
                    <time datetime="12-04">04 Dec</time>
                  </span>
                </figure>
                <div class="card-content">
                  <div class="card-wrapper">
                    <div class="author-wrapper">
                      <figure class="author-avatar">
                        <img src="./assets/images/author-avatar.png" width="30" height="30" alt="Jony bristow">
                      </figure>
                      <div>
                        <a href="#" class="author-name">Jony bristow</a>
                        <p class="author-title">Admin</p>
                      </div>
                    </div>
                    <time class="publish-time" datetime="10:30">10:30 AM</time>
                  </div>
                  <h3 class="card-title">
                    <a href="#">
                      A good traveler has no fixed plans and is not intent on arriving.
                    </a>
                  </h3>
                  <a href="#" class="btn-link">
                    <span>Read More</span>
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">
      <div class="footer-top">
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Top destination</p>
          </li>
          <li>
            <a href="#" class="footer-link">Indonesia, Jakarta</a>
          </li>
          <li>
            <a href="#" class="footer-link">Maldives, Malé</a>
          </li>
          <li>
            <a href="#" class="footer-link">Australia, Canberra</a>
          </li>
          <li>
            <a href="#" class="footer-link">Thailand, Bangkok</a>
          </li>
          <li>
            <a href="#" class="footer-link">Morocco, Rabat</a>
          </li>
        </ul>
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Categories</p>
          </li>
          <li>
            <a href="#" class="footer-link">Travel</a>
          </li>
          <li>
            <a href="#" class="footer-link">Lifestyle</a>
          </li>
          <li>
            <a href="#" class="footer-link">Fashion</a>
          </li>
          <li>
            <a href="#" class="footer-link">Education</a>
          </li>
          <li>
            <a href="#" class="footer-link">Food & Drink</a>
          </li>
        </ul>
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Quick links</p>
          </li>
          <li>
            <a href="#" class="footer-link">About</a>
          </li>
          <li>
            <a href="#" class="footer-link">Contact</a>
          </li>
          <li>
            <a href="#" class="footer-link">Tours</a>
          </li>
          <li>
            <a href="#" class="footer-link">Booking</a>
          </li>
          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>
        </ul>
        <div class="footer-list">
          <p class="footer-list-title">Get a newsletter</p>
          <p class="newsletter-text">
            For the latest deals and tips, travel no further than your inbox
          </p>
          <form action="" class="newsletter-form">
            <input type="email" name="email" required placeholder="Email address" class="newsletter-input">
            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>
        </div>
      </div>
      <div class="footer-bottom">
        <a href="#" class="logo">Tourest</a>
        <p class="copyright">
          &copy; 2022 <a href="#" class="copyright-link">codewithsadee</a>. All Rights Reserved
        </p>
        <ul class="social-list">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-google"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>

  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>