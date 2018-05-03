<!DOCTYPE html>  

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>PhotographItem-Responsive Theme</title>

  	<!-- Bootstrap core css -->
  	 
    <?php echo link_tag('assets/bootstrap/css/bootstrap.min.css');?>
  	<!-- Bootstrap core css --> 
    <?php echo link_tag('assets/css/style.css');?>
  	<!-- Magnific-popup css --> 
    <?php echo link_tag('assets/css/magnific-popup.css');?>

  	<!-- Font Awesome icons --> 
    <?php echo link_tag('assets/font-awesome/css/font-awesome.min.css');?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">

<!-- Navigation Bar -->
   <nav class="navbar navbar-fixed-top navbar-default">
     <div class="container">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a  class="navbar-brand page-scroll" href="#page-top"> 
              <img style="    width: 80px; height: 44px;" src="<?php echo $logo->logo_url;?>">
            </a>
         </div>
         <div class="collapse navbar-collapse navbar-right" id="menu"> 
          <?php
      // $path = $_SERVER['SCRIPT_FILENAME'];
      // echo $path;
      // //$current = basename($path,'.php');
      // //echo $current.'asdfasdfasd';
    ?>
          <ul class="nav navbar-nav">
            <li class="lien ">
              <a href="http://localhost/photo/index.php/users">
                <i class='fa fa-home sr-icons'></i> Home
              </a>
            </li>
            <li class="lien">
              <a href="http://localhost/photo/index.php/users/about/">
                <i class='fa fa-bookmark sr-icons'></i> About
              </a>
            </li>
            <li class="lien"><a href="http://localhost/photo/index.php/users/blog">
              <i class='fa fa-file-text sr-icons'></i> Blog
              </a>
            </li>
            <li class="lien">
              <a href="http://localhost/photo/index.php/users/contact/">
                <i class='fa fa-phone-square sr-icons'></i> Contact
              </a>
            </li>
            <?php if(isset($navs)){ foreach($navs as $nav){?>
            <li class="lien">
              <a href="<?php echo base_url('users/customPage/'.$nav->page_id);?>">
                <i class='<?php echo $nav->page_menu_icon;?> sr-icons'></i> <?php echo $nav->page_menu;?>
              </a>
            </li>
            <?php 
          }}
            ?>


          </ul>
            <?php //echo $menus;?>
         </div>
     </div>
   </nav>
<!-- End of Navigation Bar -->