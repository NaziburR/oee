<hr />
<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/section_add/');" 
	class="btn btn-success pull-right">
                <span style="font-size:15px;"><i class="entypo-plus-circled"></i>
            	Add Section</span>
</a> 
<body>
<table class="table table-responsive">
            <thead >
                <tr style="background-color:lightgrey">
                    <th>Section ID</th>
                    <th>Section Name</th>
                    <th>Intake</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // put your code here
                    $dept=$this->db->get('section')->result_array();
                    foreach ($dept as $row):
                ?>
                <tr>
                    <td><?php echo $row['section_id'];?></td>
                    <td><?php echo $row['section_name'];?></td>
                    <td><?php echo $row['intake'];?></td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                <!-- teacher EDITING LINK -->
                                <li>
                                    <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/section_edit/<?php echo $row['section_id'];?>');">
                                        <i class="entypo-pencil"></i>
                                            <?php echo get_phrase('edit');?>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <!-- teacher DELETION LINK -->
                                <li>
                                    <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/sections/delete/<?php echo $row['section_id'];?>');">
                                        <i class="entypo-trash"></i>
                                            <?php echo get_phrase('delete');?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php   endforeach; ?>
            </tbody>
        </table>
</body>