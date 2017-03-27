<!DOCTYPE html>
<html lang="en" dir="">
<head> </head>
<body>
     <table class="table table-responsive">
            <thead>
                <tr>
        <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_course_add/');" 
            	class="btn btn-success pull-right">
                <span style="font-size:15px;"><i class="entypo-plus-circled"></i>
            	Add Course</span>
        </a> 
        <table class="table table-responsive">
            <thead >
            
            <thead>
                <tr style="background-color:lightgrey">
                    <th>Course ID</th>
                    <th>Department</th>
                    <th>Course Name</th>
                    <th>Course Description</th>
                    <th>Course Duration</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $dept=$this->db->query('select d.department_id, d.department_name, c.course_id,c.course_name,c.course_description,c.course_duration from course c join department d ON d.department_id=c.department_id')->result_array();
                    foreach ($dept as $row):
                ?> 
                <tr>
                    <td><?php echo $row['course_id'];?></td>
                    <td><?php echo $row['department_name'];?></td>
                    <td><?php echo $row['course_name'];?></td>
                    <td><?php echo $row['course_description'];?></td>
                    <td><?php echo $row['course_duration'];?></td>
                     <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                <!-- teacher EDITING LINK -->
                                <li>
                                    <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_course_edit/<?php echo $row['course_id'];?>');">
                                        <i class="entypo-pencil"></i>Edit
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <!-- teacher DELETION LINK -->
                                <li>
                                    <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/manage_course/delete/<?php echo $row['course_id'];?>');">
                                        <i class="entypo-trash"></i>
                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                 <?php   endforeach; ?>
                            </tbody>
        </table>

			 
		</div>
   

</body>
</html>