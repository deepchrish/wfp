<?php
include('header.php');
?>
<!-- Banner START-->
<section class="whk-banner">
   <div class=" container-fluid">
      <div class="row">
         <div class="col-md-12 text-center">
            <h2 class="whk-banner-ttl">Find the Perfect Home</h2>
            <span class="whk-subttl">Stop looking. Start finding</span>

            <!-- Another variation with a button -->
            <div class="whk-form-outer-wrapper">
               <form id="whk-search-form">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search porperty">
                     <div class="input-group-append">
                        <button class="btn btn-secondary whk-search-btn" type="button">
                           <i class="mdi mdi-magnify" aria-hidden="true"></i>
                        </button>
                     </div>
                  </div>
               </form>
            </div>

         </div>
      </div>
   </div>
</section>
<!-- Banner END-->

<section class="position-relative">
   <div class="container-fluid px-5">
      <div class="row justify-content-center position-relative wf-search-box whk-search-wrapper">
         <div class="col-md-12 py-2 ">
            <form>
               <div class="d-flex form-group justify-content-between mb-0">
                  <div class="w-100 py-2 px-1">
                     <div class="wfp-multiselect">
                        <select id="citylist" class="form-control" multiple="multiple">
                           <option value="agoura">Agoura</option>
                           <option value="moorpark">Moorpark</option>
                           <option value="nhollywood">North Hollywood</option>
                        </select>
                     </div>
                  </div>
                  <div class="w-100 py-2 px-1">
                     <div class="wfp-multiselect">
                        <select id="bedslist" class="form-control" multiple="multiple">
                           <option value="1beds">1 Bed</option>
                           <option value="2beds">2 Beds</option>
                           <option value="3beds">3 Beds</option>
                        </select>
                     </div>
                  </div>
                  <div class="w-100 py-2 px-1">
                     <div class="wfp-multiselect">
                        <select id="bathlist" class="form-control" multiple="multiple">
                           <option value="1beds">1 Bath</option>
                           <option value="2beds">2 Baths</option>
                           <option value="3beds">3 Baths</option>
                        </select>
                     </div>
                  </div>
                  <div class="w-100 py-2 px-1">
                     <div class="wfp-multiselect">
                        <select id="furnished" class="form-control" multiple="multiple">
                           <option value="fullyfurnished">Fully Furnished</option>
                           <option value="semifurnished">Semi Furnished</option>
                           <option value="Unfurnished">Unfurnished</option>
                        </select>
                     </div>
                  </div>
                  <div class="w-100 py-2 px-1">
                     <div class="wfp-multiselect">
                        <select id="pets" class="form-control" multiple="multiple">
                           <option value="dogs">Dog Allowed</option>
                           <option value="cats">Cats Allowed</option>
                        </select>
                     </div>
                  </div>
                  <div class="w-100 py-2 px-1">
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
                  <div class="w-100 py-2 px-1">
                     <div class="wfp-multiselect">
                        <input type="text" class="form-control" placeholder="Zip Code">
                     </div>
                  </div>
                  <div class="w-100 py-2 px-1">
                     <button class="btn d-block w-100 wfp-btn-primary"><i class="mdi mdi-filter"
                           aria-hidden="true"></i>Apply Filters</button>
                  </div>
                  <div class="w-25 py-2 px-1 d-flex align-items-center justify-content-center">
                     <a href="#" class="wfp-refresh" title="Clear Filters"><i class="mdi mdi-refresh-circle"
                           aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-5 px-2">
            <iframe width="100%" height="100%" id="gmap_canvas"
               src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed"
               frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
         </div>
         <div class="col-md-7">
            <div class="row justify-content-between pb-2">
               <div class="col-md-6 px-2 d-flex align-items-center"><span>Showing 2,243 results for
                     <strong>"Marina"</strong></span></div>
               <div class="col-md-3 px-2">
                  <form>
                     <div class="form-group mb-0">
                        <select class="form-control" id="exampleFormControlSelect1">
                           <option>Showing Per Page</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </div>
                  </form>
               </div>
            </div>
            <div class="row wfp-vac-right-side">
               <div class="col-md-4 px-1 pb-3">
                  <div class="wfp-slider-cards">
                     <div class="card">
                        <div class="wfp-img-info">
                           <div class="wfp-sales-fet w-100 d-flex">
                              <div class="wfp-fet-lat-tab">Featured</div>
                              <div class="wfp-rnt-sale">Sales</div>
                           </div>
                           <img src="img/apartment1.png" class="img-fluid" alt="property" title="property">
                           <div class="wfp-imgs-price w-100 d-flex">
                              <a href="https://source.unsplash.com/ePOH0oKeOjE/1600x900" class="wfp-imgs"
                                 data-fancybox="property1"
                                 data-thumb="https://source.unsplash.com/ePOH0oKeOjE/100x75"><i
                                    class="mdi mdi-camera"></i>10</a>
                              <div class="wfp-pricing">$ 375,000</div>
                              <div class="d-none">
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                                    href="https://source.unsplash.com/W-jDdHeoSyY/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                                    href="https://source.unsplash.com/mbKApJz6RSU/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/JIUjvqe2ZHg/100x75"
                                    href="https://source.unsplash.com/JIUjvqe2ZHg/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/G7sE2S4Lab4/100x75"
                                    href="https://source.unsplash.com/G7sE2S4Lab4/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/IEkMMvdZFc0/100x75"
                                    href="https://source.unsplash.com/IEkMMvdZFc0/1600x900"></a>
                              </div>
                           </div>
                        </div>
                        <div class="card-body px-1 pt-3 pb-2">
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
               <div class="col-md-4 px-1 pb-3">
                  <div class="wfp-slider-cards">
                     <div class="card">
                        <div class="wfp-img-info">
                           <div class="wfp-sales-fet w-100 d-flex">
                              <div class="wfp-fet-lat-tab">Featured</div>
                              <div class="wfp-rnt-sale">Sales</div>
                           </div>
                           <img src="img/apartment1.png" class="img-fluid" alt="property" title="property">
                           <div class="wfp-imgs-price w-100 d-flex">
                              <a href="https://source.unsplash.com/ePOH0oKeOjE/1600x900" class="wfp-imgs"
                                 data-fancybox="property1"
                                 data-thumb="https://source.unsplash.com/ePOH0oKeOjE/100x75"><i
                                    class="mdi mdi-camera"></i>10</a>
                              <div class="wfp-pricing">$ 375,000</div>
                              <div class="d-none">
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                                    href="https://source.unsplash.com/W-jDdHeoSyY/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                                    href="https://source.unsplash.com/mbKApJz6RSU/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/JIUjvqe2ZHg/100x75"
                                    href="https://source.unsplash.com/JIUjvqe2ZHg/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/G7sE2S4Lab4/100x75"
                                    href="https://source.unsplash.com/G7sE2S4Lab4/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/IEkMMvdZFc0/100x75"
                                    href="https://source.unsplash.com/IEkMMvdZFc0/1600x900"></a>
                              </div>
                           </div>
                        </div>
                        <div class="card-body px-1 pt-3 pb-2">
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
               <div class="col-md-4 px-1 pb-3">
                  <div class="wfp-slider-cards">
                     <div class="card">
                        <div class="wfp-img-info">
                           <div class="wfp-sales-fet w-100 d-flex">
                              <div class="wfp-fet-lat-tab">Featured</div>
                              <div class="wfp-rnt-sale">Sales</div>
                           </div>
                           <img src="img/apartment1.png" class="img-fluid" alt="property" title="property">
                           <div class="wfp-imgs-price w-100 d-flex">
                              <a href="https://source.unsplash.com/ePOH0oKeOjE/1600x900" class="wfp-imgs"
                                 data-fancybox="property1"
                                 data-thumb="https://source.unsplash.com/ePOH0oKeOjE/100x75"><i
                                    class="mdi mdi-camera"></i>10</a>
                              <div class="wfp-pricing">$ 375,000</div>
                              <div class="d-none">
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                                    href="https://source.unsplash.com/W-jDdHeoSyY/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                                    href="https://source.unsplash.com/mbKApJz6RSU/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/JIUjvqe2ZHg/100x75"
                                    href="https://source.unsplash.com/JIUjvqe2ZHg/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/G7sE2S4Lab4/100x75"
                                    href="https://source.unsplash.com/G7sE2S4Lab4/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/IEkMMvdZFc0/100x75"
                                    href="https://source.unsplash.com/IEkMMvdZFc0/1600x900"></a>
                              </div>
                           </div>
                        </div>
                        <div class="card-body px-1 pt-3 pb-2">
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
               <div class="col-md-4 px-1 pb-3">
                  <div class="wfp-slider-cards">
                     <div class="card">
                        <div class="wfp-img-info">
                           <div class="wfp-sales-fet w-100 d-flex">
                              <div class="wfp-fet-lat-tab">Featured</div>
                              <div class="wfp-rnt-sale">Sales</div>
                           </div>
                           <img src="img/apartment1.png" class="img-fluid" alt="property" title="property">
                           <div class="wfp-imgs-price w-100 d-flex">
                              <a href="https://source.unsplash.com/ePOH0oKeOjE/1600x900" class="wfp-imgs"
                                 data-fancybox="property1"
                                 data-thumb="https://source.unsplash.com/ePOH0oKeOjE/100x75"><i
                                    class="mdi mdi-camera"></i>10</a>
                              <div class="wfp-pricing">$ 375,000</div>
                              <div class="d-none">
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                                    href="https://source.unsplash.com/W-jDdHeoSyY/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                                    href="https://source.unsplash.com/mbKApJz6RSU/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/JIUjvqe2ZHg/100x75"
                                    href="https://source.unsplash.com/JIUjvqe2ZHg/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/G7sE2S4Lab4/100x75"
                                    href="https://source.unsplash.com/G7sE2S4Lab4/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/IEkMMvdZFc0/100x75"
                                    href="https://source.unsplash.com/IEkMMvdZFc0/1600x900"></a>
                              </div>
                           </div>
                        </div>
                        <div class="card-body px-1 pt-3 pb-2">
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
               <div class="col-md-4 px-1 pb-3">
                  <div class="wfp-slider-cards">
                     <div class="card">
                        <div class="wfp-img-info">
                           <div class="wfp-sales-fet w-100 d-flex">
                              <div class="wfp-fet-lat-tab">Featured</div>
                              <div class="wfp-rnt-sale">Sales</div>
                           </div>
                           <img src="img/apartment1.png" class="img-fluid" alt="property" title="property">
                           <div class="wfp-imgs-price w-100 d-flex">
                              <a href="https://source.unsplash.com/ePOH0oKeOjE/1600x900" class="wfp-imgs"
                                 data-fancybox="property1"
                                 data-thumb="https://source.unsplash.com/ePOH0oKeOjE/100x75"><i
                                    class="mdi mdi-camera"></i>10</a>
                              <div class="wfp-pricing">$ 375,000</div>
                              <div class="d-none">
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                                    href="https://source.unsplash.com/W-jDdHeoSyY/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                                    href="https://source.unsplash.com/mbKApJz6RSU/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/JIUjvqe2ZHg/100x75"
                                    href="https://source.unsplash.com/JIUjvqe2ZHg/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/G7sE2S4Lab4/100x75"
                                    href="https://source.unsplash.com/G7sE2S4Lab4/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/IEkMMvdZFc0/100x75"
                                    href="https://source.unsplash.com/IEkMMvdZFc0/1600x900"></a>
                              </div>
                           </div>
                        </div>
                        <div class="card-body px-1 pt-3 pb-2">
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
               <div class="col-md-4 px-1 pb-3">
                  <div class="wfp-slider-cards">
                     <div class="card">
                        <div class="wfp-img-info">
                           <div class="wfp-sales-fet w-100 d-flex">
                              <div class="wfp-fet-lat-tab">Featured</div>
                              <div class="wfp-rnt-sale">Sales</div>
                           </div>
                           <img src="img/apartment1.png" class="img-fluid" alt="property" title="property">
                           <div class="wfp-imgs-price w-100 d-flex">
                              <a href="https://source.unsplash.com/ePOH0oKeOjE/1600x900" class="wfp-imgs"
                                 data-fancybox="property1"
                                 data-thumb="https://source.unsplash.com/ePOH0oKeOjE/100x75"><i
                                    class="mdi mdi-camera"></i>10</a>
                              <div class="wfp-pricing">$ 375,000</div>
                              <div class="d-none">
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                                    href="https://source.unsplash.com/W-jDdHeoSyY/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75"
                                    href="https://source.unsplash.com/mbKApJz6RSU/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/JIUjvqe2ZHg/100x75"
                                    href="https://source.unsplash.com/JIUjvqe2ZHg/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/G7sE2S4Lab4/100x75"
                                    href="https://source.unsplash.com/G7sE2S4Lab4/1600x900"></a>
                                 <a data-fancybox="property1"
                                    data-thumb="https://source.unsplash.com/IEkMMvdZFc0/100x75"
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
         </div>
      </div>
   </div>
</section>

<?php
include('footer.php');
?>