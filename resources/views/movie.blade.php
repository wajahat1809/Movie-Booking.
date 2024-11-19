@extends('theme.headerfooter')
@section('theme')
                  <!-- Horizontal Menu End -->            <div class="right-panel">
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-btn">
                           <span class="navbar-toggler-icon"></span>
                        </span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center ms-auto mb-2 mb-xl-0">
                           <li class="nav-item dropdown iq-responsive-menu">
                              <div class="search-box">
                                 <a href="#" class="nav-link p-0" id="search-drop" data-bs-toggle="dropdown">
                                    <div class="btn-icon btn-sm rounded-pill btn-action">
                                       <span class="btn-inner">
                                          <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                             </circle>
                                             <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round">
                                             </path>
                                          </svg>
                                       </span>
                                    </div>
                                 </a>
                                 <ul class="dropdown-menu p-0 dropdown-search m-0 iq-search-bar" style="width: 20rem;">
                                    <li class="p-0">
                                       <div class="form-group input-group mb-0">
                                          <input type="text" class="form-control border-0" placeholder="Search...">
                                          <button type="submit" class="search-submit">
                                             <svg class="icon-15" width="15" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                                   stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </circle>
                                                <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                                   stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                             </svg>
                                          </button>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </li>
                           <li class="nav-item dropdown" id="itemdropdown1">
                              <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 <div class="btn-icon rounded-pill user-icons">
                                    <span class="btn-inner">
                                       <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round"></path>
                                          <path d="M19.2036 8.66919V12.6792" stroke="currentColor" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M21.2497 10.6741H17.1597" stroke="currentColor" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </div>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-end dropdown-user border-0 p-0 m-0"
                                 aria-labelledby="navbarDropdown">
                                 <li class="user-info d-flex align-items-center gap-3 mb-3">
                                    <img src="assets/images/user/user1.html" class="img-fluid" alt="" loading="lazy">
                                    <span class="font-size-14 fw-500 text-capitalize text-white">Jenny</span>
                                 </li>
                                 <li>
                                    <a href="playlist.html" class="iq-sub-card d-flex align-items-center gap-3">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 22" fill="none">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.84455 20.6621C4.15273 20.6621 1 20.0876 1 17.7868C1 15.486 4.13273 13.3621 7.84455 13.3621C11.5364 13.3621 14.6891 15.4654 14.6891 17.7662C14.6891 20.066 11.5564 20.6621 7.84455 20.6621Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.83725 10.1738C10.26 10.1738 12.2236 8.21015 12.2236 5.78742C12.2236 3.36469 10.26 1.40015 7.83725 1.40015C5.41452 1.40015 3.44998 3.36469 3.44998 5.78742C3.4418 8.20196 5.3918 10.1656 7.80634 10.1738C7.81725 10.1738 7.82725 10.1738 7.83725 10.1738Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                       <h6 class="mb-0 font-size-14 fw-normal">My Account</h6>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="playlist.html" class="iq-sub-card d-flex align-items-center gap-3">
                                       <svg width="16" height="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                          <path d="m0 0h24v24h-24z" fill="#fff" opacity="0"
                                             transform="matrix(-1 0 0 -1 24 24)" />
                                          <path
                                             d="m19 11h-6v-6a1 1 0 0 0 -2 0v6h-6a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2z"
                                             fill="currentColor" />
                                       </svg>
                                       <h6 class="mb-0 font-size-14 fw-normal">Watchlist</h6>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="pricing-plan.html" class="iq-sub-card d-flex align-items-center gap-3">
                                       <svg width="16" height="16" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M8.58737 8.23597L11.1849 3.00376C11.5183 2.33208 12.4817 2.33208 12.8151 3.00376L15.4126 8.23597L21.2215 9.08017C21.9668 9.18848 22.2638 10.0994 21.7243 10.6219L17.5217 14.6918L18.5135 20.4414C18.6409 21.1798 17.8614 21.7428 17.1945 21.3941L12 18.678L6.80547 21.3941C6.1386 21.7428 5.35909 21.1798 5.48645 20.4414L6.47825 14.6918L2.27575 10.6219C1.73617 10.0994 2.03322 9.18848 2.77852 9.08017L8.58737 8.23597Z"
                                             stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                       <h6 class="mb-0 font-size-14 fw-normal">Subscription</h6>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="login.html"
                                       class="iq-sub-card iq-logout-2 mt-1 d-flex justify-content-center gap-2">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                          fill="none">
                                          <path
                                             d="M1.82209 15.9999C1.46654 15.9999 1.16283 15.874 0.910981 15.6221C0.659129 15.3703 0.533203 15.0666 0.533203 14.711V1.73322C0.533203 1.37767 0.659129 1.07397 0.910981 0.822114C1.16283 0.570262 1.46654 0.444336 1.82209 0.444336H7.95543V1.44434H1.82209C1.74802 1.44434 1.68135 1.47397 1.62209 1.53322C1.56283 1.59248 1.5332 1.65915 1.5332 1.73322V14.711C1.5332 14.7851 1.56283 14.8517 1.62209 14.911C1.68135 14.9703 1.74802 14.9999 1.82209 14.9999H7.95543V15.9999H1.82209ZM12.0888 11.5999L11.3554 10.8888L13.5332 8.73322H5.68876V7.711H13.511L11.3332 5.55545L12.0665 4.82211L15.4665 8.24434L12.0888 11.5999Z"
                                             fill="currentColor"></path>
                                       </svg>
                                       <h6 class="mb-0 font-size-14 fw-normal">Logout</h6>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
      </header>      <!--Nav End-->

      <!--bread-crumb-->
      <!--bread-crumb-->

