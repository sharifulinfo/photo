<?php
	include "../lib/session.php";
	Session::CheckLogin();
?>
<?php  
	include "../helpers/Formate.php";
	include "../config/config.php";
	include "../lib/Database.php";
?>	
<?php
	$db = new Database();
	$fm = new Formate();
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Password Recovary</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$email = $fm->ValiDation($_POST['email']);
				if(empty($email)){
					echo "<span style='color:Red;'>Field Must Not be Empty!</span>";
				}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					echo "<span style='color:Red;'>Invalide Email Address!</span>";
					}else{
						$sql = "SELECT * FROM tbl_user WHERE email = '$email'";
						$result = $db->select($sql);
						if($result != false){
						while($value = $result->fetch_assoc()){
							$userId 	= $value['id'];
							$username 	= $value['username'];
						}

						$text = substr($email, 0 , 3);
						$rand = rand(10000 , 99999);
						$newpass = "$text$rand";
						echo $newpass;
						$password = md5($newpass);
						$sql = "UPDATE tbl_user
			                SET 
			                password = '$password'
			                WHERE id = '$userId'";
			            $SentPss = $db->update($sql);
			            if($SentPss){
			                 $to = $email;
			                 $from 		= "shariful.info55@gmail.com";
			                 $headers 	= "From: $from\n";
			                 $headers 	.= 'MIME-Version: 1.0';
							 $headers	.= 'Content-type: text/html; charset=iso-8859-1'; 
							 $subject	= "Your New Password.";
							 $message	= "Your Username is :".$username." AND Your New Password is : ".$newpass;

							 $sendMail = mail($to, $subject, $message, $headers);

							 if($sendMail){
							 	echo "<span style='color:green;'>Password Send on Your Mail!</span>";
							 }else{
							 	echo "<span style='color:Red;'>Message Not Sent!</span>";
							 }

			            }




					}else{
						echo "<span style='color:Red;'>Email Not Exits!</span>";
					}	
				}
 
			}
		?>
		<form action="" method="post">
			<h1>Password Recovary</h1>
			<div>
				<input type="text" placeholder="Type Your Email" name="email"/>
			</div> 
			<div>
				<input type="submit" value="SEND" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="login.php">Go to Login Page</a>
		</div><!-- button -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>