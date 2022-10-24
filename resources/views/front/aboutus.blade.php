@extends('layouts.front')

@section('title', 'Nosotros')
@section('styleExtras')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/owlCarousel/assets/owl.carousel.css') }}">
	{{-- <link rel="stylesheet" href="{{asset('css/nosotros.css')}}"> --}}
@endsection

@section('content')

<main>
    <div class="container-fluid">
        <div class="row py-5 px-5 mb-5">
            <div class="col-md-6">
                <img src="{{ asset('img/design/nosotros_03.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-4">
                <br><br><br><br><br><br><br><br><br><br>
                <div class="row">
                    <div class="col-md-4 mx-auto text-center">
                        <img src="{{ asset('img/design/nosotros_06.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h5 class="display-5 text-center" style="color: #6678FF;">morones brokers</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center text-white">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sunt, porro cum voluptatum rem dolore!</p>
                        <p> Harum quibusdam soluta rem, eaque doloremque, magnam a sunt libero doloribus aspernatur omnis ratione aliquid mollitia delectus eos repellat veritatis, animi voluptas!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mx-auto text-center">
                        <a href="#" class="btn btn-primary border-0 py-2 px-5 text-dark" style="background-color: #8B98FF;"><h5>agendar</h5></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5 mb-5">
            <div class="col">
                <div class="row">
                    <div class="col-md-3 mx-auto">
                        <div class="row py-5">
                            <div class="col">
                                <img src="{{ asset('img/design/nosotros_11.png') }}" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-end">
                                <h4 style="color: #6678FF;">Nuestra visión</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-end">
                                <img src="{{ asset('img/design/barra_.png') }}" alt="">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col text-white" style="text-align: justify;">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium eius reiciendis illum possimus eos assumenda.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste esse consequuntur consectetur illum sit libero nihil deserunt blanditiis obcaecati aperiam porro provident facilis ea praesentium aspernatur tenetur cupiditate, corrupti qui?</p>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-3 mx-auto">
                        <div class="row py-5">
                            <div class="col">
                                <img src="{{ asset('img/design/nosotros_13.png') }}" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-end">
                                <h4 style="color: #6678FF;">Nuestra misión</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-end">
                                <img src="{{ asset('img/design/barra_.png') }}" alt="">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col text-white" style="text-align: justify;">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium eius reiciendis illum possimus eos assumenda.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste esse consequuntur consectetur illum sit libero nihil deserunt blanditiis obcaecati aperiam porro provident facilis ea praesentium aspernatur tenetur cupiditate, corrupti qui?</p>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-3 mx-auto">
                        <div class="row py-5">
                            <div class="col">
                                <img src="{{ asset('img/design/nosotros_15.png') }}" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-end">
                                <h4 style="color: #6678FF;">Nuestros valores</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-end">
                                <img src="{{ asset('img/design/barra_.png') }}" alt="">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col text-white" style="text-align: justify;">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium eius reiciendis illum possimus eos assumenda.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste esse consequuntur consectetur illum sit libero nihil deserunt blanditiis obcaecati aperiam porro provident facilis ea praesentium aspernatur tenetur cupiditate, corrupti qui?</p>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-white mt-5 py-5">
            <div class="col">
                <div class="row py-3">
                    <div class="col mx-auto text-center">
                        <h2 class="display-3">¡Somos un gran equipo!</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mx-auto text-center mb-5">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi fugit beatae labore, assumenda nemo quod nam consequatur doloribus. Vero, aliquid?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 col-sm-12 mx-auto text-center mb-5">
                        <img src="{{ asset('img/design/moroneshome_29.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('img/design/moroneshome_31.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('img/design/moroneshome_23.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('img/design/moroneshome_26.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('img/design/moroneshome_40.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('img/design/moroneshome_42.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('img/design/moroneshome_44.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('img/design/moroneshome_38.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

