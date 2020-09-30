<?php
include('header.php');
?>
<!-- bnr area START-->
<section class="wf-header-sec position-relative py-5 mb-5">
  <div class="wf-home-bnr">
    <div class="container position-relative">
      <img class="img-fluid wf-right-dot" src="img/dots.png">
      <h1>Let us Guide you<br>with the home you<br> want.</h1>
      <img class="img-fluid wf-left-dot" src="img/dots.png">
    </div>

  </div>
</section>
<section class="position-relative mb-5 pb-5">
  <div class="container">
    <div class="row justify-content-center position-relative ">
      <div class="col-md-10 py-2 wf-search-box">
        <form>
          <div class="whk-form-wrapper">
            <div class="row mb-0">
              <div class="col-md-3 py-2">
                <div class="wfp-multiselect">
                  <select id="citylist" class="form-control" multiple="multiple">
                    <option value="agoura">Agoura</option>
                    <option value="moorpark">Moorpark</option>
                    <option value="nhollywood">North Hollywood</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 py-2">
                <div class="wfp-multiselect">
                  <select id="bedslist" class="form-control" multiple="multiple">
                    <option value="1beds">1 Bed</option>
                    <option value="2beds">2 Beds</option>
                    <option value="3beds">3 Beds</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 py-2">
                <div class="wfp-multiselect">
                  <select id="bathlist" class="form-control" multiple="multiple">
                    <option value="1beds">1 Bath</option>
                    <option value="2beds">2 Baths</option>
                    <option value="3beds">3 Baths</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 py-2">
                <div class="wfp-multiselect">
                  <select id="furnished" class="form-control" multiple="multiple">
                    <option value="fullyfurnished">Fully Furnished</option>
                    <option value="semifurnished">Semi Furnished</option>
                    <option value="Unfurnished">Unfurnished</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 py-2">
                <div class="wfp-multiselect">
                  <input type="text" class="form-control" placeholder="Zip Code">
                </div>
              </div>
              <div class="col-md-3 py-2">
                <div class="wfp-multiselect">
                  <select id="pets" class="form-control" multiple="multiple">
                    <option value="dogs">Dog Allowed</option>
                    <option value="cats">Cats Allowed</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 py-2">
                <div class="wfp-multiselect">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                      data-display="static" aria-haspopup="true" aria-expanded="false">
                      Price
                    </button>
                    <div class="dropdown-menu">
                      <div class="py-2 px-3">
                        <div class="form-group mb-1">
                          <label for="minprice" class="mb-0 small">Min. Price</label>
                          <input type="text" class="form-control" id="minprice" placeholder="$">
                        </div>
                        <div class="form-group mb-1">
                          <label for="maxprice" class="mb-0 small">Max. Price</label>
                          <input type="text" class="form-control" id="maxprice" placeholder="$">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 py-2">
                <button class="btn d-block w-100 wfp-btn-primary">Search Property</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- bnr area END-->

<!-- video section START-->
<section class="py-5 mt-5 text-center">
  <div class="position-relative mt-5 d-flex justify-content-center align-items-center wfp-video-sec"
    style="background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .6)), url('img/California-modern-home.png');">
    <div>
      <h3>Find you dream Apartment</h3>
      <i class="mdi mdi-play-circle-outline" data-toggle="modal" data-target="#videoplayer"></i>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="videoplayer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <button type="button" class="close wfp-close-btn" data-dismiss="modal" aria-label="Close">
          <i class="mdi mdi-close"></i>
        </button>
        <div class="modal-body">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/94DtiGcA6wk" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- video section END-->
