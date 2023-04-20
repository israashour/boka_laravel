<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Home</title>
    {{-- @yield('css') --}}
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <div class="container-class">
      <div class="top-nav">
        <div id="social-media-nav">
          <img src="{{asset('assets/img/social media 2.png')}}" alt="#" />
          <img src="{{asset('assets/img/social media.png')}}" alt="#" />

          <img src="{{asset('assets/img/PHONE.png')}}" alt="#" />
          <a href="#" style="padding-left: 0">+1 985 983 9823</a>
        </div>
        <div id="right-nav">
          <a href="#" id="business">For Business</a>
          <hr id="hr-1" />
          <a href="#" id="help">Help</a>
          <hr id="hr-2" />
          <div class="dropdown">
            <button class="dropbtn">EN</button>
            <img src="{{asset('assets/img/Vector 4.png')}}" alt="" />
            <div id="myDropdown" class="dropdown-content">
              <a href="#">EN</a>
              <a href="#">ES</a>
              <a href="#">FR</a>
            </div>
          </div>
        </div>
      </div>
      <hr />
      <div class="login-nav">
        <img src="{{asset('assets/img/Logo.png')}}" alt="Logo" id="logo" />
        <div id="regist">
          <button id="signup-btn">Sign Up</button>
          <button id="login-btn">login</button>
        </div>
      </div>

      <div class="booking">
        <img src="{{asset('assets/img/Rectangle 6.png')}}" alt="" />
        <div class="booking-content">
          <p id="p1">Your style booking specialist</p>
          <p id="p2">Clothes mean nothing until someone lives in them.</p>
          <div class="search-bar">
            <div class="booking-select">
              <div class="booking-select-options row1" id="place">
                <div class="place-content b1">
                  <input type="checkbox" name="athome" class="checkbox" />
                  <label for="athome">At home</label>
                </div>
                <div class="place-content b2">
                  <input type="checkbox" name="business" id="checkbox" />
                  <label for="business">Business</label>
                </div>
              </div>
              <!-- <hr> -->
              <div class="row2">
                <div class="booking-select-options" id="date">
                  <!-- <input type="date" name="date" id="datein"> -->
                  <div>
                    <img src="{{asset('assets/img/Vector 7.png')}}" alt="" />
                    <label for="date">Today</label>
                  </div>
                  
                </div>
                <!-- <hr> -->
                <div class="booking-select-options" id="time">
                  <!-- <input type="time" name="time" id="timein"> -->
                  <div>
                    <img src="{{asset('assets/img/Vector 8.png')}}" alt="" />
                  <label for="time">Now</label>
                  </div>
                  
                </div>
              </div>

              <!-- <hr> -->
              <div class="booking-select-options row3" id="location">
                <!-- <input type="local" name="time" id="timein"> -->
                <!-- <label for="time">Los Angeles</label> -->
                <img src="{{asset('assets/img/Vector 6.png')}}" alt="" />
                <label>Los Angeles</label>
              </div>
            </div>

            <div class="search-box">
              <!-- <img src="img/Vector 5.png" alt="" id="search-icon"> -->
              <input type="text" placeholder="search" id="search-input" />
            </div>
            <div class="search-btn-div">
              <button class="search-btn">Search</button>
            </div>
          </div>
          <div class="get-location">
            <p id="getlocation">
              It looks like you're in Dhaka Division. Not correct?
            </p>
            <button onclick="getLocation()" id="demo">
              <img src="{{asset('assets/img/Vector 2.png')}}" alt="" /> Get current location
            </button>
          </div>

          <script>
            var x = document.getElementById("demo");

            function getLocation() {
              if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
              } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
              }
            }

            function showPosition(position) {
              x.innerHTML =
                "Latitude: " +
                position.coords.latitude +
                "<br>Longitude: " +
                position.coords.longitude;
            }
          </script>
        </div>
      </div>
      @yield('content')

      <footer class="footer">
        <div class="logo-footer">
          <div class="logo">
            <img src="{{asset('assets/img/Logo.png')}}" alt="" />
            <p id="para">
              Lorem ipsum dolor sit amet, cons ectetur adipiscing elit, sed do
              eius mod tempor incididunt.
            </p>
          </div>
          <div id="rows">
            <div class="discover">
              <h2>Discover</h2>
              <li>Dining Rewards</li>
              <li>Private Dining</li>
              <li>Reserve for Others</li>
              <li>Cuisines Near Me</li>
              <li>Restaurants Near Me</li>
              <li>Delivery Near Me</li>
              <li>Cuisines</li>
              <li>Restaurants Open Now</li>
            </div>
            <div class="opentable">
              <div>
                <h2>Opentable</h2>
                <li>About Us</li>
                <li>Blog</li>
                <li>Careers</li>
                <li>Press</li>
              </div>
              <div>
                <h2>More</h2>
                <li>OpenTable for iOS</li>
                <li>OpenTable for Android</li>
                <li>Affiliate Program</li>
                <li>Contact Us</li>
              </div>
            </div>
          </div>

          <div id="rows">
            <div class="our-site">
              <h2>Our Sites</h2>
              <li>OpenTable.jp</li>
              <li>OpenTable.de</li>
              <li>OpenTable.es</li>
              <li>OpenTable.ca</li>
              <li>OpenTable.hk</li>
              <li>OpenTable.ie</li>
              <li>OpenTable.sg</li>
              <li>OpenTable.nl</li>
              <li>OpenTable.com.mx</li>
              <li>OpenTable.co.uk</li>
            </div>
            <div class="bussiness">
              <div>
                <h2>Businesses</h2>
                <li>Delight more diners</li>
                <li>Open for Business Blog</li>
              </div>
              <div>
                <h2>Join Us On</h2>
                <div class="social-media-footer">
                  <div class="social-media">
                    <img src="{{asset('assets/img/instagram.png')}}" alt="" />
                  </div>
                  <div class="social-media">
                    <img src="{{asset('assets/img/twitter.png')}}" alt="" />
                  </div>
                  <div class="social-media">
                    <img src="{{asset('assets/img/linkedin.png')}}" alt="" />
                  </div>
                  <div class="social-media">
                    <img src="{{asset('assets/img/facebook.png')}}" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-footer">
          <hr />
          <div class="info">
            <div>
              <li>Privacy Policy</li>
            </div>
            <div>
              <li>Terms of Use</li>
            </div>
            <div>
              <li>Cookies and Interest-Based Ads</li>
            </div>
            <div>
              <li>Do Not Sell</li>
            </div>
            <div>
              <li>Cookies Settings</li>
            </div>
          </div>
          <hr />
          <div class="copyright">
            <p>Copyright © 2022 Boka, Inc. All rights reserved.</p>
          </div>
        </div>

        <div class="payment">
          <div class="info">
            <p>
              OpenTable is part of Booking Holdings, the world leader in online
              travel and related services.
            </p>
          </div>
          <div class="payment-card">
            <img src="{{asset('assets/img/image 10.png')}}" alt="" />
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>