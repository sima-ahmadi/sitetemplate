@extends('layout.app')
@section('content')
<!--====  End of Navigation Section  ====-->


<!--================================
=            Page Title            =
=================================-->

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>نظرات و پیشنهادات شما عزیزان</h3>
				</div>
				<ol class="breadcrumb justify-content-center p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.html">خانه</a></li>
				  <li class="breadcrumb-item active">نظرات و پیشنهادات کاربران</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<section class="section contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>ثبت نظر شما <span class="alternate"></span></h3>
					<p>ثبت نظر شما عزیزان باعث می شود تا روند کاری کارشناسان ایران تیک بهبود پیدا کند</p>
				</div>
			</div>
		</div>
		<form action="#" class="row">
			<div class="col-md-6">
				<input type="text" class="form-control main" name="name" id="name" placeholder="نام و نام خانوادگی">
			</div>
			<div class="col-md-6">
				<input type="email" class="form-control main" name="email" id="email" placeholder="ایمیل">
			</div>
			<div class="col-md-12">
				<input type="text" class="form-control main" name="phone" id="phone" placeholder="تلفن">
			</div>
			<div class="col-md-12">
				<textarea name="message" id="message" class="form-control main" rows="10" placeholder="پیام شما"></textarea>
			</div>
			<div class="col-12 text-center">
				<button type="submit" class="btn btn-main-md">ارسال نظر</button>
			</div>
		</form>
	</div>
</section>

@endsection