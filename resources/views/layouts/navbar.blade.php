    @section('title','navbar')
    <nav class="navbar navbar-expand-md navbar-dark navbar-091整骨院">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', '091整骨院') }}
            </a>
                <ul class="navbar-nav ml-auto">
                </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">TOPページ <span class="sr-only">(current)></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">施術メニュー</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">お客様の声</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">お問合せ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ログイン</a>
                </li>
            </ul>
        </div>
    </nav>
