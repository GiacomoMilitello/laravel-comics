@extends('layouts.app')

@section('title', 'Dc Comics | Home')

@section('main')
    <main>
        <div id="content-here" class="pb-5">
            <figure id="jumbo" class="mb-5">
                <span class="text-white fw-bold py-2 px-3">CURRENT SERIES</span>
            </figure>
            
            <div class="row w-75 mx-auto">

                @foreach ($comics as $element)

                    <div class="col-2">
                    <figure style="background-image: url('{{ $element['thumb'] }}')">
                    </figure>
                        <h4 class="text-uppercase text-white pt-3 pb-5">{{ $element['title'] }}</h4>
                    </div>

                @endforeach


            </div>

            <div class="text-center">
                <button type="button" class="py-2 px-3 fw-bold">LOAD MORE</button>
            </div>
        </div>

        <div id="our-shop" class="">
            <ul class="d-flex justify-content-between  list-unstyled gap-4 w-75 mx-auto">
                @foreach ($shops as $shop)

                    <li  class="">

                        <a class="text-decoration-none text-uppercase d-flex align-items-center text-white gap-3 py-4" aria-current="page" href="#">
                            <figure style="background-image: url('{{ Vite::asset($shop['image']) }}')">
                            </figure>
                            {{ $shop['name']}}
                        </a>
                    </li>

                @endforeach
            </ul>
        </div>
    </main>
@endsection