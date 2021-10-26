@extends('layout.main')

@section('content')

<section class="d-flex" id="comic_wrapper">

{{-- sezione descrittiva --}}
    <img class="cover_comic" src="{{ $comic['thumb'] }}" alt="">

    <div class="description">
            
        <h2>{{ $comic['title'] }}</h2>
        <div>
            <p>{{ $comic['price'] }}</p>
        </div>
        <p>{{ $comic['description'] }}</p>

    </div>

{{-- immagine apply now --}}
    <figure>
        <img src="{{ asset('images/adv.jpg') }}" alt="">
    </figure>

</section>
    
@endsection