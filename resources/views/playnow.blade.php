@extends('theme.headerfooter')
@section('theme')


<!-- Banner Start -->
<div class="iq-main-slider site-video">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="pt-0">
          <video id="my-video" poster="https://i.ytimg.com/vi_webp/rKVEoyTedv4/maxresdefault.webp"
            class="video-js vjs-big-play-centered w-100" controls preload="auto" data-setup='{}'>
            <source src="assets/vendor/video/Do Patti Maiyya (Song) Kriti Sanon, Kajol, Shaheer S, Tanvi Azmi  Sachet-Parampara  Kausar Munir.mp4" type="video/mp4" />
            <source src="MY_VIDEO.html" type="video/webm" />
          </video>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner End -->

<div class="details-part">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <!-- Movie Description Start-->
        <div class="trending-info mt-4 pt-0 pb-4">
          <div class="row">
            <div class="col-md-9 col-12 mb-auto">
              <div class="d-block d-lg-flex align-items-center">
                <div class="container">
                  <div class="booking-container">
                      <h2 class="text-center">Book Your Movie Ticket</h2>
                      <form>
                          <div class="mb-3">
                              <label for="movieTitle" class="form-label">Movie Title</label>
                              <input type="text" class="form-control" id="movieTitle" placeholder="Enter movie title" required>
                          </div>
                          <div class="mb-3">
                              <label for="showDate" class="form-label">Show Date</label>
                              <input type="date" class="form-control" id="showDate" required>
                          </div>
                          <div class="mb-3">
                              <label for="showTime" class="form-label">Show Time</label>
                              <select class="form-select" id="showTime" required>
                                  <option value="">Select show time</option>
                                  <option value="10:00 AM">10:00 AM</option>
                                  <option value="1:00 PM">1:00 PM</option>
                                  <option value="4:00 PM">4:00 PM</option>
                                  <option value="7:00 PM">7:00 PM</option>
                              </select>
                          </div>
                          <button type="submit" class="btn btn-primary">Book Ticket</button>
                      </form>
                  </div>
              </div>
                            
            </div>
                  </div>
        </div>
        <!-- Movie Description End -->        <!-- Movie Source Start -->
        <div class="content-details trending-info">
          <ul class="iq-custom-tab tab-bg-gredient-center d-flex nav nav-pills align-items-center text-center mb-5 justify-content-center list-inline"
            role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="pill" href="#description-01" role="tab" aria-selected="true">
                Description
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#review-01" role="tab" aria-selected="false">
                Rate &amp; Review
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#source-01" role="tab" aria-selected="false">
                Sources
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="description-01" class="tab-pane animated fadeInUp active show" role="tabpanel">
              <div class="description-content">
                <p>
                  Zombie Island is a 1998 direct-to-video animated comedy horror film
                  based on Hanna-Barbera's Scooby-Doo Saturday-morning cartoons. In the
                  film, Shaggy, Scooby, Fred, Velma, and Daphne reunite after a
                  year-long hiatus from Mystery, Inc. to investigate a bayou island said
                  to be haunted by the ghost of the pirate Morgan Moonscar. The film was
                  directed by Jim Stenstrum, from a screenplay by Glenn Leopold.
                </p>
              </div>
            </div>
            <div id="review-01" class="tab-pane animated fadeInUp" role="tabpanel">
              <div class="streamit-reviews">
                <div id="comments" class="comments-area validate-form">
                  <p class="masvideos-noreviews mt-3">
                    There are no reviews yet.
                  </p>
                </div>
                <div class="review_form">
                  <div class="comment-respond">
                    <h3 class="fw-500 my-2">
                      Be the first to review “Zombie Island”
                    </h3>
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label class="mb-2">
                                  Your review
                                  <span class="required">
                                  *
                                  </span>
                              </label>
                              <textarea class="form-control" name="comment" cols="5" rows="8" required=""></textarea>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="mb-2">
                                  Name
                                  <span class="required">
                                  *
                                  </span>
                              </label>
                              <input class="form-control" name="author" type="text" value="" size="30" required="" />
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="mb-2">
                                  Email&nbsp;
                                  <span class="required">
                                  *
                                  </span>
                              </label>
                              <input class="form-control" name="email" type="email" value="" size="30" required="" />
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="mt-3 mt-3 d-flex gap-2 align-items-center">
                              <input class="form-check-input mt-0" type="checkbox" value="" id="check1" checked />
                              <label class="form-check-label" for="check1">
                                  Save my name, email, and website in this browser for the
                                  next time I comment.
                              </label>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-submit mt-4">
                              <div class="iq-button">
                                  <button name="submit" type="submit" id="submit" class="btn text-uppercase position-relative" value="Submit">
                                      <span class="button-text">Submit</span>
                                      <i class="fa-solid fa-play"></i>
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>  
                  </div>
                </div>
              </div>
            </div>
            <div id="source-01" class="tab-pane animated fadeInUp" role="tabpanel">
              <div class="source-list-content table-responsive">
                <table class="table custom-table">
                  <thead>
                    <tr>
                      <th>
                        Links
                      </th>
                      <th>
                        Quality
                      </th>
                      <th>
                        Language
                      </th>
                      <th>
                        Player
                      </th>
                      <th>
                        Date Added
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative">
                            <span class="button-text"> Play Now</span>
                            <i class="fa-solid fa-play"></i>                 
                          </a>
                        </div>
                      </td>
                      <td>
                        1080p
                      </td>
                      <td>
                        english
                      </td>
                      <td>
                        MusicBee
                      </td>
                      <td>
                        2021-11-28
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative">
                            <span class="button-text"> Play Now</span>
                            <i class="fa-solid fa-play"></i>                 
                          </a>
                        </div>
                      </td>
                      <td>
                        800p
                      </td>
                      <td>
                        english
                      </td>
                      <td>
                        5KPlayer
                      </td>
                      <td>
                        2021-11-25
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="iq-button">
                          <a href="movie-detail.html" class="btn text-uppercase position-relative">
                            <span class="button-text"> Play Now</span>
                            <i class="fa-solid fa-play"></i>                 
                          </a>
                        </div>
                      </td>
                      <td>
                        720p
                      </td>
                      <td>
                        English
                      </td>
                      <td>
                        MediaMonkey
                      </td>
                      <td>
                        2021-11-20
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Movie Source End -->      </div>
    </div>
  </div>
