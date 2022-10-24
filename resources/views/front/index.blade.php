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
<main class="principal" style="background-color: #262E5F;">
  <div class="container-fluid mt-5 mb-5">
    <div class="row mt-5">
      <div class="col-md-8 mt-5 mx-auto">
          <div class="row">
              <div class="col-md-6 col-sm-12">
                  <div class="row">
                      <div class="col">
                          <h1 class="display-4" style="color: #6678FF;">Libertad, Seguridad, Plenitud</h1>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col text-white">
                          <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, perferendis. </p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, numquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, pariatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis vero modi id rem, repudiandae libero.</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <a href="#" class="btn btn-primary border-0 py-2 px-5 text-dark" style="background-color: #8B98FF;"><h5>agendar</h5></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 mt-5 py-5">
                  <img src="{{ asset('img/design/moroneshome_10.png') }}" alt="" class="img-fluid">
              </div>
          </div>
      </div>
  </div>
      <div class="row">
          <div id="carrusel">
              <div>
                  <div class="card border-0">
                      <img src="{{ asset('img/design/moroneshome_13.png') }}" alt="" class="img-fluid card-img-top">
                      <div class="card-body border-end border-bottom" style="background-color: #262E5F;">
                          <div class="row">
                              <div class="col text-end">
                                  <h2 style="color: #6678FF;">Gastos medicos</h2>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12 text-end">
                                  <img src="{{ asset('img/design/barra_.png') }}" alt="" class="img-fluid">
                              </div>
                          </div>
                          <div class="row text-end text-white py-5">
                              <div class="col">
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quidem laborum sit, quis totam doloribus!</p>
                              </div>
                          </div>
                          <div class="row text-end">
                              <div class="col">
                                  <a href="#" class="btn" style="background-color: #8B98FF;"><i class="fa-solid fa-chevron-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div>
                  <div class="card border-0">
                      <img src="{{ asset('img/design/moroneshome_14.png') }}" alt="" class="img-fluid card-img-top">
                      <div class="card-body border-end border-bottom" style="background-color: #262E5F;">
                          <div class="row">
                              <div class="col text-end">
                                  <h2 style="color: #6678FF;">Gastos medicos</h2>
                              </div>
                          </div>
                          <div class="row text-end">
                              <div class="col text-end">
                                <img src="{{ asset('img/design/barra_.png') }}" alt="" class="barra img-fluid">
                              </div>
                          </div>
                          <div class="row text-end text-white py-5">
                              <div class="col">
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quidem laborum sit, quis totam doloribus!</p>
                              </div>
                          </div>
                          <div class="row text-end">
                              <div class="col">
                                  <a href="#" class="btn" style="background-color: #8B98FF;"><i class="fa-solid fa-chevron-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div>
                  <div class="card border-0">
                      <img src="{{ asset('img/design/moroneshome_15.png') }}" alt="" class="img-fluid card-img-top">
                      <div class="card-body border-end border-bottom" style="background-color: #262E5F;">
                          <div class="row">
                              <div class="col text-end">
                                  <h2 style="color: #6678FF;">Gastos medicos</h2>
                              </div>
                          </div>
                          <div class="row text-end">
                              <div class="col text-end">
                                <img src="{{ asset('img/design/barra_.png') }}" alt="" class="img-fluid">
                              </div>
                          </div>
                          <div class="row text-end text-white py-5">
                              <div class="col">
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quidem laborum sit, quis totam doloribus!</p>
                              </div>
                          </div>
                          <div class="row text-end">
                              <div class="col">
                                  <a href="#" class="btn" style="background-color: #8B98FF;"><i class="fa-solid fa-chevron-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div>
                  <div class="card border-0">
                      <img src="{{ asset('img/design/moroneshome_16.png') }}" alt="" class="img-fluid card-img-top">
                      <div class="card-body border-end border-bottom" style="background-color: #262E5F;">
                          <div class="row">
                              <div class="col text-end">
                                  <h2 style="color: #6678FF;">Gastos medicos</h2>
                              </div>
                          </div>
                          <div class="row text-end">
                              <div class="col text-end">
                                <img src="{{ asset('img/design/barra_.png') }}" alt="" class="img-fluid">
                              </div>
                          </div>
                          <div class="row text-end text-white py-5">
                              <div class="col">
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quidem laborum sit, quis totam doloribus!</p>
                              </div>
                          </div>
                          <div class="row text-end">
                              <div class="col">
                                  <a href="#" class="btn" style="background-color: #8B98FF;"><i class="fa-solid fa-chevron-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div>
                  <div class="card border-0">
                      <img src="{{ asset('img/design/moroneshome_13.png') }}" alt="" class="img-fluid card-img-top">
                      <div class="card-body border-end border-bottom" style="background-color: #262E5F;">
                          <div class="row">
                              <div class="col text-end">
                                  <h2 style="color: #6678FF;">Gastos medicos</h2>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12 text-end">
                                <img src="{{ asset('img/design/barra_.png') }}" alt="" class="img-fluid">
                              </div>
                          </div>
                          <div class="row text-end text-white py-5">
                              <div class="col">
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quidem laborum sit, quis totam doloribus!</p>
                              </div>
                          </div>
                          <div class="row text-end">
                              <div class="col">
                                  <a href="#" class="btn" style="background-color: #8B98FF;"><i class="fa-solid fa-chevron-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row text-white py-5">
          <div class="col-md-12 text-center mx-auto mt-5">
              <img src="{{ asset('img/design/moroneshome_03.png') }}" alt="">
          </div>
          <div class="col-md-6 text-center mx-auto py-2">
              <h1 class="display-4" style="color: #6678FF;">Agenda una asesoría</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, quasi rem quis repudiandae quidem quaerat ipsam veniam! Quo, quam cum. Lorem ipsum dolor sit amet.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, inventore? Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-md-10 text-center mx-auto py-1">
              <div class="row">
                  <div class="col-md-3 mx-auto">
                      <input type="text" class="form-control px-3" placeholder="Nombre">
                  </div>
                  <div class="col-md-3 mx-auto">
                      <input type="text" class="form-control px-3" placeholder="Correo">
                  </div>
                  <div class="col-md-3 mx-auto">
                      <input type="text" class="form-control px-3" placeholder="Whatsapp">
                  </div>
                  <div class="col-md-3 mx-auto">
                      <input type="text" class="form-control px-3" placeholder="Interés">
                  </div>
              </div>
              <div class="row py-5">
                  <div class="col-md-2 mx-auto text-center">
                      <a href="#" class="btn btn-primary border-0 py-2 px-5 text-dark" style="background-color: #8B98FF;"><h5>agendar</h5></a>
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

@section('jqueryExtra')

<script>
  $(document).ready(function() {
    $('#carrusel').slick({
      dots: true,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
   });
</script>
@endsection
