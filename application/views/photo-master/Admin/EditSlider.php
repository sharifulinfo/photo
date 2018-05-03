<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Post</h2>
        <div class="block">   
          <?php
                if(isset($_GET['PostID']) && $_GET['PostID'] != NULL){
                    $PostID = $_GET['PostID'];
                }else{
                    echo "<script>window.location = 'Slidelist.php'</script>";
                    # header("Location: catlist.php");
                }
            ?>   

            <?php 
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $title = $_POST['title'];
                    

                    $title = mysqli_real_escape_string($db->link , $title);
                     

                    $permited  = array('jpg', 'jpeg', 'png', 'gif');
                    $file_name = $_FILES['image']['name'];
                    $file_size = $_FILES['image']['size'];
                    $file_temp = $_FILES['image']['tmp_name'];

                    $div = explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                    $uploaded_image = "upload/slider".$unique_image;
                    
                    if(empty($title)){
                        echo "<span class='error'>Field Must not be Empty!</span>";
                        }else{
                         if(empty($file_name)){
                            $sql = "UPDATE tbl_slider SET
                            
                            title = '$title'
                            
                            WHERE id='$PostID'";
                        $UpdatePost = $db->update($sql);
                        if($UpdatePost){
                            echo "<span class='success'>Slider Updated Successfully!</span>";
                        }

                         } else{   

                        if($file_size >1048567) {
                         echo "<span class='error'>Image Size should be less then 1MB!
                         </span>";
                        } elseif (in_array($file_ext, $permited) === false) {
                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permited)."</span>";
                        }else{
                        move_uploaded_file($file_temp, $uploaded_image);
                         $sql = "UPDATE tbl_slider SET
                           
                            title = '$title',
                             
                            slide_img = '$unique_image' 
                            WHERE id='$PostID'";
                        $UpdatePost = $db->update($sql);
                        if($UpdatePost){
                            echo "<span class='success'>Slider Updated Successfully!</span>";
                        }
                       } 
                    }
                 } 
             }
                ?>

                <?php 
                    $sql = "SELECT * FROM tbl_slider WHERE id = '$PostID'";
                    $POSTedit = $db->select($sql);
                    if($POSTedit){
                        while($POSTedits = $POSTedit->fetch_assoc()){
                    
                ?>   

         <form action="" method="post" enctype="multipart/form-data">
            <table class="form"> 
                <tr>
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        <input type="text" name="title" value="<?php echo $POSTedits['title'];?>" class="medium" />
                    </td>
                </tr> 
                 
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <img src="upload/slider<?php echo $POSTedits['slide_img'];?>" height="200px" width="600px"/><br/>
                        <input name="image" type="file" />
                    </td>
                </tr>
                
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
            <?php } } else{header("location: 404.php");} ?>
        </div>
    </div>
</div>
<?php include"inc/ad_footer.php";?>
 <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
        <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>
    <!-- /TinyMCE -->