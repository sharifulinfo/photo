<div class="grid_10">
    <div class="box round first grid"> 

        <h2>Add New Page</h2>
        <div class="block"> 
        <?php if( $esrr = $this->session->flashdata('feedback_article') ){
                $clas = $this->session->flashdata('feedback_article_class') ;
            ?> 
          <strong class="successData"><?php echo $esrr;?></strong> 
        <?php } ?>   
             
         <form action="<?php echo base_url('Admin/addPage')?>" method="post" enctype="multipart/form-data" >
            <table class="form"> 
                <tr>
                    <td>
                        <label>Page Name:</label>
                    </td>
                    <td>
                        <input type="text" name="page_title" value="<?php echo set_value('page_title');?>" class="medium" />
                        <?php echo form_error('page_title');?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Page Menu Name:</label>
                    </td>
                    <td>
                        <input type="text" name="page_menu" value="<?php echo set_value('page_menu');?>" class="medium" />
                        <?php echo form_error('page_menu');?>
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Page Menu Icon:</label>
                    </td>
                    <td>
                        <input type="text" name="page_menu_icon" value="<?php echo set_value('page_menu_icon');?>" class="medium" />
                        <?php echo form_error('page_menu_icon');?>
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Page Picture:</label>
                    </td>
                    <td>
                        <input type="file" name="page_img" class="medium" />
                        <span style="color: red;"><?php echo $error['error']['error'];?></span> 
                    </td>
                </tr>   

                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Content</label>
                    </td>
                    <td>
                        <textarea name="page_content" class="tinymce">  
                            <?php echo set_value('page_content');?>
                        </textarea>
                        <?php echo form_error('page_content');?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Short Note:</label>
                    </td>
                    <td>
                        <input type="text" name="page_short" value="<?php echo set_value('page_short');?>" class="medium" />
                        <?php echo form_error('page_short');?>
                    </td>
                </tr> 
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Add New Page" /> 
                    </td>
                </tr>
            </table>
            </form> 
        </div>
    </div>
</div>
 <script src="<?php echo base_url('application/views/photo-master/Admin/js/tinymce')?>/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
 