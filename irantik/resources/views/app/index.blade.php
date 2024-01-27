@extends('layout.app')
@section('content')

<!--============================
=            Banner            =
=============================-->

<img src="/images/mehdi.jpg" alt="Banner">
	
<!--====  End of Banner  ====-->

<!--===========================
=            About            =
============================-->

<section class="section about">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 align-self-center">
				<div class="image-block bg-about">
					<img class="img-fluid" src="/images/speakers/irn.png" alt="">
				</div>
			</div>
			<div class="col-lg-8 col-md-6 align-self-center">
				<div class="content-block">
					<h2>درباره <span class="alternate">ایران تیک</span></h2>
					<div class="description-one">
						<p>
							ایران تیک نوآورانه ترین تجریه های سرگرمی را در خود جای داده است و تلاش داشته از سال ۱۳۸۷به هر کاربر خود تجربه یک خرید عالی را ارائه دهد. ما در ایران تیک به عنوان یکی از بزرگترین پلتفرم های فروش بلیت سینما، تئاتر و سرگرمی در تلاش هستیم تا بطور مداوم به سمت خلق تجربه های جدید برای کاربران خود قدم برداریم. همکاری با برترین سینماهای کشور، برگزاری و فروش بلیت برترین برنامه های تئاتر از جمله فعالیت های اصلی ایران تیک در این سال ها بوده است. علاوه بر فروش بلیت جدیدترین فیلم های سینمایی، ارائه خدمات به سازمان و شرکت های دولتی و خصوصی برای اکران های اختصاصی، فروش بلیت جشنواره فیلم فجر و همکاری با برترین هنرمندان عرصه تئاتر از دیگر فعالیت های ما بوده است. ایران تیک با ارائه برنامه‌های مفرح تلاش می کند تا شما با کمترین هزینه و بدون نگرانی و اتلاف وقت در خرید حضوری و صف های طولانی تجربه دلچسبی را در کنار دوستان و خانواده خود داشته باشید. تمامی خدمات ایران تیک، حسب مورد مجوزهای لازم را از مراجع مربوطه اخذ کرده‌ و تابع قوانین و مقررات جمهوری اسلامی ایران است.
						</p>
					</div>
					<ul class="list-inline">
						<li class="list-inline-item">
							<a href="#" class="btn btn-main-md">خرید بلیط</a>
						</li>
						<li class="list-inline-item">
							<a href="#" class="btn btn-transparent-md">اطلاعات بیشتر</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of About  ====-->

<!--==============================
=            Speakers            =
===============================-->

<section class="section speakers bg-speaker overlay-lighter">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section Title -->
				<div class="section-title white">
					<h3>خواننده <span class="alternate">مورد علاقت؟</span></h3>
					<p>در اینجا میتوانید بلیط کنسرت خواننده مورد علاقه اتان را خرید کنید</p>
				</div>
			</div>
		</div>
		<div class="row">

            @foreach ($events as $event)
            <div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 1 -->
				<div class="speaker-item">
					<div class="image">
						<img src="{{$event->image}}" alt="{{$event->name}}" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="/event/{{$event->id}}">{{$event->name}}</a></h5>
						<p>{{explode(' ', $event->sanses[0]->date)[0]}}</p>
						<p>{{$event->salon}}</p>
					</div>
				</div>
			</div>
            @endforeach

		</div>
	</div>
</section>

<!--====  End of Speakers  ====-->

<!--==============================
=            Schedule            =
===============================-->