<!--Featured apartment-->
<section>
  <h2 class="text-center py-3">Featured Apartments</h2>
  <div class="container">
    <div class="slider responsive">
      <div class="p-2 wfp-slider-cards">
        <div class="card">
          <div class="wfp-img-info">
            <div class="wfp-sales-fet w-100 d-flex">
              <div class="wfp-fet-lat-tab">Featured</div>
              <div class="wfp-rnt-sale">Sales</div>
            </div>
            <img src="img/apartment1.png" class="img-fluid" alt="property" title="property">
            <div class="wfp-imgs-price w-100 d-flex">
              <a href="https://source.unsplash.com/ePOH0oKeOjE/1600x900" class="wfp-imgs" data-fancybox="property1"
                data-thumb="https://source.unsplash.com/ePOH0oKeOjE/100x75"><i class="mdi mdi-camera"></i>10</a>
              <div class="wfp-pricing">$ 375,000</div>
              <div class="d-none">
                <a data-fancybox="property1" data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                  href="https://source.unsplash.com/W-jDdHeoSyY/1600x900"></a>
                <a data-fancybox="property1" data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                  href="https://source.unsplash.com/mbKApJz6RSU/1600x900"></a>
                <a data-fancybox="property1" data-thumb="https://source.unsplash.com/JIUjvqe2ZHg/100x75"
                  href="https://source.unsplash.com/JIUjvqe2ZHg/1600x900"></a>
                <a data-fancybox="property1" data-thumb="https://source.unsplash.com/G7sE2S4Lab4/100x75"
                  href="https://source.unsplash.com/G7sE2S4Lab4/1600x900"></a>
                <a data-fancybox="property1" data-thumb="https://source.unsplash.com/IEkMMvdZFc0/100x75"
                  href="https://source.unsplash.com/IEkMMvdZFc0/1600x900"></a>
              </div>
            </div>
          </div>
          <div class="card-body px-2 pt-3 pb-2">
            <h5 class="card-title">490 Summerhaven Dr N, East Syracuse, NY 13057</h5>
            <div class="wfp-location mb-2">Portland , USA</div>
            <div class="card-text">
              <ul class="p-0 m-0">
                <li><img class="img-fluid" src="img/bed.png">5 Beds</li>
                <li><img class="img-fluid" src="img/bathroom.png">5 Baths</li>
                <li><img class="img-fluid" src="img/square.png">1000 SqFt</li>
              </ul>
            </div>
          </div>
          <a class="btn" href="list-detail.php" target="_blank">View Details</a>
        </div>
      </div>

      <div class="p-2 wfp-slider-cards">
        <div class="card">
          <div class="wfp-img-info">
            <div class="wfp-sales-fet w-100 d-flex">
              <div class="wfp-fet-lat-tab">Featured</div>
              <div class="wfp-rnt-sale">Sales</div>
            </div>
            <img src="img/apartment-2.png" class="img-fluid" alt="property" title="property">
            <div class="wfp-imgs-price w-100 d-flex">
              <a href="https://source.unsplash.com/ePOH0oKeOjE/1600x900" class="wfp-imgs" data-fancybox="property2"
                data-thumb="https://source.unsplash.com/ePOH0oKeOjE/100x75"><i class="mdi mdi-camera"></i>14</a>
              <div class="wfp-pricing">$ 375,000</div>
              <div class="d-none">
                <a data-fancybox="property2" data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                  href="https://source.unsplash.com/W-jDdHeoSyY/1600x900"></a>
                <a data-fancybox="property2" data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                  href="https://source.unsplash.com/mbKApJz6RSU/1600x900"></a>
                <a data-fancybox="property2" data-thumb="https://source.unsplash.com/JIUjvqe2ZHg/100x75"
                  href="https://source.unsplash.com/JIUjvqe2ZHg/1600x900"></a>
                <a data-fancybox="property2" data-thumb="https://source.unsplash.com/G7sE2S4Lab4/100x75"
                  href="https://source.unsplash.com/G7sE2S4Lab4/1600x900"></a>
                <a data-fancybox="property2" data-thumb="https://source.unsplash.com/IEkMMvdZFc0/100x75"
                  href="https://source.unsplash.com/IEkMMvdZFc0/1600x900"></a>
              </div>
            </div>
          </div>
          <div class="card-body px-2 pt-3 pb-2">
            <h5 class="card-title">490 Summerhaven Dr N, East Syracuse, NY 13057</h5>
            <div class="wfp-location mb-2">Portland , USA</div>
            <div class="card-text">
              <ul class="p-0 m-0">
                <li><img class="img-fluid" src="img/bed.png">5 Beds</li>
                <li><img class="img-fluid" src="img/bathroom.png">5 Baths</li>
                <li><img class="img-fluid" src="img/square.png">1000 SqFt</li>
              </ul>
            </div>
          </div>
          <a class="btn" href="list-detail.php" target="_blank">View Details</a>
        </div>
      </div>

      <div class="p-2 wfp-slider-cards">
        <div class="card">
          <div class="wfp-img-info">
            <div class="wfp-sales-fet w-100 d-flex">
              <div class="wfp-fet-lat-tab">Featured</div>
              <div class="wfp-rnt-sale">Sales</div>
            </div>
            <img src="img/apartment-3.png" class="img-fluid" alt="property" title="property">
            <div class="wfp-imgs-price w-100 d-flex">
              <a href="https://source.unsplash.com/ePOH0oKeOjE/1600x900" class="wfp-imgs" data-fancybox="property3"
                data-thumb="https://source.unsplash.com/ePOH0oKeOjE/100x75"><i class="mdi mdi-camera"></i>6</a>
              <div class="wfp-pricing">$ 375,000</div>
              <div class="d-none">
                <a data-fancybox="property3" data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                  href="https://source.unsplash.com/W-jDdHeoSyY/1600x900"></a>
                <a data-fancybox="property3" data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                  href="https://source.unsplash.com/mbKApJz6RSU/1600x900"></a>
                <a data-fancybox="property3" data-thumb="https://source.unsplash.com/JIUjvqe2ZHg/100x75"
                  href="https://source.unsplash.com/JIUjvqe2ZHg/1600x900"></a>
                <a data-fancybox="property3" data-thumb="https://source.unsplash.com/G7sE2S4Lab4/100x75"
                  href="https://source.unsplash.com/G7sE2S4Lab4/1600x900"></a>
                <a data-fancybox="property3" data-thumb="https://source.unsplash.com/IEkMMvdZFc0/100x75"
                  href="https://source.unsplash.com/IEkMMvdZFc0/1600x900"></a>
              </div>
            </div>
          </div>
          <div class="card-body px-2 pt-3 pb-2">
            <h5 class="card-title">490 Summerhaven Dr N, East Syracuse, NY 13057</h5>
            <div class="wfp-location mb-2">Portland , USA</div>
            <div class="card-text">
              <ul class="p-0 m-0">
                <li><img class="img-fluid" src="img/bed.png">5 Beds</li>
                <li><img class="img-fluid" src="img/bathroom.png">5 Baths</li>
                <li><img class="img-fluid" src="img/square.png">1000 SqFt</li>
              </ul>
            </div>
          </div>
          <a class="btn" href="list-detail.php" target="_blank">View Details</a>
        </div>
      </div>

      <div class="p-2 wfp-slider-cards">
        <div class="card">
          <div class="wfp-img-info">
            <div class="wfp-sales-fet w-100 d-flex">
              <div class="wfp-fet-lat-tab">Featured</div>
              <div class="wfp-rnt-sale">Sales</div>
            </div>
            <img src="img/apartment-4.png" class="img-fluid" alt="property" title="property">
            <div class="wfp-imgs-price w-100 d-flex">
              <a href="https://source.unsplash.com/ePOH0oKeOjE/1600x900" class="wfp-imgs" data-fancybox="property4"
                data-thumb="https://source.unsplash.com/ePOH0oKeOjE/100x75"><i class="mdi mdi-camera"></i>10</a>
              <div class="wfp-pricing">$ 375,000</div>
              <div class="d-none">
                <a data-fancybox="property4" data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                  href="https://source.unsplash.com/W-jDdHeoSyY/1600x900"></a>
                <a data-fancybox="property4" data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                  href="https://source.unsplash.com/mbKApJz6RSU/1600x900"></a>
                <a data-fancybox="property4" data-thumb="https://source.unsplash.com/JIUjvqe2ZHg/100x75"
                  href="https://source.unsplash.com/JIUjvqe2ZHg/1600x900"></a>
                <a data-fancybox="property4" data-thumb="https://source.unsplash.com/G7sE2S4Lab4/100x75"
                  href="https://source.unsplash.com/G7sE2S4Lab4/1600x900"></a>
                <a data-fancybox="property4" data-thumb="https://source.unsplash.com/IEkMMvdZFc0/100x75"
                  href="https://source.unsplash.com/IEkMMvdZFc0/1600x900"></a>
              </div>
            </div>
          </div>
          <div class="card-body px-2 pt-3 pb-2">
            <h5 class="card-title">490 Summerhaven Dr N, East Syracuse, NY 13057</h5>
            <div class="wfp-location mb-2">Portland , USA</div>
            <div class="card-text">
              <ul class="p-0 m-0">
                <li><img class="img-fluid" src="img/bed.png">5 Beds</li>
                <li><img class="img-fluid" src="img/bathroom.png">5 Baths</li>
                <li><img class="img-fluid" src="img/square.png">1000 SqFt</li>
              </ul>
            </div>
          </div>
          <a class="btn" href="list-detail.php" target="_blank">View Details</a>
        </div>
      </div>

      <div class="p-2 wfp-slider-cards">
        <div class="card">
          <div class="wfp-img-info">
            <div class="wfp-sales-fet w-100 d-flex">
              <div class="wfp-fet-lat-tab">Featured</div>
              <div class="wfp-rnt-sale">Sales</div>
            </div>
            <img src="img/apartment1.png" class="img-fluid" alt="property" title="property">
            <div class="wfp-imgs-price w-100 d-flex">
              <a href="https://source.unsplash.com/ePOH0oKeOjE/1600x900" class="wfp-imgs" data-fancybox="property5"
                data-thumb="https://source.unsplash.com/ePOH0oKeOjE/100x75"><i class="mdi mdi-camera"></i>10</a>
              <div class="wfp-pricing">$ 375,000</div>
              <div class="d-none">
                <a data-fancybox="property5" data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                  href="https://source.unsplash.com/W-jDdHeoSyY/1600x900"></a>
                <a data-fancybox="property5" data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                  href="https://source.unsplash.com/mbKApJz6RSU/1600x900"></a>
                <a data-fancybox="property5" data-thumb="https://source.unsplash.com/JIUjvqe2ZHg/100x75"
                  href="https://source.unsplash.com/JIUjvqe2ZHg/1600x900"></a>
                <a data-fancybox="property5" data-thumb="https://source.unsplash.com/G7sE2S4Lab4/100x75"
                  href="https://source.unsplash.com/G7sE2S4Lab4/1600x900"></a>
                <a data-fancybox="property5" data-thumb="https://source.unsplash.com/IEkMMvdZFc0/100x75"
                  href="https://source.unsplash.com/IEkMMvdZFc0/1600x900"></a>
              </div>
            </div>
          </div>
          <div class="card-body px-2 pt-3 pb-2">
            <h5 class="card-title">490 Summerhaven Dr N, East Syracuse, NY 13057</h5>
            <div class="wfp-location mb-2">Portland , USA</div>
            <div class="card-text">
              <ul class="p-0 m-0">
                <li><img class="img-fluid" src="img/bed.png">5 Beds</li>
                <li><img class="img-fluid" src="img/bathroom.png">5 Baths</li>
                <li><img class="img-fluid" src="img/square.png">1000 SqFt</li>
              </ul>
            </div>
          </div>
          <a class="btn" href="list-detail.php" target="_blank">View Details</a>
        </div>
      </div>

      <div class="p-2 wfp-slider-cards">
        <div class="card">
          <div class="wfp-img-info">
            <div class="wfp-sales-fet w-100 d-flex">
              <div class="wfp-fet-lat-tab">Featured</div>
              <div class="wfp-rnt-sale">Sales</div>
            </div>
            <img src="img/apartment-2.png" class="img-fluid" alt="property" title="property">
            <div class="wfp-imgs-price w-100 d-flex">
              <a href="https://source.unsplash.com/ePOH0oKeOjE/1600x900" class="wfp-imgs" data-fancybox="property6"
                data-thumb="https://source.unsplash.com/ePOH0oKeOjE/100x75"><i class="mdi mdi-camera"></i>10</a>
              <div class="wfp-pricing">$ 375,000</div>
              <div class="d-none">
                <a data-fancybox="property6" data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                  href="https://source.unsplash.com/W-jDdHeoSyY/1600x900"></a>
                <a data-fancybox="property6" data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                  href="https://source.unsplash.com/mbKApJz6RSU/1600x900"></a>
                <a data-fancybox="property6" data-thumb="https://source.unsplash.com/JIUjvqe2ZHg/100x75"
                  href="https://source.unsplash.com/JIUjvqe2ZHg/1600x900"></a>
                <a data-fancybox="property6" data-thumb="https://source.unsplash.com/G7sE2S4Lab4/100x75"
                  href="https://source.unsplash.com/G7sE2S4Lab4/1600x900"></a>
                <a data-fancybox="property6" data-thumb="https://source.unsplash.com/IEkMMvdZFc0/100x75"
                  href="https://source.unsplash.com/IEkMMvdZFc0/1600x900"></a>
              </div>
            </div>
          </div>
          <div class="card-body px-2 pt-3 pb-2">
            <h5 class="card-title">490 Summerhaven Dr N, East Syracuse, NY 13057</h5>
            <div class="wfp-location mb-2">Portland , USA</div>
            <div class="card-text">
              <ul class="p-0 m-0">
                <li><img class="img-fluid" src="img/bed.png">5 Beds</li>
                <li><img class="img-fluid" src="img/bathroom.png">5 Baths</li>
                <li><img class="img-fluid" src="img/square.png">1000 SqFt</li>
              </ul>
            </div>
          </div>
          <a class="btn" href="list-detail.php" target="_blank">View Details</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--end of featured apartment section-->

