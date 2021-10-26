@extends('layout.main')

@section('content')

    <!-- Fumetti -->
    <section>
       <div class="page-wrap">
          <div class="content-wrap d-flex">

              @foreach($cards as $card)

              <div class="thumb">
                  <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }} - images">
                  <h4>{{ $card['title'] }}</h4>
              </div>
                  
              @endforeach
          </div>
          <button><a href="#">Load more</a></button>
       </div>
    </section>
    <!-- Fumetti / -->

    <!-- buy comics -->
    <section class="buy-comics">
       <div class="page-wrap d-flex">
          <div v-for="(buyComic, index) in buyComics" :key="index" class="buy-comics__content">
             <a class="d-flex" href=""><img :src="buyComic.img" alt="">{{buyComic.text}}</a>
          </div>
       </div>
    </section>
    <!-- buy comics / -->

@endsection