<section class="section schedule">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3><span class="alternate">برنامه کنسرت ها</span></h3>
					<p>در این جا می توانید نزدیک ترین تاریخ کنسرت را مشاهده کنید</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="schedule-tab">
					<ul class="nav nav-pills text-center">
					  <li class="nav-item">
					    <a class="nav-link active" href="#nov20" data-toggle="pill">
					    	آذر
					    	<span>تاریخ 1402/09/09</span>
					    </a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#nov21" data-toggle="pill">
							دی
					    	<span>تاریخ 1402/10/10</span>
					    </a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#nov22" data-toggle="pill">
							بهمن
					    	<span>تاریخ 1402/11/04</span>
					    </a>
					  </li>
					</ul>
				</div>
				<div class="schedule-contents bg-schedule">
					<div class="tab-content" id="pills-tabContent">
					  <div class="tab-pane fade show active schedule-item" id="nov20">
					  	<!-- Headings -->
					  	<ul class="m-0 p-0">
					  		<li class="headings">
					  			<div class="time">زمان</div>
					  			<div class="speaker">خواننده</div>
					  			<div class="subject">نوع موزیک</div>
					  			<div class="venue">مکان</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
					  				<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">18:00</span>
										  <span class="time">21:00</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/images/speakers/speaker-thumb-one.jpg" alt="speaker-thumb-one">
										<span class="name">کنسرت علیرضا طلیسچی</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">پاپ</div>
							  		<!-- Venue -->
							  		<div class="venue">برج میلاد تهران</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">18:00</span>
										  <span class="time">21:00</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/images/speakers/speaker-thumb-two.jpg" alt="speaker-thumb-two">
										<span class="name">کنسرت بهنام بانی</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">پاپ</div>
							  		<!-- Venue -->
							  		<div class="venue">هتل اسپیناس پالاس</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">18:00</span>
										  <span class="time">21:00</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/images/speakers/speaker-thumb-three.jpg" alt="speaker-thumb-three">
										<span class="name">کنسرت بابک جهان بخش</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">پاپ</div>
							  		<!-- Venue -->
							  		<div class="venue">برج میلاد تهران</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">18:00</span>
										  <span class="time">21:00</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/images/speakers/speaker-thumb-four.jpg" alt="speaker-thumb-four">
										<span class="name">کنسرت فرزاد فرزین</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">پاپ</div>
							  		<!-- Venue -->
							  		<div class="venue">هتل اسپیناس پالاس</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">18:00</span>
										  <span class="time">21:00</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/images/speakers/speaker-thumb-five.jpg" alt="speaker-thumb-five">
										<span class="name">کنسرت حامیم</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">پاپ</div>
							  		<!-- Venue -->
							  		<div class="venue">برج میلاد تهران</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">18:00</span>
										  <span class="time">21:00</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/images/speakers/speaker-thumb-six.jpg" alt="speaker-thumb-six">
										<span class="name">کنسرت علی زند وکیلی</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">پاپ</div>
							  		<!-- Venue -->
							  		<div class="venue">برج میلاد تهران</div>
					  			</div>
					  		</li>
					  	</ul>
					  </div>
					  <div class="tab-pane fade schedule-item" id="nov21">
					  	<!-- Headings -->
					  	<ul class="m-0 p-0">
							<li class="headings">
								<div class="time">زمان</div>
								<div class="speaker">خواننده</div>
								<div class="subject">نوع موزیک</div>
								<div class="venue">مکان</div>
							</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
								<div class="block">
									<!-- time -->
									<div class="time">
										<i class="fa fa-clock-o"></i>
										<span class="time">18:00</span>
										<span class="time">21:00</span>
									</div>
									<!-- Speaker -->
									<div class="speaker">
										<img src="/images/speakers/speaker-thumb-one.jpg" alt="speaker-thumb-one">
									  <span class="name">کنسرت علیرضا طلیسچی</span>
									</div>
									<!-- Subject -->
									<div class="subject">پاپ</div>
									<!-- Venue -->
									<div class="venue">برج میلاد تهران</div>
								</div>
							</li>
							<!-- Schedule Details -->
							<li class="schedule-details">
								<div class="block">
									<!-- time -->
									<div class="time">
										<i class="fa fa-clock-o"></i>
										<span class="time">18:00</span>
										<span class="time">21:00</span>
									</div>
									<!-- Speaker -->
									<div class="speaker">
										<img src="/images/speakers/speaker-thumb-two.jpg" alt="speaker-thumb-two">
									  <span class="name">کنسرت بهنام بانی</span>
									</div>
									<!-- Subject -->
									<div class="subject">پاپ</div>
									<!-- Venue -->
									<div class="venue">هتل اسپیناس پالاس</div>
								</div>
							</li>
							<!-- Schedule Details -->
							<li class="schedule-details">
								<div class="block">
									<!-- time -->
									<div class="time">
										<i class="fa fa-clock-o"></i>
										<span class="time">18:00</span>
										<span class="time">21:00</span>
									</div>
									<!-- Speaker -->
									<div class="speaker">
										<img src="/images/speakers/speaker-thumb-three.jpg" alt="speaker-thumb-three">
									  <span class="name">کنسرت بابک جهان بخش</span>
									</div>
									<!-- Subject -->
									<div class="subject">پاپ</div>
									<!-- Venue -->
									<div class="venue">برج میلاد تهران</div>
								</div>
							</li>
							<!-- Schedule Details -->
							<li class="schedule-details">
								<div class="block">
									<!-- time -->
									<div class="time">
										<i class="fa fa-clock-o"></i>
										<span class="time">18:00</span>
										<span class="time">21:00</span>
									</div>
									<!-- Speaker -->
									<div class="speaker">
										<img src="/images/speakers/speaker-thumb-four.jpg" alt="speaker-thumb-four">
									  <span class="name">کنسرت فرزاد فرزین</span>
									</div>
									<!-- Subject -->
									<div class="subject">پاپ</div>
									<!-- Venue -->
									<div class="venue">هتل اسپیناس پالاس</div>
								</div>
							</li>
							<!-- Schedule Details -->
							<li class="schedule-details">
								<div class="block">
									<!-- time -->
									<div class="time">
										<i class="fa fa-clock-o"></i>
										<span class="time">18:00</span>
										<span class="time">21:00</span>
									</div>
									<!-- Speaker -->
									<div class="speaker">
										<img src="/images/speakers/speaker-thumb-five.jpg" alt="speaker-thumb-five">
									  <span class="name">کنسرت حامیم</span>
									</div>
									<!-- Subject -->
									<div class="subject">پاپ</div>
									<!-- Venue -->
									<div class="venue">برج میلاد تهران</div>
								</div>
							</li>
							<!-- Schedule Details -->
							<li class="schedule-details">
								<div class="block">
									<!-- time -->
									<div class="time">
										<i class="fa fa-clock-o"></i>
										<span class="time">18:00</span>
										<span class="time">21:00</span>
									</div>
									<!-- Speaker -->
									<div class="speaker">
										<img src="/images/speakers/speaker-thumb-six.jpg" alt="speaker-thumb-six">
									  <span class="name">کنسرت علی زند وکیلی</span>
									</div>
									<!-- Subject -->
									<div class="subject">پاپ</div>
									<!-- Venue -->
									<div class="venue">برج میلاد تهران</div>
								</div>
							</li>
						</ul>
					</div>
					  <div class="tab-pane fade schedule-item" id="nov22">
					  	<!-- Headings -->
					  	<ul class="m-0 p-0">
							<li class="headings">
								<div class="time">زمان</div>
								<div class="speaker">خواننده</div>
								<div class="subject">نوع موزیک</div>
								<div class="venue">مکان</div>
							</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
								<div class="block">
									<!-- time -->
									<div class="time">
										<i class="fa fa-clock-o"></i>
										<span class="time">18:00</span>
										<span class="time">21:00</span>
									</div>
									<!-- Speaker -->
									<div class="speaker">
										<img src="/images/speakers/speaker-thumb-two.jpg" alt="speaker-thumb-two">
									  <span class="name">کنسرت بهنام بانی</span>
									</div>
									<!-- Subject -->
									<div class="subject">پاپ</div>
									<!-- Venue -->
									<div class="venue">هتل اسپیناس پالاس</div>
								</div>
							</li>
							<!-- Schedule Details -->
							<li class="schedule-details">
								<div class="block">
									<!-- time -->
									<div class="time">
										<i class="fa fa-clock-o"></i>
										<span class="time">18:00</span>
										<span class="time">21:00</span>
									</div>
									<!-- Speaker -->
									<div class="speaker">
										<img src="/images/speakers/speaker-thumb-three.jpg" alt="speaker-thumb-three">
									  <span class="name">کنسرت بابک جهان بخش</span>
									</div>
									<!-- Subject -->
									<div class="subject">پاپ</div>
									<!-- Venue -->
									<div class="venue">برج میلاد تهران</div>
								</div>
							</li>
							<!-- Schedule Details -->
							<li class="schedule-details">
								<div class="block">
									<!-- time -->
									<div class="time">
										<i class="fa fa-clock-o"></i>
										<span class="time">18:00</span>
										<span class="time">21:00</span>
									</div>
									<!-- Speaker -->
									<div class="speaker">
										<img src="/images/speakers/speaker-thumb-four.jpg" alt="speaker-thumb-four">
									  <span class="name">کنسرت فرزاد فرزین</span>
									</div>
									<!-- Subject -->
									<div class="subject">پاپ</div>
									<!-- Venue -->
									<div class="venue">هتل اسپیناس پالاس</div>
								</div>
							</li>
							<!-- Schedule Details -->
							<li class="schedule-details">
								<div class="block">
									<!-- time -->
									<div class="time">
										<i class="fa fa-clock-o"></i>
										<span class="time">18:00</span>
										<span class="time">21:00</span>
									</div>
									<!-- Speaker -->
									<div class="speaker">
										<img src="/images/speakers/speaker-thumb-five.jpg" alt="speaker-thumb-five">
									  <span class="name">کنسرت حامیم</span>
									</div>
									<!-- Subject -->
									<div class="subject">پاپ</div>
									<!-- Venue -->
									<div class="venue">برج میلاد تهران</div>
								</div>
							</li>
							<!-- Schedule Details -->
							<li class="schedule-details">
								<div class="block">
									<!-- time -->
									<div class="time">
										<i class="fa fa-clock-o"></i>
										<span class="time">18:00</span>
										<span class="time">21:00</span>
									</div>
									<!-- Speaker -->
									<div class="speaker">
										<img src="/images/speakers/speaker-thumb-six.jpg" alt="speaker-thumb-six">
									  <span class="name">کنسرت علی زند وکیلی</span>
									</div>
									<!-- Subject -->
									<div class="subject">پاپ</div>
									<!-- Venue -->
									<div class="venue">برج میلاد تهران</div>
								</div>
							</li>
						</ul>
					</div>
					  
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<!--====  End of Schedule  ====-->