<!--who we are -->
<section class="wfp-whoweare my-5">
  <h2 class="text-center py-3">Who We Are</h2>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </div>
    </div>
    <div class="row justify-content-between text-center mt-5">
      <div class="col-md-3 px-1 wfp-opt-txt">
        <div class="wfp-home-icon wfp-customicon d-flex align-items-center justify-content-center"><i
            class="mdi mdi-home-outline"></i></div>
        <h4 class="my-3">Rent</h4>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </div>
      <div class="col-md-3 px-1 wfp-opt-txt">
        <div class="wfp-usd-icon wfp-customicon d-flex align-items-center justify-content-center"><i
            class="mdi mdi-currency-usd"></i></div>
        <h4 class="my-3">Buy</h4>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </div>
      <div class="col-md-3 px-1 wfp-opt-txt">
        <div class="wfp-magnify wfp-customicon d-flex align-items-center justify-content-center"><i
            class="mdi mdi-magnify"></i></div>
        <h4 class="my-3">Search</h4>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </div>
    </div>
  </div>
</section>
<!--end of section who we are-->

<!--section our mission start-->
<section class="whk-our-mission">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="our-misison-left">
          <img src="img/offering-house.png" alt="offering-house">
        </div>
      </div>
      <div class="col-md-7 our-misison-right">
        <h2 class="text-center txt-white py-3">Our Mission</h2>
        <p class="txt-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
          fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
          anim id est laborum."
        </p>
      </div>
    </div>
  </div>
