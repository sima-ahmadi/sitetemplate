@extends('layout.app')
@section('content')
<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>خرید اینترنتی {{$event->name}}</h3>
				</div>
				<ol class="breadcrumb justify-content-center p-0 m-0">
				  <li class="breadcrumb-item"><a href="/">خانه</a></li>
				  <li class="breadcrumb-item active"> خرید اینترنتی بلیط {{$event->name}}</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<section class="section single-speaker">
	<div class="container">
		<div class="block">
			<div class="row">
				<div class="col-lg-5 col-md-6 align-self-md-center">
					<div class="image-block">
						<img src="{{$event->image}}" class="img-fluid" alt="{{$event->name}}">
					</div>
				</div>
				<div class="col-lg-7 col-md-6 align-self-center">
					<div class="content-block">
						<div class="name">
							<h3>{{$event->name}}</h3>
						</div>

						<table class = "table table-bordered">
							
							<thead>
							   <tr>
								  <th>قیمت بلیط ها</th>
							   </tr>
							</thead>
							
							<tbody>
							   <tr>
								  <td>جایگاه A: {{number_format($event->a_price)}}</td>
							   </tr>
							   
							   <tr>
                                <td>جایگاه B: {{number_format($event->b_price)}}</td>
							   </tr>
							   
							   <tr>
                                <td>جایگاه C: {{number_format($event->c_price)}}</td>
							   </tr>
							 
							</tbody>
							 
						 </table>


						<div class="social-profiles">
							<h5>خرید بلیط در شبکه های اجتماعی</h5>
							<ul class="list-inline social-list">
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-skype"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-pinterest-p"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
			<div class="row mx-md-n5" style="direction: rtl;text-align: right;">
				<div class="col-md-12" padding-top="20px" >
					<table class = "table table-bordered">
                        <thead>
						   <tr>
							  <th>خرید بلیط</th>
						   </tr>
						</thead>	
						<tbody>
                            @foreach ($event->sanses as $sans)
                                <tr>
                                <td>{{$sans->date}}  <a type="button" class="btn btn-outline-primary" href="/sans/{{$sans->id}}/buy" style="width: 100px;">خرید بلیط </a> </td>
                                </tr>
                            @endforeach
						</tbody>
					</table>
				</div>
			</div>
	</div>
</section>
@endsection
