@extends('layout.main')

@php

    $cards = config('comics');

    $buyComics = config('buy_comics');

@endphp

@section('content')

    <!-- Fumetti -->
    <section>
       <div class="page-wrap">
          <div class="content-wrap d-flex">

              @foreach($cards as $card)

              <div class="thumb">
                    <a id="link-to-comic" href="{{ route('comic', ['id' => $loop->index]) }}">
                        <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }} - images">
                        <h4>{{ $card['title'] }}</h4>
                    </a>
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
           @foreach ($buyComics as $buyComic)
           
           <div class="buy-comics__content">
              <a class="d-flex" href=""><img src="{{ asset($buyComic['img']) }}" alt="">{{ $buyComic['text'] }}</a>
           </div>
               
           @endforeach
       </div>
    </section>
    <!-- buy comics / -->

@endsection