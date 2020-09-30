  <!--footer section start-->
  <section id="whk-footer">
    <div class="container">
      <div class="row py-4">
        <div class="col-md-4">
          <div class="whk-footer-logo mb-5 pt-2">
            <img src="img/wfp_logo.png" src="footer-logo">
          </div>
          <div class="footer-content">
            <ul>
              <li>
                <div class="wkh-footer-icon"><img src="img/location_on-24px@2x.png" alt="location-icon"></div>
              </li>
              <li>Atlanta, US</li>
            </ul>
            <ul>
              <li>
                <div class="wkh-footer-icon"><img src="img/call-24px@2x.png" alt="phone-icon"></div>
              </li>
              <li>+1-48797-56432</li>
            </ul>
            <ul>
              <li>
                <div class="wkh-footer-icon"><img src="img/alternate_email-24px@2x.png" alt="email-icon"></div>
              </li>
              <li>company@example.com</li>
            </ul>
          </div>
        </div>

        <div class="col-md-2">
          <div class="whk-footer-2">
            <h5 class="whk-footer-ttl">Company</h5>
            <ul>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
            </ul>
          </div>
        </div>

        <div class="col-md-2">
          <div class="whk-footer-3">
            <h5 class="whk-footer-ttl">Resources</h5>
            <ul>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
            </ul>
          </div>
        </div>

        <div class="col-md-2">
          <div class="whk-footer-4">
            <h5 class="whk-footer-ttl">FAQ'S</h5>
            <ul>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
            </ul>
          </div>
        </div>

        <div class="col-md-2">
          <div class="whk-footer-4">
            <h5 class="whk-footer-ttl">Services</h5>
            <ul>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
              <li>Lorem Ipsum</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row py-3">
        <div class="col-md-6">
          <div class="whk-social-bar">
            <ul>
              <li>
                <div class="wkh-fb-icon"><img src="img/facebook@2x.png" alt="facebook-icon"></div>
              </li>
              <li>
                <div class="wkh-twitter-icon"><img src="img/twitter@2x.png" alt="facebook-icon"></div>
              </li>
              <li>
                <div class="wkh-linkedin-icon"><img src="img/linkedin@2x.png" alt="facebook-icon"></div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="whk-footer-copyright">
            <span>© 2020 All Rights Reserved.</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--footer section end-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js">
  
  </script>
  <script src="js/custom.js">
  </script>
  <script>
    $('.video').parent().click(function () {
      if ($(this).children(".video").get(0).paused) {
        $(this).children(".video").get(0).play();
        $(this).children(".playpause").fadeOut();
      } else {
        $(this).children(".video").get(0).pause();
        $(this).children(".playpause").fadeIn();
      }
    });
  </script>
  <script>
    $('.responsive').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      dots: false,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

    //Owners carousel slider
    $('.center').slick({
      centerMode: true,
      slidesToShow: 3,
      infinite: true,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
  </script>
  <script>
    $(document).ready(function () {
      $('#citylist').multiselect({
        includeSelectAllOption: true,
        nonSelectedText: 'City'
      });
      $('#bedslist').multiselect({
        includeSelectAllOption: true,
        nonSelectedText: 'Beds'
      });
      $('#bathlist').multiselect({
        includeSelectAllOption: true,
        nonSelectedText: 'Baths'
      });
      $('#furnished').multiselect({
        includeSelectAllOption: true,
        nonSelectedText: 'Furnished'
      });
      $('#pets').multiselect({
        includeSelectAllOption: true,
        nonSelectedText: 'Pets'
      });

    });
  </script>

  </body>

  </html>