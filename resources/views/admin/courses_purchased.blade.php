@include('layouts/admin_header')

		<!-- Content_right -->
		<div class="container_full">
			@include('layouts/admin_sidebar')

			<div class="content_wrapper">
				<div class="container-fluid">
					<section class="chart_section">
						@csrf()
						<div class="row">
							<div class="col-xl-12 col-lg-12 mb-4 d-flex align-items-stretch">
								<div class="widthfull card card-shadow">
									<div class="card-header">
										<div class="card-title">
											User Transactions
											<a href="{{url('/')}}/admin/users" class="btn btn-success float-right">
												Back
											</a>
										</div>
									</div>
									<div class="card-body">
										<div class="bd-example table_style">
											<table class="table table-responsive-md" id="bs4-table">
												<thead>
													<tr>
														<th scope="col">Sr No.</th>
														<th scope="col">Course Title</th>
														<th scope="col">Transaction ID</th>
														<th scope="col">Created Date</th>
														<th scope="col">Expiry Date</th>
														<th scope="col">Status</th>
													
													
													</tr>
												 </thead>
												 
												 
                                                    <tbody id="getdata">
                                                    <?php 
                                                  
                                                    if(!empty($options) && count($options)!='0'){
                                                        $i=1;
                                                        foreach($options as $o){
                                                        $r=$i++;
                                                    ?>
                                                    <tr>
                                                        <td><?=$r;?></td>
                                                        <td><?php $name=\App\Course::where('id',$o->course_id)->first();
                                                        if(!empty($name))
                                                        {
                                                           echo $name_course=$name->title;
                                                        }
                                                        else
                                                        {
                                                          echo  $name_course="Course not exist";
                                                        }
                                                        ?></td>
                                                        <td>{{$o->transaction_id}}</td>
                                                        <td><?php echo date('M d-Y', strtotime($o->start_date));?></td>
                                                        <td><?php echo date('M d-Y', strtotime($o->end_date));?></td>
                                                        <td>
                                                            <?php if($o->status=='0')
                                                            
                                                            {
                                                                echo 'Expired';
                                                            }
                                                            elseif(date('Y-m-d') >=$o->end_date)
                                                            {
                                                                 echo 'Expired';
                                                            }else
                                                            {
                                                                echo 'Active';
                                                            }
                                                            ?>
                                                            
                                                        </td>
                                                        
                                                    </tr>
                                                  
                                                    <?php }}else
                                                    {?>
                                                    <tr>
                                                        <td colspan="7">No record found..!</td>
                                                        </tr>
                                                        <?php } ?>
                                                    
                                                    </tbody>
											</table>
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

