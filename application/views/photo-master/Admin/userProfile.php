
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Profile</h2>
        <div class="block"> 
        <?php if( $esrr = $this->session->flashdata('feedback_article') ){
                $clas = $this->session->flashdata('feedback_article_class') ;
            ?> 
          <strong class="successData"><?php echo $esrr;?></strong> 
        <?php } ?>   

         <form action="<?php echo base_url('Admin/updateUserprofile/'.$user->user_id)?>" method="post">
            <table class="form"> 
                <tr>
                    <td>
                        <label>Name:</label>
                    </td>
                    <td>
                        <input type="text" name="user_name" value="<?php echo $user->user_name;?>" class="medium" />
                        <?php echo form_error('user_name')?>
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Email:</label>
                    </td>
                    <td>
                        <input type="text" name="user_email" value="<?php echo $user->user_email;?>" class="medium" />
                        <?php echo form_error('user_email');?>
                       <span style="color: red;"><?php   echo @$email_err['eeemail'];?></span> 
                    </td>
                </tr>  
                 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Details:</label>
                    </td>
                    <td>
                        <textarea name="user_details" class="tinymce">
                            <?php echo $user->user_details;?>
                        </textarea>
                        <?php echo form_error('user_details')?>
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
 <script src="<?php echo base_url('application/views/photo-master/Admin/js/tinymce')?>/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>