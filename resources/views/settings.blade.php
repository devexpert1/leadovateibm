@include('layouts/header')

<section class="application-sec">
        <div class="container">
            <div class="row">
				<div class="col-sm-12">
					<h3 class="m-b-15">Profile Settings</h3>
				</div>
				<div class="col-md-4">
					<div class="profls-sts">
						<div class="usr-ics">
							<img src="{{url('/')}}/resources/assets/img/user.jpg" alt="User Image">
							<label for="upld" class="upload-penc">
								<i class="fas fa-pencil-alt"></i>
								<input type="file" id="upld" style="visibility:hidden; width:0px; height:0px;">
							</label>
						</div>
						<h4> John Smith </h4>
						<h5> john123 </h5>
					</div>
				</div>
                <div class="col-md-8">
					<div class="row">
						
						<form class="col-md-12 actvt-frm">
							<div class="card">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> First Name </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="John">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Last Name </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="Smith">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Email Address </label>
										<input type="email" class="form-control" id="exampleInputEmail1" placeholder="" value="John">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Phone Number </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="Smith">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Address </label>
										<input type="email" class="form-control" id="exampleInputEmail1" placeholder="" value="111 Town Street">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> City </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="California">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Country </label>
										<select class="form-control">
											<option> Select One </option>
											<option> India </option>
											<option> USA </option>
											<option> Canada</option>
											<option> Japan</option>
											<option> China</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Zip </label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="11111">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Old Password </label>
										<input type="password" class="form-control" id="exampleInputEmail1" placeholder="" value="11111">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> New Password </label>
										<input type="password" class="form-control" id="exampleInputEmail1" placeholder="" value="11111">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Confirm Password </label>
										<input type="password" class="form-control" id="exampleInputEmail1" placeholder="" value="11111">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<a href="#" class="btn btn-warning btn-adds pull-left"> Save Changes </a>
								</div>
							</div>
							</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h3 class="m-b-15">Your Subscription Plan</h3>
					</div>
					<div class="col-sm-12">
						<div class="subs-box">
							<div class="text-center">
								<span class="main-txt-icn refresh-icon price-pls">
									<sup> $</sup>40.00 
								</span>
								<h4 class="">Basic Plan Activated</h4>
								<p id="demo" class="timer"></p>
								<p>Your trial will expire in <b>4 days </b>. Click below to upgrade to standard subscription <br> so that you can keep learning on this platform.</p>
								<div class="row">
								 

									  <div class="col-sm-12">
										 
											<a href="pricing.html" class="btn btn-resume btn-upgrade"> Upgrade Now </a>
									  </div>
									 
								</div>




							</div>
						</div>
					</div>
				</div>
            </div>

                      
        </div>

    </section>

@include('layouts/footer')