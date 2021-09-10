@extends('layouts.frontend.master')

@section('content')

<!-- Main Banner -->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6 ">
				<h1 class="heading-one">Think the design, design the thinking.</h1>
				<p class="para-one">WDP Web Designs is a high-end, full-service digital design agency delivering seamless web design and development services.</p>
				<div class="btn-span"><a href="/" class="btn bg btn-smart">get a free quote</a></div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="img-box ">
					<img src="{{asset('/assets/images/banner-side-img.png')}}" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Main Banner -->
<!-- Logos One -->
<section class="logos-one">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="img-box">
					<img src="{{asset('/assets/images/logos-img.jpg')}}')}}" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Logos One -->
<!-- About -->
<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-5 col-lg-5 ">
				<div class="img-box">
					<img src="{{asset('/assets/images/about-img-2.jpg')}}')}}" class="img-fluid" alt="">
				</div>
			</div>
			<div class="col-sm-12 col-md-7 col-lg-7 back-color">
				<h2 class="heading-two">Maximize Success with Strategically Designed Content</h2>
				<p class="para-two">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-6 dis-flex-start">
						<a href="#" class="btn btn-simple">Explore more</a>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6">
						<img src="{{asset('/assets/images/about-logo.jpg')}}')}}" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About -->
<!-- Portfolio -->
<section class="portfolio sec-before">
	<div class="container">
		<div class="row text-center">
			<h2 class="hd">Featured Projects</h2>
			<h2 class="heading-one">Work that makes us proud and happy</h2>
		</div>
		<div class="row">
			<div class="port col-12 col-sm-3 col-md-4 col-lg-4">
				<div class="img-box">
					<a href="{{asset('/assets/images/project-1.jpg')}}')}}" data-fancybox="logotab">
						<img src="{{asset('/assets/images/project-1.jpg')}}')}}" class="img-fluid" alt="">
						<div class="overlay-portfolio">
							<i class="fas fa-search-plus mb-2"></i>
						</div>
					</a>
				</div>
			</div>
			<div class="port col-12 col-sm-3 col-md-4 col-lg-4">
				<div class="img-box">
					<a href="{{asset('/assets/images/project-2.jpg')}}')}}" data-fancybox="logotab">
						<img src="{{asset('/assets/images/project-2.jpg')}}')}}" class="img-fluid" alt="">
						<div class="overlay-portfolio">
							<i class="fas fa-search-plus mb-2"></i>
						</div>
					</a>
				</div>
			</div>
			<div class="port col-12 col-sm-3 col-md-4 col-lg-4">
				<div class="img-box">
					<a href="{{asset('/assets/images/project-3.jpg')}}')}}" data-fancybox="logotab">
						<img src="{{asset('/assets/images/project-3.jpg')}}')}}" class="img-fluid" alt="">
						<div class="overlay-portfolio">
							<i class="fas fa-search-plus mb-2"></i>
						</div>
					</a>
				</div>
			</div>
			<div class="port col-12 col-sm-3 col-md-4 col-lg-4">
				<div class="img-box">
					<a href="{{asset('/assets/images/project-4.jpg')}}')}}" data-fancybox="logotab">
						<img src="{{asset('/assets/images/project-4.jpg')}}')}}" class="img-fluid" alt="">
						<div class="overlay-portfolio">
							<i class="fas fa-search-plus mb-2"></i>
						</div>
					</a>
				</div>
			</div>
			<div class="port col-12 col-sm-3 col-md-4 col-lg-4">
				<div class="img-box">
					<a href="{{asset('/assets/images/project-5.jpg')}}')}}" data-fancybox="logotab">
						<img src="{{asset('/assets/images/project-5.jpg')}}')}}" class="img-fluid" alt="">
						<div class="overlay-portfolio">
							<i class="fas fa-search-plus mb-2"></i>
						</div>
					</a>
				</div>
			</div>
			<div class="port col-12 col-sm-3 col-md-4 col-lg-4">
				<div class="img-box">
					<a href="{{asset('/assets/images/project-6.jpg')}}')}}" data-fancybox="logotab">
						<img src="{{asset('/assets/images/project-6.jpg')}}')}}" class="img-fluid" alt="">
						<div class="overlay-portfolio">
							<i class="fas fa-search-plus mb-2"></i>
						</div>
					</a>
				</div>
			</div>
			<div class="port col-12 col-sm-3 col-md-4 col-lg-4">
				<div class="img-box">
					<a href="{{asset('/assets/images/project-7.jpg')}}')}}" data-fancybox="logotab">
						<img src="{{asset('/assets/images/project-7.jpg')}}')}}" class="img-fluid" alt="">
						<div class="overlay-portfolio">
							<i class="fas fa-search-plus mb-2"></i>
						</div>
					</a>
				</div>
			</div>
			<div class="port col-12 col-sm-3 col-md-4 col-lg-4">
				<div class="img-box">
					<a href="{{asset('/assets/images/project-8.jpg')}}')}}" data-fancybox="logotab">
						<img src="{{asset('/assets/images/project-8.jpg')}}')}}" class="img-fluid" alt="">
						<div class="overlay-portfolio">
							<i class="fas fa-search-plus mb-2"></i>
						</div>
					</a>
				</div>
			</div>
			<div class="port col-12 col-sm-3 col-md-4 col-lg-4">
				<div class="img-box">
					<a href="{{asset('/assets/images/project-9.jpg')}}')}}" data-fancybox="logotab">
						<img src="{{asset('/assets/images/project-9.jpg')}}')}}" class="img-fluid" alt="">
						<div class="overlay-portfolio">
							<i class="fas fa-search-plus mb-2"></i>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="btn-span m-auto"><a href="/" class="btn bg btn-smart">Our Portfolio</a></div>
		</div>
	</div>
