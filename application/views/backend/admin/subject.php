<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_subject_add/');" 
            	class="btn btn-success pull-right">
                <span style="font-size:15px;"><i class="entypo-plus-circled"></i>
            	Add Subject</span>
        </a> 
        <table class="table table-responsive">
            <thead >
                <tr style="background-color:lightgrey">
                    <th>Subject ID</th>
                    <th>Subject Name</th>
                     <th>Subject Description</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // put your code here
                    $dept=$this->db->get('subject')->result_array();
                    foreach ($dept as $row):
                ?>
                <tr>
                    <td><?php echo $row['subject_id'];?></td>
                    <td><?php echo $row['subject_name'];?></td>
                     <td><?php echo $row['subject_description'];?></td>
                    
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                <!-- teacher EDITING LINK -->
                                <li>
                                    <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_subject_edit/<?php echo $row['subject_id'];?>');">
                                        <i class="entypo-pencil"></i>
                                            <?php echo get_phrase('edit');?>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <!-- teacher DELETION LINK -->
                                <li>
                                    <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/manage_subject/delete/<?php echo $row['subject_id'];?>');">
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
</html>

