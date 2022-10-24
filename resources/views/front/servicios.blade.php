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
		<div class="row text-white">
			<div class="col-md-8 col-sm-12 mx-auto">
				<div class="row">
					<div class="col-md-5 text-center">
						<img src="{{ asset('img/design/DetalleProducto_03.png') }}" alt="" class="img-fluid">
					</div>
					<div class="col-md-7 col-sm-12">
						<div class="row">
							<div class="col">
								<p class="display-4" style="color: #6678FF;">Seguro de gastos medicos</p>
							</div>
						</div>
						<div class="row py-3">
							<div class="col" style="text-align: justify;">
								Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum, itaque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sunt earum voluptate repudiandae quas quae, non et. Eveniet tenetur aliquam alias, unde recusandae corrupti at. Neque sequi necessitatibus architecto sunt!
							</div>
						</div>
						<div class="row py-3">
							<div class="col" style="text-align: justify;">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, voluptatem?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non repellat tempora perferendis distinctio, nostrum aspernatur!
							</div>
						</div>
						<div class="row py-2">
							<div class="col">
								<a href="#" class="btn btn-primary border-0 py-2 px-5 text-dark" style="background-color: #8B98FF;"><h5>agendar</h5></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row py-5 px-5">
			<div class="col px-4">
				<hr style="background-color: white; height: 2px;">
			</div>
		</div>
		<div class="row px-5">
			<div class="col-md-12 col-sm-12">
				<div class="accordion p-0" id="accordionExample">
					<div class="accordion-item border-0"  style="background-color: #262E5F;">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  style="background-color: #262E5F;">
								<div class="row">
									<div class="col-md-12 py-0 m-0">
										<p class="display-4" style="color: #6678FF;">Nuestras opciones</p>
									</div>
									<div class="col-md-12 py-0 m-0">
										<img src="{{ asset('img/design/barra_.png') }}" alt="" class="img-fluid">
									</div>
								</div>
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show text-white" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
							</div>
						</div>
					</div>
					<div class="accordion-item border-0" style="background-color: #262E5F;">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: #262E5F;">
								<div class="row">
									<div class="col-md-12 py-0 m-0">
										<p class="display-4" style="color: #6678FF;">Requisitos</p>
									</div>
									<div class="col-md-12 py-0 m-0">
										<img src="{{ asset('img/design/barra_.png') }}" alt="" class="img-fluid">
									</div>
								</div>
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse text-white" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
							</div>
						</div>
					</div>
					<div class="accordion-item border-0" style="background-color: #262E5F;">
						<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: #262E5F;">
								<div class="row">
									<div class="col-md-12 py-0 m-0">
										<p class="display-4" style="color: #6678FF;">Requisitos</p>
									</div>
									<div class="col-md-12 py-0 m-0">
										<img src="{{ asset('img/design/barra_.png') }}" alt="" class="img-fluid">
									</div>
								</div>
							</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse text-white" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
							</div>
						</div>
					</div>
					<div class="accordion-item border-0" style="background-color: #262E5F;">
						<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background-color: #262E5F;">
								<div class="row">
									<div class="col-md-12 py-0 m-0">
										<p class="display-4" style="color: #6678FF;">Requisitos</p>
									</div>
									<div class="col-md-12 py-0 m-0">
										<img src="{{ asset('img/design/barra_.png') }}" alt="" class="img-fluid">
									</div>
								</div>
							</button>
						</h2>
						<div id="collapseFour" class="accordion-collapse collapse text-white" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row px-5">
			<div class="col-md-2 col-sm-12 px-5 py-3 text-white">
				<a href="#" style="text-decoration: none; color: white;" class="boton-link">
					<div class="row">
						<div class="col-md-3 col-sm-6 px-0 mx-auto">
							<img src="{{ asset('img/design/DetalleProducto_07.png') }}" alt="" class="img-descarga">
						</div>
						<div class="col-md-9 col-sm-6 px-0 mx-auto">
							<h5>Descarga Nuestra información</h5>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row text-center py-5 px-3">
			<div class="col-md-4 px-0 py-3">
				<img src="{{ asset('img/design/DetalleProducto_10.png') }}" alt="" class="img-fluid" width="80%">
			</div>
			<div class="col-md-8 px-0 py-3">
				<img src="{{ asset('img/design/DetalleProducto_12.png') }}" alt="" class="img-fluid" width="90%">
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



