<?php 
$edit_data		=	$this->db->get_where('teacher' , array('teacher_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-heading">
            		<h4 class="fa fa-info-circle" style="display: inline-block; padding: 10px 10px 10px 10px; margin: 0 ; font-size: 20px; font-weight: 400; float: left; cursor: default;color: #fff;background: #00c0ef;background-color: #00c0ef;width:100%"> Edit Detials</h4>
				</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php?admin/teacher/do_update/'.$row['teacher_id'] , array('class' => 'form-horizontal validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        		
                                <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">Photo</label>
                                
                                <div class="col-sm-5">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                            <img src="<?php echo $this->crud_model->get_image_url('teacher' , $row['teacher_id']);?>" alt="...">
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
                                <label class="col-sm-3 control-label">First Name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>"/>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="col-sm-3 control-label">Middle Name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>"/>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="col-sm-3 control-label">Last Name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>"/>
                                </div>
                            </div>
							
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Date of Birth</label>
                                <div class="col-sm-5">
                                    <input type="text" class="datepicker form-control" name="birthday" value="<?php echo $row['birthday'];?>"/>
                                </div>
                            </div>
							
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Gender</label>
                                <div class="col-sm-5">
                                    <select name="sex" class="form-control selectboxit">
                                    	<option value="male" <?php if($row['sex'] == 'male')echo 'selected';?>><?php echo get_phrase('male');?></option>
                                    	<option value="female" <?php if($row['sex'] == 'female')echo 'selected';?>><?php echo get_phrase('female');?></option>
                                    </select>
                                </div>
                            </div>
							
							 <div class="form-group">
                                <label class="col-sm-3 control-label">Date of Joining</label>
                                <div class="col-sm-5">
                                    <input type="text" class="datepicker form-control" name="birthday" value="<?php echo $row['birthday'];?>"/>
                                </div>
                            </div>
							
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Department</label>
                                <div class="col-sm-5">
                                    <select name="sex" class="form-control selectboxit">
                                    	<option value="male" <?php if($row['sex'] == 'male')echo 'selected';?>><?php echo get_phrase('male');?></option>
                                    	<option value="female" <?php if($row['sex'] == 'female')echo 'selected';?>><?php echo get_phrase('female');?></option>
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
                                <label class="col-sm-3 control-label">Designation</label>
                                <div class="col-sm-5">
                                    <select name="sex" class="form-control selectboxit">
                                    	<option value="male" <?php if($row['sex'] == 'male')echo 'selected';?>><?php echo get_phrase('male');?></option>
                                    	<option value="female" <?php if($row['sex'] == 'female')echo 'selected';?>><?php echo get_phrase('female');?></option>
                                    </select>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="col-sm-3 control-label">Category</label>
                                <div class="col-sm-5">
                                    <select name="sex" class="form-control selectboxit">
                                    	<option value="male" <?php if($row['sex'] == 'male')echo 'selected';?>><?php echo get_phrase('male');?></option>
                                    	<option value="female" <?php if($row['sex'] == 'female')echo 'selected';?>><?php echo get_phrase('female');?></option>
                                    </select>
                                </div>
                            </div>
							
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Phone</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>"/>
                                </div>
                            </div>
							
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Email ID</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>"/>
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
					
                            
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info">Update Details</button>
                            </div>
                        </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>