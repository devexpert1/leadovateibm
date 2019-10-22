@include('layouts/admin_header')

		<!-- Content_right -->
		<div class="container_full">
			@include('layouts/admin_sidebar')
			<div class="content_wrapper">
				<div class="container-fluid">
					<section class="chart_section">
						
						<div class="row">
							<div class="col-xl-12 col-lg-12 mb-4 d-flex align-items-stretch">
								<div class="widthfull card card-shadow">
									<div class="card-header">
										<div class="card-title">
											Add Example
										</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label for="exampleFormControlSelect2">Select Type</label>
											<select class="form-control" id="exampleFormControlSelect1">
												<option>Type 1</option>
												<option>Type 2</option>
												<option>Type 3</option>
												<option>Type 4</option>
												<option>Type 5</option>
											</select>
										</div>
										<div class="form-group">
											<label for="exampleFormControlTextarea1">Description</label>
											<textarea class="content" name="example"></textarea>
										</div>
										<button class="btn btn-success" type="submit">Submit</button>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
		<!-- Content_right_End -->
	

<!-- Modal -->
<div class="modal del-modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div class="modal-body text-center">
				
				<i class="icon-close"></i>
				<h1>Are you sure?</h1>				
				<p>Do you really want to delete this user? This action cannot be undone.</p>
				<ul class="action-btns">					
					<li>
						<button type="button" class="btn  btn-light mr-2" data-dismiss="modal">
							Cancel
						</button>
					</li>
					<li><button type="button" class="btn  btn-danger">
							Delete
						</button>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
</div>

@include('layouts/admin_footer')

<script src="assets/js/jquery.richtext.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('.content').richText();
    });
	$(function() {
	  $('#colorselector').change(function(){
		$('.colors').hide();
		$('#' + $(this).val()).show();
	  });
	});
	
</script>
