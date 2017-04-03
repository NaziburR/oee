<?php 
$data=$this->db->get('department_class_batch')->result_array();

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
            	<div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo get_phrase('add_new_section');?>
            	</div>
            </div>
    <div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/sections/create/' , array('class' => 'form-horizontal validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">Section ID</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="sectionid" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" >
                                            </div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Class Batch</label>
                        
						<div class="col-sm-5">
							<select name="classbatchid" class="form-control" style="width:100%;">
                                                            <option value="">Select Class batch</option>
                                                            <?php foreach ( $data as $row): ?>
                                                            <option value="<?php echo $row['class_batch_id'];?>"><?php echo $row['class_batch_name'];?> </option>
                                                                <?php
                                                                    endforeach;
                                                                ?>
                                                        </select>
						</div>
					</div>
					<div class="form-group">
                                            <label for="field-2" class="col-sm-3 control-label">Section Name</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="sectionname" value="" >
                                            </div> 
					</div>

					<div class="form-group">
                                            <label for="field-2" class="col-sm-3 control-label">Intake</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="intake" value="" >
                                            </div> 
					</div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-5">
                                                <button type="submit" class="btn btn-info"><?php echo get_phrase('add_section');?></button>
                                            </div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
</body>
</html>