<section class="banner-container">
  <div class="movie-banner">
    <div class="swiper swiper-banner-container" data-swiper="banner-detail-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide movie-banner-1 p-0">
          <div class="movie-banner-image">
            <img src="assets/images/movies/movie-banner-1.html" alt="movie-banner-image">
          </div>
          <div class="shows-content h-100">
            <div class="row align-items-center h-100">
              <div class="col-lg-7 col-md-12">
                <h1 class="texture-text big-font letter-spacing-1 line-count-1 text-uppercase RightAnimate-two"
                  data-animation-in="fadeInLeft" data-delay-in="0.6">
                  John Wick
                </h1>
                <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1;">
                  <div class="slider-ratting d-flex align-items-center gap-3">
                    <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fa fa-star-half" aria-hidden="true"></i>
                      </li>
                    </ul>
                    <span class="text-white">
                      3.5(lmdb)
                    </span>
                  </div>
                  <div class="d-flex flex-wrap align-items-center gap-3 movie-banner-time">
                    <span class="badge bg-secondary p-2">
                      <i class="fa fa-eye"></i>
                      PG
                    </span>
                    <span class="font-size-6">
                      <i class="fa-solid fa-circle"></i>
                    </span>
                    <span class="trending-time font-normal">
                      1hr 44mins
                    </span>
                    <span class="font-size-6">
                      <i class="fa-solid fa-circle"></i>
                    </span>
                    <span class="trending-year font-normal">
                      Feb 2018
                    </span>
                  </div>
                  <p class="movie-banner-text line-count-3" data-animation-in="fadeInUp" data-delay-in="1.2">
                    Dinosaurs are a diverse group of reptiles of the clade Dinosauria.
                They first appeared during the Triassic period, between 243 and 233.23 million years ago, although the exact
                origin and timing of the evolution of dinosaurs is the subject of active research.
                  </p>
                </div>
                <div class="iq-button" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="movie-detail.html" class="btn text-uppercase position-relative">
                    <span class="button-text">Play Now</span>
                    <i class="fa-solid fa-play"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block position-relative">
                <a data-fslightbox="html5-video" href="assets/images/video/trailer.mp4" class="video-open playbtn text-decoration-none" tabindex="0">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                    xml:space="preserve">
                    <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                      stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                    <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                      stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"></circle>
                  </svg>
                  <span class="w-trailor text-uppercase"> Watch Trailer </span>
                </a>
              </div>
            </div>
          </div>
        </div>        <div class="swiper-slide movie-banner-2 p-0">
          <div class="movie-banner-image">
            <img src="assets/images/movies/movie-banner-2.html" alt="movie-banner-image">
          </div>
          <div class="shows-content h-100">
            <div class="row align-items-center h-100">
              <div class="col-lg-7 col-md-12">
                <h1 class="texture-text big-font letter-spacing-1 line-count-1 text-uppercase RightAnimate-two"
                  data-animation-in="fadeInLeft" data-delay-in="0.6">
                  jumanjj
                </h1>
                <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1;">
                  <div class="slider-ratting d-flex align-items-center gap-3">
                    <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fa fa-star-half" aria-hidden="true"></i>
                      </li>
                    </ul>
                    <span class="text-white">
                      3.5(lmdb)
                    </span>
                  </div>
                  <div class="d-flex flex-wrap align-items-center gap-3 movie-banner-time">
                    <span class="badge bg-secondary p-2">
                      <i class="fa fa-eye"></i>
                      G
                    </span>
                    <span class="font-size-6">
                      <i class="fa-solid fa-circle"></i>
                    </span>
                    <span class="trending-time font-normal">
                      2hr 42mins
                    </span>
                    <span class="font-size-6">
                      <i class="fa-solid fa-circle"></i>
                    </span>
                    <span class="trending-year font-normal">
                      Nov 2017
                    </span>
                  </div>
                  <p class="movie-banner-text line-count-3" data-animation-in="fadeInUp" data-delay-in="1.2">
                    The most brutal emperor in the history of world.He was the founder of
                the most contiguous empire of the world i.e. the Mongol empire.He made an army by himself by uniting some
                nomadic tribes and trained them.
                  </p>
                </div>
                <div class="iq-button" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="movie-detail.html" class="btn text-uppercase position-relative">
                    <span class="button-text">Play Now</span>
                    <i class="fa-solid fa-play"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block position-relative">
                <a data-fslightbox="html5-video" href="assets/images/video/trailer.mp4\" class="video-open playbtn text-decoration-none" tabindex="0">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                    xml:space="preserve">
                    <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                      stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                    <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                      stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"></circle>
                  </svg>
                  <span class="w-trailor text-uppercase"> Watch Trailer </span>
                </a>
              </div>
            </div>
          </div>
        </div>        <div class="swiper-slide movie-banner-3 p-0">
          <div class="movie-banner-image">
            <img src="assets/images/movies/movie-banner-3.html" alt="movie-banner-image">
          </div>
          <div class="shows-content h-100">
            <div class="row align-items-center h-100">
              <div class="col-lg-7 col-md-12">
                <h1 class="texture-text big-font letter-spacing-1 line-count-1 text-uppercase RightAnimate-two"
                  data-animation-in="fadeInLeft" data-delay-in="0.6">
                  The Witcher
                </h1>
                <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1;">
                  <div class="slider-ratting d-flex align-items-center gap-3">
                    <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fas fa-star" aria-hidden="true"></i>
                      </li>
                      <li>
                        <i class="fa fa-star-half" aria-hidden="true"></i>
                      </li>
                    </ul>
                    <span class="text-white">
                      3.5(lmdb)
                    </span>
                  </div>
                  <div class="d-flex flex-wrap align-items-center gap-3 movie-banner-time">
                    <span class="badge bg-secondary p-2">
                      <i class="fa fa-eye"></i>
                      PG-13
                    </span>
                    <span class="font-size-6">
                      <i class="fa-solid fa-circle"></i>
                    </span>
                    <span class="trending-time font-normal">
                      2hr 12mins
                    </span>
                    <span class="font-size-6">
                      <i class="fa-solid fa-circle"></i>
                    </span>
                    <span class="trending-year font-normal">
                      Dec 2018
                    </span>
                  </div>
                  <p class="movie-banner-text line-count-3" data-animation-in="fadeInUp" data-delay-in="1.2">
                    Jumbo also known as Jumbo the Elephant and Jumbo the Circus Elephant,
                was a 19th-century male African bush elephant born in Sudan. Jumbo was exported to Jardin des Plantes, a zoo in
                Paris, and then transferred in 1865 to London Zoo in England. Despite public protest, Jumbo was sold to P. T.
                Barnum, who took him to the United States for exhibition in March 1882.
                  </p>
                </div>
                <div class="iq-button" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="movie-detail.html" class="btn text-uppercase position-relative">
                    <span class="button-text">Play Now</span>
                    <i class="fa-solid fa-play"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block position-relative">
                <a data-fslightbox="html5-video" href="assets/images/video/trailer.mp4" class="video-open playbtn text-decoration-none" tabindex="0">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                    xml:space="preserve">
                    <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                      stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                    <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                      stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"></circle>
                  </svg>
                  <span class="w-trailor text-uppercase"> Watch Trailer </span>
                </a>
              </div>
            </div>
          </div>
        </div>      </div>
      <div class="swiper-banner-button-next">
        <i class="iconly-Arrow-Right-2 icli arrow-icon"></i>
      </div>
      <div class="swiper-banner-button-prev">
        <i class="iconly-Arrow-Left-2 icli arrow-icon"></i>
      </div>
    </div>
  </div>
