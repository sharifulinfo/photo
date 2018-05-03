<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Category</h2>
       <div class="block copyblock"> 
       <?php 
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $theme = $_POST['theme'];
                    $sql = "UPDATE tbl_theme
                        SET 
                        theme = '$theme'
                        WHERE id = '1'";
                    $UpdatCate = $db->update($sql);
                    if($UpdatCate){
                        echo "<span class='success'>Theme Updated Successfully!</span>";
                    }
                
             } 
       ?>
        <?php 
            $sql = "SELECT * FROM tbl_theme";
            $result = $db->select($sql);
            if($result){
                while($row = $result->fetch_assoc()){ 
        ?>
         <form action="" method="post">
            <table class="form">                    
                <tr>
                    <td>
                        <input type="radio" 
                            <?php if($row['theme'] == 'default'){ echo "Checked";}?>
                         name="theme" value="default"/> Default
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio"
                            <?php if($row['theme'] == 'green'){ echo "Checked";}?>
                         name="theme" value="green" /> Green
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" 
                            <?php if($row['theme'] == 'blue'){ echo "Checked";}?>
                        name="theme" value="blue"  /> Blue
                    </td>
                </tr>
                <tr> 
                    <td>
                        <input type="submit" name="submit" Value="Change" />
                    </td>
                </tr>
            </table>
            </form>
             <?php }} ?>
        </div>
    </div>
</div>
<?php include"inc/ad_footer.php";?>