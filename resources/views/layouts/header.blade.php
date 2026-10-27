<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img
                    src="{{ asset('assets/images/logo/logo_vzoo.webp') }}" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarContent"
                aria-controls="navBarContent" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navBarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about') }}">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('products') }}">products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('hexohm') }}">hexohm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('news') }}">news</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('gantibaju') }}">Hexgantibaju</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="width: 200px;" href="{{ url('contact') }}">contact us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
