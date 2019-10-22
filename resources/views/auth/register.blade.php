@include('auth/login_head')
<style>
#username:focus:invalid + label[for="username"]:after {
  content: "Username must contain only letters and digits";
  color:red;
}
.phone_notreq
{
    color: #aaa;
}
</style>
<link rel="stylesheet" href="{{url('/')}}/public/css/demo-style.css"> 
<link rel="stylesheet" href="{{url('/')}}/public/css/font-awesome.min.css">  
<meta name="google-signin-client_id"
content="163135223758-ivjbpmbhi0c6iv7ugd67na5607ltn1bb.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
 <section class="prof-sec">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="bread-cums">
						<h4> Sign Up </h4>
						<ol class="breadcrumb">
						 
						  <li class="active">Sign Up</li>
						</ol>
					</div>
                </div>

            </div>

            
        </div>
    </section>   
 <section class="application-sec courses-sec login-pds">
        <div class="container">
            <div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <div class="login-pgs">
						<h4 >Sign Up Form </h4>
						 <form class="registerform"  id="register" method="POST" data-next="" enctype="multipart/form-data" 
						 action="{{ url('/') }}/register_user" >
			                @csrf
						    <div class="signup">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">First Name</label>
										 <input id="name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
										 name="first_name" value="{{ old('first_name') }}"  autofocus placeholder="First Name">
									  @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Last Name</label>
										<input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" value="{{ old('last_name') }}"
										name="last_name" id="exampleInputEmail1" placeholder="Last Name">
								 @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif	</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">User Name</label>
										<input type="text" class="form-control" 
										value="{{ old('username') }}" name="username" onkeyup="this.value=this.value.replace(/[^A-Za-z0-9]/g,'');"  id="username" 
										placeholder="User Name" >
											@if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                @endif
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Email Address</label>
										<input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
										value="{{ old('email') }}"
										name="email" id="" placeholder="Email Address">
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1" class="phone_notreq">Phone Number (optional)</label>
										<input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" 
										value="{{ old('phone') }}"
										name="phone" id="" placeholder="Phone Number">
										 @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                        @endif
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group"><?php //echo date("Y"); ?>
										<label>Year of Graduation</label>
									<?php  	$st = date('Y', strtotime('-9 years'));?>
									<?php  	$end = date('Y', strtotime('+6 years'));?>
									<select class="form-control" name="school_year" >
											<option value=""> Select Year </option>
											@for($i=$st;$i<=$end;$i++)
											<option value="{{$i}}"> {{$i}} </option>
											@endfor
											
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<input type="password" class="form-control" name="password" id="password" placeholder="Password">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Confirm Password</label>
										<input type="password" class="form-control" name="cpassword" id="confirm_password" placeholder="Confirm Password">
									</div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								<label for="exampleInputPassword1">Captcha</label>
								 <input id="captcha" name="captcha" class="form-control" type="text" required />
								
								
								
                             
                                 
                                  </div>
                                </div>
                                <div class="col-md-6" style="padding-top: 31px;">
								<div class="form-group">
											<div class="captcha">
											<input type="hidden" id="url_demo" value="{{url('/')}}/demo_captha">
												<input type="hidden" id="submit_demo" value="{{url('/')}}/submit_demo">
									<img src="{{url('/')}}/demo_captha/78787878765" class="imgcaptcha" alt="captcha"  />
									<img src="{{url('/')}}/public/images/refresh.png" alt="reload" class="refresh" />
									</div>				
								 </div>
                                </div>
								
								
							</div>
							<div class="row">
							    
								<div class="col-md-12">
									<button type="submit"  class="btn btn-default btn-block login-bns next_pricing login-btn check_register ">Sign Up</a>
								</div>
								
								<div class="col-md-3">
								<ul class="facebookgoogle text-center">
		                        <fb:login-button style="display:none;" scope="public_profile,email" onlogin="checkLoginState();" 
		                        style="background-color: #4C69BA; background-image: linear-gradient(#4C69BA, #3B55A0); 
		                        Text-shadow: 0 -1px 0 #354C8C;" class="fblogins">Login with Facebook </fb:login-button>
                                <a href="javascript:void(0);" id="fbloginbtn" class="btn btn-default btn-block login-bns fb-btn" >
                                <i class="fab fa-facebook-f"></i>Facebook
                                </a>
								</div>

							<div class="col-md-3 signin">
							<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
							</div>
							<div class="col-md-3 signin">
							<a onclick='instagramLogin();' class="btn btn-default btn-block login-bns fb-btn"> <i class="fab fa-instagram"></i>Instagram</a>
							</div>
							<div class="col-md-3 signin">
							<?php
							$url=url('/');
							echo 
							'<a  class="btn btn-default btn-block login-bns fb-btn" 
							href="https://www.linkedin.com/uas/oauth2/authorization?response_type=code&client_id=86ykoyctpdkqkm&redirect_uri='.$url.'&state=98765EeFWf45A53sdfKef4233&scope=r_liteprofile r_emailaddress"><i class="fab fa-linkedin-in"></i>LinkedIn</a>';
							?></div>
							</div>
							<!--div class="row">
								<div class="col-md-12">
									<p class="dont">Already have an account? <a href="{{url('/')}}/login">Login here! </a></p> 
								</div>
							</div-->
							</div>
							
			
						</form>
					</div>
                </div>
			</div>
        </div>
    </section>
 <!-----form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form---->
    



                   
