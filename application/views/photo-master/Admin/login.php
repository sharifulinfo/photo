 

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/views/photo-master/Admin/');?>css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<?php
			// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			// 	$username = $fm->ValiDation($_POST['username']);
			// 	$password = $fm->ValiDation(MD5($_POST['password']));

			// 	$username = mysqli_real_escape_string($db->link , $username);
			// 	$password = mysqli_real_escape_string($db->link , $password);

			// 	$sql = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'";
			// 	$result = $db->select($sql);
			// 	if($result != false){
			// 		$value 	= $result->fetch_assoc();
					 
			// 			Session::set("login", true);
			// 			Session::set("username", $value['username']);
			// 			Session::set("names", $value['name']);
			// 			Session::set("userId", $value['id']);
			// 			Session::set("userRole", $value['role']);
			// 			header("Location: index.php");

					 
			// 	}else{
			// 		echo "<span style='color:Red;'>Username and Password May be not!</span>";
			// 	}
			// }
		?>  

		<?php echo form_open('Login/login_function',['role' => 'login']);?>
			<h1>Admin Login</h1>
			<div> 
				<?php echo form_input(['name'=>'email','placeholder'=>'Your Email','value'=>set_value('username')]);?>
				<?php echo form_error('username');?>
			</div>
			<div> 
				<?php echo form_password(['name'=>'password','placeholder'=>'Password']);?>
				<?php echo form_error('password');?>
			</div>
			<div> 
				<?php echo form_submit(['name'=>'submit','value'=>'Login In']);?>
			</div>
		<?= form_close();?><!-- form -->

		<?php if( $err = $this->session->flashdata('login_faild') ){?> 
				  <strong style="color: red"><?php echo $err;?></strong> 
	    <?php } ?>

		<div class="button">
			<a href="forgetpass.php">Forget Password</a>
		</div><!-- button -->
		<div class="button">
			<a href="#">Photo live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>