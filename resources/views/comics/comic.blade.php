@extends('layout.main')

@section('content')

<section class="d-flex" id="comic_wrapper">
{{-- sezione descrittiva --}}
    <div class="description-wrapper">
        <img class="cover_comic" src="{{ $comic['thumb'] }}" alt="img thumb">
        <div class="description">   
            <h2>{{ $comic['title'] }}</h2>

            <div class="tab-wrapper d-flex justify-content-between">
                <div class="price-wrap d-flex justify-content-between align-items-center">
                    <p>U.S Price: {{ $comic['price'] }}</p>
                    <p>AVALIABLE</p>
                </div>
                <div class="availability">
                    <p>Check Availability</p>
                </div>
            </div>

            <div>
                <p>{{ $comic['description'] }}</p>
            </div>
        </div>
    </div>
{{-- immagine apply now --}}
    <div class="advert-superman">
        <h2>advertisement</h2>
        <figure>
            <img src="{{ asset('images/adv.jpg') }}" alt="">
        </figure>
    </div>

</section>
    
@endsection