</section>
<!--section our mission end-->

<!--section owners start-->
<section class="whk-owners py-4">
  <h2 class="text-center py-3">Owners</h2>
  <div class="container">
    <div class="row">
      <div class="slider center">
        <div>
          <img class="img-fluid" src="img/apartment-2.png" alt="">
          <h5 class="slick-ttl">Our Technology</h5>
        </div>
        <div>
          <img class="img-fluid" src="img/apartment-3.png" alt="">
          <h5 class="slick-ttl">Management Services</h5>
        </div>
        <div>
          <img class="img-fluid" src="img/apartment1.png" alt="">
          <h5 class="slick-ttl">Leasing Services</h5>
        </div>
        <div>
          <img class="img-fluid" src="img/apartment-4.png" alt="">
          <h5 class="slick-ttl">Our Technology</h5>
        </div>
        <div>
          <img class="img-fluid" src="img/California-modern-home.png" alt="">
          <h5 class="slick-ttl">Management Services</h5>
        </div>
        <div>
          <img class="img-fluid" src="img/offering-house.png" alt="">
          <h5 class="slick-ttl">Leasing Services</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!--section owners end-->

<!--section tenants start-->
<section class="whk-tenants">
  <h2 class="text-center py-3">Tenants</h2>
  <div class="container">
    <div class="row">
      <div class="slider center">
        <div>
          <img class="img-fluid" src="img/apartment-2.png" alt="">
          <h5 class="slick-ttl">Pay Rent Online</h5>
        </div>
        <div>
          <img class="img-fluid" src="img/apartment-3.png" alt="">
          <h5 class="slick-ttl">Vacancies</h5>
        </div>
        <div>
          <img class="img-fluid" src="img/apartment1.png" alt="">
          <h5 class="slick-ttl">Submit A Maintenance Request</h5>
        </div>
        <div>
          <img class="img-fluid" src="img/apartment-4.png" alt="">
          <h5 class="slick-ttl">Pay Rent Online</h5>
        </div>
        <div>
          <img class="img-fluid" src="img/California-modern-home.png" alt="">
          <h5 class="slick-ttl">Vacancies</h5>
        </div>
        <div>
          <img class="img-fluid" src="img/offering-house.png" alt="">
          <h5 class="slick-ttl">Submit A Maintenance Request</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!--section tenants end-->

<!--section testimonials start-->
<section class="whk-testimonials py-5">
  <div class="container">
    <div class="row">
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <h2 class="text-center py-4">What Our Clients Say</h2>
          <div class="carousel-item active pt-4" data-interval="10000">
            <div class="item-img">
              <img src="img/oscar-isaac-a-foreigner@2x.png" class="d-block w-100" alt="...">
            </div>
            <div class="item-content py-4">
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
            </div>
          </div>

          <div class="carousel-item pt-4" data-interval="2000">
            <div class="item-img">
              <img src="img/oscar-isaac-a-foreigner@2x.png" class="d-block w-100" alt="...">
            </div>
            <div class="item-content py-4">
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
            </div>
          </div>

          <div class="carousel-item pt-4">
            <div class="item-img">
              <img src="img/oscar-isaac-a-foreigner@2x.png" class="d-block w-100" alt="...">
            </div>
            <div class="item-content py-4">
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>
<!--section testimonials end-->
<?php
include('footer.php');
?>