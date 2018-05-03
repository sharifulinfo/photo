 
<!DOCTYPE html>
<html>
<head>
    <?php 
    $path = 'application/views/photo-master/Admin/'
    ?>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> Admin</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url($path)?>css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url($path)?>css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url($path)?>css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url($path)?>css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url($path)?>css/nav.css" media="screen" />
    <link href="<?php echo base_url($path)?>css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="<?php echo base_url($path)?>js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url($path)?>js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="<?php echo base_url($path)?>js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url($path)?>js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url($path)?>js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url($path)?>js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url($path)?>js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url($path)?>js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url($path)?>js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="<?php echo base_url($path)?>js/table/table.js"></script>
    <script src="<?php echo base_url($path)?>js/setup.js" type="text/javascript"></script>
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>

</head>
<body>
<div class="container_12">
    <div class="grid_12 header-repeat">
        <div id="branding">
            <div class="floatleft logo">
                <img src="<?php echo base_url($path)?>img/livelogo.png" alt="Logo" />
			</div>
			<div class="floatleft middle">
				<h1>Photo Picture</h1>
				<p>Find your best photo here...</p>
			</div>
            <div class="floatright">
                <div class="floatleft">
                    <img src="<?php echo base_url($path)?>img/img-profile.jpg" alt="Profile Pic" /></div>
                <div class="floatleft marginleft10">
                    <ul class="inline-ul floatleft">
                        <li>Hello <?php echo $this->session->userdata('user_name');?></li>
                        <li><a href="<?php echo base_url('login/logout')?>">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="grid_12">
        <ul class="nav main">
            <li class="ic-dashboard"><a href="<?php echo base_url('Admin/Dashboard');?>"><span>Dashboard</span></a> </li> 
            <li class="ic-form-style"><a href="<?php echo base_url('Admin/userProfile/'.$this->session->userdata('user_id'));?>"><span>User Profile</span></a></li>
			<li class="ic-grid-tables"><a href="<?php echo base_url('Admin/ChangePass/');?>"><span>Change Password</span></a></li>
			<li class="ic-grid-tables"><a href="<?php echo base_url('Admin/msg/')?>"><span>Inbox(<?php
                echo $numMsg;?>)
            <?php
                // $sql = "SELECT * FROM tbl_contact WHERE status = '0'";
                // $result = $db->select($sql);
                // if($result){
                //     $count = mysqli_num_rows($result);
                //     echo "(".$count.")";
                // }else{
                //     echo "(".'0'.")";
                // }

            ?>
            </span></a></li>
            
            <li class="ic-charts"><a href="<?php echo base_url()?>" target = _blank><span>Visit Website</span></a></li>
        </ul>
    </div>
    <div class="clear">
</div>
 
