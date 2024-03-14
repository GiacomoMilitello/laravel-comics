<footer>
    <div id=footer-links>
        <div class="w-75 mx-auto row">
            <div class="col-6 py-5 d-flex gap-5">
                <div class="d-flex flex-column gap-4">
<!-- DC COMICS -->
                    <ul class="list-unstyled">
                        <li class="text-white fw-bold">DC COMICS</li>
                        @foreach ($coomics as $item)
                            <li>
                                <a class="text-decoration-none d-flex align-items-center text-white opacity-50 fw-light" aria-current="page" href="#">{{ $item['name']}}</a>
                            </li>
                        @endforeach
                    </ul>
<!-- SHOP -->
                    <ul class="list-unstyled">
                        <li class="text-white fw-bold">SHOP</li>
                        @foreach ($shoops as $item)
                            <li>
                                <a class="text-decoration-none d-flex align-items-center text-white opacity-50 fw-light" aria-current="page" href="#">{{ $item['name']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
<!-- DC -->
                <ul class="list-unstyled">
                    <li class="text-white fw-bold">DC</li>
                    @foreach ($dc as $item)
                        <li>
                            <a class="text-decoration-none d-flex align-items-center text-white opacity-50 fw-light" aria-current="page" href="#">{{ $item['name']}}</a>
                        </li>
                    @endforeach
                </ul>
<!-- SITES -->
                <ul class="list-unstyled">
                    <li class="text-white fw-bold">SITES</li>
                    @foreach ($sites as $item)
                        <li>
                            <a class="text-decoration-none d-flex align-items-center text-white opacity-50 fw-light" aria-current="page" href="#">{{ $item['name']}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div id="dc-logo" class="col-6"></div>
        </div>

        <div id="sign-up" class="">
            <div class="w-75 mx-auto py-4 d-flex justify-content-between align-items-center ">
                <button type="button" class="py-2 px-3">SIGN-UP-NOW!</button>
                <ul class="d-flex list-unstyled gap-3">
                    <li class="fw-bold d-flex align-items-center ">FOLLOW US</li>
                    @foreach ($socials as $element)
                        <li class="py-4">
                            <a class="text-decoration-none text-uppercase d-flex align-items-center text-white gap-3 " aria-current="page" href="#">
                            <figure>
                                <img class="img-fluid" src="{{ Vite::asset($element['image']) }}" alt="Social image">
                            </figure>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>