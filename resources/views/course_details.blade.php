@include('layouts/header')
   <style>
   .title
   {
       word-break: break-all;
   }
   .text_progress
   {
     color: #666666 !important;
    line-height: 26px !important;
    margin: 0 0 15px !important;
    text-transform: none !important;
    font-weight: 400 !important;
    text-align: center !important;
   }
   .prof-sec
   {
	   display:none;
   }
   .session_admin
   {
       display:none;
   }
   </style>
    <!-- Start Course Details  -->
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="course-details-info">
                        <!-- Star Top Info -->
                        <div class="top-info">
                            <!-- Title-->
                            <div class="title">
                                <div class="row">
                                <div class="col-sm-12">
									<h2 class="m-b-60">{{$course_details->title}}</h2>
								</div>
                                <?php 
                                if(!empty($user_course)){
                                $percentage = \App\Userlesson::getviewedlessons(Session()->get('userid'),$course_details->id);
                                $totalWidth =  \App\Lesson::getlessoneithcoursecon($course_details->id,$user->package_id);
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
                                    @if(Session::has('error'))  
                                    <div class="alert alert-danger">
                                    {{ Session::get('error')}} 
                                    </div>
                                    @endif
                                    
                                    @if(Session::has('success'))   
                                    <div class="alert alert-success">
                                    {{ Session::get('success')}} 
                                    </div>
                                    @endif
                                    @if(!empty($options))
                                    
                                    <?php 
                                    
                                    foreach($options as $option)
                                    {
        if($option->coulmn_name == 'tc_title')
        {
            $tc_title = $option->coulmn_value; 
        }
        if($option->coulmn_name == 'tc_content')
        {
            $tc_content = $option->coulmn_value; 
        }
        if($option->coulmn_name == 'stripe_mode')
        {
            $stripe_mode = $option->coulmn_value; 
        }
        if($option->coulmn_name == 'sandbox_mode_key')
        {
            $sandbox_mode_key = $option->coulmn_value; 
        }
         if($option->coulmn_name == 'sandbox_mode_skey')
        {
            $sandbox_mode_skey = $option->coulmn_value; 
        }
        if($option->coulmn_name == 'live_mode_key')
        {
            $live_mode_key = $option->coulmn_value; 
        }
        if($option->coulmn_name == 'live_mode_skey')
        {
            $live_mode_skey = $option->coulmn_value; 
        }
         
        
    }
 if($stripe_mode=='sandbox')
 {
     $publish=$sandbox_mode_key;
     $secret=$sandbox_mode_skey;
 }else
 {
     $publish=$live_mode_key;
     $secret=$live_mode_skey;
 }
 
?>
@endif
								<div class="col-sm-8">
									<div class="progress">
									  <div class="progress-bar progress-bar-danger progress-bar-striped " role="progressbar"
									  aria-valuenow="{{$percent_friendly}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$percent_friendly}} !important">
									  </div>

									</div>
				  
				 
				  				<p class="main-under-cls text-center text_progress">{{$percent_friendly}}</p>
									<span class="main-txt-icn tropy-r8"><img src="{{url('/')}}/resources/assets/img/trophy.png"></span>
								</div>
								<div class="col-sm-2">
        <?php
        $get=\App\User_package::where('user_id',Session()->get('userid'))->where('course_id',$course_details->id)->orderby('id','desc')->first();
        if(empty($get))
        {
            $pp=$course_details->price * 100;
        ?>
         <form class="card-signd" action="{{url('user/postPaymentWithStripe')}}" method="POST">
                                       
        <script
        src="https://checkout.stripe.com/checkout.js" 
        class="stripe-button"
        data-key="{{$publish}}"
        data-amount="{{$pp}}"
        data-name="{{$course_details->title}}"
        data-description=""
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto"
        data-currency="USD">
        </script>
        
		<input type="hidden" id="amount"  name="amount" value="{{$course_details->price}}">
		<input type="hidden"  id="courseid"  name="course_id" value="{{$course_details->id}}">
        <input id="" type="hidden"  name="product_name" value="{{$course_details->title}}">
        <input id="" type="hidden"  name="product_amount" value="{{$pp}}">
        <input id="" type="hidden"  name="product_interval" value="12">
     </form>
        <?php
        echo '<!--a class="btn btn-dark effect btn-sm pull-right " href="#">
        <i class="fas fa-file-alt"></i> Buy the course
        </a-->';
        }else
        {
            if(date('Y-m-d') >=$get->end_date)
         {
             $pp=$course_details->price * 100;
  
            ?>
             <form class="card-signd" action="{{url('user/postPaymentWithStripeupdate')}}" method="POST">
                                       
        <script
        src="https://checkout.stripe.com/checkout.js" 
        class="stripe-button"
        data-key="{{$publish}}"
        data-amount="{{$pp}}"
        data-name="{{$course_details->title}}"
        data-description=""
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto"
        data-currency="USD">
        </script>
       
		<input type="hidden" id="amount"  name="amount" value="{{$course_details->price}}">
		<input type="hidden"  id="courseid"  name="course_id" value="{{$course_details->id}}">
        <input id="" type="hidden"  name="product_name" value="{{$course_details->title}}">
        <input id="" type="hidden"  name="product_amount" value="{{$pp}}">
        <input id="" type="hidden"  name="product_interval" value="12">
     </form>
             
             <?php
        
         }else
         {
			 $start_date = strtotime(date('Y-m-d') ); 
              $end_date = strtotime($get->end_date); 
			 ?>
			 <a class="btn btn-dark effect btn-sm pull-right " href="#"><?php echo ""
                            . ($end_date - $start_date)/60/60/24; ?> days left</a>
			 <?php
			  
         
             
         }
        }
        
        ?>
		
        </div>
								
								<div class="col-sm-2">
								@if(!empty($user_course))
								@if($percent_friendly!='0%')
								<a class="btn btn-dark effect btn-sm pull-right resume-btn @if(Session()->exists('admin')) hide @endif" href="#">
									<i class="fas fa-file-alt"></i> Resume
								</a>
								@else
								<a class="btn btn-dark effect btn-sm pull-right resume-btn @if(Session()->exists('admin')) hide @endif" href="#">
									<i class="fas fa-file-alt"></i> Start
								</a>
								@endif
								@else
									<a class="btn btn-dark effect btn-sm pull-right resume-btn @if(Session()->exists('admin')) hide @endif" href="#">
									<i class="fas fa-file-alt"></i> Start
								</a>
								@endif
                            </div></div></div>
                            <div class="thumb">
                                <div class="row">
        							<div class="col-sm-12">
        							     @if(empty($course_details->banner_image))
                                            <div class="main-in" style="
                                            background-image: url({{url('/')}}/resources/assets/img/3.svg);
                                            background-size: cover;
                                            background-position: center center;
                                            background-repeat: no-repeat;
                                            background-color: #0db3ad;">
                                            @else
                                            <div class="main-in" style="
                                            background-image: url({{url('/')}}/public/uploads/{{$course_details->banner_image}});
                                            background-size: cover;
                                            background-position: center center;
                                            background-repeat: no-repeat;
                                            background-color: #0db3ad;">
                                            @endif

        									<!---div class="col-sm-8 left-side-img">
        									    @if(empty($course_details->image))
        										<img src="{{url('/')}}/resources/assets/img/3.svg">
        										@else
        										<img src="{{url('/')}}/public/uploads/{{$course_details->image}}">
        										@endif
        										</div--->
        									<!---div class="col-sm-4 right-side-img">
        										<img src="{{url('/')}}/resources/assets/img/pattren1.png">
        									</div---><!--div class="back-overlap"><img src="assets/img/pattren.png"></div--></div></div>
        								
                                   
                                </div>    
                                    <!-- End Thumbnail -->

                            <!-- Course Meta -->
                            <div class="course-meta">
                                <div class="item author">
                                    <div class="thumb">
                                       <?=$course_details->description;?>
								   </div>
                                </div>
								
                                
                            </div>
                            <!-- End Course Meta -->
                        </div>
                        <!-- End Top Info -->

						<div class="tab-area-self">
							<div class="row mb-30 flx-m">
								<div class="col-sm-6 left-hh">
								    <ul class="mainss">
								        <li class="active"><a class="btn btn-dark effect btn-sm first-main-right self-frst" data-toggle="tab" href="#tab1" aria-expanded="true" >
										OVERVIEW
									</a></li>
									<li ><a class="btn btn-dark effect btn-sm first-main-right second-btn " data-toggle="tab" href="#tab2"  aria-expanded="false" >
										SYLLABUS
									</a></li>
								    </ul>
								
								</div>
								<div class="col-sm-6 pull-right main-tct right-hh">
									<!--a class="btn btn-dark effect btn-sm @if(Session()->exists('admin')) hide @endif" href="#">
										 UPGRADE TO PRO
									</a-->
									<a data-target="#redo" data-id="{{$course_details->id}}"  data-toggle="modal"  class="redo_completed btn btn-dark effect btn-sm self-right-btn @if(Session()->exists('admin')) hide @endif" href="#">
										RESET PROGRESS
									</a>
								</div>
							</div>
							<!-- Star Tab Info -->
							<div class="tab-info">
								<!-- Start Tab Content -->
								<div class="tab-content tab-content-info">
									<!-- Single Tab -->
									<div id="tab1" class="tab-pane fade active in">
										<div class="info title overview_text">
											<h4>Why take this course?</h4>
										   <?=$course_details->course_overview;?>
										</div>
									</div>
									<!-- End Single Tab -->
									<!-- Single Tab -->
									<div id="tab2" class="tab-pane fade">
										<div class="info title">
<h4 id="syllabus">Course Syllabus</h4>
<?php $flag=0;
?><?php   $gets_last=\App\Userlesson::where('user_id',Session()->get('userid'))->orderby('id','desc')->first();
$i='0';?>

@if(Session()->exists('user'))
<?php

 $get=\App\User_package::where('user_id',Session()->get('userid'))->where('course_id',$course_details->id)->orderby('id','desc')->first();
 if(!empty($get))
 {
 if(date('Y-m-d') >=$get->end_date)
 {
     ?>
   <?php $t=1;?>
@forelse($syllabus_details as $sd)
<!-- Start Course List -->
<?php 
$r=$t++;
 //echo $r;
 ?>
<div class="course-list-items acd-items acd-arrow">
<div class="panel-group symb" id="accordion">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#ac{{$sd['id']}}">
<?=$sd['title'];?>
</a>
</h4>
<div class="pie-wrapper progress-95 style-2">
<span class="label"><i class="fa fa-check" aria-hidden="true"></i></span>
<div class="pie">
<div class="left-side half-circle"></div>
<div class="right-side half-circle"></div>
</div>
<div class="shadow"></div>
</div>
</div>
<div id="ac{{$sd['id']}}" class="panel-collapse collapse">
<div class="panel-body">
<ul class="timeline">
  <?php $p=1;?>  
@forelse($sd['lesson'] as $l)
<?php
  
$u=$p++;
// echo $u;
 
/*if( $i=='2' ){
$flag='1';
}elseif(!empty($gets_last)){

if($gets_last->lesson_id == $l['id'] && $i=='0'){
$i='1';
$flag='0';
}
}elseif( $i=='1')
{
$i='2';   
$flag='0';
}*/
?>
<li class="<?php if( $r>1 && $u>1){ echo 'disabled';}?>"><i class="fas fa-check"></i>
<div class="item name">
<span><?=$l['type'];?></span>
</div>
<div class="item title">
<h5> <?=$l['name'];?> </h5>
</div>
<div class="item info">
<?php $gets=\App\Userlesson::where('lesson_id',$l['id'])->where('user_id',Session()->get('userid'))->orderby('id','desc')->first();
?>
<span>Duration: {{$l['duration']}} min</span>
@if($l['type']=='Video')
<a href="@if($r==1 && $u==1)  {{url('/')}}/video-details/<?=$l['id'];?>  @else javascript:void(0); 
  @endif" class="<?php if($r==1 && $u==1){ echo '';}else { echo 'disabled';}?>" 
  data-cid="{{$l['course_id']}}" data-id="{{$l['id']}}" >View  
  @if($r==1 && $u==1)<i class="fa fa-unlock" style="color:#fff" aria-hidden="true"></i>@else 
  <i class="fa fa-lock" aria-hidden="true" style="color:#fff"></i> @endif</a>
@elseif($l['type']=='Exercise')

<a href="@if($r==1 && $u==1) {{url('/')}}/interactive-exercise/<?=$l['id'];?>  @else  javascript:void(0); @endif"
class=" <?php if($r==1 && $u==1){ echo '';}else { echo 'disabled';}?>"data-cid="{{$l['course_id']}}" 
data-id="{{$l['id']}}">View  @if($r==1 && $u==1)<i class="fa fa-unlock"style="color:#fff"  
aria-hidden="true"></i>@else <i class="fa fa-lock" style="color:#fff" aria-hidden="true"></i> @endif</a>
@else
@endif
</div>
</li>

<?php 

/*if(empty($gets) && $i=='1' && $flag=='0')
{
$flag='1';
$i='2';
}


if(empty($gets) && $i=='0' && $flag=='0')
{
$flag='1';
$i='2';
}*/
?>




@empty
<li>
<i class="fas fa-check"></i>
Lessons not found... !
</li>

@endforelse

</ul>
</div>
</div>
</div>
</div>
</div>
<!-- End Course List -->
<!-- Start Course List -->
@empty
Syllabus Empty...!
@endforelse
<?php 
     
 }
 else{
   ?>
	@forelse($syllabus_details as $sd)
											<!-- Start Course List -->
											<div class="course-list-items acd-items acd-arrow">
												<div class="panel-group symb" id="accordion">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#ac{{$sd['id']}}">
																	<?=$sd['title'];?>
																</a>
															</h4>
															<div class="pie-wrapper progress-95 style-2">
																<span class="label"><i class="fa fa-check" aria-hidden="true"></i></span>
																<div class="pie">
																	<div class="left-side half-circle"></div>
																	<div class="right-side half-circle"></div>
																</div>
																<div class="shadow"></div>
															</div>
														</div>
														<div id="ac{{$sd['id']}}" class="panel-collapse collapse">
															<div class="panel-body">
																<ul class="timeline">
																    @forelse($sd['lesson'] as $l)
																     	<?php 
                                                                        if( $i=='2' ){
                                                                        $flag='1';
                                                                        }elseif(!empty($gets_last)){
                                                                            
                                                                          if($gets_last->lesson_id == $l['id'] && $i=='0'){
                                                                        $i='1';
                                                                        $flag='0';
                                                                        }
                                                                        }elseif( $i=='1')
                                                                        {
                                                                        $i='2';   
                                                                        $flag='0';
                                                                        }
																	    ?>
																    	<li class="<?php if( $flag!='1'){ echo 'disabled';}?>"><i class="fas fa-check"></i>
																		<div class="item name">
																		<span><?=$l['type'];?></span>
																		</div>
																		<div class="item title">
																		<h5> <?=$l['name'];?> </h5>
																		</div>
																		<div class="item info">
																    	<?php $gets=\App\Userlesson::where('lesson_id',$l['id'])->where('user_id',Session()->get('userid'))->orderby('id','desc')->first();
													                    ?>
																		<span>Duration: {{$l['duration']}} min</span>
																		@if($l['type']=='Video')
																		<a href="@if($flag!='1') {{url('/')}}/video-details/<?=$l['id'];?> @else javascript:void(0); @endif" class="view_lesson <?php if($i=='2' && $flag=='1'){ echo 'disabled';}?>" data-cid="{{$l['course_id']}}" data-id="{{$l['id']}}" >View</a>
																		@elseif($l['type']=='Exercise')
																		<a href="@if($flag!='1') {{url('/')}}/interactive-exercise/<?=$l['id'];?> @else javascript:void(0); @endif"  class="view_lesson <?php if($i=='2' && $flag=='1'){ echo 'disabled';}?>"data-cid="{{$l['course_id']}}" 
																		data-id="{{$l['id']}}">View</a>
																		@else
																		@endif
																		</div>
																	</li>
																	
											<?php 
										
												if(empty($gets) && $i=='1' && $flag=='0')
											{
											    $flag='1';
											    $i='2';
											}
											
											
											if(empty($gets) && $i=='0' && $flag=='0')
											{
											    $flag='1';
											    $i='2';
											}
											?>
									
																	
																	
																	
																	@empty
																	<li>
																	    <i class="fas fa-check"></i>
																	    Lessons not found... !
																	</li>
																	
																	@endforelse
																	
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- End Course List -->
											<!-- Start Course List -->
											@empty
											Syllabus Empty...!
											@endforelse
   <?php
 }
 }else{
  if(!empty($user)){
if(!empty($user->package_id)){
$package=App\Subscription::getwithid($user->package_id);
$current_package=App\Transaction::get_active_payment_details($user->id);?>


<?php

$datestr=$current_package->end_date;//Your date
$date=strtotime($datestr);//Converted to a PHP date (a second count)


$diff=$date-time();//time returns current time in seconds
$days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
$hours=round(($diff-$days*60*60*24)/(60*60));

$start_date = strtotime(date('Y-m-d') ); 
$end_date = strtotime($current_package->end_date); 

?>

<?php if(date('Y-m-d') >=$current_package->end_date){ 
?>
 <?php $t=1;?>
@forelse($syllabus_details as $sd)
<!-- Start Course List -->
<?php 
$r=$t++;
 //echo $r;
 ?>
<div class="course-list-items acd-items acd-arrow">
<div class="panel-group symb" id="accordion">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#ac{{$sd['id']}}">
<?=$sd['title'];?>
</a>
</h4>
<div class="pie-wrapper progress-95 style-2">
<span class="label"><i class="fa fa-check" aria-hidden="true"></i></span>
<div class="pie">
<div class="left-side half-circle"></div>
<div class="right-side half-circle"></div>
</div>
<div class="shadow"></div>
</div>
</div>
<div id="ac{{$sd['id']}}" class="panel-collapse collapse">
<div class="panel-body">
<ul class="timeline">
  <?php $p=1;?>  
@forelse($sd['lesson'] as $l)
<?php
  
$u=$p++;
// echo $u;
 
/*if( $i=='2' ){
$flag='1';
}elseif(!empty($gets_last)){

if($gets_last->lesson_id == $l['id'] && $i=='0'){
$i='1';
$flag='0';
}
}elseif( $i=='1')
{
$i='2';   
$flag='0';
}*/
?>
<li class="<?php if( $r>1 && $u>1){ echo 'disabled';}?>"><i class="fas fa-check"></i>
<div class="item name">
<span><?=$l['type'];?></span>
</div>
<div class="item title">
<h5> <?=$l['name'];?> </h5>
</div>
<div class="item info">
<?php $gets=\App\Userlesson::where('lesson_id',$l['id'])->where('user_id',Session()->get('userid'))->orderby('id','desc')->first();
?>
<span>Duration: {{$l['duration']}} min</span>
@if($l['type']=='Video')
<a href="@if($r==1 && $u==1)  {{url('/')}}/video-details/<?=$l['id'];?>  @else javascript:void(0); 
  @endif" class="<?php if($r==1 && $u==1){ echo '';}else { echo 'disabled';}?>" 
  data-cid="{{$l['course_id']}}" data-id="{{$l['id']}}" >View  
  @if($r==1 && $u==1)<i class="fa fa-unlock" style="color:#fff" aria-hidden="true"></i>@else 
  <i class="fa fa-lock" aria-hidden="true" style="color:#fff"></i> @endif</a>
@elseif($l['type']=='Exercise')

<a href="@if($r==1 && $u==1) {{url('/')}}/interactive-exercise/<?=$l['id'];?>  @else  javascript:void(0); @endif"
class=" <?php if($r==1 && $u==1){ echo '';}else { echo 'disabled';}?>"data-cid="{{$l['course_id']}}" 
data-id="{{$l['id']}}">View  @if($r==1 && $u==1)<i class="fa fa-unlock"style="color:#fff"  
aria-hidden="true"></i>@else <i class="fa fa-lock" style="color:#fff" aria-hidden="true"></i> @endif</a>
@else
@endif
</div>
</li>

<?php 

/*if(empty($gets) && $i=='1' && $flag=='0')
{
$flag='1';
$i='2';
}


if(empty($gets) && $i=='0' && $flag=='0')
{
$flag='1';
$i='2';
}*/
?>




@empty
<li>
<i class="fas fa-check"></i>
Lessons not found... !
</li>

@endforelse

</ul>
</div>
</div>
</div>
</div>
</div>
<!-- End Course List -->
<!-- Start Course List -->
@empty
Syllabus Empty...!
@endforelse
<?php }else{
//not expired
?>
@forelse($syllabus_details as $sd)
<!-- Start Course List -->
<div class="course-list-items acd-items acd-arrow">
<div class="panel-group symb" id="accordion">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#ac{{$sd['id']}}">
<?=$sd['title'];?>
</a>
</h4>
<div class="pie-wrapper progress-95 style-2">
<span class="label"><i class="fa fa-check" aria-hidden="true"></i></span>
<div class="pie">
<div class="left-side half-circle"></div>
<div class="right-side half-circle"></div>
</div>
<div class="shadow"></div>
</div>
</div>
<div id="ac{{$sd['id']}}" class="panel-collapse collapse">
<div class="panel-body">
<ul class="timeline">
@forelse($sd['lesson'] as $l)
<?php 
if( $i=='2' ){
$flag='1';
}elseif(!empty($gets_last)){

if($gets_last->lesson_id == $l['id'] && $i=='0'){
$i='1';
$flag='0';
}
}elseif( $i=='1')
{
$i='2';   
$flag='0';
}
?>
<li class="<?php if( $flag!='1'){ echo 'disabled';}?>"><i class="fas fa-check"></i>
<div class="item name">
<span><?=$l['type'];?></span>
</div>
<div class="item title">
<h5> <?=$l['name'];?> </h5>
</div>
<div class="item info">
<?php $gets=\App\Userlesson::where('lesson_id',$l['id'])->where('user_id',Session()->get('userid'))->orderby('id','desc')->first();
?>
<span>Duration: {{$l['duration']}} min</span>
@if($l['type']=='Video')
<a href="@if($flag!='1') {{url('/')}}/video-details/<?=$l['id'];?> @else javascript:void(0); @endif" class="view_lesson <?php if($i=='2' && $flag=='1'){ echo 'disabled';}?>" data-cid="{{$l['course_id']}}" data-id="{{$l['id']}}" >View</a>
@elseif($l['type']=='Exercise')
<a href="@if($flag!='1') {{url('/')}}/interactive-exercise/<?=$l['id'];?> @else javascript:void(0); @endif"  class="view_lesson <?php if($i=='2' && $flag=='1'){ echo 'disabled';}?>"data-cid="{{$l['course_id']}}" 
data-id="{{$l['id']}}">View</a>
@else
@endif
</div>
</li>

<?php 

if(empty($gets) && $i=='1' && $flag=='0')
{
$flag='1';
$i='2';
}


if(empty($gets) && $i=='0' && $flag=='0')
{
$flag='1';
$i='2';
}
?>




@empty
<li>
<i class="fas fa-check"></i>
Lessons not found... !
</li>

@endforelse

</ul>
</div>
</div>
</div>
</div>
</div>
<!-- End Course List -->
<!-- Start Course List -->
@empty
Syllabus Empty...!
@endforelse


<?php } ?>
<?php }else{  }}

}?>
@endif	




</div>
									</div>
									<!-- End Single Tab -->
								</div>
								<!-- End Tab Content -->
							</div>
							<!-- End Tab Info -->
						</div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
@include('layouts/footer')
<div id="redo" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Reset Progress</h4>
      </div>
      <div class="modal-body">
      <p>Are you sure you want to reset ? This will start you from the beginning of the course and will DELETE your existing progress.</p>
      </div>
      <input type="hidden" id="redo_id">
      <div class="modal-footer">
      <button type="button" class="btn btn-success confirm_redo">Reset Progress</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
      </div>
  </div>
</div>
<script>$(document).ready(function () {
    if(window.location.href.indexOf("syllabus") > -1) {
       
       $('.second-btn').trigger('click');
        $('html, body').animate({
        scrollTop: $('.tab-area-self').offset().top
    }, 'slow');
    }
});
$(document).on('click', '.confirm_redo', function () {
     var id=$('#redo_id').val();
     var base=$('#base_url').val();
	 var action =base+'/resetcourse';
	 var data ={id:id};
         $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: action,
                data: data,
                success: function (data1) {
                   	var obj = JSON.parse(data1);
                    if(obj.code == '101')
                    {
                        $('#redo').modal('hide');
                        $(".as1").html(obj.message);
                        $('.hide'+id).remove();
                        $(".as1").show();  
                        setTimeout(function(){ $('.alert-success').hide(); 
                        var next = base+'/home';
                            window.location.href= next;
                        }, 2000);
                        
                    }
                },
            });
       
    
});
$(document).on('click', '.redo_completed', function () {
    var id=$(this).attr('data-id');
    $('#redo_id').val(id);
    
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
$('.get_act').html(data1);
},
});
    
});
</script>
<script>
 	$('.panel-title a:first').attr('aria-expanded',true);
   	$('.panel-collapse:first').addClass('in');
</script><script>
        // Hide default stripe button, be careful there if you
        // have more than 1 button of that class
        $('.stripe-button-el').addClass('btn btn-dark effect btn-sm pull-right resume-btn ');
        $('.stripe-button-el').text('Buy the course');
         $('.stripe-button-el').removeClass('stripe-button-el');
      //  document.getElementsByClassName("stripe-button-el")[0].removeClass = 'stripe-button-el';
    </script>