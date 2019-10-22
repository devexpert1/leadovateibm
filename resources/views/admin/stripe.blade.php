@include('layouts/admin_header')
	<!-- Content_right -->
	<div class="container_full">
		@include('layouts/admin_sidebar')
		
<?php $tc_title=''; $tc_content='';  ?>

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
  
?>
@endif
		
		<div class="content_wrapper">
			<div class="container-fluid">
				<section class="chart_section">
					
					<div class="row">
						<div class="col-xl-12 col-lg-12 mb-4">
							
								<div class="card card-shadow mb-4">
									<div class="card-header">
										<div class="card-title">
											Stripe
										</div>
									</div>
									<div class="card-body tabs-ctds">
										<div class="row">
										<div class="col-xl-12">
										    <form method="POST" data-next="" class="addterms_conditions1" 
										    data-action="{{url('admin/addoptions')}}" class="mt-4">
                                                <div class="row">
                                                    <div class="col-md-12"> @csrf
                                    
                                                       <!----------------TOP SECTION -------------------------->
                                                     
                                                      <input type="hidden" name="pages" value="Stripe Settings">
                                                      
                                                      <div class="form-group">
                                                        <label class="fw-500">Sandbox Mode</label>
                                                       
                                                        <input type="radio"  name="stripe_mode" class="sandbox" value="sandbox" 
                                                        @if(!empty($stripe_mode))
                                                        @if($stripe_mode=='sandbox')
                                                        checked
                                                        @endif
                                                        @endif><br/>
                                                         <label class="fw-500">Publish Key Sandbox</label>
                                                        <input type="text"  class="form-control hide sand_mode"    @if(!empty($stripe_mode))
                                                        @if($stripe_mode=='sandbox')
                                                         value="{{$sandbox_mode_key}}"
                                                         required
                                                        @else
                                                        readonly
                                                        @endif
                                                        @else
                                                        required
                                                        @endif name="sandbox_mode_key" value="">
                                                          
                                                           <label class="fw-500">Secret Key Sandbox</label>
                                                        <input type="text"   class="form-control hide sand_mode" 
                                                      @if(!empty($stripe_mode))
                                                        @if($stripe_mode=='sandbox')
                                                         value="{{$sandbox_mode_skey}}"
                                                         required
                                                        @else
                                                        readonly
                                                        @endif
                                                        @else
                                                        required
                                                        @endif name="sandbox_mode_skey" value="">
                                                        
                                                         </div>
                                                      <div class="form-group">
                                                        <label class="fw-500">Live Mode</label>
                                                         <input type="radio"  name="stripe_mode" class="live" value="live"
                                                         @if(!empty($stripe_mode))
                                                        @if($stripe_mode=='live')
                                                        checked
                                                        @endif
                                                        @endif><br/>
                                                         <label class="fw-500">Publish Key Live</label>
                                                          <input type="text"    class="form-control hide live_mode" name="live_mode_key" 
                                                           @if(!empty($stripe_mode))
                                                        @if($stripe_mode=='live')
                                                         value="{{$live_mode_key}}"
                                                         required
                                                        @else
                                                        readonly
                                                        @endif
                                                        @else
                                                        required
                                                        @endif >
                                                          
                                                          <label class="fw-500">Secret Key Live</label>
                                                          <input type="text"   class="form-control hide live_mode" name="live_mode_skey" 
                                                        
                                                         
                                                          
                                                        @if(!empty($stripe_mode))
                                                        @if($stripe_mode=='live')
                                                         value="{{$live_mode_skey}}"
                                                         required
                                                        @else
                                                        readonly
                                                        @endif
                                                        @else
                                                        required
                                                        @endif
                                                          
                                                          
                                                          >
                                                         </div>
                                                      <!--------------------------------------------->
                                    
                                                      <div class="form-group">
                                                        <button class="btn btn-info addterms_conditionsbtn1">Save</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </form>
                                          
										</div>
									</div>
								</div>
							</div>
				    	</div>
					</div>
				</section>
			</div>
		</div>
		
		
		
	</div>
	<!-- Content_right_End -->		

