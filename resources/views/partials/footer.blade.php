<footer>

    <div class="page-wrap d-flex">
       <ul>
          <li><h3>title</h3></li>
         @foreach($links as $link)
          <li><a href="{{ $link['route'] }}">{{ $link['text'] }}</a></li>
         @endforeach
       </ul>

       <div>
         <img src="{{ asset('images/dc-logo-bg.png')}}" alt="">
      </div>
    </div>

 </footer>