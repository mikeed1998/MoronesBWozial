@extends('layouts.front')

@section('title', 'Inicio')
@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{ asset('vendor/owlCarousel/assets/owl.carousel.css') }}">
    

	{{-- <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}"> --}}
@endsection
@section('styleExtras')

@endsection
@section('content')

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-center mx-auto">
                <p class="display-4" style="color: #6678FF;">¡Estamos para ayudarte!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 mx-auto text-center text-white">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officia doloremque earum aperiam itaque corporis in ipsam distinctio praesentium, impedit amet hic provident iure blanditiis dolor rem sequi ipsum dolores.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-sm-6 mx-auto py-1">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <input type="text" class="form-control px-3" placeholder="Nombre">
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <input type="text" class="form-control px-3" placeholder="Correo">
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <input type="text" class="form-control px-3" placeholder="Whatsapp">
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <input type="text" class="form-control px-3" placeholder="Interés">
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-2 mx-auto text-center">
                        <a href="#" class="btn btn-primary border-0 py-2 px-5 text-dark" style="background-color: #8B98FF;"><h5>enviar</h5></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 py-5 mb-5">
            <div class="col-contacto col-md-9 mx-auto">
                <div class="row">
                    <div class="col-md-2 col-sm-6 text-center">
                        <img src="{{ asset('img/design/nosotros_06.png') }}" alt="">
                        <img src="{{ asset('img/design/moroneshome_05.png') }}" alt="">
                    </div>
                    <div class="col-md-1 col-sm-12 py-5 mt-5 px-5">
                        <img src="{{ asset('img/design/lineaV.png') }}" alt="" style="height: 80px; width: 5px;" class="lineaV">
                    </div>
                    <div class="col-md-3 col-sm-12 text-white py-5 mt-5 px-0">
                        <h4 class="m-0">contacto@moronesbrokers.com</h4>
                        <h4 class="m-0">Tel. 3338096501</h4>
                        <h4 class="m-0">Whatsapp: 3338096501</h4>
                    </div>
                    <div class="col-md-1 col-sm-12 py-5 mt-5 px-5">
                        <img src="{{ asset('img/design/lineaV.png') }}" alt="" style="height: 80px; width: 5px;" class="lineaV">
                    </div>
                    <div class="col-md-3 col-sm-12 text-white py-5 mt-5 px-0">
                        <h4 class="m-0">Avenida lapizlazuli 2074 Int3</h4>
                        <h4 class="m-0">Residencial victoria.</h4>
                        <h4 class="m-0">Zapopán, Jalisco.</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 mt-0">
            <div class="col px-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d59726.325260510064!2d-103.35974389558793!3d20.673837004762593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1660254201213!5m2!1ses-419!2smx" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</main>

@endsection