@include('auth/login_foot')
@include('auth/fb_google')



<script>
 
  
$('.check_register').click(function(){
    if($('.registerform').valid())
      {
		var captcha = $('#captcha').val();
		var value=$('#url_demo').val();
		var value1=$('#submit_demo').val();
		$.post(value1, {"captcha":captcha }, function(response){

		if(response==1){
		//$(".imgcaptcha").attr("src",value+"/"+((new Date()).getTime()));
		$('.registerform')[0].submit();
		}else{
		$("#captcha").val('');

		$(".dg1").html('wrong captcha code!');
		$(".dg1").show(); 
		$(this).val("");
		setTimeout(function(){ $('.dg1').hide(); }, 3000); 
		}
		});
		
      }
});




$('.registerform').validate({
   rules: {
       first_name:{
           required:true,
       },
        password:{
           required:true,
           minlength: 6,
           maxlength:15
       },
        school_year:{
           required:true,
       },
        cpassword:{
          required:true,
           equalTo: "#password",
            minlength: 6,
           maxlength:15
       },
        last_name:{
           required:true,
       },
       phone:{
          
            digits:true,
            minlength:10,
            maxlength:15
       },
       username:{
           required:true,
            remote: {
              url: $('#base_url').val()+"/checkusername",
                    type: "post",
                    data:{_token:$('input[name="_token"]').val()},
                 }
       },
      email: {
        required: true,
        email: true,
         remote: {
              url: $('#base_url').val()+"/checkuseremail",
                    type: "post",
                    data:{_token:$('input[name="_token"]').val(),id:$('#id').val()},
                 }
       }, 
             
       },
       messages: {
             email:{
                required: 'Email is Required',
                email: 'Please enter valid email',
                remote:'Email already exists',
            },
            username:{
              remote:'Username already exists',  
            },
            password: {
                required: 'Password is Required',
            },
             school_year: {
                 
               required: 'Year of Graduation is Required',   
             },
             cpassword: {
                required: 'Confirm Password is Required',
            },
             
       },
       submitHandler: function(form) {
          
	
          
       }
});
</script>

<script src="{{url('/')}}/public/js/main.js"></script>
<script language="javascript">
$(document).ready(function(){
var value=$('#url_demo').val();
$(".refresh").click(function () {
    $(".imgcaptcha").attr("src",value+"/"+((new Date()).getTime()));
    
});
});


 
</script>	













