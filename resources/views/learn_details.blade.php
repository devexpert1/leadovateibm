 @include('layouts/header')
<style>
   .prof-sec
   {
	   display:none;
   }
   </style> <!-- Preloader Start -->
   

	<div id="myNav" class="overlay over-side">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content mCustomScrollbar light" data-mcs-theme="minimal-dark">
		<div class="over-ly-cns">
			<h3>{{$course[0]['title']}}</h3>
			<div class="row">
				<div class="col-sm-12">
					<div class="progress">
						 <div class="progress-bar progress-bar-danger progress-bar-striped " role="progressbar"
						  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">
						  </div>

					</div>
					  <p class="main-under-cls text-center">60% <small> Complete</small></p>
				</div>
			</div>
        </div>
		<div class="cont-menu-lis">
			<h5> {{$syllabus->title}} </h5>
			<ul class="dtls-lst">
			  @forelse($s_lessons as $sl)
				<li @if($sl->id == $lesson->id )  class='active' @endif
				>
				    @if($sl->type=='Video')
					<a href="{{url('/')}}/video-details/{{$sl->id}}" class="icns-ws">
					    	<i class="fab fa-youtube"></i>
					   @else
					 <a href="{{url('/')}}/learn-details/{{$sl->id}}" class="icns-ws"> 
					 <i class="fas fa-file-alt"></i> 
					 @endif
					 {{$sl->name}} 
					</a>
				</li>
				@empty
				No Lessons found..!
				@endforelse
				<!---li>
					<a href="{{url('/')}}/video-details" class="icns-ws">
						<i class="fab fa-youtube"></i> Lorem ipsum dolor sit amet, consectetur
					</a>
				</li>
				<li>
					<a href="{{url('/')}}/learn-details" class="icns-ws">
						<i class="fas fa-file-alt"></i> Sed ut perspiciatis unde omnis
					</a>
				</li>
				<li>
					<a href="{{url('/')}}/learn-details" class="icns-ws">
						<i class="fas fa-file-alt"></i> Expending the activity 
					</a>
				</li>
				<li>
					<a href="{{url('/')}}/video-details" class="icns-ws">
						<i class="fab fa-youtube"></i> Lorem ipsum dolor sit amet, consectetur
					</a>
				</li>
				<li>
					<a href="{{url('/')}}/video-details" class="icns-ws">
						<i class="fab fa-youtube"></i> Sed ut perspiciatis unde omnis
					</a>
				</li>
				<li>
					<a href="{{url('/')}}/learn-details" class="icns-ws">
						<i class="fas fa-file-alt"></i> Expending the activity 
					</a>
				</li>
				<li>
					<a href="{{url('/')}}/learn-details" class="icns-ws">
						<i class="fas fa-file-alt"></i> Lorem ipsum dolor sit amet, consectetur
					</a>
				</li>
				<li>
					<a href="{{url('/')}}/video-details" class="icns-ws">
						<i class="fab fa-youtube"></i> Sed ut perspiciatis unde omnis
					</a>
				</li--->
			</ul>
		</div>
  </div>
</div>
	
	
    <section class="application-sec courses-sec mt-20">
        
		

<span class="toggls-icn" onclick="openNav()">&#9776; </span>
		
		<div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>{{$lesson->name}}
					
					</h3> 
                </div>

                <div class="col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="cont-heigt-ns mCustomScrollbar">
										<div class="cont-lst-s">
											<h4 class="dblt-drs"> 
												{{$lesson->name}}
												<a class="full-vie" href="{{url('/')}}/interactive-exercise/{{$lesson->id}}">
													<img src="assets/img/mini.png" class="back-exr">
												</a>
											</h4>
										      <?=$lesson->description;?>
										  <!----div class="radio">
											  <label>
												<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
												Did you ever help someone out with something?
											  </label>
											</div>
											<div class="radio">
											  <label>
												<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
												Do you have any hobbies?
											  </label>
											</div>
											<div class="radio">
											  <label>
												<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
												Have you ever taught or tutored someone?
											  </label>
											</div>
											<div class="radio">
											  <label>
												<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
												When have i practiced or played the sport with others
											  </label>
											</div----->
										</div>
									</div>
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

