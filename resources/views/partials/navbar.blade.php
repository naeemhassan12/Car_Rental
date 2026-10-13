
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="{{ url('index') }}">
            <span>
              OnlineCarRental
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="user_option">
              <a href="">
                Login
              </a>
            </div>
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="{{ url('index') }}">Home</a>
                <a href="{{ url('about') }}">About</a>
                <a href="{{ url('car') }}">Cars</a>
                <a href="{{ url('blog') }}">Blog</a>
                <a href="{{ url('contact') }}">Contact Us</a>
                <a href="{{ url('login') }}">Login</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="slider_container">
        <div class="img-box">
          <img src="images/hero-img.jpg" alt="">
        </div>
        <div class="detail_container">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <h1>
                    Rent Car <br>
                    Experts <br>
                    Service
                  </h1>
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h1>
                    Rent Car <br>
                    Experts <br>
                    Service
                  </h1>
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h1>
                    Rent Car <br>
                    Experts <br>
                    Service
                  </h1>
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
