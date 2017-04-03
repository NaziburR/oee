<?php 
$edit_data=$this->db->get_where('course_department', array('department_id' => $param2) )->result_array();
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
                    <?php echo form_open(base_url() . 'index.php?admin/manage_department/edit/'.$row['department_id'] , array('class' => 'form-horizontal validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Department Name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="deptname" value="<?php echo $row['department_name'];?>"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">Course</label>
                                <div class="col-sm-5">
                                    <select name="courseid" class="form-control" style="width:100%;"> 
                                        <option value="">Select Course</option>
                                        <?php 
                                            $data=$this->db->get('institute_type_course')->result_array();
                                            foreach ( $data as $row):
                                        ?>
                                        <option value="<?php echo $row['course_id'];?>"><?php echo $row['course_name'];?> </option>
                                        <?php
                                        endforeach;
                                        ?>
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