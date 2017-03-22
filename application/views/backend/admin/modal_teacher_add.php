<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            		<h4 class="fa fa-info-circle" style="display: inline-block; padding: 10px 10px 10px 10px; margin: 0 ; font-size: 20px; font-weight: 400; float: left; cursor: default;color: #fff;background: #00c0ef;background-color: #00c0ef;width:100%">Personal Detials</h4>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/teacher/create/' , array('class' => 'form-horizontal validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Employee ID</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" disabled>
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">First Name</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" >
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Middle Name</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" >
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Last Name</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" >
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Date Of Birth</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2">
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Gender</label>
                        
						<div class="col-sm-5">
							<select name="sex" class="form-control selectboxit">
                              <option value="">Select</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                          </select>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Date Of Joining</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2">
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Department</label>
                        
						<div class="col-sm-5">
							<select name="sex" class="form-control selectboxit">
                              <option value="">Select</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                          </select>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Employee Type</label>
						<div class="col-sm-5">
							<select name="sex" class="form-control selectboxit">
                              <option value="">Select</option>
                              <option value="male">Teaching</option>
                              <option value="female">Non-Teaching</option>
                          </select>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Designation</label>
                        
						<div class="col-sm-5">
							<select name="sex" class="form-control selectboxit">
                              <option value="">Select</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                          </select>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Category</label>
                        
						<div class="col-sm-5">
							<select name="sex" class="form-control selectboxit">
                              <option value="">Select</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                          </select>
						</div> 
					</div>
					
					<!--
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('address');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="address" value="" >
						</div> 
					</div>
					
					-->
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Phone No</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone" value="" >
						</div> 
					</div>
                    
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Email ID</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" value="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Experience</label>
                        
						<div class="col-sm-5">
							<select name="sex" class="form-control selectboxit">
                              <option value="">Year</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
							  <option value="3">3</option>
                              <option value="4">4</option>
							  <option value="5">5</option>
                              <option value="6">6</option>
							  <option value="7">7</option>
                              <option value="8">8</option>
							  <option value="9">9</option>
                              <option value="10">10</option>
							  <option value="11">11</option>
                          </select>
						 <select name="sex" class="form-control selectboxit">
                              <option value="">Month</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
							  <option value="3">3</option>
                              <option value="4">4</option>
							  <option value="5">5</option>
                              <option value="6">6</option>
							  <option value="7">7</option>
                              <option value="8">8</option>
							  <option value="9">9</option>
                              <option value="10">10</option>
							  <option value="11">11</option>
                         </select>
						</div>
					</div>
					
					<!--
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('password');?></label>
                        
						<div class="col-sm-5">
							<input type="password" class="form-control" name="password" value="" >
						</div> 
					</div>
					-->
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Photo</label>
                        
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="userfile" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info">Submit</button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>