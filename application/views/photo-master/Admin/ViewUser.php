<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>User Details</h2>
       <div class="block copyblock"> 
       <?php
                if(isset($_GET['userID']) && $_GET['userID'] != NULL){
                    $userID = $_GET['userID'];
                }else{
                    echo "<script>window.location = 'UserList.php'</script>";
                    # header("Location: catlist.php");
                }
            ?> 

       <?php 
            if($_SERVER['REQUEST_METHOD']=='POST'){
              echo "<script>window.location = 'UserList.php'</script>";
             } 
       ?>
       <?php
                $sql = "SELECT * FROM tbl_user WHERE id = $userID";
                $result = $db->select($sql);
                if($result){
                    while($row = $result->fetch_assoc()){
       ?>
         <form action="" method="post">
            <table class="form">					
                <tr>
                    <td>
                    <label>Name:</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $row['name']?>" class="medium" />
                    </td>
                </tr> 
                <tr>
                    <td>
                      <label>UserName:</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $row['username']?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email:</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $row['email']?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Details</label>
                    </td>
                    <td>
                        <textarea class="tinymce">
                            <?php echo $row['details'];?>
                        </textarea>
                    </td>
                </tr>
				<tr> 
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="OK" />
                    </td>
                </tr>
            </table>
            </form>
            <?php }} else{header("location: 404.php");} ?>
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