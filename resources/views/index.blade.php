<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Thorn Coffe Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>
<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@company.com</li>
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>Destreza</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="/" class="active">Home</a></li>
                      <li><a href="#produk">Property Details</a></li>
                      <li><a href="report">Report problem</a></li>
                      <li><a href="/login"><i class="fa fa-sign-in"></i> login</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">New York, <em>America</em></span>
          <h2>Nitro !<br>Cold Brew</h2>
          <p>Iced coffee is typically brewed hot, but soaking coffee grounds in cold water for a longer period of time (12 to 24 hours) produces cold brew, a milder, less-acidic beverage with a flavor that doesn't change as much over time. <br> When the cold brew is infused with nitrogen gas, the tiny bubbles give it a velvety texture and a foamy head, similar to beers like Guinness.</p>
        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
          <span class="category">Melbourne, <em>Australia</em></span>
          <h2>Be Quick!<br>Get the best villa in town</h2>
        </div>
      </div>
      <div class="item item-3">
        <div class="header-text">
          <span class="category">Miami, <em>South Florida</em></span>
          <h2>Act Now!<br>Get the highest level penthouse</h2>
        </div>
      </div>
    </div>
  </div>

 

  <div class="video section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Video View</h6>
            <h2>our Company add</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="video-frame">
            <img src="assets/images/coffe2.jpg" alt="">
            <a href="https://youtu.be/Yb6dZ1IFlKc" target="_blank"><i class="fa fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
                    <div class="col-lg-6">
                      <img src="assets/images/coffe1.jpg" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About coffe</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class="icon-button">
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| our Coffe menu</h6>
            <h2 href="#produk" >a coffe for today keep the mind stay awake</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <ul id=category">
            <li data-filter="*" class="filter-active">All</li>
            @foreach ($produk as $p)
            <li data-filter=".{{$p->nama}}">{{$p->nama}}</li>
            @endforeach
        </ul>
    </div>
</div>

<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">
    @foreach ($produk as $p)
    <div class="col-lg-4 col-md-6 portfolio-item {{$p->nama}}">
        <div class="portfolio-wrap">
            <img src="assets/img/{{$p->gambar}}" class="img-fluid" alt="" width="400px" height="600px">
            <div class="portfolio-info">
                <h4>{{$p->nama}}</h4>
                <div class="portfolio-links">
                    <a href="assets/img/{{$p->gambar}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$p->nama.' '.$p->harga}}"><i class="bx bx-plus"></i>SHOW</a>
                  
                    @if(Auth::check())
                    <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#ModalTambahpembelian{{$p->kode}}" title="Pesan"><i class="bx bx-link"></i>BELI</button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Ini tampil form tambah pembelian -->
    <div class=" modal fade" id="ModalTambahpembelian{{$p->kode}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah pembelian</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body clearfix">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/img/{{$p->gambar}}" class="card-img-top" alt="{{$p->nama}}">
                        <div class="card-body">
                            <h5 class="card-title">Deskripsi :</h5>
                            <p class="card-text">Harga : Rp.{{$p->harga}}</p>
                            <p class="card-text">Stok : {{$p->stok}}</p>
                        </div>
                    </div>
                    <form action="/pembelian/storeinput" method="post" class="form-floating">
                        @csrf
                        
                        <input type="hidden" name="kodeproduk" value="{{$p->kode}}">
                        <input type="hidden" name="harga" value="{{$p->harga}}">
                        <div class="form-floating p-1">
                        <label for="floatingInputValue">Banyak</label>
                        <input type="text" name="banyak" required="required" class="form-control">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Beli</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>

</div>
</section>
  

  

  <footer>
    <div class="container">
      <div class="col-lg-8">
        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
        
        Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>