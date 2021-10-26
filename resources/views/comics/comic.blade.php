@extends('layout.main')

@section('content')

<section class="d-flex" id="comic_wrapper">

{{-- sezione descrittiva --}}
    <div class="description">
            
        <h2>{{ $comic['title'] }}</h2>

    </div>

{{-- immagine apply now --}}
    <figure>
        <img src="{{ asset('images/adv.jpg') }}" alt="">
    </figure>

</section>
    
@endsection