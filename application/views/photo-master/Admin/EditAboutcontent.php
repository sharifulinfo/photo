<div class="grid_10">
    <div class="box round first grid">
        <h2>Change cover picture</h2>
        <div class="block">    
             <?php if( $esrr = $this->session->flashdata('feedback_article') ){
                $clas = $this->session->flashdata('feedback_article_class') ;
            ?> 
          <strong class="successData"><?php echo $esrr;?></strong> 
        <?php } ?>  
         <form action="<?php echo base_url('Admin/updateAboutcontent');?>" method="post">
            <table class="form">   
                <tr>
                    <td>
                        <label>Studio Icon:</label>
                    </td>
                    <td>
                        
                        <input type="text" name="studio_icon" value="<?php echo $content->studio_icon;?>" class="medium" />
                        <?php echo form_error('studio_icon');?>
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Studio Title:</label>
                    </td>
                    <td>
                        
                        <input type="text" name="studio_title" value="<?php echo $content->studio_title;?>" class="medium" />
                        <?php echo form_error('studio_title');?>
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Studio Content:</label>
                    </td>
                    <td>
                        <textarea name="studio_text" class="tinymce">  
                            <?php echo $content->studio_text;?>
                        </textarea>
                        <?php echo form_error('studio_text');?>
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Service Icon:</label>
                    </td>
                    <td>
                        
                        <input type="text" name="team_icon" value="<?php echo $content->team_icon;?>" class="medium" />
                        <?php echo form_error('team_icon');?>
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Service Title:</label>
                    </td>
                    <td>
                        
                        <input type="text" name="team_title" value="<?php echo $content->team_title;?>" class="medium" />
                        <?php echo form_error('team_title');?>
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Service Content:</label>
                    </td>
                    <td>
                        <textarea name="team_text" class="tinymce">  
                            <?php echo $content->team_text;?>
                        </textarea>
                        <?php echo form_error('team_text');?>
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Service Icon:</label>
                    </td>
                    <td>
                        
                        <input type="text" name="service_icon" value="<?php echo $content->service_icon;?>" class="medium" />
                        <?php echo form_error('service_icon');?>
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Service Title:</label>
                    </td>
                    <td>
                        
                        <input type="text" name="service_title" value="<?php echo $content->service_title;?>" class="medium" />
                        <?php echo form_error('service_title');?>
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Service Content:</label>
                    </td>
                    <td>
                        <textarea name="service_text" class="tinymce">  
                            <?php echo $content->service_text;?>
                        </textarea>
                        <?php echo form_error('service_text');?>
                    
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
        </div>
    </div>
</div> 
  <script src="<?php echo base_url('application/views/photo-master/Admin/js/tinymce')?>/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>