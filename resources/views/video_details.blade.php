@include('layouts/header1')

   <style>
   .prof-sec
   {
	   display:none;
   }.wrap-sticky nav.navbar.bootsnav .navbar-brand>img {
    width: 180px;
    transition: all 0.5s;
    margin: 14px 0;
}

.application-sec.courses-sec.interactive-page .card {
    background: transparent;
    padding: 15px 0 0;
}

.panel.panel-default.pnls  {
    border: none;
    background: transparent;
}
.cont-lst-s .actvt-frm .panel.panel-default.pnls .panel-body  {
    padding: 15px 0;
    background: transparent;
    border: none;
}

li.cont-third.write_clm.height100.enhance .cont-heigt-ns {    height: calc(100% - 70px ); }
header li.title-interactive {    margin-top: 15px; }
html body header a.btn.btn-warning.btn-back {    margin-top: 12px; }
nav.navbar.bootsnav ul.nav > li > a {    padding: 20px 10px 10px; }
.self-drop-dwn .profile_user a.dropdown-toggle {
    padding: 7px 11px !important;
}
.foot-fxsd {    padding: 7px 0 0; }
.foot-fxsd ul.nxt-back li a.next-s {    padding: 2px 22px 2px; }
.btn-all-s {    padding: 7px; }
@media(max-width:991px){
    .btn-all-s{margin-top:-12px;}
}
.foot-fxsd ul.nxt-back li span.no-bss {
    font-size: 16px;
}
@media only screen and (max-width:1199px) {
    ul.nav.navbar-nav.navbar-right li.dropdown a, nav.navbar.bootsnav.sticked ul.nav > li > a {
        padding: 7px 10px !important;
    }
    ul.nav.navbar-nav.navbar-right li.dropdown.notification_bell a {
    padding: 19px 10px !important;
    }
.wrap-sticky nav.navbar.bootsnav .navbar-brand>img {
    height: auto !important;
}
nav.navbar.bootsnav .navbar-toggle {
    margin-top: 10px;
}
}
.over-side {    top: 58px; }
.foot-fxsd a.collps-br.toggls-icn {
    top: 10px;
    z-index: 11111;
}

