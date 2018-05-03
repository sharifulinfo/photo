<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
    <?php
                if(isset($_GET['msgId']) && $_GET['msgId'] != NULL){
                    $msgId = $_GET['msgId'];
                }else{
                    echo "<script>window.location = 'index.php'</script>";
                    # header("Location: catlist.php");
                }
            ?> 

        <h2>Add New Post</h2>
        <div class="block">    
            <?php 
                if($_SERVER['REQUEST_METHOD']=='POST'){

                   $ToMail = $fm->ValiDation($_POST['ToMail']);
                   $FromMail = $fm->ValiDation($_POST['FromMail']);
                   $SubjectMail = $fm->ValiDation($_POST['SubjectMail']);
                   $MsgMail = $fm->ValiDation($_POST['MsgMail']);

                   $SendMail = mail($ToMail, $SubjectMail, $MsgMail, $FromMail);
                   if($SendMail){
                    echo "<span class='success'>Message Send Successfully!</span>";
                   }else{
                    echo "<span class='error'>Something is Not Right!</span>";
                   }

                 } 
                ?>

                <?php
                    $sql = "SELECT * FROM tbl_contact WHERE id='$msgId'";
                    $ViewMsg = $db->select($sql);
                    if($ViewMsg){
                        while($row = $ViewMsg->fetch_assoc()){
                ?>
         <form action="" method="post">
            <table class="form">  
                <tr>
                    <td>
                        <label>To:</label>
                    </td>
                    <td>
                        <input type="text" name="ToMail" readonly value="<?php echo $row['email'];?>" class="medium" />
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>From:</label>
                    </td>
                    <td>
                        <input type="text" name="FromMail" placeholder="From address here.." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Subject:</label>
                    </td>
                    <td>
                        <input type="text" name="SubjectMail" placeholder="Enter Subject here.." class="medium" />
                    </td>
                </tr>  

                <tr>
                    <td>
                        <label>Message:</label>
                    </td>
                    <td>
                        <textarea name="MsgMail" class="tinymce"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Send" /> 
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