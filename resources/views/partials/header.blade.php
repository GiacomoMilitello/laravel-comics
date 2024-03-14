<header>
    <nav class="w-75 mx-auto d-flex align-items-center justify-content-between">
        <figure class="">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo" height="60">
        </figure>
        <ul class="d-flex list-unstyled gap-4">
          
           @foreach ($menuLinks as $element)
                <li>
                    <a class="text-decoration-none text-uppercase d-flex align-items-center" href="#">{{ $element['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>