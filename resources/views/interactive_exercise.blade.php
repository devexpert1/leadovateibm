@include('layouts/header1')
<style>
.wrap-sticky nav.navbar.bootsnav .navbar-brand>img {
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

<style>
.form-group.check_time_part ul.multiselect-container.dropdown-menu li.active a.multiselect-all label {
background: #f47f64;
/* padding-top: 7px; */
/* padding-bottom: 7px; */
color: #fff;
}
.form-group.check_time_part ul.multiselect-container.dropdown-menu li a.multiselect-all label {
background: #fff;
padding-top: 7px;
padding-bottom: 7px;
color: #000;
}
.form-group.check_time_part span.multiselect-native-select .btn-group button.multiselect.dropdown-toggle.btn.btn-default b.caret {
float: right;
margin-top: 10px;
}
.current a.full-vie.full-show {
    opacity: 1 !important;
}

a.full-vie.full-show {
    opacity: 0;
}
.form-group.check_time_part span.multiselect-native-select .btn-group button.multiselect.dropdown-toggle.btn.btn-default {
width: 100%;
text-align: left;
font-weight: 400;
}
.form-group.check_time_part span.multiselect-native-select .btn-group {
width: 100%;
text-align: left;
}
.form-group.check_time_part span.multiselect-native-select {
width: 100%;
display: block;
}
.form-group.check_time_part ul.multiselect-container.dropdown-menu li input[type="checkbox"] {
min-height: auto;
}
.form-group.check_time_part ul.multiselect-container.dropdown-menu li.check_time.active a label {
background: #f47f64;
color: #fff;
}
.form-group.check_time_part ul.multiselect-container.dropdown-menu li {
width: 100%;

}.form-group.check_time_part ul.multiselect-container.dropdown-menu li.check_time a label {
background: #fff;
color: #000;
padding-top: 7px;
padding-bottom: 7px;
border-bottom: 1px solid #fff;
}
.form-group.weekly label {
display: block;
}
ul.multiselect-container.dropdown-menu li.check_grade.active label.checkbox , ul.multiselect-container.dropdown-menu li.multiselect-all.active label.checkbox {
background: #f48064;
margin-bottom: 1px;
padding-top: 7px;
padding-bottom: 7px;
}
.grade_level .multiselect-native-select .btn-group button.multiselect.dropdown-toggle.btn.btn-default:hover {
background: #f5f5f5;
}
.grade_level .multiselect-native-select .btn-group {
width: 100%;
}
.grade_level .multiselect-native-select .btn-group button.multiselect.dropdown-toggle.btn.btn-default {
width: 100%;
text-align: left;
font-weight: 400;
}
.grade_level .multiselect-native-select .btn-group button.multiselect.dropdown-toggle.btn.btn-default b.caret {
float: right;
margin-top: 11px;
}


.grade_level ul.multiselect-container.dropdown-menu li.multiselect-item.multiselect-all label.checkbox, ul.multiselect-container.dropdown-menu li.check_grade label.checkbox {
padding-left: 30px;
}
.grade_level .multiselect-container>li>a>label>input[type=checkbox] {
margin-bottom: 5px;
line-height: 1;
min-height: auto;
}

.grade_level ul.multiselect-container.dropdown-menu li.multiselect-item.multiselect-all, ul.multiselect-container.dropdown-menu li.check_grade {
width: 100%;
}
li.cont-third.write_clm.enhance .cont-heigt-ns {
height: 677px;
}input.week_year1:checked + label {
    background: #f48164;
    height: 25px;
    width: 97%;
    float: left;
    position: absolute;
    top: 62px;
    left: 0px;
    margin: 0 auto;
    display: block;
    right: 0;
    z-index: 0;
}input.week_year1 {
position: relative;
z-index: 9;
}
input.week_year1 + span {
position: relative;
z-index: 1;
}
input.week_year1 {
position: relative;
z-index: 9;
}
input.week_year1 + span {
    position: relative;
    z-index: 1;
    font-size: 13px;
    position: relative;
    top: -3px;
    left: 2px;
}
.no_radio {
position: relative;
float: left;
width: 100%;
}
.yes_radio {
position: relative;
width: 100%;
float: left;
}
input.week_year1:checked + span + label {
background: #f48164;
width: 100%;
height: 25px;
position: absolute;
top: 0;
z-index: 0;
}
/*ul.list-expend li.cont-third .cont-heigt-ns {
height: 679px;
} */

li.cont-third.write_clm .cont-heigt-ns.lesson_description{
        height: calc(100% - 106px );
}



.actvt-frm
{
word-break: break-all; 
}
.getdata .actvt-frm p
{
word-break: break-word;
}
.example_list .cont-heigt-ns {
/*height: 680px;*/
    height: calc(100% - 50px );
}
.example_list .cont-heigt-ns.lesson_description{
        height: calc(100% - 50px );
}
li.cont-third.write_clm .cont-heigt-ns {
        height: calc(100% - 106px );
}.application-sec.courses-sec.interactive-page .card {
    margin-bottom: 5px;
}
.wrap-sticky nav.navbar.bootsnav.sticked {
position: absolute;
}
section.application-sec {
    padding: 1px 0 0;
}
footer {
    display: none;
}
.cstm-height {
    height: 430px;
}
.read_more,.read_more_essay    
{background: #f48164 !important;
border: #f48164 !important;
color:#fff !important;
}
.read_more:hover
{background: #f48164 !important;
border: #f48164 !important;
color:#fff !important;

}
.read_less_essay
{
background:#f48164!important;
border:#f48164!important;
color:#fff !important;
}
.subs-box
{
display:none;  
}
.prof-sec
{
display:none;
}
.error
{
color:red;
}
.cont-third{}
h4.dblt-drs {
font-size: 17px;
height: auto;
margin-bottom: 10px;
min-height:34px;

}
button.save_user_act {
    display: none;
}
.dblt-drs .mCSB_outside + .mCS-minimal-dark.mCSB_scrollTools_vertical {
right: 0px !important;
top: -18px !important;
}
.cont-lst-s input[type="radio"] {
    left: 5px;
}
input.week_year1 + span {
    top: -3px;
    left: 8px;
}
section.application-sec.courses-sec.interactive-page {
    height: calc(100% - 100px);
}
.height100
{
height:100%;
}
</style>
 
<div id="myNav" class="overlay over-side">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content mCustomScrollbar light" data-mcs-theme="minimal-dark">
		<div class="over-ly-cns">
		    <input type="hidden" name="" value="10" id="length">
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
                  @if($i==1)<i class="fa fa-unlock" style="color:" aria-hidden="true"></i>@else 
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
    <section class="application-sec courses-sec interactive-page">
		<div class="container-fluid height100">
            <div class="row height100">
                <!--div class="col-sm-12">
                    <h3>{{$syllabus->title}}
						<a href="{{url('/')}}/course-details/syllabus/{{$syllabus->course_id}}" class="btn btn-warning btn-back"> <i class="fa fa-chevron-left d-none d-sm-block"></i><span class="d-sm-none">Back to Exercise</span> </a>
					</h3> 
                </div-->

                <div class="col-sm-12 height100">
					<div class="card height100">
						<div class="card-body height100">
							<ul class="list-expend height100">
								<li class="cont-third cstm-height editor-list example_list height100" style="position: relative;">
								    	<h4 class="dblt-drs">  
								    	
								    	 <?php
                            $string = strip_tags($lesson->name);
                            if (strlen($string) > 30) {
                            
                            $stringCut = substr($string, 0, 30);
                            $endPoint = strrpos($stringCut, ' ');
                            
                         
                            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                            $string .= '';
                            }
                            echo $string
                          ?>
								    	
								    	
								    
												<!--a class="full-vie" href="#inline" data-lity><i class="fas fa-arrows-alt"></i></a-->
												<a class="full-vie full-hide hide_save" href="javascript:void(0)"><i class="fas fa-arrows-alt"></i></a>
												<a class="full-vie full-show show_save" href="javascript:void(0)" style="display:none">
													<img src="{{url('/')}}/resources/assets/img/mini.png" class="back-exr mCS_img_loaded">
												</a>
											</h4>
									<div class="cont-heigt-ns mCustomScrollbar lesson_description">
										<div class="cont-lst-s">
										
										        <?=$lesson->description;?>	<!--div class="radio">
											  <label>
												<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
												Did you ever help someone out with something?
											  </label>
											</div---->
											<!---div class="radio">
											  <label>
												<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
												Do you have any hobbies?
											  </label>
											</div----->
											<!----div class="radio">
											  <label>
												<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
												Have you ever taught or tutored someone?
											  </label>
											</div---->
											<!----div class="radio">
											  <label>
												<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
												When have i practiced or played the sport with others
											  </label>
											</div--->
										</div>
									</div>
								</li>
								<li class="cont-third write_clm height100">
								     <h4 class="dblt-drs"> 
								   
                                        Write
                                         <input type="hidden" id="files" type="file">
                                        <input type="hidden" id="type" value="{{$course->type}}">
                                        <!--a class="full-vie" href="#activity-tab" data-lity><i class="fas fa-arrows-alt"></i></a-->
                                        <a class="full-vie full-hide " href="javascript:void(0)"><i class="fas fa-arrows-alt"></i></a>
                                        <a class="full-vie full-show " href="javascript:void(0)" style="display:none">
                                        <img src="{{url('/')}}/resources/assets/img/mini.png" class="back-exr mCS_img_loaded">
                                        </a>
                                        </h4>
                                        <div class="cont-heigt-ns mCustomScrollbar">
                                        <div class="cont-lst-s">
                                       
                                        <div class="actvt-frm">
                                        <div class="panel-group panel-actvt pnls-ms" id="accordion" role="tablist" aria-multiselectable="true">
                                        
                                        <input type="hidden" value="{{$lid}}" id="lesson_id">
                                        
                                        <input type="hidden" 
                                        value="{{$syllabus->id}}" id="syl"  >
                                        
                                        
                                        <input type="hidden" value="{{$syllabus->course_id}}" id="course_id">
                                        @if(count($user_activities)!='0')
                                        <input type="hidden" id="count" value="<?=count($user_activities);?>" >
                                        <?php $z=1;?>
                                        @foreach($user_activities as $u)
                                        <form class="addactivityuser" method="POST" data-action="{{ url('/') }}/add-activity-user" 
                                        data-next="{{ url('/') }}/interactive-exercise/{{$lesson->id}}">
                                        @csrf
                                        <input type="hidden" id="files">
                                        <div class="panel panel-default pnls new-bt">
                                        <div class="panel-heading" role="tab" id="heading{{$u->id}}">
                                        <h4 class="panel-title">
                                        <a role="button" class="get_activity_text" data-toggle="collapse" data-parent="#accordion" 
                                        href="#collapse{{$u->id}}" aria-expanded="false" aria-controls="collapse{{$u->id}}">
                                         @if($course->type == 'E' )
                                         Essay  
                                         @else
                                         Activity  {{$z++}}
                                         @endif
                                        </a>
                                        </h4>
                                        </div>
										<div id="collapse{{$u->id}}" class="panel-collapse collapse" role="tabpanel" 
										aria-labelledby="heading{{$u->id}}">
										<div class="panel-body">
                                      
                                        <div class="row">
                                        <input type="hidden" name="name[]"  value="">
                                        <input type="hidden" name="lesson_id[]"  value="{{$u->lesson_id}}">
                                        <input type="hidden" name="syllabus_id[]"  value="{{$u->syllabus_id}}">
                                        <input type="hidden" name="id[]"  value="{{$u->id}}">
                                         <input type="hidden" name="random[]"  value="{{$u->random}}">
                                        <input type="hidden" name="course_id[]"  value="{{$u->course_id}}">
                                        @if($course->type != 'E' )
                                        <div class="col-md-12">
                                        <div class="form-group">
                                        <select class="form-control act_type  typeact" name="user_selection[]" required>
                                        <option value=""> Select Activity Type </option>
                                        @foreach($act as $acts)
                                      
                                        <option  @if(!empty($u->user_selection)) 
                                        @if($u->user_selection==$acts->name) 
                                        selected 
                                        @endif 
                                        @endif  value="{{$acts->name}}"><?php $get=\App\Activity::where('id',$acts->name)->first();
                                        echo $get->name;?></option>
                                        @endforeach
                                        </select>
                                        </div>
                                        </div>
                                         
                                        <div class="col-md-12">
                                        <div class="form-group">
                                        <input type="text" name="activity_title[]" placeholder="Activity Title" class="form-control"
                                        value="{{$u->activity_title}}" required >
                                        </div>
                                        </div>
                                        @endif
										<div class="col-md-12">
										<div class="form-group">
										<textarea class="form-control  content22 summernote cont-st-rw" id="exampleInputEmail1" rows="20"
										name="user_input[]" placeholder="Description" required>@if(!empty($u->user_input)){{$u->user_input}}@endif</textarea>
                                        </div>
                                        </div>
                                         @if($course->type != 'E' )
                                        <div class="col-md-12">
                                        <div class="form-group grade_level">
                                        <input type="hidden" name="participation_grade[]" class="add_grade1" value="{{$u->participation_grade}}"> 
                                          
                                           <?php $destination_array = explode(',', $u->participation_grade);
                                        ?>
                                          <label>Participation grade levels</label> 
                                          
                                          <select   class="langOpt form-control" multiple >
                                                    <option  <?php  foreach($destination_array as $key=>$val)
                                           {
                                           if($val=="9"){echo 'selected';}}?> class="check_grade" value="9">9</option>
                                           
                                           
                                                    <option class="check_grade" value="10" <?php  foreach($destination_array as $key=>$val)
                                           {
                                           if($val=="10"){echo 'selected';}}?>>10</option>
                                           
                                           
                                                   
                                                    <option class="check_grade" value="11" <?php  foreach($destination_array as $key=>$val)
                                           {
                                           if($val=="11"){echo 'selected';}}?>>11</option>
                                           
                                           
                                                    <option class="check_grade"  value="12" <?php  foreach($destination_array as $key=>$val)
                                           {
                                           if($val=="12"){echo 'selected';}}?>>12</option>
                                           
                                           
                                                    <option  class="check_grade" value="Post-graduate" <?php  foreach($destination_array as $key=>$val)
                                           {
                                           if($val=="Post-graduate"){echo 'selected';}}?>>Post-graduate</option>
                                        </select>
                                        </div>      
                          
                                        </div>
                                         <div class="col-md-12">
                                             
                                        <div class="form-group check_time_part">
                                           <?php $destination_array = explode(',', $u->activity_time);
                                        
                                            ?>   <input type="hidden" name="activity_time[]" class="add_time1" value="{{$u->activity_time}}">
                                           <label>Timing of participation</label>
                                           
                                           <select  class="langOpt1 form-control" multiple >
                                                   
                                                    <option value="During school year" class="check_time" <?php  foreach($destination_array as $key=>$val)
                                           {
                                           if($val=="During school year"){echo 'selected';}}?>>During school year</option>
                                                    
                                                    <option value="During school break"  class="check_time" <?php  foreach($destination_array as $key=>$val)
                                           {
                                           if($val=="During school break"){echo 'selected';}}?>>During school break</option>
                                                    <option value="All year"  class="check_time" <?php  foreach($destination_array as $key=>$val)
                                           {
                                           if($val=="All year"){echo 'selected';}}?>>All year</option>
                                                    
                                                    </select>  
                                        </div>     
                                         
                                        </div>
                                         
                                         <div class="col-md-12">
                                        <div class="form-group">
                                        <input type="text" name="hour_week[]" placeholder="Hours spent per week" 
                                        class="form-control" value="{{$u->hour_week}}" required >
                                        </div>
                                        </div>
                                         <div class="col-md-12">
                                        <div class="form-group">
                                        <input type="text" name="week_year[]" placeholder="Weeks spent per year" 
                                        class="form-control" value="{{$u->week_year}}" required >
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group weekly">
                                            <label>I intend to participate in a similar activity in college
                                            </label>
                                            <input type="hidden" class="participate_field" value="{{$u->participate_similar}}"  name="participate_similar[]">
                                           <?php   $rest=rand(1000,10099999);?>
                                           <div class="yes_radio">
                                            <input  name="rest[<?=$rest;?>]" type="radio" @if($u->participate_similar=='Yes') checked @endif class="week_year1" value="Yes"><span class="zed">Yes</span>
                                            <label class="radiobg"></label>
                                            </div>
                                             <div class="no_radio">
                                             <input name="rest[<?=$rest;?>]" type="radio" @if($u->participate_similar=='No') checked @endif class="week_year1"  value="No"><span class="zed">No</span>
                                             <label class="radiobg"></label>
                                      </div>
                                        </div>
                                        </div>
                                        @endif
                                        </div>
                                        
                                        </div>
                                        </div>
                                         @if($course->type != 'E' )  
                                         <a href="javascript:void(0)"  data-id="{{$u->id}}" class="delete_cross idss" id="remScnt">
                                             <i class="fa fa-times"></i></a>
                                             @endif
                                        </div>
										@endforeach
										
										 @if($course->type != 'E' )
										@for($i=count($user_activities)+1;$i<=10;$i++)
										<div class="panel panel-default pnls ">
                                        <div class="panel-heading" role="tab" id="heading{{$i}}">
                                        <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" class="get_activity_text" data-parent="#accordion" 
                                        href="#collapse{{$i}}" aria-expanded="false" aria-controls="collapse{{$i}}">
                                         @if($course->type == 'E' )
                                        Essay  {{$i}}
                                        @else
                                         Activity  {{$i}}
                                         @endif 
                                        </a>
                                        </h4>
                                        </div>
										<div id="collapse{{$i}}" class="panel-collapse collapse" role="tabpanel" 
										aria-labelledby="heading{{$i}}">
										<div class="panel-body">
                                        <div class="row">
                                        <?php $random=mt_rand(100000, 999999);?>
                                        <input type="hidden" name="name[]"  value="">
                                        <input type="hidden" name="lesson_id[]"  value="{{$lid}}">
                                        <input type="hidden" name="syllabus_id[]"  value="0">
                                       
                                       
                                        <input type="hidden" name="course_id[]"  value="{{$course_details[0]['id']}}">
                                          @if($course->type != 'E' )
                                        <div class="col-md-12">
                                        <div class="form-group "> 
                                        <select class="form-control  act_type typeact " name="user_selection[]" required>
                                        <option value=""> Select Activity Type </option>
                                        @foreach($act as $acts)
                                        <option value="{{$acts->name}}"><?php $get=\App\Activity::where('id',$acts->name)->first();
                                        echo $get->name;?></option>
                                        @endforeach
                                        </select>
                                        </div>
                                        </div>
                                      
                                        <div class="col-md-12 ">
                                        <div class="form-group ">
                                      
                                        <input type="text" name="activity_title[]" placeholder="Activity Title" class="form-control " 
                                        value="" required >
                                        </div>
                                        </div>
                                        @endif
										<div class="col-md-12 ">
										<div class="form-group title_random">
										 <input type="hidden" class="idss" name="id[]" value="0" >
                                        <input type="hidden"  name="random[]"  class="random_id" value="0" >
										<textarea class="form-control content22 summernote" id="exampleInputEmail1" rows="7"
										name="user_input[]" placeholder="Description" required></textarea>
                                        </div>
                                        </div>
                                        @if($course->type != 'E' )
                                         <div class="col-md-12">
                                       <div class="form-group grade_level">
                                          <input type="hidden" name="participation_grade[]" class="add_grade1" value="">  <label>Participation grade levels</label>   
                                          <select   class="langOpt form-control" multiple >
                                                    <option class="check_grade" value="9">9</option>
                                                    <option class="check_grade" value="10">10</option>
                                                   
                                                    <option class="check_grade" value="11">11</option>
                                                    <option  class="check_grade" value="12">12</option>
                                                    <option  class="check_grade" value="Post-graduate">Post-graduate</option>
                                        </select>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                      <div class="form-group check_time_part">
                                            <input type="hidden" name="activity_time[]" class="add_time1" value=""> 
                                           <label>Timing of participation</label>
                                           
                                           <select  class="langOpt1 form-control" multiple >
                                                   
                                                    <option value="During school year" class="check_time">During school year</option>
                                                    
                                                    <option value="During school break"  class="check_time">During school break</option>
                                                    <option value="All year"  class="check_time">All year</option>
                                                    
                                                    </select>  
                                        </div>
                                        </div>
                                         
                                         <div class="col-md-12">
                                        <div class="form-group">
                                        <input type="text" name="hour_week[]" placeholder="Hours spent per week" 
                                        class="form-control" value="" required >
                                        </div>
                                        </div>
                                         <div class="col-md-12">
                                        <div class="form-group">
                                        <input type="text" name="week_year[]" placeholder="Weeks spent per year" 
                                        class="form-control" value="" required >
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group weekly">
                                            <label>I intend to participate in a similar activity in college
                                            </label>
                                            <input type="hidden" class="participate_field" value=""  name="participate_similar[]">
                                             <?php   $rest=rand(1000,10099999);?>  <div class="yes_radio">
                                            <input type="radio" name="rest[<?=$rest;?>]" class="week_year1" value="Yes"><span class="zed">Yes</span>
                                             <label class="radiobg"></label> 
                                            </div>
                                              <div class="no_radio">
                                             <input id="no-radio"  name="rest[<?=$rest;?>]" type="radio" class="week_year1"  value="No"><span class="zed">No</span>
                                             <label class="radiobg"></label>
                                             </div>
                                      
                                        </div>
                                        </div>
                                        @endif
                                        </div>
                                        
                                        </div>
                                        </div>
                                        <a href="javascript:void(0)"  data-id="" class="delete_cross idss" id="remScnt"><i class="fa fa-times"></i></a>
                                        </div>
										@endfor
										 @endif
										<!--for close-->
										</form>
										@else
												  
										
										
									<!-----for i counting-->
									  @if($course->type == 'A' )
										@for($i=1;$i<=10;$i++)
										 <input type="hidden" id="count" value="10" >
										 <form class="addactivityuser" method="POST" data-action="{{ url('/') }}/add-activity-user" data-next="{{ url('/') }}/interactive-exercise/{{$lesson->id}}">
                                        @csrf
										<div class="panel panel-default pnls">
                                        <div class="panel-heading" role="tab" id="heading{{$i}}">
                                        <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" 
                                        href="#collapse{{$i}}"  class="get_activity_text"aria-expanded="false" aria-controls="collapse{{$i}}">
                                         Activity  {{$i}}
                                        </a>
                                        </h4>
                                        </div>
										<div id="collapse{{$i}}" class="panel-collapse collapse" role="tabpanel" 
										aria-labelledby="heading{{$i}}">
										<div class="panel-body">
                                        <div class="row">
                                         <?php $random=mt_rand(100000, 999999);?>
                                        
                                      
                                        <input type="hidden" name="course_id[]"  value="{{$syllabus->course_id}}">
                                        <div class="col-md-12 ">
                                        <input type="hidden" id="files" type="file">
                                        <input type="hidden" name="name[]"  value="">
                                        <input type="hidden" name="lesson_id[]"  value="{{$lid}}">
                                        <input type="hidden" name="syllabus_id[]"  value="0">  
                                        <div class="form-group">
                                        <select class="form-control  act_type typeact" name="user_selection[]" required>
                                        <option value=""> Select Activity Type </option>
                                        @foreach($act as $acts)
                                        <option value="{{$acts->name}}"><?php $get=\App\Activity::where('id',$acts->name)->first();
                                        if(!empty($get))
                                        {
                                        echo $get->name;
                                        }else
                                        {
                                            echo 'Not Exist';
                                        }?></option>
                                        @endforeach
                                        </select>
                                        </div>
                                        </div>
                                        
                                         <div class="col-md-12  ">
                                        <div class="form-group">
                                       
                                        <input type="text"  class="form-control " name="activity_title[]" 
                                        placeholder="Activity Title"required>
                                        </div>
                                        </div>
										<div class="col-md-12">
										<div class="form-group  title_random"> 
										<input type="hidden" class="idss" name="id[]" value="0" >
                                        <input type="hidden"  name="random[]"  class="random_id" value="0" >
										<textarea class="form-control content22 summernote" id="exampleInputEmail1" rows="7"
										name="user_input[]" placeholder="Description" required></textarea>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group grade_level">
										<input type="hidden" name="participation_grade[]" class="add_grade1" value="">  <label>Participation grade levels</label>   
										<select   class="langOpt form-control" multiple >
										<option class="check_grade" value="9">9</option>
										<option class="check_grade" value="10">10</option>

										<option class="check_grade" value="11">11</option>
										<option   class="check_grade" value="12">12</option>
										<option  class="check_grade" value="Post-graduate">Post-graduate</option>
										</select>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group check_time_part">
										<input type="hidden" name="activity_time[]" class="add_time1" value=""> 
										<label>Timing of participation</label>

										<select  class="langOpt1 form-control" multiple >

										<option value="During school year" class="check_time">During school year</option>

										<option value="During school break"  class="check_time">During school break</option>
										<option value="All year"  class="check_time">All year</option>

										</select>  
										</div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                        <input type="text" name="hour_week[]" placeholder="Hours spent per week" 
                                        class="form-control" value="" required >
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                        <input type="text" name="week_year[]" placeholder="Weeks spent per year" 
                                        class="form-control" value="" required >
                                        </div>
                                        </div>
                                      
                                        <div class="col-md-12">
                                        <div class="form-group weekly">
                                            <label>I intend to participate in a similar activity in college
                                            </label>
                                            <input type="hidden" class="participate_field" value=""  name="participate_similar[]">
                                            <?php   $rest=rand(1000,10099999);?> <div class="yes_radio">
                                            <input type="radio" class="week_year1"  name="rest[<?=$rest;?>]" value="Yes"><span class="zed">Yes</span>
                                            <label class="radiobg"></label>
                                            </div>
                                             <div class="no_radio">
                                             <input type="radio" class="week_year1"  name="rest[<?=$rest;?>]"   value="No"><span class="zed">No</span>
                                              <label class="radiobg"></label>
                                             </div>
                                      
                                        </div>
                                        </div>
                                        
                                        </div>
                                        
                                        </div>
                                        </div>
                                        <a href="javascript:void(0)"  class="delete_cross idss" data-id="" id="remScnt"><i class="fa fa-times"></i></a>
                                        </div>
										
										@endfor
										</form>
										<!--for close-->
									@else
									<input type="hidden" id="count" value="1" >
									 <input type="hidden" id="count" value="10" >
										 <form class="addactivityuser" method="POST"
										 data-action="{{ url('/') }}/add-activity-user" data-next="{{ url('/') }}/interactive-exercise/{{$lesson->id}}">
                                        @csrf
										<div class="panel panel-default pnls new-bt" >
                                        <div class="panel-heading" role="tab" id="heading1">
                                        <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" 
                                        href="#collapse1"  
                                        class="get_activity_text"aria-expanded="false" 
                                        aria-controls="collapse1">
                                        
                                        Essay 
                                      
                                        </a>
                                        </h4>
                                        </div>
										<div id="collapse1" class="panel-collapse collapse" role="tabpanel" 
										aria-labelledby="heading1">
										<div class="panel-body">
                                        <div class="row">
                                         <?php $random=mt_rand(100000, 999999);?>
                                         <input type="hidden" id="files" type="file">
                                        <input type="hidden" name="name[0]"  value="">
                                        <input type="hidden" name="lesson_id[0]"  value="{{$lid}}">
                                        <input type="hidden" name="syllabus_id[0]"  value="0">
                                        <input type="hidden" name="course_id[0]"  value="{{$syllabus->course_id}}">
										<div class="col-md-12">
										<div class="form-group  title_random"> 
										<input type="hidden" class="idss" name="id[0]" value="0" >
                                        <input type="hidden"  name="random[0]"  class="random_id" value="0" >
										<textarea class="form-control content22 summernote <?php 
										if($course->type == 'E' ){
										echo 'cont-st-rw';
										}else
										{
										  echo '';  
										}?>" id="exampleInputEmail1" rows="<?php 
										if($course->type == 'E' ){
										echo '20';
										}else
										{
										  echo '';  
										}?>" name="user_input[0]" placeholder="Description" required></textarea>
                                        </div>
                                        </div>
                                        </div>
                                        
                                        </div>
                                        </div>
                                       
                                        </div>
									
									@endif
									
										@endif
										
										<div id="afteradd"></div>
										</div>	@if(Session()->exists('user'))
										@if($course->type !='E')
										<a href="javascript:void(0)" id="addScnt"><i class="fa fa-plus"></i> Add Another Activity</a>
										@endif
										@endif
										</form>
										</div>
										</div>
									</div>
										<div class="btn-all-s">
										    
										    	<button class=" save_user_act"
										  type="button">
									    </button>
										<button class="btn btn-success btn-rd  save_message"
										  data-placement="right" title="Save" data-toggle="tooltip"  type="button">
									    <i class="fa fa-save" aria-hidden="true"></i></button>    
										
										<a href="#" data-toggle="tooltip" data-placement="left" title="Reset Activity List" class="btn-rd right-rfts reset_all" >
										<i class="fa fa-retweet" aria-hidden="true"></i>
										</a>
										</div>	
								</li>
								<li class="cont-third cstm-height editor-list example_list height100" >
								    <input type="hidden" value="" id="egcount">
								    <input type="hidden" value="" id="totaleg">
								    <input type="hidden" value="1" id="essaycount">
								    <input type="hidden" value="<?php echo count($examples_essay);?>" id="tessaycount">
								    <h4 class="dblt-drs"> 
												Examples 
												<!--a class="full-vie" href="#feedback-tab" data-lity><i class="fas fa-arrows-alt"></i></a-->
												<a class="full-vie full-hide  hide_save" href="javascript:void(0)"><i class="fas fa-arrows-alt"></i></a>
												<a class="full-vie full-show show_save" href="javascript:void(0)" style="display:none">
													<img src="{{url('/')}}/resources/assets/img/mini.png" class="back-exr mCS_img_loaded">
												</a>
											</h4>
                                            <div class="cont-heigt-ns      mCustomScrollbar get_sticky_btns">
                                            <div class="cont-lst-s">
                                            <div class="getdata">
                                                
                                            <?php $i=1;?>
                                            @foreach($examples_essay as $e)
                                            <?php $rec=$i++;?>
                                            <div class="actvt-frm">
                                            <h5>Example <?=$rec;?></h5>
                                            <?=$e->description;?>
                                            </div>
                                            @endforeach
                                            @if(empty($examples_essay)) 
                                            Examples not found..!
                                            @endif
                                            </p>
                                            </div><span class="getdata1"></span>
                                            </div>
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
	
	
	<div id="feedback-tab" class="pop-cnsa lity-hide">
        <div class="pop-all-s mCustomScrollbar">
			<div class="cont-lst-s">
				<h4 class="dblt-drs"> 
					Feedback 
					
				</h4>
				<div class="actvt-frm">
					<h5> Feedback One</h5>
				</div>
				<p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi. </p>
				
				<div class="actvt-frm">
					<h5> Feedback Two</h5>
				</div>
				<p>  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. </p>
				
				<div class="actvt-frm">
					<h5> Feedback Three</h5>
				</div>
				<p>  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi. </p>
				
				<div class="actvt-frm">
					<h5> Feedback Four</h5>
				</div>
				<p> Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
				
				<div class="actvt-frm">
					<h5> Feedback Five</h5>
				</div>
				<p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi. </p>
			</div>
		</div>
    </div>
	
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
	
	<div class="modal del-modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body text-center">
				<i class="icon-close"></i>
				<h1>Are you sure?</h1>	
				<p class="lbl">Do you really want to reset this activity list ? This action cannot be undone.</p>
				<ul class="action-btns">					
					<li>
						<button type="button" class="btn  btn-light mr-2" data-dismiss="modal">Cancel</button>
					</li>
					<li>
					    <button type="button" class="btn  btn-danger confirm_delete_list">Delete</button>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
</div>
	
        @include('layouts/footer')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
        <script>
        $(document).ready(function() {
            $('.langOpt1').multiselect({
includeSelectAllOption: true
});
          $('.langOpt').multiselect({
includeSelectAllOption: true
});
        $( ".actvt-frm:gt(1)" ).css( "display", "none" );
          var type=$('#type').val();
          if(type=='E')
          {
             if($('#tessaycount').val()>='1')
             {
             $('.getdata1').after('<a href="javascript:void(0);" class="btn btn-info pull-right read_more_essay " data-course="595" data-category="318"><b>See another example</b></a><a href="javascript:void(0);" class="btn btn-info read_less_essay  " style="visibility: hidden;" data-course="595" data-category="318"><b>Previous</b></a>');
             }
          }
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
    $(document).on('keyup', '.content22', delay(function (e){
         var minNumber = 1; // le minimum
        var maxNumber = 1000000; // le maximum
        var randomnumber = Math.floor(Math.random() * (maxNumber + 1) + minNumber); // la fonction magique
        //alert(randomnumber);
        
        $(this).closest('.title_random').find('.random_id').val(randomnumber); 
        $(this).closest('.title_random').find('.idss').addClass('getid'+randomnumber); 
        $(this).closest('.title_random').find('.delete_cross').addClass('getid'+randomnumber); 
        $(this).parent().parent().parent().parent().parent().parent().find('.delete_cross').addClass('getid'+randomnumber); 
        
    }, 1000));
    
    $(document).on('keyup', '.act_title', delay(function (e){
        var minNumber = 1; // le minimum
        var maxNumber = 1000000; // le maximum
        var randomnumber = Math.floor(Math.random() * (maxNumber + 1) + minNumber); // la fonction magique
        $(this).closest('.title_random').find('.random_id').val(randomnumber); 
        $(this).closest('.title_random').find('.idss').addClass('getid'+randomnumber); 
        $(this).closest('.title_random').find('.delete_cross').addClass('getid'+randomnumber); 
        $(this).parent().parent().parent().parent().parent().parent().find('.delete_cross').addClass('getid'+randomnumber); 
        
        }, 1000));
        $(document).on('keyup', '.form-control', delay(function (e){
        $('.save_user_act').trigger('click');
        }, 2000));
        
        /*$(document).on('change', '.langOpt', delay(function (e){
        $('.save_user_act').trigger('click');
        }, 2000));
        
        $(document).on('change', '.langOpt1', delay(function (e){
        $('.save_user_act').trigger('click');
        }, 2000));
        $(document).on('click', '.week_year1', delay(function (e){
        $('.save_user_act').trigger('click');
        }, 2000));*/
        

    $(document).on('click', '.show_save', function () {
         $('.btn-all-s').show();
       $('.write_clm').removeClass('enhance'); 
        
    });
    $(document).on('click', '.hide_save', function () {
       $('.btn-all-s').hide();
         $('.write_clm').addClass('enhance');
       
    });
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
    var data = new FormData($('.'+form)[0]);
   
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
    $('.getid'+data.random).val(data.act_id);
    $('.getid'+data.random).attr("data-id",data.act_id);
    $('.getid'+data.random).data("act_id",data.act_id);
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
// alert(data1);
$('.get_act').html(data1);
},
});
    
});
	$(document).on('change', '.typeact', function () {
	    var id=$(this).val();
	    var table="example";
	    var base=$('#base_url').val();
	    var course=$('#course_id').val();
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
                  $('#totaleg').val(data1);
                },
            }); 
	   
	});
	
	$(document).on('click', '.week_year1', function () {
	       
	   var value=$(this).closest('.weekly').find('.participate_field').val($(this).val());
	    
	});
	$(document).on('change', '.langOpt1', function () {
	 /* 
	   var value=$(this).closest('.check_time_part').find('.add_time').text();
	   if(value=='')
	   {
	       $(this).closest('.check_time_part').find('.add_time').text($(this).val());
	   }else
	   {
	       var id=$(this).val();
	       var container =$(this).closest('.check_time_part').find('.add_time').append(','+id);
	    
	   }
	    
	 var grade=$(this).closest('.check_time_part').find('.add_time').html(); */
	 var new1=$(this).closest('.check_time_part').find('.add_time1').val($(this).val());
	    
	});
	$(document).on('change', '.langOpt3', function () {
	   
/*	    
	   var value=$(this).closest('.grade_level').find('.add_grade').text();
	   if(value=='')
	   {
	       $(this).closest('.grade_level').find('.add_grade').text($(this).val());
	   }else
	   {
	       var id=$(this).val();
	       var container =$(this).closest('.grade_level').find('.add_grade').append(','+id);
	    
	   }
	    
	 var grade=$(this).closest('.grade_level').find('.add_grade').html(); */
	 var new1=$(this).closest('.check_time_part').find('.add_time1').val($(this).val());
	    
	});
		$(document).on('change', '.langOpt2', function () {
	   
/*	    
	   var value=$(this).closest('.grade_level').find('.add_grade').text();
	   if(value=='')
	   {
	       $(this).closest('.grade_level').find('.add_grade').text($(this).val());
	   }else
	   {
	       var id=$(this).val();
	       var container =$(this).closest('.grade_level').find('.add_grade').append(','+id);
	    
	   }
	    
	 var grade=$(this).closest('.grade_level').find('.add_grade').html(); */
	 var new1=$(this).closest('.grade_level').find('.add_grade1').val($(this).val());
	    
	});
	
	$(document).on('change', '.langOpt', function () {
	   
/*	    
	   var value=$(this).closest('.grade_level').find('.add_grade').text();
	   if(value=='')
	   {
	       $(this).closest('.grade_level').find('.add_grade').text($(this).val());
	   }else
	   {
	       var id=$(this).val();
	       var container =$(this).closest('.grade_level').find('.add_grade').append(','+id);
	    
	   }
	    
	 var grade=$(this).closest('.grade_level').find('.add_grade').html(); */
	 var new1=$(this).closest('.grade_level').find('.add_grade1').val($(this).val());
	    
	});
	$(document).on('change', '.activity_type,.act_type', function () {
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
                    $('#egcount').val('1');
                 	$('.getdata').html(data1);
                  // $( '.getdata .actvt-frm h5' ).css( "Color", "yellow !important" );
				$( ".actvt-frm:gt(1)" ).css( "display", "none" );
				$( ".actvt-frm:gt(1)" ).css( "display", "none" );
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
                var type=$('#type').val();
                
                if(type=='E')
                {
                   
                    $('.time_ajax').remove();
                    $('.grade_ajax').remove();
                    $('.hour_ajax').remove();
                    $('.week_ajax').remove();
                     $('.time_ajax').css('display','none !important');
                    $('.grade_ajax').hide();
                    $('.hour_ajax').hide();
                    $('.week_ajax').hide();
                    
                }
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
            if(type=='A')
            {
						$('<div class="panel panel-default pnls"><div class="panel-heading" role="tab" id="headingThree'+i+'"><h4 class="panel-title"><a class="collapsed get_activity_text" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree'+i+'" aria-expanded="false" aria-controls="collapseThree'+i+'">Activity '+lessoncount+'</a></h4></div><div id="collapseThree'+i+'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree'+i+'"><div class="panel-body"><div class="row"><div class="col-md-12 "><div class="form-group"><input type="hidden" name="lesson_id[]" value=""><input type="hidden" name="syllabus_id[]" value="0"><input type="hidden" name="course_id[]" value="'+course_id+'"><select class="form-control get_act act_type typeact" name="user_selection[]"><option> Select Type </option>'+htm+'</select></div></div><div class="col-md-12"><div class="form-group "><input type="text" name="activity_title[]" class="form-control" placeholder="Activity Title"></div></div><div class="col-md-12"><div class="form-group title_random"><input type="hidden" class="idss" name="id[]" value="0" ><input type="hidden"  name="random[]"  class="random_id" value="0" ><textarea class="form-control content22  content1" id="exampleInputEmail1" name="user_input[]" rows="7" placeholder="Description"></textarea></div></div><div class="col-md-12 grade_ajax">  <div class="form-group grade_level"><input type="hidden" name="participation_grade[]" class="add_grade1" value="">  <label>Participation grade levels</label>   <select   class="langOpt2 form-control" multiple ><option class="check_grade" value="9">9</option><option class="check_grade" value="10">10</option><option class="check_grade" value="11">11</option><option  class="check_grade" value="12">12</option><option  class="check_grade" value="Post-graduate">Post-graduate</option></select></div></div><div class="col-md-12 time_ajax">   <div class="form-group check_time_part"><input type="hidden" name="activity_time[]" class="add_time1" value=""> <label>Timing of participation</label><select  class="langOpt3 form-control" multiple ><option value="During school year" class="check_time">During school year</option><option value="During school break"  class="check_time">During school break</option><option value="All year"  class="check_time">All year</option></select>  </div></div><div class="col-md-12 hour_ajax"><div class="form-group"><input type="text" name="hour_week[]" placeholder="Hours spent per week" class="form-control" value="" required ></div></div><div class="col-md-12 week_ajax"><div class="form-group" ><input type="text" name="week_year[]" placeholder="Weeks spent per year" class="form-control" value="" required ></div></div> <div class="col-md-12"><div class="form-group weekly"><label>I intend to participate in a similar activity in college</label><input type="hidden" class="participate_field" value=""  name="participate_similar[]"><div class="yes_radio"><input type="radio"  name="rest['+randomnumber+']" class="week_year1" value="Yes"><span class="zed">Yes</span><label class="radiobg"></label></div><div class="no_radio"><input type="radio"  name="rest['+randomnumber+']" class="week_year1"  value="No"><span class="zed">No</span><label class="radiobg"></label></div></div></div></div></div></div><a href="javascript:void(0)" class="delete_cross idss" id="remScnt"><i class="fa fa-times"></i></a></div>').appendTo(scntDiv);
            }else
            {
                	$('<div class="panel panel-default pnls"><div class="panel-heading" role="tab" id="headingThree'+i+'"><h4 class="panel-title"><a class="collapsed get_activity_text" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree'+i+'" aria-expanded="false" aria-controls="collapseThree'+i+'">Essay '+lessoncount+'</a></h4></div><div id="collapseThree'+i+'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree'+i+'"><div class="panel-body"><input type="hidden" name="lesson_id[]" value="'+less_id+'"><input type="hidden" name="syllabus_id[]" value="0"><div class="row"><div class="col-md-12"><div class="form-group title_random"><input type="hidden" class="idss" name="id[]" value="0" ><input type="hidden" name="random[]"class="random_id" value="0"><textarea class="form-control content22  content1" id="exampleInputEmail1" name="user_input[]" rows="7" placeholder="Description"></textarea></div></div></div></div></div><a href="javascript:void(0)" class="delete_cross idss" id="remScnt"><i class="fa fa-times"></i></a></div>').appendTo(scntDiv);
            }
					 $('.langOpt2').multiselect({
includeSelectAllOption: true
});	 $('.langOpt3').multiselect({
includeSelectAllOption: true
});	i++;

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
                         $('body').on('click', '.read_less_essay', function(){
                        
                        var min=parseInt($('#essaycount').val())-1;
                        var new1=parseInt($('#essaycount').val())-1;
                        var new2=parseInt($('#essaycount').val());
                     
                       /* $( ".getdata .actvt-frm:lt("+min+")" ).css( "display", "none" );
                        */
                           $( ".getdata .actvt-frm:nth-child("+new2+")").css( "display", "none" );
                       
                        $('#essaycount').val(new1);
                        $( ".getdata .actvt-frm:nth-child("+min+")").css( "display", "block" );
                       if(parseInt($('#essaycount').val()) != $('#tessaycount').val())
                        {
                         $('.read_more_essay').show();
                        
                        }
                        if(parseInt($('#essaycount').val()) =='1')
                        {
                        $('.read_less_essay').css('visibility','hidden');
                        
                        
                        }
                        $('#mCSB_4_container').css('top','0px');
                        });
                        
                        
                        $('body').on('click', '.read_more_essay', function(){
                        var new1=parseInt($('#essaycount').val())+1;
                        var min=parseInt($('#essaycount').val());
                        $( ".getdata .actvt-frm:lt("+min+")" ).css( "display", "none" );
                        
                        $('#essaycount').val(new1);
                        $( ".getdata .actvt-frm:nth-child("+new1+")").css( "display", "block" );
                        $('.read_less_essay').css('visibility','visible');
                        if(parseInt($('#essaycount').val()) == $('#tessaycount').val())
                        {
                        $('.read_more_essay').hide();
                        
                        
                        }
                        $('#mCSB_4_container').css('top','0px');
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
                        var eg=$('#egcount').val();
                        var new1=parseInt(eg)+1;
                        $('#egcount').val(new1);
                        if($('#totaleg').val() == new1)
                        {
                        $('.hide'+id).hide();
                        }else
                        {
                        $('.hide'+id).show();
                        }
                        $( ".actvt-frm:nth-child("+new1+")" ).css( "display", "block" );
                       
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
                           // alert(href);
                            window.location.href= href;
                        }
                        
                    });
                        $('body').on('click', '.reset_all', function(){
                    // alert(); 
                    $('#delete_modal').modal('show');
                    
                    });
                    $('body').on('click', '.delete_cross', function(){
                            var id=$(this).attr("data-id");
                            var base=$('#base_url').val();
                            var action =base+'/delete_useractivity';
                            var data ={id:id};
                            $.ajax({
                            headers: {
                            'X-CSRF-Token': $('input[name="_token"]').val()
                            },
                            type: 'post',
                            url: action,
                            data: data,
                            success: function (data1) {
                            },
                        });
                  
                    $(this).parents('.pnls').remove();
                    var totalFiles = document.getElementsByClassName('delete_cross').length;
                    
                    $('#length').val(totalFiles);
                    var count=1;
                    $('.get_activity_text').each(function() { 
                      if($('#type').val()=='E')
                      {
                        $(this).text('Essay '+count);
                      }else
                      {
                          $(this).text('Activity '+count);
                          
                      }
                        count=count+1;
                    });
                    $('.save_user_act').trigger('click');
                    });
                    });
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>