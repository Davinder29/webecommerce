@extends('frontend.frontend_master')

@section('frontend_content')

@include('frontend.frontend_layout.home_page.info-boxes')
   <section class="main-login py-40">
    	<div class="container">
    		<div class="in-log">
    			<div class="row">
    				<div class="col-lg-6">
    					<div class="left-log">
    						<div class="log-heading">
    							<h4>Log in</h4>
    							<p>If you have an account, sign in with your email address.</p>
    						</div>
    						<form class="register-form outer-top-xs" id="register-login-form" role="form" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}" method="POST">
						        @csrf
								<div class="form-group log-input">
								    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
								    <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
								</div>
							  	<div class="form-group log-input">
								    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
								    <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
								</div>
								<div class="le-left-lo">
							      	<a href="#" onclick="document.getElementById('register-login-form').submit()" class="le-login-btn">Log in</a>
							      	<a href="{{ route('password.request') }}" class="wach-ver">Forgot Your Password?</a>
						         </div>
							</form>
    					
    					</div>
    				</div>
    				<div class="col-lg-6">
    					<div class="right-log">
    						<div class="log-heading">
    							<h4>Create an account</h4>
    							<form class="register-form outer-top-xs" id ="register-signup-form" role="form" method="POST" action="{{ route('register') }}">
							        @csrf
									<div class="form-group  log-input">
								    	<label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
								    	<input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2">
								  	</div>
							          @error('email')
							            <span class="alert text-danger">{{ $message }}</span>
							          @enderror
							        <div class="form-group  log-input">
									    <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
									    <input type="text" name="name" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
									</div>
							        @error('name')
							            <span class="alert text-danger">{{ $message }}</span>
							        @enderror
							        <div class="form-group  log-input">
									    <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
									    <input type="text" name="phone_number" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
									</div>
							        @error('phone_number')
							            <span class="alert text-danger">{{ $message }}</span>
							        @enderror
							        <div class="form-group  log-input">
									    <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
									    <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
									</div>
							        @error('password')
							            <span class="alert text-danger">{{ $message }}</span>
							        @enderror
							         <div class="form-group  log-input">
									    <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
									    <input type="password" name="password_confirmation" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
									</div>
							        @error('password_confirmation')
							            <span class="alert text-danger">{{ $message }}</span>
							        @enderror
								  	<div class="le-left-lo">
							      	<a href="#" onclick="document.getElementById('register-signup-form').submit()" class="le-login-btn">Create Account</a>
						         </div>
								</form>
    						</div>
    					
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="contact-home">
   <div class="review-summary__container">
      <div class="container">
         <a href="javascript:;">
            <span class="star-icon">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#fff">
                  <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
               </svg>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#fff">
                  <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
               </svg>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#fff">
                  <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
               </svg>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#fff">
                  <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
               </svg>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#fff">
                  <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
               </svg>
               <strong>4.6 / 5</strong>on the basis of<strong>41300</strong> customer reviews <strong>Trustpilot</strong>
            </span>
         </a>
      </div>
   </div>
   <div class="container">
      <div class="in-cont-ho">
         <div class="row">
            <div class="col-lg-6">
               <div class="con-deta">
                  <h4>Available Monday to Saturday from 10 a.m. to 6 p.m</h4>
                  <div class="row c-w-b-f">
                     <div class="col-lg-6">
                        <div class="in-c-w-b-f">
                           <div class="c-icon">
                              <p><i class="fa-solid fa-comment-dots"></i></p>
                           </div>
                           <div class="c-detail">
                              <a href="javascript:;">Chat</a>
                              <p>Reply within 24 hours</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="in-c-w-b-f">
                           <div class="c-icon">
                              <p><i class="fa-brands fa-whatsapp"></i></p>
                           </div>
                           <div class="c-detail">
                              <a href="javascript:;">Whatsapp</a>
                              <p>Reply within 24 hours</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="in-c-w-b-f">
                           <div class="c-icon">
                              <p><i class="fa-solid fa-phone"></i></p>
                           </div>
                           <div class="c-detail">
                              <a href="javascript:;">Call us on 123456</a>
                              <p>Waiting time 10 minutes</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="in-c-w-b-f">
                           <div class="c-icon">
                              <p><i class="fa-brands fa-facebook-f"></i></p>
                           </div>
                           <div class="c-detail">
                              <a href="javascript:;">Facebook</a>
                              <p>Reply within 24 hours</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="right-con-d">
                  <h4>Sign up now for our newsletter</h4>
                  <div class="con-e-input">
                     <input type="email" name="email" placeholder="Please enter email address">
                     <a href="javascript:;" class="email-btn">Sign In</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
