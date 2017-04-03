<?php 
	$edit_data = $this->db->get_where('class_section' , array('section_id' => $param2))->result_array();
	foreach ($edit_data as $row):
?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('update_section');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/sections/edit/' . $row['section_id'] , array('class' => 'form-horizontal validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
                                <label class="col-sm-3 control-label">Section Name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="sectionname" value="<?php echo $row['section_name'];?>"/>
                                </div>
                            </div>
                            
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Intake</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="intake" value="<?php echo $row['intake'];?>" >
						</div> 
					</div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">Class Batch</label>
                                <div class="col-sm-5">
                                    <select name="classbatchid" class="form-control" style="width:100%;"> 
                                        <option value="">Select Class_Batch</option>
                                        <?php 
                                            $data=$this->db->get('department_class_batch')->result_array();
                                            foreach ( $data as $row):
                                        ?>
                                        <option value="<?php echo $row['class_batch_id'];?>"><?php echo $row['class_batch_name'];?> </option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            
                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo get_phrase('update');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>