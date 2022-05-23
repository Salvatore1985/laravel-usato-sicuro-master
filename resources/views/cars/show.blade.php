@extends('layouts.app')

@section('title', 'Add Car')

@section('content')

    <section class="container-fluid px-5" id="car-detail">
        <div class="row">
            <div class="col-12 py-1">

                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <a href="{{ route('home') }}" class="btn btn-dark" tabindex="-1" role="button"
                    aria-disabled="true">Home</a>
                <a href="{{ route('cars.index') }}" class="ms-2 btn btn-dark" tabindex="-1" role="button"
                    aria-disabled="true">Cars</a>
            </div>
        </div>
        <div class="row justify-content-center align-items-center h-75">
            <div class="col-5 card p-4" id="car-info">

                <h4> {{ ucfirst($car->marca) }} - {{ ucfirst($car->model) }} </h4>
                <p class="mb-0">Porte: {{ $car->porte }}</p>
                <p class="mb-0 py-2">Immatricolazione: {{ date('Y', strtotime($car->data_immatricolazione)) }}</p>
                <p class="mb-0">Alimentazione: {{ $car->alimentazione }}</p>
                <p class="mb-0 py-2 text-danger fw-bold">Price: &euro;{{ $car->prezzo }}</p>
                <p class="fst-italic">{{ $car->is_new ? 'Nuova' : 'Usata' }}</p>

                @switch($car->marca)
                    @case('citroen')
                        <img src="https://immagini.alvolante.it/sites/default/files/styles/image_gallery_big/public/news_galleria/2021/09/citroen-c3-2022-india-america-latina_2.jpg?itok=PerE0fEL"
                            alt="">
                    @break

                    @case('ford')
                        <img src="https://www.ford.it/content/dam/guxeu/de/vehicle-images/puma/ford-promotions-de-puma_st_line-16x9-2160x1215-grey-puma-st-line.jpg.renditions.original.png"
                            alt="">
                    @break

                    @case('maserati')
                        <img src="https://maserati.scene7.com/is/image/maserati/maserati/international/Models/default/2022/ghibli/gh_front.png?$600x2000$&fmt=png-alpha&fit=constrain"
                            alt="">
                    @break

                    @case('renault')
                        <img src="https://cdn.motor1.com/images/mgl/Zook3/s3/promozione-renault-arkana-hybrid.jpg" alt="">
                    @break

                    @case('hummer')
                        <img src="https://www.reportmotori.it/wp-content/uploads/2021/03/Hummer-H1-Mil-Spec-Auto-610x349.jpg"
                            alt="">
                    @break
                @endswitch

            </div>
        </div>
    </section>

@endsection
