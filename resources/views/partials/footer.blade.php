<footer>

    <div class="page-wrap d-flex">

      <div>
         <ul>
            <li><h3>dc comics</h3></li>
           @foreach($links as $link)
            <li><a href="{{ $link['route'] }}">{{ $link['text'] }}</a></li>
           @endforeach

           <li><h3>dc comics</h3></li>
           <li><a href="#">Shop DC</a></li>
           <li><a href="#">Shop DC Collectibles</a></li>
         </ul>

         <ul>

           <li><h3>dc</h3></li>
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

      </div>

       <div>
         <img src="{{ asset('images/dc-logo-bg.png')}}" alt="dc-logo-bg">
      </div>
    </div>

 </footer>