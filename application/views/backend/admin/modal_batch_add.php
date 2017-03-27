<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
$data=$this->db->get('course')->result_array();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="row">
	<div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
                    <h4 class="fa fa-info-circle" style="display: inline-block; padding: 10px 10px 10px 10px; margin: 0 ; font-size: 20px; font-weight: 400; float: left; cursor: default;color: #fff;background: #00c0ef;background-color: #00c0ef;width:100%">Batch Details</h4>
                </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/manage_batch/create/' , array('class' => 'form-horizontal validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Batch ID</label>
                        
						<div class="col-sm-5">
                                                    <input type="text" class="form-control" name="batchid" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" >
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Batch Name</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="batchname" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" >
						</div>
					</div>
                            
                                        <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Start Year</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker fill-up" name="startyear" value=""/>
						</div>
					</div>
                                        <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">End Year</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker fill-up" name="endyear" value=""/>
						</div>
					</div>
                            
                                        <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Course</label>
                        
						<div class="col-sm-5">
							<select name="courseid" class="form-control" style="width:100%;">
                                                            <option value="">Select Course</option>
                                                            <?php foreach ( $data as $row): ?>
                                                            <option value="<?php echo $row['course_id'];?>"><?php echo $row['course_name'];?> </option>
                                                                <?php
                                                                    endforeach;
                                                                ?>
                                                        </select>
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
    </body>
</html>