</section>

<section class="recommended-block section-top-spacing">
  <div class="container-fluid">
    <div class="overflow-hidden">
      <div class="d-flex align-items-center justify-content-between px-3 my-4">
        <h5 class="main-title text-capitalize mb-0">Popular Movies</h5>
        <a href="view-all-movie.html" class="text-primary iq-view-all text-decoration-none">View All</a>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="5" data-tab="3" data-mobile="2"
          data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
          <ul class="p-0 swiper-wrapper m-0  list-inline">
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/popular/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">CRW</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">2hr :
                            12mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/popular/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Batte Wiire</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr 22mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/popular/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Goal</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">2hr :
                            30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/popular/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Dandacg</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr
                            30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/popular/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">mexcan</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr :
                            30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/popular/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">oit moleld</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr 30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/popular/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Another Danger</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr 30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
          </ul>
          <div class="swiper-button swiper-button-next"></div>
          <div class="swiper-button swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="recommended-block">
  <div class="container-fluid">
    <div class="overflow-hidden">
      <div class="d-flex align-items-center justify-content-between px-3 my-4">
        <h5 class="main-title text-capitalize mb-0">Specials & Latest Movies</h5>
        <a href="view-all-movie.html" class="text-primary iq-view-all text-decoration-none">View All</a>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="5" data-tab="3" data-mobile="2"
          data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
          <ul class="p-0 swiper-wrapper m-0  list-inline">
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/latest/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">mortal nories</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">2hr 12mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/latest/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">advetre</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr :
                            30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/latest/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">net ailo</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">2hr
                            30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/latest/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">ariivaal</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">2hr
                            45mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/latest/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">dramma</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr :
                            55mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/latest/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">aune</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr :
                            25mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/latest/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">everest</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr :
                            45mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
          </ul>
          <div class="swiper-button swiper-button-next"></div>
          <div class="swiper-button swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="recommended-block">
  <div class="container-fluid">
    <section class="overflow-hidden">
      <div class="d-flex align-items-center justify-content-between px-3 my-4">
        <h5 class="main-title text-capitalize mb-0">Movies Recommended For You</h5>
        <a href="view-all-movie.html" class="text-primary iq-view-all text-decoration-none">View All</a>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="5" data-tab="3" data-mobile="2"
          data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
          <ul class="p-0 swiper-wrapper m-0  list-inline">
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/recommended/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Giikre</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">2hr 12mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/recommended/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Arrival</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr 22mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/recommended/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Pricess</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr 30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/recommended/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Soull Meate</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">2hr 30mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/recommended/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Dangacg</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr 45mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/recommended/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">crcikeft</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">2hr 25mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/recommended/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Avengrs</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr 45mins</span>
                          </div>
                        </div>
                        <div class="watchlist">
                          <a class="watch-list-not" href="playlist.html">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                              <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="watchlist-label"> Watchlist </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="block-social-info align-items-center">
                      <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fas fa-share-alt"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                  <i class="fas fa-link"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="share position-relative d-flex align-items-center text-center mb-0">
                          <span class="w-100 h-100 d-inline-block bg-transparent">
                            <i class="fa-regular fa-heart"></i>
                          </span>
                          <div class="share-wrapper">
                            <div class="share-boxs d-inline-block">
                              <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                              </svg>
                              <div class=" overflow-hidden">
                                <span>+51</span>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="iq-button">
                        <a href="movie-detail.html" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
              
              
            </li>
          </ul>
          <div class="swiper-button swiper-button-next"></div>
          <div class="swiper-button swiper-button-prev"></div>
        </div>
      </div>
    </section>
  </div>
</section>

  </main>

  @endsection