<!--==================================
=            Registration            =
===================================-->

<section class="registration">
	<div class="container-fuild p-0">
		<div class="row">
			<div class="col-lg-6 col-md-12 p-0">
				<div class="service-block bg-service overlay-primary text-center">
					<div class="row no-gutters">
						<div class="col-6">
							<!-- Service item -->
							<div class="service-item">
								<i class="fa fa-microphone"></i>
								<h5>1 خواننده</h5>
							</div>
						</div>
						<div class="col-6">
							<!-- Service item -->
							<div class="service-item">
								<i class="fa fa-flag"></i>
								<h5>سالن 1000 نفره</h5>
							</div>
						</div>
						<div class="col-6">
							<!-- Service item -->
							<div class="service-item">
								<i class="fa fa-ticket"></i>
								<h5>800 بلیط</h5>
							</div>
						</div>
						<div class="col-6">
							<!-- Service item -->
							<div class="service-item">
								<i class="fa fa-calendar"></i>
								<h5>1 روز به یادماندنی</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 p-0">
				<div class="registration-block bg-registration overlay-dark">
					<div class="block">
						<div class="title text-left">
							<h3>ثبت نام در  <span class="alternate">ایران تیک</span></h3>
							<p>جهت ثبت نام در سایت ایران تیک فرم زیر را پر کنید</p>
						</div>
						<form action="#" class="row">
							<div class="col-md-6">
								<input type="text" class="form-control main" placeholder="نام و نام خانوادگی" required>
							</div>
							<div class="col-md-6">
								<input type="email" class="form-control main" placeholder="ایمیل" required>
							</div>
							<div class="col-md-12">
								<input type="text" class="form-control main" placeholder="شماره تماس" required>
							</div>
							
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-white-md">ثبت نام</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Registration  ====-->