@include('layouts/admin_footer')

<script>

     $('.live').click(function(){
         $('.sand_mode').val("");
         $('.sand_mode').attr('readonly',true);
         $('.sand_mode').attr('required',false);
         $(".sandbox").prop("checked", false);
         $(".live_mode").attr('readonly',false);
          $('.live_mode').attr('required',true);
     });
      $('.sandbox').click(function(){
         $('.live_mode').val("");
         $('.live_mode').attr('readonly',true);
         $('.live_mode').attr('required',false);
         $(".live").prop("checked", false);
         $(".sand_mode").attr('readonly',false);
         $(".sand_mode").attr('required',true);
         
     });
     $('.sand_mode').keyup(function(){
       if($(this).val()!='')
       {
           $('.live_mode').val("");
       }
    });
    
    $('.live_mode').keyup(function(){
       if($(this).val()!='')
       {
           $('.sand_mode').val("");
       }
    });
    $('.addterms_conditionsbtn1').click(function(){
       // alert();
        $('.addterms_conditions1').validate();
    });
    
    $('.addterms_conditions1').validate({
       rules: {
            stripe_mode: {
                required: true,
            },  
            
           },
           messages: {
                stripe_mode:{
                    required: 'Mode is required',
                },
           },
           submitHandler: function(form) {
            $('.addterms_conditionsbtn1').attr('disabled',true);
            $('.addterms_conditionsbtn1').html('<i class="fa fa-spinner fa-spin"></i> Processing...');
            submitform('addterms_conditions1','addterms_conditionsbtn1');
              
           }
    });
    
    function submitform(form,btn)
{
  
  if(form == 'lesson_form')
  {
    var data =   new FormData($('.'+form)[0]);
  //  var other_data = $('.'+form).serializeArray();
    /*$.each(other_data,function(key,input){
    data.append(input.name,input.value);
    });*/
      
  }
  else
  {
    var data = new FormData($('.'+form)[0]);
    //var data = new FormData('.'+form);
   // var other_data = $('.'+form).serializeArray();
    /*$.each(other_data,function(key,input){
        data.append(input.name,input.value);
    });*/
  }
   if(form=='lesson_form' || form=='edit_lesson')
   {
    var totalFiles = totalvfiles.length;
    //alert(totalFiles);
    for (var i =0; i <= totalFiles; i++) {
    //alert(file_data = $("#file_video"+i).prop("files"));
    var file_data = $("#file_video"+totalvfiles[i]).prop("files");
    //alert(file_data);
    if(file_data==undefined)
    {
    // alert('un');
    }else
    {
    var file_data1 = $("#file_video"+totalvfiles[i]).prop("files")['length'];   
  //  alert('me');alert(file_data1);
    
    if(file_data1 == '0')
    {
        
    }else
    {
    var file_data2 = $("#file_video"+totalvfiles[i]).prop("files")[0];   
    //print_r(file_data2);
    data.append("file_video[]", file_data2);   
    }
   
    }
    //console.log(file_data);
    }
   }
  
    if(form != 'adminprofile' || form != 'addcourse_syllabs_form' || form != 'lesson_form'|| form != 'addactivityuser' ){
    var totalFiles = document.getElementById("files").files.length;
    for (var i = 0; i < totalFiles; i++) {
    var file_data = $("#files").prop("files")[i];
     data.append("file", file_data);
    }
    }
    
   /* if(form == 'addcourse_syllabs_form')
    {
     $('.file_video').each(function() {   
         var file_data1 = $(this).prop("files")[0];
      
         data.append("video[]", file_data1);    
     });
    }*/
    
    
    
    var action = $('.'+form).attr('data-action');
  
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
                    if(data.erro==202)
                    {
                    $(".dg1").html(data.message);
                    $(".dg1").show();
                    setTimeout(function(){ $('.alert-danger').hide(); }, 3000);
                    $('.'+btn).attr('disabled',false);
                    $('.'+btn).html('Save');   
                    }
                    if(data.erro==101)
                    {
                    $(".as1").html(data.message);
                    $(".as1").show();  
                    setTimeout(function(){ $('.alert-success').hide(); }, 3000);
                    $('.'+btn).attr('disabled',false);
                    $('.'+btn).html('Save');   
                    if(form != 'adminprofile' && form != 'assignuser'){ 
                    var next = $('.'+form).attr('data-next');
                    if(next !=''){
                    setTimeout(function(){  window.location.href= next; }, 3000); 
                    }
                    }
                    if(form == 'editactivity')
                    {
                    $('.bd-example-modal-lg').modal('hide');   
                    $(".as1").html(data.message);
                    $(".as1").show(); 
                    $('#actname'+data.id).html(data.name);
                    setTimeout(function(){
                    //window.location.href= data.url;
                    $('.alert-success').hide(); }, 2000);     
                    }
                    if(form == 'addadactivity')
                    {
                    $('.edit-type').modal('hide');   
                    $(".as1").html(data.message);
                    $(".as1").show(); 
                    $('#bs4-table').DataTable().destroy();
    				$('#getdata').html(data.data);
                        $('#bs4-table').DataTable({
                        "ordering": false
                        } );
    				//$('.getdata').html(obj.data);
                    setTimeout(function(){
                    //window.location.href= data.url;
                    $('.alert-success').hide(); }, 2000); 
                    }   
                    
                    if(form == 'example_form')
                    {
                    $(".as1").html(data.message);
                    $(".as1").show();  
                    setTimeout(function(){
                    window.location.href= "javascript:void(0)";
                    $('.alert-success').hide(); }, 2000); 
                    }
                    if(form == 'edit_example')
                    {
                    $(".as1").html(data.message);
                    $(".as1").show();  
                    setTimeout(function(){
                        window.location.href= "javascript:void(0)";
                    $('.alert-success').hide(); }, 2000); 
                    }
                    if(form=='lesson_form')
                    {
                    $(".as1").html(data.message);
                    $(".as1").show();  
                    setTimeout(function(){ $('.alert-success').hide(); }, 1000);
                    $('.headings_lesson_name').html(data.data);
                    $( ".activity_html" ).append(data.html);
                    if(data.course_type =='E')
                    {
                      $('#type').val(data.course_type);
                      $('.lesson_drop').show();
                      $('.activity_drop').hide();
                      $('.lesson_drop_select').html(data.data);
                      $('.tab6course').removeClass('disabled');
                      $('.tab6course').trigger('click');
                    }else
                    {
                      $('#type').val(data.course_type);
                      $('.lesson_drop').hide();
                      $('.activity_drop').show();
                      $('.tab5ourse').removeClass('disabled');
                      $('.tab5ourse').trigger('click');
                    }
                    if(data.update !='')
                    {
                    data.update.forEach(function(data){
                    $('.editlesson'+data.random).html(data.text);
                    $('.editlesson'+data.random).text(data.text);
                    })
                    }
                 
                    $('#course_id5').val(data.dataid);   
                    $('#course_id7').val(data.dataid);   
                    $('#type').val(data.course_type);
                    }
                    if(form=='activity_form')
                    {
                     $(".as1").html(data.message);
                     $(".as1").show();  
                     setTimeout(function(){ $('.alert-success').hide(); }, 1000);
                  if(data.data1 != '')
                 {
                 $('.example_html').html(data.data1);
                 $('.exp_add').hide();
                 $('.headings_lesson_activity').attr('disabled','disabled');
                 $('.content22').html("");
                 $('.content22').text("");
                 $('.content22').attr("required",'');
                 $('.content22').attr('disabled','disabled');
                 $('.content23').summernote({
                 height: 150   //set editable area's height  
                 });
                 }
                 if(data.data1 == '')
                 {
                     
                    // $('.content22').code("");  
                      //$('.content22').text("");
                 }
                    if(data.data == '')
                    {
                    $(".as1").hide();  
                    $(".as1").html("");  
                    $(".dg1").html(data.message);
                    $(".dg1").show();  
                    setTimeout(function(){
                    window.location.href= "javascript:void(0)";
                    $('.alert-danger').hide(); }, 2000); 
                    $(".message").show();  
                    setTimeout(function(){
                    $('.message').hide(); $('.message').html(''); }, 2000);  
                    $('.message').css('display','block !important');
                    $('.color_div').hide();
                    $('.add_example_syl ').attr('disabled',true);
                    //  $('.add_activity_syl  ').attr('disabled',true);
                    $('.headings_lesson_activity').attr('disabled','disabled');
                    $('.headings_lesson_activity').hide();
                    $('.lessons').attr('disabled','disabled');
                    $('.lessons').hide();
                    $('.add_new').hide();
                    $('.label_act').hide();
                      
                     }else
                     {
                    $(".message").hide();  
                    setTimeout(function(){
                    $('.message').html(''); }, 2000); 
                    $('.message').html('');
                    $('.message').css('display','none !important');
                    $('.add_example_syl ').attr('disabled',false); 
                    $('.add_activity_syl ').attr('disabled',false); 
                    if(data.examples =='0' )
                    {
                       // $('.color_div1').show();
                        $('.color_div').show();
                        $('.rmvs').show();
                        $('.content22').summernote('reset');
                        $('.content22').summernote('code', '');
                         $('.content36').summernote('reset');
                        $('.content36').summernote('code', '');
                         $('.content36').attr('disabled',true); 
                       // $('.content22').code('');
                        $('.hideit').attr('disabled',true); 
                        $('.hideits').attr('disabled',true); 
                        
                    }else
                    {
                        $('.color_div').show();
                    }
                    $('.headings_lesson_activity').show();
                    $('.lessons').show();
                    $('.headings_lesson_activity').attr('disabled',false);
                    $('.lessons').attr('disabled',false);
                    $('.add_new').show();
                    $('.label_act').show();
                    $('.headings_lesson_activity').html(data.data);
                    $('.lessons').html(data.lessons);
                    $('.tab6course').removeClass('disabled');
                    $('.tab6course').trigger('click');
                     }
                   //  $('.tab6course').removeClass('disabled');
                   //  $('.tab6course').trigger('click');
                     $('#course_id7').val(data.dataid);  
                     $('#course_id6').val(data.dataid);  
                     $( ".example_html" ).append(data.html);
                      if(data.update !='')
                        {
                        data.update.forEach(function(data){
                            $('.editactivity'+data.random).html(data.text);
                             $('.editactivity'+data.random).text(data.text);
                        })
                        }
                         $('.content22').summernote({
                    height: 150  //set editable area's height
                    
                    });
                    }
                    if(form == 'addcourse_syllabs_form')
                    {
                    $('.tab44').removeClass('disabled');
                    $('.tab44').trigger('click');
                    $(".as1").html(data.message);
                    $(".as1").show();  
                    setTimeout(function(){ $('.alert-success').hide(); }, 1000);
                    $('.chosen-select').html(data.data);
                    $('.summernote').summernote({
                    height: 150  //set editable area's height
                    
                    });
                 $('.chosen-select').trigger("chosen:updated");
                     //  $('.my-select').append(data.data);
                     //  $('.my-select').selectpicker('refresh');
                    $('#course_id3').val(data.dataid);
                    }   
                    if(form=='assignuser')
                    {
                    $('#assign_user').modal('hide');
                    $('#update_assign_user').modal('hide');
                    var next = $('.'+form).attr('data-next');
                    setTimeout(function(){  window.location.href= next; }, 3000); 
                    }
                    if(form == 'addplan')
                    {
                    $(".as1").html(data.message);
                    $(".as1").show();  
                    setTimeout(function(){ $('.alert-success').hide(); }, 3000);
                    $('.'+btn).attr('disabled',false);
                    $('.'+btn).html('Save');   
                    var next = $('.'+form).attr('data-next');
                    setTimeout(function(){  window.location.href= next; }, 3000); 
                    }
                    if(form == 'addcourse_overview')
                    {
                    $('#course_id').val(data.dataid);
                    $('#course_id1').val(data.dataid);
                    $('#course_id2').val(data.dataid);
                    $('.tab3course').removeClass('disabled');
                    $('.tab3course').trigger('click');
                    }
                    if(form=='adminprofile')
                    {
                    $('#first').text(data.first_name);
                    $('.admin_name').text(data.first_name);
                    $('#email_edit').text(data.email);
                    }
                    if(form=='edit_heading')
                    {
                    $(".as1").html(data.message);
                    $(".as1").show();  
                    setTimeout(function(){ $('.alert-success').hide(); }, 3000);
                    $('.headings_lesson ').html(data.data);
                     $( ".learn_html" ).append(data.html);
                       if(data.update !='')
                        {
                        data.update.forEach(function(data){
                            $('.edit'+data.random).html(data.text);
                             $('.editlesson'+data.random).text(data.text);
                        })
                        }
                        $('.summernote').summernote();
                    }
                    if(form=='edit_lesson')
                    {
                    $(".as1").html(data.message);
                    $(".as1").show();  
                    setTimeout(function(){ $('.alert-success').hide(); }, 3000);
                    $('.headings_lesson_name').html(data.data);
                    }
                    if(form=='edit_activity')
                    {
                    $(".as1").hide();  
                    $(".as1").html("");  
                    $(".dg1").html(data.message);
                    setTimeout(function(){
                    window.location.href= "javascript:void(0)";
                    $('.alert-danger').hide(); }, 2000); 
                    $(".dg1").show();  
                    $('.headings_lesson_activity').html(data.data);
                    $('#course_id7').val(data.dataid);  
                    $('#course_id6').val(data.dataid);  
                    $( ".example_html" ).append(data.html);
                    if(data.update !='')
                    {
                    data.update.forEach(function(data){
                    $('.editactivity'+data.random).html(data.text);
                    $('.editactivity'+data.random).text(data.text);
                    })
                    }
                    if(data.data == '')
                    {
                    if(data.examples =='0')
                    {
                    // $('.color_div1').show();
                    $('.color_div').show();
                    $('.rmvs').hide();
                    $('.content22').summernote('reset');
                    $('.content22').summernote('code', '');
                    $('.content36').summernote('reset');
                    $('.content36').summernote('code', '');
                    $('.content36').attr('disabled',true); 
                    // $('.content22').code('');
                    $('.hideit').attr('disabled',true); 
                    $('.hideits').attr('disabled',true); 
                    }else
                    {
                    $('.color_div').show();
                    }
                      $('.headings_lesson_activity').hide();
                      $('.add_new').hide();
                      $('.label_act').hide();
                      $('.color_div').hide();
                      $('.edit_example_syl').attr('disabled',true);
                       $('.lessons').attr('disabled','disabled');
                      $('.lessons').hide();
                      $('.add_new').hide();
                      $('.label_act').hide();
                     }else
                     {
                          if(data.examples =='0')
                    {
                    // $('.color_div1').show();
                    $('.color_div').show();
                    $('.rmvs').hide();
                    $('.content22').summernote('reset');
                    $('.content22').summernote('code', '');
                    $('.content36').summernote('reset');
                    $('.content36').summernote('code', '');
                    $('.content36').attr('disabled',true); 
                    // $('.content22').code('');
                    $('.hideit').attr('disabled',true); 
                    $('.hideits').attr('disabled',true); 
                    }else
                    {
                    $('.color_div').show();
                    }
                     $('#example123').val(data.examples)
                     $('.edit_example_syl').attr('disabled',false);
                     $('.headings_lesson_activity').show();
                     $('.add_new').show();
                     $('.label_act').show();
                     $('.headings_lesson_activity').html(data.data);
                     }
                    $('.content22').summernote({
                    height: 150  //set editable area's height
                    
                    });
                    }
                    if(form == 'addcourse')
                    {
                    $('#course_id').val(data.dataid);
                    $('#course_id1').val(data.dataid);
                    $('.tab2course').removeClass('disabled');
                    $('.tab2course').trigger('click');
                    }
                    }
                    },
                    }); 
                    }
    
</script>