@media only screen and (min-width:1367px) {
.container {
    width: 100%;
    max-width: 90%;
}    
}

   </style>
   	<div id="myNav" class="overlay over-side">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content mCustomScrollbar light" data-mcs-theme="minimal-dark">
		<div class="over-ly-cns">
		<?php $course=\App\Course::where('id',$syllabus->course_id)->first();?>
			<h3>{{$course->title}}</h3>
			<div class="row">
			<div class="col-sm-12">
				   <?php 
				   
                                if(!empty($user_course)){
                                $percentage = \App\Userlesson::getviewedlessons(Session()->get('userid'),$course->id);
                                $totalWidth =  \App\Lesson::getlessoneithcoursecon($course->id,$user->package_id);
                                
                             
                                
                                if($totalWidth !='0')
                                {
                                $percent = $percentage/$totalWidth;
                                $percent_friendly = number_format( $percent * 100 ).'%'; 
                                }else
                                {
                                $percent_friendly = '0%';     
                                }
                                }else
                                {
                                  $percent_friendly = '0%';    
                                }
                                ?>
					<div class="progress">
						 <div class="progress-bar progress-bar-danger progress-bar-striped " role="progressbar"
						  aria-valuenow="{{$percent_friendly}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$percent_friendly}} !important">
						  </div>

					</div>
					  <p class="main-under-cls text-center">{{$percent_friendly}} <small> Complete</small></p>
				</div>
			</div>
        </div>
			<div class="cont-menu-lis ">
		    <h5> {{$syllabus->title}} </h5>
		    <input type="hidden" id="course_id" value="{{$syllabus->course_id}}">
		    
            
            @if(Session()->exists('user'))
           
            <?php
            
            $get=\App\User_package::where('user_id',Session()->get('userid'))->where('course_id',$syllabus->course_id)->orderby('id','desc')->first();
            if(!empty($get))
            {
            if(date('Y-m-d') >=$get->end_date)
            {
                ?>
                
            <ul class="dtls-lst">
			<?php $u=1;?>
			@forelse($s_lessons as $sl)
			<?php $i=$u++;?>
		
			<li data-id="{{$i}}"  @if($sl->id == $lesson->id )  class='active' @endif >
                    @if($sl->type=='Video')
                    <a  data-id="{{$sl->id}}"  data-cid="{{$syllabus->course_id}}"  
                    href="@if($i==0) {{url('/')}}/video-details/{{$sl->id}} @else javascript:void(0); @endif" 
                    <?php if($i>1){ ?>
                    data-locked="locked"
                    <?php }?>
                    data-no="{{$i}}"  data-dhref="{{url('/')}}/video-details/{{$sl->id}}"  class=" <?php if($i>1){ echo 'locked disabled';}?> show{{$i}}    icns-ws view_lesson getlesson{{$sl->id}}">
                    <i class="fab fa-youtube"></i>  
                    @else
                    <a data-id="{{$sl->id}}"  data-cid="{{$syllabus->course_id}}" href="@if($i==0) {{url('/')}}/interactive-exercise/{{$sl->id}} @else javascript:void(0); @endif" data-no="{{$i}}"  data-dhref="{{url('/')}}/interactive-exercise/{{$sl->id}}" <?php if($i>1){ ?>
                    data-locked="locked"
                    <?php }?> class="<?php if($i>1){ echo 'locked disabled';}?> show{{$i}}  icns-ws view_lesson getlesson{{$sl->id}}"> 
                    <i class="fas fa-file-alt"></i>   {{$sl->name}}  
                    @endif
					{{$sl->name}}   @if($i==1)<i class="fa fa-unlock" style="color:" aria-hidden="true"></i>@else 
					<i class="fa fa-lock" aria-hidden="true" style="color:"></i> @endif
					</a>
					</li>
				@empty
				No Lessons found..!
				@endforelse
				
			</ul>
                
                <?php
            }
            else
            {
                 ?>
                 <ul class="dtls-lst">
			<?php $u=1;?>	<?php $flag=0;?>
			@forelse($s_lessons as $sl)
			<?php $i=$u++;?>
			<?php $gets=\App\Userlesson::where('lesson_id',$sl->id)->where('user_id',Session()->get('userid'))->first();?>
			<li data-id="{{$i}}"  @if($sl->id == $lesson->id )  class='active' @endif >
                    @if($sl->type=='Video')
                    <a  data-id="{{$sl->id}}"  data-cid="{{$syllabus->course_id}}"  href="@if($flag==0) {{url('/')}}/video-details/{{$sl->id}} @else javascript:void(0); @endif" data-no="{{$i}}" data-locked="" data-dhref="{{url('/')}}/video-details/{{$sl->id}}"  class=" <?php if($flag==1){ echo 'disabled';}?> show{{$i}}    icns-ws view_lesson getlesson{{$sl->id}}">
                    <i class="fab fa-youtube"></i>
                    @else
                    <a data-id="{{$sl->id}}"  data-cid="{{$syllabus->course_id}}" href="@if($flag==0) {{url('/')}}/interactive-exercise/{{$sl->id}} @else javascript:void(0); @endif" data-no="{{$i}}"  data-dhref="{{url('/')}}/interactive-exercise/{{$sl->id}}"  data-locked="" class="<?php if($flag==1){ echo 'disabled';}?> show{{$i}}  icns-ws view_lesson getlesson{{$sl->id}}"> 
                    <i class="fas fa-file-alt"></i> 
                    @endif
                    {{$sl->name}} 
                    </a>
				</li>	<?php if(empty($gets) && $flag==0){
               $flag=1;
                 }?>
				@empty
				No Lessons found..!
				@endforelse
				
			</ul>
                 <?php
            }
            }
            else
            {
                
            if(!empty($user)){
            if(!empty($user->package_id)){
            $package=App\Subscription::getwithid($user->package_id);
            $current_package=App\Transaction::get_active_payment_details($user->id);
            $datestr=$current_package->end_date;//Your date
            $date=strtotime($datestr);//Converted to a PHP date (a second count)
            $diff=$date-time();//time returns current time in seconds
            $days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
            $hours=round(($diff-$days*60*60*24)/(60*60));
            $start_date = strtotime(date('Y-m-d') ); 
            $end_date = strtotime($current_package->end_date); 
            if(date('Y-m-d') >=$current_package->end_date){ 
                // expired plan 
                ?>
                   <ul class="dtls-lst">
			<?php $u=1;?>
			@forelse($s_lessons as $sl)
			<?php $i=$u++;?>
		
			<li data-id="{{$i}}"  @if($sl->id == $lesson->id )  class='active' @endif >
                    @if($sl->type=='Video')
                    <a  data-id="{{$sl->id}}"  data-cid="{{$syllabus->course_id}}"  
                    href="@if($i==0) {{url('/')}}/video-details/{{$sl->id}} @else javascript:void(0); @endif" data-no="{{$i}}"  data-dhref="{{url('/')}}/video-details/{{$sl->id}}"   <?php if($i>1){ ?>
                    data-locked="locked"
                    <?php }?> class=" <?php if($i>1){ echo 'locked disabled';}?> show{{$i}}    icns-ws view_lesson getlesson{{$sl->id}}">
                    <i class="fab fa-youtube"></i>
                    @else
                    <a data-id="{{$sl->id}}"  data-cid="{{$syllabus->course_id}}" href="@if($i==0) {{url('/')}}/interactive-exercise/{{$sl->id}} @else javascript:void(0); @endif" data-no="{{$i}}"  <?php if($i>1){ ?>
                    data-locked="locked"
                    <?php }?> data-dhref="{{url('/')}}/interactive-exercise/{{$sl->id}}" class="<?php if($i>1){ echo 'locked disabled';}?> show{{$i}}  icns-ws view_lesson getlesson{{$sl->id}}"> 
                    <i class="fas fa-file-alt"></i> 
                    @endif
                    {{$sl->name}}  @if($i==1)<i class="fa fa-unlock" style="color:" aria-hidden="true"></i>@else 
  <i class="fa fa-lock" aria-hidden="true" style="color:"></i> @endif
                    </a>
				</li>
				@empty
				No Lessons found..!
				@endforelse
				
			</ul>
                
                
                
                <?php
                
                
            }else
            {
                ?>
                <ul class="dtls-lst">
			<?php $u=1;?>	<?php $flag=0;?>
			@forelse($s_lessons as $sl)
			<?php $i=$u++;?>
			<?php $gets=\App\Userlesson::where('lesson_id',$sl->id)->where('user_id',Session()->get('userid'))->first();?>
			<li data-id="{{$i}}"  @if($sl->id == $lesson->id )  class='active' @endif >
                    @if($sl->type=='Video')
                    <a  data-id="{{$sl->id}}"  data-cid="{{$syllabus->course_id}}"  href="@if($flag==0) {{url('/')}}/video-details/{{$sl->id}} @else javascript:void(0); @endif" data-no="{{$i}}"  data-dhref="{{url('/')}}/video-details/{{$sl->id}}"  data-locked="" class=" <?php if($flag==1){ echo 'disabled';}?> show{{$i}}    icns-ws view_lesson getlesson{{$sl->id}}">
                    <i class="fab fa-youtube"></i>
                    @else
                    <a data-id="{{$sl->id}}"  data-cid="{{$syllabus->course_id}}" href="@if($flag==0) {{url('/')}}/interactive-exercise/{{$sl->id}} @else javascript:void(0); @endif" data-locked="" data-no="{{$i}}"  data-dhref="{{url('/')}}/interactive-exercise/{{$sl->id}}" class="<?php if($flag==1){ echo 'disabled';}?> show{{$i}}  icns-ws view_lesson getlesson{{$sl->id}}"> 
                    <i class="fas fa-file-alt"></i> 
                    @endif
                    {{$sl->name}} 
                    </a>
				</li>	<?php if(empty($gets) && $flag==0){
               $flag=1;
                 }?>
				@empty
				No Lessons found..!
				@endforelse
				
			</ul>
                
                <?php
                
            }
            
            
            
            }
            }
                
                
                
                
            }
            ?>@endif

		    
		    
		    
			
		</div>
  </div>
   </div>
	
	
    <section class="application-sec courses-sec mt-20">
        
		


		
		<div class="container">
            <div class="row">
               
                
                <div class="col-sm-12">
                    <h3>{{$lesson->name}}
						<!---a href="{{url('/')}}/course-details/{{$lesson->course_id}}" class="btn btn-warning btn-back"> <i class="fa fa-chevron-left d-none d-sm-block"></i><span class="d-sm-none">Back to Course</span> </a--->
					</h3> 
                </div>

                <div class="col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="video-dtl">
								<video width="100%" controls="controls" controlsList="nodownload" preload="auto" loop="loop">
				<?php $filename='public/uploads/'.$lesson->description;  ?>   
                <?php
                if (file_exists($filename)) {
                ?>  <source src="{{url('/')}}/public/uploads/{{$lesson->description}}" type="video/mp4">
				<?php }else{ ?>
				
				<source src="https://s3.jp-tok.cloud-object-storage.appdomain.cloud/structenspace/{{$lesson->description}}"
								   type="video/mp4">
				<?php } ?>
								</video>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="foot-fxsd">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-2">
					<a href="#" class="collps-br toggls-icn" onclick="openNav()">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</a>
				</div>
				<div class="col-xs-8 text-center">
					<ul class="nxt-back">
						<li>
							<a href="javascript:void(0);" class="back-s" data-id="{{$lesson->id}}"> Back </a>
						</li>
						<li>
							<span class="no-bss"> <span class="active_lesson">1</span>/<span class="total_lesson">{{count($s_lessons)}}</span></span>
						</li>
						<li>
						    
							<a href="javascript:void(0);" data-cid="{{$lesson->course_id}}" class="next-s" data-next="" data-id="{{$lesson->id}}"> Next </a>
						</li>
					</ul>
				</div>
				<div class="col-xs-2">
				
				</div>
			</div>
		</div>
	</div>
	




   @include('layouts/footer')
   
   
   
     <script>
        $(document).ready(function() {
          
        var act=$('li.active').data('id')
        $('.active_lesson').text(act);
        if(act=='1')
        {
        $('.back-s').hide();
        }
        if($('.active_lesson').text()==$('.total_lesson').text())
        {
         $('.next-s').hide();   
        }
        
        var totalFiles = document.getElementsByClassName('delete_cross').length;
        $('#length').val(totalFiles);
      /*  $('.content22').summernote({
        height: 50   //set editable area's height  
        });*/
        });
    </script>
   	<script>
    $('.panel-title a:first').attr('aria-expanded',true);
    $('.panel-collapse:first').addClass('in');

    var _changeInterval = null;
    
    function delay(callback, ms) {
  var timer = 0;
  return function() {
    var context = this, args = arguments;
    clearTimeout(timer);
    timer = setTimeout(function () {
      callback.apply(context, args);
    }, ms || 0);
  };
}
   
    
    $(document).on('keyup', '.act_title', delay(function (e){
        var minNumber = 1; // le minimum
        var maxNumber = 1000000; // le maximum
        var randomnumber = Math.floor(Math.random() * (maxNumber + 1) + minNumber); // la fonction magique
        $(this).closest('.title_random').find('.random_id').val(randomnumber); 
        $(this).closest('.title_random').find('.idss').addClass('getid'+randomnumber); 
        
    }, 1000));
    $(document).on('keyup', '.form-control', delay(function (e){
      $('.save_user_act').trigger('click');
}, 2000));
  
   
    
    $(document).on('click', '.save_message', function () {
    $(".as1").html("Saved user activity..!");
    $(".as1").show();  
    setTimeout(function(){ $('.alert-success').hide(); }, 2000);
        
    });
    $(document).on('click', '.save_user_act', function () {
    if($('.addactivityuser').valid())
    {
    submitform111('addactivityuser','save_user_act');
    }
    });
    function submitform111(form,btn)
    {
    var data = new FormData('.'+form);
    var other_data = $('.'+form).serializeArray();
    $.each(other_data,function(key,input){
    data.append(input.name,input.value);
    });
    var action = $('.'+form).attr('data-action');
    //alert(action);
    $.ajax({
    headers: {
    'X-CSRF-Token': $('input[name="_token"]').val()
    },
    type: 'post',
    url: action,
    data: data,
    contentType: false,
    cache: false,
    processData:false,
    dataType:'json',
    success: function (data) {
    
    /*$(".as1").html(data.message);
    $(".as1").show();  
    setTimeout(function(){ $('.alert-success').hide(); }, 2000);*/
    if(data.data !='')
    {
    data.data.forEach(function(data){
        //alert(data.random);
       //alert(data.act_id);
    $('.getid'+data.random).val(data.act_id);
    })
    }
    var next = $('.'+form).attr('data-next');
    // alert(next);
    if(next !=''){
    //setTimeout(function(){  window.location.href= next; }, 2000); 
    }
    },
    }); 
    }
    $(document).on('click', '.confirm_delete_list', function () {
    var table="user_activities";
    var base=$('#base_url').val();
    var action =base+'/deleteactivitylist';
    var token=$('input[name="_token"]').val();
    var data ={_token:token,table:table};
    $.ajax({
    headers: {
    'X-CSRF-Token': $('input[name="_token"]').val()
    },
    type: 'post',
    url: action,
    data: data,
    success: function (data1) {
    $('#delete_modal').modal('hide');
    $(".as1").html("List deleted successfully...!");
    $(".as1").show();  
    setTimeout(function(){ $('.alert-success').hide(); }, 3000);
    location.reload();
    },
    }); 
    
    
    });
	$(document).on('click', '.view_lesson', function () {
var base=$('#base_url').val();
var lid=$(this).attr('data-id');
var cid=$(this).attr('data-cid');
var action =base+'/viewlesson';
var data ={lid:lid,cid:cid};
$.ajax({
headers: {
'X-CSRF-Token': $('input[name="_token"]').val()
},
type: 'post',
url: action,
data: data,
success: function (data1) {
// alert();
$('.get_act').html(data1);
},
});
    
});
	$(document).on('change', '.activity_type', function () {
	    var id=$(this).val();
	    var table="example";
	    var base=$('#base_url').val();
	    var course=$('#course_id').val();
	   
	    var action =base+'/getexamples';
        var token=$('input[name="_token"]').val();
		var data ={course:course,id:id,_token:token,table:table};
         $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: action,
                data: data,
                success: function (data1) {
                   
					$('.getdata').html(data1);
					
						
                },
            }); 
	   
	});
	</script>
	<script>
		$(function() {
				var scntDiv = $('#afteradd');
				var i = parseInt($('#count').val()) + 1;
				//$('#addScnt').live('click', function() {
				$('#addScnt').on('click', function(){
                var count=$('#length').val();
                var lessoncount=parseInt($('#length').val())+1;
                $('#length').val(lessoncount);
                var less_id=$('#lesson_id').val();
                var syla_id=$('#syl').val();
                var course_id=$('#course_id').val();
                var htm=$('.activity_type').html();
                //alert(htm);
                 var minNumber = 1; // le minimum
            var maxNumber = 1000000; // le maximum
            var randomnumber = Math.floor(Math.random() * (maxNumber + 1) + minNumber); // la fonction magique
                var base=$('#base_url').val();
                var action =base+'/getwithlesson';
                var data ={less_id:less_id};
                $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: action,
                data: data,
                success: function (data1) {
                   
				//	$('.get_act').html(data1);
					
						
                },
            }); 
						$('<div class="panel panel-default pnls"><div class="panel-heading" role="tab" id="headingThree'+i+'"><h4 class="panel-title"><a class="collapsed get_activity_text" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree'+i+'" aria-expanded="false" aria-controls="collapseThree'+i+'">Activity '+lessoncount+'</a></h4></div><div id="collapseThree'+i+'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree'+i+'"><div class="panel-body"><div class="row"><div class="col-md-12"><div class="form-group"><input type="hidden" name="lesson_id[]" value="'+less_id+'"><input type="hidden" name="syllabus_id[]" value="'+syla_id+'"><input type="hidden" name="course_id[]" value="'+course_id+'"><select class="form-control get_act" name="user_selection[]"><option> Select Type </option>'+htm+'</select></div></div><div class="col-md-12"><div class="form-group"><input type="hidden" class="idss" name="id[]" value="0" ><input type="hidden" name="random[]"class="random_id" value="0"><input type="text" name="activity_title[]" class="form-control" placeholder="Activity Title"></div></div><div class="col-md-12"><div class="form-group"><textarea class="form-control content22  content1" id="exampleInputEmail1" name="user_input[]" rows="7" placeholder="Title"></textarea></div></div><div class="col-md-12"><div class="form-group"><input type="text" name="activity_time[]" class="form-control" placeholder="Time"></div></div></div></div></div><a href="javascript:void(0)" class="delete_cross" id="remScnt"><i class="fa fa-times"></i></a></div>').appendTo(scntDiv);
						i++;
						return false;
				});
				
				 $('body').on('click', '.back-s', function(){
                        var act=$('li.active').data('id')
                        var actplus=act -1;
                        if(actplus == '0')
                        {
                    
                        }else
                        {
                        var href=$('.show'+actplus).attr('href');
                        var next=$(this).attr('data-next');
                        var attr=$( ".getlesson"+next ).attr('href');
                        window.location.href= href;   
                        }
                      
                        
                    });
                    //$('#remScnt').live('click', function() { 
                        $('body').on('click', '.read_less', function(){
                        var id=$(this).data("category");
                        $('.hide'+id).show();
                        $('.hideless'+id).hide();
                        $('.get_results').html("");  
                            
                        });
                        $('body').on('click', '.read_more', function(){
                        
                        var id=$(this).data("category");
                        var table="example";
                        var base=$('#base_url').val();
                        var course=$(this).data("course");
                        
                        var action =base+'/getexamples_more';
                        var token=$('input[name="_token"]').val();
                        var data ={course:course,id:id,_token:token,table:table};
                        $.ajax({
                        headers: {
                        'X-CSRF-Token': $('input[name="_token"]').val()
                        },
                        type: 'post',
                        url: action,
                        data: data,
                        success: function (data1) {
                        $('.hide'+id).hide();
                        $('.get_results').html(data1);
                        },
                        }); 
                        });
                    $('body').on('click', '.next-s', function(){
                        var act=$('li.active').data('id')
                        var actplus=act +1;
                        var href=$('.show'+actplus).attr('href');
                        //var id=$(this).attr('data-id');
                        var next=$(this).attr('data-next');
                        var attr=$( ".getlesson"+next ).attr('href');
						 var locked=$('.show'+actplus).attr('data-locked');
                       if(locked=='locked')
                       {
                        $(".dg1").show();  
                         $(".dg1").html("This lesson is locked");
                        setTimeout(function(){ $('.alert-danger').hide(); 
                        }, 2000);
                        return;
                       }
						
                        if(href="javascript:void(0);")
                        {
                            var href1=$('.show'+actplus).attr('data-dhref');
                          
                            var base=$('#base_url').val();
                            var lid=$('.show'+actplus).attr('data-id');
                            var cid=$(this).attr('data-cid');
                            var action =base+'/viewlesson';
                            var data ={lid:lid,cid:cid};
                            $.ajax({
                            headers: {
                            'X-CSRF-Token': $('input[name="_token"]').val()
                            },
                            type: 'post',
                            url: action,
                            data: data,
                            success: function (data1) {
                            // alert();
                              window.location.href= href1;
                            },
                                                      
                            //$( ".getlesson"+next ).trigger('click');
                            
                        });
                        }else
                        {
                            alert(href);
                            window.location.href= href;
                        }
                        
                    });
                    $('body').on('click', '.reset_all', function(){
                    // alert(); 
                    $('#delete_modal').modal('show');
                    
                    });
                    $('body').on('click', '.delete_cross', function(){
                    $(this).parents('.pnls').remove();
                    var totalFiles = document.getElementsByClassName('delete_cross').length;
                    //alert(totalFiles);
                    $('#length').val(totalFiles);
                    var count=1;
                    $('.get_activity_text').each(function() { 
                        
                        $(this).text('Activity '+count);
                        count=count+1;
                    });
                    
                    /*for(i=1;i<=totalFiles;i++)
                        {
                            $('.get_activity_text').text('Activity '+i);
                        }*/
                   
                    });
                    });
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>