</section>
<!-- Portfolio -->
<!-- Awards -->
<section class="awards sec-before ">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-3 col-md-4 col-lg-4">
				<h2 class="heading-three">Ranked among one of the world’s best UX firms</h2>
			</div>
			<div class="col-12 col-sm-12 col-md-8 col-lg-8">
				<div class="img-box"><img src="{{asset('/assets/images/partners.png')}}" class="img-fluid" alt=""></div>
			</div>
		</div>
	</div>
</section>
<!-- Awards -->
<!-- Mission -->
<section class="mission">
	<div class="container">
		<div class="mission-in">
			<div class="row">
				<div class="col-12 col-sm-3 col-md-6 col-lg-6">
					<div class="img-box"><img src="{{asset('/assets/images/mission-side-img.png')}}" class="img-fluid" alt="">
					</div>
				</div>
				<div class="miss col-12 col-sm-12 col-md-6 col-lg-6">
					<p>As a full-service design agency,
						we work closely with our clients to define,
						design, and develop transformative user
						experiences across all platforms and
					brand’s touch points.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Mission -->
<!-- Proud Section -->
<section class="proud sec-before">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h2 class="heading-two">We are the proud developers of engaging web designs</h2>
				<p class="para-one"> interactive digital products, and competitive web-based branding strategies.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="box">
					<div class="img-box"><img src="{{asset('/assets/images/service-icon-1.png')}}" alt=""></div>
					<h2 class="heading-three">Static Website</h2>
					<ul class="list-unstyled">
						<li>Naming</li>
						<li>Logo design</li>
						<li>Brand identity system</li>
						<li>Marketing graphics</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="box">
					<div class="img-box"><img src="{{asset('/assets/images/service-icon-2.png')}}" alt=""></div>
					<h2 class="heading-three">Ecommerce Website </h2>
					<ul class="list-unstyled">
						<li>Naming</li>
						<li>Logo design</li>
						<li>Brand identity system</li>
						<li>Marketing graphics</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="box">
					<div class="img-box"><img src="{{asset('/assets/images/service-icon-3.png')}}" alt=""></div>
					<h2 class="heading-three">CMS Website</h2>
					<ul class="list-unstyled">
						<li>Naming</li>
						<li>Logo design</li>
						<li>Brand identity system</li>
						<li>Marketing graphics</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="box">
					<div class="img-box"><img src="{{asset('/assets/images/service-icon-4.png')}}" alt=""></div>
					<h2 class="heading-three">B2B and B2C Portals </h2>
					<ul class="list-unstyled">
						<li>Naming</li>
						<li>Logo design</li>
						<li>Brand identity system</li>
						<li>Marketing graphics</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Proud Section -->
<!-- Testimonial -->
<section class="testimonial sec-before">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="heading-two">Great creative agency find ways for their team to support then</h2>
			</div>
		</div>
		<div id="testimonials">
			<div class="item">
				<div class="box">
					<div class="media">
						<div class="img-box"><img src="{{asset('/assets/images/testimonial-girl-img2.jpg')}}')}}" alt=""></div>
						<div class="media-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
							dolore eu fugiat nulla pariatur.</p>
							<strong>Sara smith</strong>
							<span>Creative DX</span>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="box">
					<div class="media">
						<div class="img-box"><img src="{{asset('/assets/images/testimonial-girl-img.jpg')}}')}}" alt=""></div>
						<div class="media-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
							dolore eu fugiat nulla pariatur.</p>
							<strong>Sara smith</strong>
							<span>Creative DX</span>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="box">
					<div class="media">
						<div class="img-box"><img src="{{asset('/assets/images/testimonial-man-img.jpg')}}')}}" alt=""></div>
						<div class="media-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
							dolore eu fugiat nulla pariatur.</p>
							<strong>Sara smith</strong>
							<span>Creative DX</span>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Testimonial -->
<!-- Logos-3 -->
<!-- 		<section class="logos-3 p-5 bg-grey">
		<div class="container">
				<div class="row">
						<div class="col-lg-12 text-center">
								<div class="img-box"><img src="{{asset('/assets/images/businesses.png')}}" class="img-fluid" alt=""></div>
						</div>
				</div>
		</div>
</section> -->
<!-- Logos-3 -->
<!-- Contact Form -->
<section class="work mn-hd">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <h2 class="heading-two wow fadeInUp animated" data-wow-delay="0.2s">Your Website Design Is Just A Form Away</h2>
             <div class="usrimg wow fadeInUp animated" data-wow-delay="0.4s">

             </div>
             <div class="usercon wow fadeInUp animated" data-wow-delay="0.6s">
                <h6>Fill-up the order form to get started with your <br>custom logo design order at Logo Design <br>Profs rightaway.</h6>
             </div>
          </div>
          <div class="col-md-6">
             <div class="banform">
                <h5 class="text-center">Sign up to get your Custom <br>made Logo Design</h5>
                <form action="crm/include/offercontact.html" method="GET">
                   <div class="banfield">
                      <input type="text" required="" placeholder="Full Name" name="popupname">
                   </div>
                   <div class="banfield">
                      <input type="email" required="" placeholder="Email Address" name="popupemail" >
                   </div>
                   <div class="banfield">
                      <input type="tel" required="" placeholder="Phone Number" name="phone">
                      <input type="hidden" name="leadsource" value="logo-design-offer3">
                   </div>
                   <div class="banfield">
                      <input type="text" placeholder="Business Name">
                   </div>
                   <div class="banfield">
                      <input type="submit" value="get started now">
                      <!-- <button>get started now</button> -->
                   </div>
                </form>
                <p class="text-center">You'll fill your logo brief next</p>
             </div>
          </div>
       </div>
    </div>
 </section>
<!-- Contact Form -->
@endsection
