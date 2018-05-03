<div class="grid_10">
    <div class="box round first grid">
    <?php
                // if(isset($_GET['pageId']) && $_GET['pageId'] != NULL){
                //     $pageId = $_GET['pageId'];
                // }else{
                //     echo "<script>window.location = 'catlist.php'</script>";
                //     # header("Location: catlist.php");
                // }
            ?> 

        <h2>Change cover picture</h2>
        <div class="block">    
             <?php if( $esrr = $this->session->flashdata('feedback_article') ){
                $clas = $this->session->flashdata('feedback_article_class') ;
            ?> 
          <strong class="successData"><?php echo $esrr;?></strong> 
        <?php } ?>  
         <form action="<?php echo base_url('Admin/updateCover');?>" method="post" enctype="multipart/form-data">
            <table class="form">   
                <tr>
                    <td>
                        <label>Index Picture:</label>
                    </td>
                    <td>
                        <img src="<?php echo $cover->index_pic;?>" height="300" width="600">
                        <input type="file" name="index_pic" value="" class="medium" />
                        <span style="color: red;"><?php echo @$error['error']['error'];?></span> 
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>Index Header:</label>
                    </td>
                    <td>
                        <input type="text" name="index_head" value="<?php echo $cover->index_head;?>" class="medium" />
                        <?php echo form_error('index_head');?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Index Short Text:</label>
                    </td>
                    <td>
                        <input type="text" name="index_content" value="<?php echo $cover->index_content;?>" class="medium" />
                        <?php echo form_error('index_content');?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>About Picture:</label>
                    </td>
                    <td>
                        <img src="<?php echo $cover->about_pic;?>" height="300" width="600">
                        <input type="file" name="about_pic" value="" class="medium" />
                        <span style="color: red;"><?php echo @$error['error']['error'];?></span> 
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>About Header:</label>
                    </td>
                    <td>
                        <input type="text" name="about_head" value="<?php echo $cover->about_head;?>" class="medium" />
                        <?php echo form_error('about_head');?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>About Short Text:</label>
                    </td>
                    <td>
                        <input type="text" name="about_content" value="<?php echo $cover->about_content;?>" class="medium" />
                        <?php echo form_error('about_content');?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Contact Picture:</label>
                    </td>
                    <td>
                        <img src="<?php echo $cover->contact_pic;?>" height="300" width="600">
                        <input type="file" name="contact_pic" value="" class="medium" />
                        <span style="color: red;"><?php echo @$error['error']['error'];?></span> 
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>Contact Header:</label>
                    </td>
                    <td>
                        <input type="text" name="contact_head" value="<?php echo $cover->contact_head;?>" class="medium" />
                        <?php echo form_error('contact_head');?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Contact Short Text:</label>
                    </td>
                    <td>
                        <input type="text" name="contact_content" value="<?php echo $cover->contact_content;?>" class="medium" />
                        <?php echo form_error('contact_content');?>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update Page" /> 
                    </td>
                </tr>
            </table>
            </form> 
        </div>
    </div>
</div> 
 