<!--===================================
=            Pricing Table            =
====================================-->

<!--<section class="section pricing">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Get <span class="alternate">ticket</span></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor incididunt ut labore</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				
				<div class="pricing-item">
					<div class="pricing-heading">
						
						<div class="title">
							<h6>Starter</h6>
						</div>
						
						<div class="price">
							<h2>39.00<span>$</span></h2>
							<p>/Person</p>
						</div>
					</div>
					<div class="pricing-body">
						
						<ul class="feature-list m-0 p-0">
							<li><p><span class="fa fa-check-circle available"></span>1 Comfortable Seats</p></li>
							<li><p><span class="fa fa-check-circle available"></span>Free Lunch and Coffee</p></li>
							<li><p><span class="fa fa-times-circle unavailable"></span>Certificate</p></li>
							<li><p><span class="fa fa-times-circle unavailable"></span>Easy Access</p></li>
						</ul>
					</div>
					<div class="pricing-footer text-center">
						<a href="#" class="btn btn-transparent-md">Buy a ticket</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				
				<div class="pricing-item featured">
					<div class="pricing-heading">
						
						<div class="title">
							<h6>Standard</h6>
						</div>
						
						<div class="price">
							<h2>49.00<span>$</span></h2>
							<p>/Person</p>
						</div>
					</div>
					<div class="pricing-body">
						
						<ul class="feature-list m-0 p-0">
							<li><p><span class="fa fa-check-circle available"></span>1 Comfortable Seats</p></li>
							<li><p><span class="fa fa-check-circle available"></span>Free Lunch and Coffee</p></li>
							<li><p><span class="fa fa-check-circle available"></span>Certificate</p></li>
							<li><p><span class="fa fa-times-circle unavailable"></span>Easy Access</p></li>
						</ul>
					</div>
					<div class="pricing-footer text-center">
						<a href="#" class="btn btn-main-md">Buy a ticket</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 m-auto">
				
				<div class="pricing-item">
					<div class="pricing-heading">
						
						<div class="title">
							<h6>Platinum</h6>
						</div>
						
						<div class="price">
							<h2>99.00<span>$</span></h2>
							<p>/Person</p>
						</div>
					</div>
					<div class="pricing-body">
						
						<ul class="feature-list m-0 p-0">
							<li><p><span class="fa fa-check-circle available"></span>1 Comfortable Seats</p></li>
							<li><p><span class="fa fa-check-circle available"></span>Free Lunch and Coffee</p></li>
							<li><p><span class="fa fa-check-circle available"></span>Certificate</p></li>
							<li><p><span class="fa fa-check-circle available"></span>Easy Access</p></li>
						</ul>
					</div>
					<div class="pricing-footer text-center">
						<a href="#" class="btn btn-transparent-md">Buy a ticket</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->

