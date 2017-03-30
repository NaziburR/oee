	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
				<h4 class="fa fa-info-circle" style="display: inline-block; padding: 10px 10px 10px 10px; margin: 0 ; font-size: 20px; font-weight: 400; float: left; cursor: default;color: #fff;background: #00c0ef;background-color: #00c0ef;width:100%">Personal Detials</h4>
            </div>
			<div class="panel-body">
			
                                    <?php echo form_open(base_url() . 'index.php?admin/student/create/' , array('class' => ' validate', 'enctype' => 'multipart/form-data'));?>
					<div class="row ">
						<div class="form-group">
                                                    <div class="col-sm-4">
                                                        <label for="field-1" class="control-label" >Student ID</label>
                                                        <input type="text" class="form-control" name="stdid" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" >
                                                    </div>
                                                    <div class="col-sm-4">
                                                    </div>
                                                    <div class="col-sm-4">
                                                    </div>
							
						</div>
					</div>
					
					<div class="row ">
						<div class="form-group">
							<div class="col-sm-4">
								<label for="field-1" class="control-label">First Name</label>
								<input type="text" class="form-control" name="fname" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" autofocus >
							</div>
							<div class="col-sm-4">
								<label for="field-1" class="control-label">Middle Name</label>
								<input type="text" class="form-control" name="mname" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" >
							</div>
							<div class="col-sm-4">
								<label for="field-1" class="control-label">Last Name</label>
								<input type="text" class="form-control" name="lname" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" >
							</div>
						</div>
					</div>
					
					
					<div class="row ">
						<div class="form-group">
							<div class="col-sm-4">
								<label for="field-2" class="control-label">Gender</label>
								<select name="gender" class="form-control" data-validate="required" id="class_id" >
								  <option value="">Select</option>
								  <option value="male">Male</option>
								  <option value="female">Female</option>
								</select>
							</div>
							
							<div class="col-sm-4">
								<label for="field-1" class="control-label">Email ID</label>
								<input type="text" class="form-control" name="email" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" >
							</div>
							<div class="col-sm-4">
								<label for="field-1" class="control-label">Mobile No</label>
								<input type="text" class="form-control" name="mobileno" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" >
							</div>
						</div>
					</div>
					
					<div class="row ">
						<div class="form-group">
							<div class="col-sm-4">
								<label for="field-2" class="control-label">Date Of Birth</label>
								<input type="text" class="form-control datepicker" name="dob" value="" data-start-view="2">
							</div> 
							<div class="col-sm-4">
                                                            <label for="field-2" class="control-label">Course</label>
                                                            <select name="coursename" class="form-control" id="section_selector_holder">
                                                                <option value="">Select</option>
                                                                <?php
                                                                    $parents = $this->db->get('course')->result_array();
                                                                    foreach($parents as $row):
                                                                ?>
                                                                <option value="<?php echo $row['course_id'];?>"><?php echo $row['course_name'];?></option>
                                                                <?php
                                                                endforeach;
                                                                ?>

                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="field-2" class="control-label">Batch</label>
                                                            <select name="batchname" class="form-control" id="section_selector_holder">
                                                                <option value="">Select</option>
                                                                <?php
                                                                    $parents = $this->db->get('batch')->result_array();
                                                                    foreach($parents as $row):
                                                                ?>
                                                                <option value="<?php echo $row['id'];?>"><?php echo $row['batch_name'];?></option>
                                                                <?php
                                                                endforeach;
                                                                ?>

                                                            </select>

                                                        </div>
							
						</div>
                                                    
					</div>
				
		
                <div class="row ">
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="field-2" class="control-label">Section</label>
                            <select name="sectionname" class="form-control" id="section_selector_holder">
                                <option value="">Select</option>
                                <?php
                                    $parents = $this->db->get('section')->result_array();
                                    foreach($parents as $row):
                                ?>
                                <option value="<?php echo $row['section_id'];?>"><?php echo $row['section_name'];?></option>
                                <?php
                                endforeach;
                                ?>
                                
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="field-1" class="control-label">Admission Date</label>
                            <input type="text" class="form-control datepicker" name="admitdate" value="" data-start-view="2">
                        </div>
                        
                        <div class="col-sm-4">
                            <label for="field-1" class="control-label">Password</label>
                            <input type="password" class="form-control" name="password" value="" >
                        </div>
                    </div>
                </div>		
                            
                <div class="row ">
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="field-2" class="control-label">Address</label>
                            <textarea name="address" class="form-control" rows="5" id="comment"></textarea>
                        </div>
                        <div class="col-sm-8">
                            <label for="field-1" class="col-sm-1 control-label">Photo</label>
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
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-5">
                        <button type="submit" class="btn btn-success">Add Student</button>
                    </div>
                </div>
                <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>