</div>

<div class="cast-tabs">
  <div class="container-fluid">
    <div class="content-details trending-info g-border iq-rtl-direction">
      <ul class="iq-custom-tab tab-bg-fill d-flex nav nav-pills mb-5 " role="tablist">
        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="pill" href="#cast-1" role="tab" aria-selected="true">Cast</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="pill" href="#crew-1" role="tab" aria-selected="false">Crew</a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="cast-1" class="tab-pane animated fadeInUp active show" role="tabpanel">
          <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="3" data-mobile="2"
            data-mobile-sm="1" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
            <ul class="list-inline swiper-wrapper">
              <li class="swiper-slide">
                <div class="cast-images m-0 row align-items-center position-relative">
                  <div class="col-4 img-box p-0">
                    <img src="assets/images/genre/g1.html" class="img-fluid" alt="image" loading="lazy">
                  </div>
                  <div class="col-8 block-description">
                    <h6 class="iq-title">
                      <a href="person-detail.html" tabindex="0">James Chinlund </a>
                    </h6>
                    <div class="video-time d-flex align-items-center my-2">
                      <small class="text-white">As James</small>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="cast-images m-0 row align-items-center position-relative">
                  <div class="col-4 img-box p-0">
                    <img src="assets/images/genre/g2.html" class="img-fluid" alt="image" loading="lazy">
                  </div>
                  <div class="col-8 block-description">
                    <h6 class="iq-title">
                      <a href="person-detail.html" tabindex="0">James Earl Jones </a>
                    </h6>
                    <div class="video-time d-flex align-items-center my-2">
                      <small class="text-white">As Jones</small>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div id="crew-1" class="tab-pane animated fadeInUp" role="tabpanel">
          <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="3" data-mobile="2"
            data-mobile-sm="2" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
            <ul class="list-inline swiper-wrapper">
              <li class="swiper-slide">
                <div class="cast-images m-0 row align-items-center position-relative">
                  <div class="col-4 img-box p-0">
                    <img src="assets/images/genre/g3.html" class="img-fluid" alt="image" loading="lazy">
                  </div>
                  <div class="col-8 block-description starring-desc ">
                    <h6 class="iq-title">
                      <a href="person-detail.html" tabindex="0"> Jeff Nathanson </a>
                    </h6>
                    <div class="video-time d-flex align-items-center my-2">
                      <small class="text-white">Writing</small>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="cast-images m-0 row align-items-center position-relative">
                  <div class="col-4 img-box p-0">
                    <img src="assets/images/genre/g5.html" class="person__poster--image img-fluid" alt="image"
                      loading="lazy">
                  </div>
                  <div class="col-8 block-description starring-desc ">
                    <h6 class="iq-title">
                      <a href="person-detail.html" tabindex="0"> Irene Mecchi </a>
                    </h6>
                    <div class="video-time d-flex align-items-center my-2">
                      <small class="text-white">Writing</small>
                    </div>
                  </div>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="cast-images m-0 row align-items-center position-relative">
                  <div class="col-4 img-box p-0">
                    <img src="assets/images/genre/g4.html" class="person__poster--image img-fluid" alt="image"
                      loading="lazy">
                  </div>
                  <div class="col-8 block-description starring-desc ">
                    <h6 class="iq-title">
                      <a href="person-detail.html" tabindex="0"> Karen Gilchrist </a>
                    </h6>
                    <div class="video-time d-flex align-items-center my-2">
                      <small class="text-white">Production</small>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="recommended-block">
  <div class="container-fluid">
    <div class="overflow-hidden">
      <div class="d-flex align-items-center justify-content-between px-3 pt-2 my-4">
        <h5 class="main-title text-capitalize mb-0">Movies Recommended For You</h5>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="2" data-mobile="2"
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
    </div>
  </div>