<!--====  End of Pricing Table  ====-->


<!--===========================================
=            Call to Action Ticket            =
============================================-->

<section class="cta-ticket bg-ticket overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!-- Get ticket info -->
				<div class="content-block">
					<h2><span class="alternate">همین الان بلیط کنسرت خواننده دلخواهت را بخر </span></h2>
					<p>گروه ایران تیک به شما کمک می کند تا بتوانید در سریعترین زمان بلیط کنسرت خواننده مورد علاقه اتان را خریداری کنید</p>
					<a href="" class="btn btn-main-md">خرید بلیط</a>
				</div>
			</div>
		</div>
	</div>
	<div class="image-block"><img src="/images/speakers/speaker-ticket.png" alt="" class="img-fluid"></div>
</section>

<!--====  End of Call to Action Ticket  ====-->

<!--==============================
=            Sponsors            =
===============================-->

<section class="sponsors section bg-sponsors overlay-white">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3> <span class="alternate">اسپانسر های ایران تیک</span></h3>
					<p>اسپانسر های بسیار قدرتمند سایت ایران تیک که برای برگزاری کنسرت ها مارا یاری می کنند</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<!-- Title -->
				<div class="sponsor-title text-center">
					<h5>اسپانسر های جدید</h5>
				</div>
				<div class="block text-center">
					<!-- Sponsors image list -->
					<ul class="list-inline sponsors-list">
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="/images/sponsors/pt-spon-one.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="/images/sponsors/pt-spon-two.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="/images/sponsors/pt-spon-three.jpg" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="/images/sponsors/pt-spon-four.jpg" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
					</ul>
				</div>
				<!-- Title -->
				<div class="sponsor-title text-center">
					<h5>اسپانسر های ویژه</h5>
				</div>
				<div class="block text-center">
					<!-- Sponsors image list -->
					<ul class="list-inline sponsors-list">
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="/images/sponsors/gl-spon-one.jpg" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="/images/sponsors/gl-spon-two.jpg" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="/images/sponsors/gl-spon-three.jpg" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
					</ul>
				</div>
				<!--<div class="sponsor-btn text-center">
					<a href="#" class="btn btn-main-md">Become a sponsor</a>
				</div>-->
			</div>
		</div>
	</div>
