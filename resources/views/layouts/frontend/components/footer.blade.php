<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-5 col-lg-5">
				<div class="logo">
					<img src="{{asset('/assets/images/footer-logo.png')}}" class="img-fluid" alt="">
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reoluptate velit esse cillum </p>
			</div>
			<div class="col-sm-12 col-md-2 col-lg-2">
				<div class="menus">
					<h2>Quick Links</h2>
					<ul class="list-unstyled">
						<li><a href="{{route('home')}}"><span>Home</span></a></li>
						<li><a href="{{route('about')}}"><span>About Us</span></a></li>
						<li><a href="{{route('services.home')}}"><span>Services</span></a></li>
						<li><a href="#"><span>Work</span></a></li>
						<li><a href="{{route('contact')}}"><span>Contact Us</span></a></li>
						<li><a href="#"><span>Social Media  & Conditions</span></a></li>
						<li><a href="#"><span>Privacy Policy</span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-2 col-lg-2">
				<div class="menus">
					<h2>Services</h2>
					<ul class="list-unstyled">
						<li><a href="#">Services</a></li>
						<li><a href="#">Logo Design </a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Research and Analysis</a></li>
						<li><a href="#">Competitor Review </a></li>
						<li><a href="#">Social Media  </a></li>
						<li><a href="#">Marketing </a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-3 col-lg-3">
				<div class="social-icons">
					<ul class="list-unstyled">
						<li class="list-inline-item"><a href=""><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fab fa-behance"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Form Popup -->
	<div class="popupmain" id="popuprequest" style="display: block;">
    <a id="close1" class="closeico" href="javascript:;" title=""><i></i></a>

    <div class="mmpopup">
       <div class="imgbx">
          <img src="{{asset('/assets/images/img1.jpg')}}')}}" alt="">
       </div>
       <div class="centercont">
          <h3>Get Custom Website Design </h3>
          <h4>in Just <span>$19</span></h4>
          <p>Get Started with Customized Website Designs &amp; Deliver Your Brand Message Effectively </p>
          <ul>
               <li class="first"><i class="far fa-check"></i> 100% Money Back Guaranteed</li>
               <li><i class="far fa-check"></i> 100% Satisfaction Guaranteed</li>
               <li class="last"><i class="far fa-check"></i> 100% Ownership Rights</li>
             <img src="{{asset('/assets/images/phone-icon.png')}}" class="img-fluid d-block mt2" alt="">
             </ul>
          <div class="calldvs">
             <span>Discuss with our Design Expert Today!</span>
             <a href="tel:1-123-123-9876" title="">1-123-123-9876</a>
          </div>
       </div>
       <div class="formpop">
          <form action="crm/include/offercontact.html" method="get">
            <div class="fld-input">
               <input type="text" name="popupname" placeholder="Name" required="required">
            </div>
            <div class="fld-input">
               <input type="email" name="popupemail" placeholder="Email Address" required="required">
            </div>
            <div class="fld-input">
               <input type="number" name="phone" placeholder="Phone Number" required="required">
               <input type="hidden" name="leadsource" value="logo-design-offer3">
            </div>
            <div class="fld-input textarea">
               <textarea placeholder="Name on logo"></textarea>
            </div>
            <div class="fld-btn">
               <button type="submit">Get Started Now  <i class="far fa-long-arrow-right"></i></button>
            </div>
         </form>
       </div>
    </div>
</div>
	<!-- Form Popup -->

</footer>