</section>

<section class="related-movie-block">
  <div class="container-fluid">
    <div class="overflow-hidden">
      <div class="d-flex align-items-center justify-content-between px-3 pt-2 my-4">
        <h5 class="main-title text-capitalize mb-0">Related Movies</h5>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="2" data-mobile="2"
          data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
          <ul class="p-0 swiper-wrapper m-0  list-inline">
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/related/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">giikre</a>
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
                      <img src="assets/images/movies/related/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">YoShi</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr :
                            22mins</span>
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
                      <img src="assets/images/movies/related/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">We Gare</a>
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
                      <img src="assets/images/movies/related/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Avengers</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr
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
                      <img src="assets/images/movies/related/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Chosfies</a>
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
                      <img src="assets/images/movies/related/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Tf Oaler</a>
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
                      <img src="assets/images/movies/related/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
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

<section class="video-block">
  <div class="container-fluid">
    <div class="overflow-hidden">
      <div class="d-flex align-items-center justify-content-between px-3 pt-2 my-4">
        <h5 class="main-title text-capitalize mb-0">Related Videos</h5>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="2" data-mobile="2"
          data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
          <ul class="p-0 swiper-wrapper m-0  list-inline">
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/related/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">giikre</a>
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
                      <img src="assets/images/movies/related/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">YoShi</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr :
                            22mins</span>
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
                      <img src="assets/images/movies/related/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">We Gare</a>
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
                      <img src="assets/images/movies/related/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Avengers</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr
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
                      <img src="assets/images/movies/related/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Chosfies</a>
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
                      <img src="assets/images/movies/related/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">Tf Oaler</a>
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
                      <img src="assets/images/movies/related/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
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

<!-- Upcoming Start -->
<section class="upcomimg-block">
  <div class="container-fluid">
    <div class="overflow-hidden">
      <div class="d-flex align-items-center justify-content-between px-3 pt-2 my-4">
        <h5 class="main-title text-capitalize mb-0">Upcoming</h5>
      </div>
      <div class="card-style-slider">
        <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="2" data-mobile="2"
          data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
          <ul class="p-0 swiper-wrapper m-0  list-inline">
            <li class="swiper-slide">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="movie-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="assets/images/movies/upcoming/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">dinoosaur</a>
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
                      <img src="assets/images/movies/upcoming/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">godilla</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr
                            22mins</span>
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
                      <img src="assets/images/movies/upcoming/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">batter caill</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">1hr 55mins</span>
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
                      <img src="assets/images/movies/upcoming/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">the co nouerllng</a>
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
                      <img src="assets/images/movies/upcoming/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">fast furious</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">2hr 45mins</span>
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
                      <img src="assets/images/movies/upcoming/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">spiderman</a>
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
                      <img src="assets/images/movies/upcoming/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="movie-detail.html">onepeoc</a>
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
          </ul>
          <div class="swiper-button swiper-button-next"></div>
          <div class="swiper-button swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Upcoming End -->

  </main>

  @endsection