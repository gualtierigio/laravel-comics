<footer>
   <div class="footer-wrapper">   
      <div class="page-wrap d-flex">
        <div class="d-flex flex-column">
           <div class="d-flex">
              <ul>
                 <li>
                    <h3>dc comics</h3>
                 </li>
                @foreach($links as $link)
                 <li>
                    <a href="{{ $link['route'] }}">{{ $link['text'] }}</a>
                 </li>
                @endforeach
              </ul>
              <ul>
                <li>
                   <h3>dc</h3>
                 </li>
                <li>
                   <a href="#">Terms of use</a>
                 </li>
                <li>
                   <a href="#">Privacy policy (New)</a>
                 </li>
                <li>
                   <a href="#">Ad Choices</a>
                 </li>
                <li>
                   <a href="#">Advertising</a>
                 </li>
                <li>
                   <a href="#">Jobs</a>
                 </li>
                <li>
                   <a href="#">Subscription</a>
                 </li>
                <li>
                   <a href="#">Talent Workshops</a>
                 </li>
                <li>
                   <a href="#">CPSC Certificates</a>
                 </li>
                <li>
                   <a href="#">Ratings</a>
                 </li>
                <li>
                   <a href="#">Shop Help</a>
                 </li>
                <li>
                   <a href="#">Contact Us</a>
                 </li>
              </ul> 
              <ul>
                 <li>
                    <h3>sites</h3>
                 </li>
                 <li>
                    <a href="#">DC</a>
                  </li>
                 <li>
                    <a href="#">MAD Magazine</a>
                  </li>
                 <li>
                    <a href="#">DC Kids</a>
                  </li>
                 <li>
                    <a href="#">DC Universe</a>
                  </li>
                 <li>
                    <a href="#">DC Power Visa</a>
                  </li>
              </ul>
           </div>
           <div class="copyright">
              <p>All Site Content TM and © 2020 DC Entertaiment, unless otherwise 
                 <a href="#">noted here</a>
                 . All rights reserved. <br>
                 <a href="#">Cockies Settings</a>
              </p>
           </div>
        </div>
        <div>
           <img src="{{ asset('images/dc-logo-bg.png')}}" alt="dc-logo-bg">
        </div>
      </div>
   </div>
   <div class="under-footer">
      <div class="page-wrap d-flex align-content-center justify-content-between">
         <div>
            <button>sign-up-now!</button>
         </div>
         <div>
            <ul class="d-flex">
               <li>follow us</li>
               <li><img src="{{ asset('images/footer-facebook.png') }}" alt="social icon"></li>
               <li><img src="{{ asset('images/footer-twitter.png') }}" alt="social icon"></li>
               <li><img src="{{ asset('images/footer-youtube.png') }}" alt="social icon"></li>
               <li><img src="{{ asset('images/footer-pinterest.png') }}" alt="social icon"></li>
               <li><img src="{{ asset('images/footer-periscope.png') }}" alt="social icon"></li>
            </ul>
         </div>
      </div>
   </div>
 </footer>