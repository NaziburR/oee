<div class="sidebar-menu">
    <header class="logo-env" >

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="uploads/oserplogo.png"  style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>	
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>

        <!-- STUDENT -->
        <li class="<?php
        if ($page_name == 'student_add' ||
                $page_name == 'student_bulk_add' ||
                $page_name == 'student_information' ||
                $page_name == 'student_marksheet')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa fa-group"></i>
                <span>Student</span>
            </a>
            <ul>
                <!-- STUDENT ADMISSION -->
                <li class="<?php if ($page_name == 'student_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/student_add">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Registration'); ?></span>
                    </a>
                </li>
                
                <li class="<?php if ($page_name == 'Enrollment') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/enrollment">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Enrollment'); ?></span>
                    </a>
                </li>
                
                <!-- STUDENT INFORMATION -->
                <li class="<?php if ($page_name == 'student_information' || $page_name == 'student_marksheet') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> Student Details</span>
                    </a>
                    
                </li>

            </ul>
        </li>

        <!-- TEACHER -->
        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/teacher">
                <i class="entypo-users"></i>
                <span>Teacher</span>
            </a>
        </li>
		
		<!-- Institution type-->
		<li class="<?php if ($page_name == 'Institution') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/institution">
                <i class="entypo-flow-tree"></i>
                <span><?php echo get_phrase('Institution_type'); ?></span>
            </a>
        </li>


        <!-- CLASS -->
        <li class="<?php
        if ($page_name == 'class' ||$page_name == 'section')
            echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-flow-tree"></i>
                <span><?php echo get_phrase('Course'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'course') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/course">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Manage_course'); ?></span>
                    </a>
                </li>
                 <li class="<?php if ($page_name == 'department') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/department">
               
               <span><i class="entypo-dot"></i> <?php echo get_phrase('Manage_department'); ?></span>
            </a>
        </li>
                
                <li class="<?php if ($page_name == 'batch') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/batch">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('Manage_batch'); ?></span>
                    </a>
                </li>
                
                <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/class_batch">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_class_batch'); ?></span>
                    </a>
                </li>
                
                <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/section">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_sections'); ?></span>
                    </a>
                </li> 
            </ul>
        </li>

        <!-- SUBJECT -->
        <li class="<?php if ($page_name == 'subject') echo 'opened active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/subject">
                <i class="entypo-flow-tree"></i>
                <span><?php echo get_phrase('Subject'); ?></span>
            </a>
           
        </li>

        <!-- CLASS ROUTINE -->
        <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/class_routine">
                <i class="entypo-target"></i>
                <span>Class Routine</span>
            </a>
        </li>

        <!-- DAILY ATTENDANCE -->
        <li class="<?php if ($page_name == 'manage_attendance') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/manage_attendance/<?php echo date("d/m/Y"); ?>">
                <i class="entypo-chart-area"></i>
                <span><?php echo get_phrase('daily_attendance'); ?></span>
            </a>

        </li>

        <!-- EXAMS -->
        <li class="<?php
        if ($page_name == 'exam' ||
                $page_name == 'grade' ||
                $page_name == 'marks' ||
                    $page_name == 'exam_marks_sms' ||
                        $page_name == 'tabulation_sheet')
                            echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-graduation-cap"></i>
                <span>Exams</span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'exam') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/exam">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('exam_list'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'grade') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/grade">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('exam_grades'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'marks') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/marks">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_marks'); ?></span>
                    </a>
                </li>
				<!--
                <li class="<?php //if($page_name == 'exam_marks_sms') echo 'active'; ?> ">
                    <a href="<?php //echo base_url(); ?>index.php?admin/exam_marks_sms">
                        <span><i class="entypo-dot"></i> <?php //echo get_phrase('send_marks_by_sms'); ?></span>
                    </a>
                </li>
				
                <li class="<?php //if ($page_name == 'tabulation_sheet') echo 'active'; ?> ">
                    <a href="<?php //echo base_url(); ?>index.php?admin/tabulation_sheet">
                        <span><i class="entypo-dot"></i> <?php// echo get_phrase('tabulation_sheet'); ?></span>
                    </a>
                </li>
				-->
            </ul>
        </li>

       

        <!-- ACCOUNTING -->
        <li class="<?php
        if ($page_name == 'income' ||
                $page_name == 'expense' ||
                    $page_name == 'expense_category' ||
                        $page_name == 'student_payment')
                            echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-suitcase"></i>
                <span>Accounting</span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'student_payment') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/student_payment">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('create_student_payment'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'income') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/income">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('student_payments'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/expense">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('expense'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/expense_category">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('expense_category'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- LIBRARY -->
<!--        <li class="<?php// if ($page_name == 'book') echo 'active'; ?> ">
            <a href="<?php// echo base_url(); ?>index.php?admin/book">
                <i class="entypo-book"></i>
                <span><?php //echo get_phrase('library'); ?></span>
            </a>
        </li>-->

        <!-- TRANSPORT -->
<!--        <li class="<?php //if ($page_name == 'transport') echo 'active'; ?> ">
            <a href="<?php //echo base_url(); ?>index.php?admin/transport">
                <i class="entypo-location"></i>
                <span><?php// echo get_phrase('transport'); ?></span>
            </a>
        </li>-->

        <!-- DORMITORY -->
<!--        <li class="<?php //if ($page_name == 'dormitory') echo 'active'; ?> ">
            <a href="<?php //echo base_url(); ?>index.php?admin/dormitory">
                <i class="entypo-home"></i>
                <span><?php //echo get_phrase('dormitory'); ?></span>
            </a>
        </li>-->

        <!-- NOTICEBOARD -->
<!--        <li class="<?php //if ($page_name == 'noticeboard') echo 'active'; ?> ">
            <a href="<?php //echo base_url(); ?>index.php?admin/noticeboard">
                <i class="entypo-doc-text-inv"></i>
                <span><?php //echo get_phrase('noticeboard'); ?></span>
            </a>
        </li>-->

        <!-- MESSAGE -->
<!--        <li class="<?php// if ($page_name == 'message') echo 'active'; ?> ">
            <a href="<?php //echo base_url(); ?>index.php?admin/message">
                <i class="entypo-mail"></i>
                <span><?php //echo get_phrase('message'); ?></span>
            </a>
        </li>-->

        <!-- SETTINGS -->
<!--        <li class="<?php
      //  if ($page_name == 'system_settings' ||      $page_name == 'manage_language' ||      //   $page_name == 'sms_settings')
                    //    echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-lifebuoy"></i>
                <span><?php //echo get_phrase('settings'); ?></span>
            </a>
            <ul>
                <li class="<?php //if ($page_name == 'system_settings') echo 'active'; ?> ">
                    <a href="<?php //echo base_url(); ?>index.php?admin/system_settings">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('general_settings'); ?></span>
                    </a>
                </li>
                <li class="<?php //if ($page_name == 'sms_settings') echo 'active'; ?> ">
                    <a href="<?php// echo base_url(); ?>index.php?admin/sms_settings">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('sms_settings'); ?></span>
                    </a>
                </li>
                <li class="<?php// if ($page_name == 'manage_language') echo 'active'; ?> ">
                    <a href="<?php// echo base_url(); ?>index.php?admin/manage_language">
                        <span><i class="entypo-dot"></i> <?php //echo get_phrase('language_settings'); ?></span>
                    </a>
                </li>
            </ul>
        </li>-->

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/manage_profile">
                <i class="entypo-lock"></i>
                <span>User Account</span>
            </a>
        </li>

    </ul>

</div>