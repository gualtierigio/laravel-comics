<header class="d-flex">
    <div class="page-wrap d-flex">
        <a href="#"><img src="{{ asset('images/dc-logo.png')}}" alt=""></a>
        <nav>
            <ul class="d-flex">
                @foreach($links as $link)
                <li class="d-flex nav"> 
                    <a href="{{ $link['route'] }}">
                        {{ $link['text'] }}
                    </a>
                @endforeach
                </li>
            </ul>
        </nav>
    </div>
</header>
<section id="jumbotron">
    <img src="{{ asset('images/jumbotron.jpg') }}" alt="">
 </section>