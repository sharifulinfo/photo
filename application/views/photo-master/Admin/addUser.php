<?php include"inc/ad_header.php";?>
 <?php if(!Session::get("userRole")=='0'){
        echo "<script>window.location = 'index.php';</script>";
        }
    ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New User</h2>
       <div class="block copyblock"> 
       <?php 
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $username   = $_POST['username'];
                $Password   = $_POST['Password'];
                $role       = $_POST['role'];
                $email      = $_POST['email'];

                $username   = mysqli_real_escape_string($db->link , $username);
                $Password   = mysqli_real_escape_string($db->link , $Password);
                $role       = mysqli_real_escape_string($db->link , $role); 
                $email      = mysqli_real_escape_string($db->link , $email); 

                $Password = md5($Password);
                if(empty($username) || empty($Password) || empty($email)){
                    echo "<span class='error'>Field Must not be Empty!</span>";
                    }elseif($role == 'Select A Role'){
                        echo "<span class='error'>Field Must not be Empty!</span>";      
                    }else{
                        $sql = "SELECT * FROM tbl_user WHERE email = '$email'";
                        $useremail = $db->select($sql);
                        if($useremail != false){
                                echo "<span class='error'>Email Already Exits!</span>"; 
                            }else{

                    $sql = "INSERT INTO tbl_user (username, password, email, role) VALUES ('$username','$Password','$email','$role')";
                    $AddUser = $db->insert($sql);
                    if($AddUser){
                        echo "<span class='success'>User Created Successfully!</span>";
                    }
                }
             } 
         }
       ?>
         <form action="addUser.php" method="post">
            <table class="form">					
                <tr>
                    <td>
                        User Name:
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="Type Username..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name="Password" placeholder="Type User Password..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="text" name="email" placeholder="Type User email..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        User Role:
                    </td>
                    <td>
                        <select id="select" name="role">
                            <option>Select A Role</option>
                            <option value="0">Admin</option>
                            <option value="1">Author</option>
                            <option value="2">Editor</option>
                        </select>
                    </td>
                </tr>
				<tr> 
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include"inc/ad_footer.php";?>