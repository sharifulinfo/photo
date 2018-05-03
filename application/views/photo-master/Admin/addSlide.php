<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Slider</h2>
        <div class="block">    
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
                    $uploaded_image = "upload/slider/".$unique_image;
                    
                    if(empty($title) OR empty($file_name)){
                        echo "<span class='error'>Field Must not be Empty!</span>";
                        }elseif ($file_size >1048567) {
                         echo "<span class='error'>Image Size should be less then 1MB!
                         </span>";
                        } elseif (in_array($file_ext, $permited) === false) {
                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permited)."</span>";
                        }else{
                        move_uploaded_file($file_temp, $uploaded_image);
                         $sql = "INSERT INTO tbl_slider (title, slide_img) VALUES ('$title','$unique_image')";
                        $addSlide = $db->insert($sql);
                        if($addSlide){
                            echo "<span class='success'>Slide Inserted Successfully!</span>";
                        }
                    }
                 } 
                ?>


         <form action="" method="post" enctype="multipart/form-data">
            <table class="form"> 
                <tr>
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        <input type="text" name="title" placeholder="Enter Slide Title..." class="medium" />
                    </td>
                </tr> 
                 
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input name="image" type="file" />
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