</section>

<!--====  End of Sponsors  ====-->

<!--================================
=            News Posts            =
=================================-->

<section class="news section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3> بیوگرافی خوانندگان <span class="alternate"></span></h3>
					<p>بیوگرافی خوانندگان را بخوانید</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-8 col-10 m-auto">
				<div class="blog-post">
					<div class="post-thumb">
						<a href="/bio">
							<img src="/images/news/post-thumb-one.jpg" alt="post-image" class="img-fluid">
						</a>
					</div>
					<div class="post-content">
						<div class="date">
							<h4>15<span>مرداد</span></h4>
						</div>
						<div class="post-title">
							<h2><a href="/bio">زندگینامه بابک جهانبخش</a></h2>
							<p>بابک جهانبخش نوازندگی پیانو را از ۵ سالگی زیر نظر استاد آلمانی در مدرسه موسیقی آزاد شهر بوخوم در آلمان آغاز نمود و بعد از پایان تحصیلات پدرش و بازگشت به ایران، علاقه خود را به موسیقی بیشتر دید و به صورت جدی تر موسیقی شرقی را دنبال کرد. اولین کسی که او را به خواننده شدن تشویق کرد مجتبی میرزاده آهنگساز قدیمی بود.
							</p>
						</div>
						<div class="post-meta">
							<ul class="list-inline">
								<li class="list-inline-item">
									<i class="fa fa-user-o"></i>
									<a href="#">نویسنده: فاطمه هاشمیان</a>
								</li>
								<li class="list-inline-item">
									<i class="fa fa-heart-o"></i>
									<a href="#">350</a>
								</li>
								<li class="list-inline-item">
									<i class="fa fa-comments-o"></i>
									<a href="#">30</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-10 m-auto">
				<div class="blog-post">
					<div class="post-thumb">
						<a href="/bio">
							<img src="/images/news/post-thumb-two.jpg" alt="post-image" class="img-fluid">
						</a>
					</div>
					<div class="post-content">
						<div class="date">
							<h4>02<span>مهر</span></h4>
						</div>
						<div class="post-title">
							<h2><a href="/bio">زندگینامه بهنام بانی</a></h2>
                            <p>بهنام بانی در ۸ سالگی قاری قرآن بود. او پدرش را که نوازنده آکاردئون است، علت گرایش او را به موسیقی می‌داند. وی از دوران کودکی علاقه بسیاری به هنر داشت و نزد پدرش تمرین موسیقی را آغاز کرد. سپس در دوران نوجوانی نزد استادان بزرگ همچون محمد نوری به صورت حرفه‌ای به یادگیری موسیقی پرداخت. بهنام بانی در سن ۱۹ سالگی با گروه موسیقی روژان آشنا شد</p>
						</div>
						<div class="post-meta">
							<ul class="list-inline">
								<li class="list-inline-item">
									<i class="fa fa-user-o"></i>
									<a href="#">نویسنده: زهره احمدی زاد</a>
								</li>
								<li class="list-inline-item">
									<i class="fa fa-heart-o"></i>
									<a href="#">120</a>
								</li>
								<li class="list-inline-item">
									<i class="fa fa-comments-o"></i>
									<a href="#">32</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 m-md-auto col-sm-8 col-10 m-auto">
				<div class="blog-post">
					<div class="post-thumb">
						<a href="/bio">
							<img src="/images/news/post-thumb-three.jpg" alt="post-image" class="img-fluid">
						</a>
					</div>
					<div class="post-content">
						<div class="date">
							<h4>26<span>آذر</span></h4>
						</div>
						<div class="post-title">
							<h2><a href="/bio">زندگینامه حامیم</a></h2>
							<p>حامیم یکی از محبوب ترین خواننده هایی است که با تازگی کولاک کرده است و از محبوبیت ویژه ای برخوردار شده است . اسم اصلی حامیم ، حمیدرضا حامی می باشد و متولد ۲۶ بهمن ۱۳۷۶ در شهر تهران بزرگ می باشد . میگویند قد این خواننده عزیز ۱۸۰ سانتیمتر می باشد . اولین آهنگ حامیم "سیا سفید" نام دارد که در سال ۱۳۹۹ اجرا و پخش شده است
							</p>
						</div>
						<div class="post-meta">
							<ul class="list-inline">
								<li class="list-inline-item">
									<i class="fa fa-user-o"></i>
									<a href="#">نویسنده: سیما احمدی</a>
								</li>
								<li class="list-inline-item">
									<i class="fa fa-heart-o"></i>
									<a href="#">550</a>
								</li>
								<li class="list-inline-item">
									<i class="fa fa-comments-o"></i>
									<a href="#">750</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of News Posts  ====-->

<!--==============================================
=            Call to Action Subscribe            =
===============================================-->

<!--<section class="cta-subscribe bg-subscribe overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mr-auto">
				<div class="content">
					<h3>Subscribe to Our <span class="alternate">Newsletter</span></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor</p>
				</div>
			</div>
			<div class="col-md-6 ml-auto align-self-center">
				<form action="#" class="row">
					<div class="col-lg-8 col-md-12">
						<input type="email" class="form-control main white mb-lg-0" placeholder="Email">
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="subscribe-button">
							<button class="btn btn-main-md">Subscribe</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>-->

<!--====  End of Call to Action Subscribe  ====-->

<!--================================
=            Google Map            =
=================================-->
<section class="map">
	<!-- Google Map -->
	<div id="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="/images/icon/marker.png" data-marker-name="Eventre"></div>
	<div class="address-block">
		<h4>آدرس</h4>
		<ul class="address-list p-0 m-0">
			<li><i class="fa fa-home"></i><span>تهران, برج میلاد تهران <br></span></li>
			<li><i class="fa fa-phone"></i><span>09121112223</span></li>
		</ul>
		<a href="#" class="btn btn-white-md">دریافت لوکیشن</a>
	</div>
</section>
<!--====  End of Google Map  ====-->
@endsection