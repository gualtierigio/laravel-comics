<header class="d-flex">
    <div class="page-wrap d-flex">
        <a href="#home"><img src="../assets/img/dc-logo.png" alt=""></a>
        <nav>
            <ul class="d-flex">
                <li class="d-flex" 
                @foreach="links as link">
                    <a href="{{link.url}}" :class="{active : link.current}">{{link.text}}</a>
                @endforeach
                </li>
            </ul>
        </nav>
    </div>
</header>