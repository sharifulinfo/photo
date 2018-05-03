<div class="grid_10">  
    <div class="box round first grid">
        <h2>Change Password</h2> 
        <div class="block">    
        <?php if( $esrr = $this->session->flashdata('feedback_article') ){
                $clas = $this->session->flashdata('feedback_article_class') ;
            ?> 
          <strong class="successData"><?php echo $esrr;?></strong> 
        <?php } ?>  
             <form action="<?php echo base_url('Admin/updatePass/'.$this->session->userdata('user_id'));?>" method="post">
                <table class="form">					
                    <tr>
                        <td>
                            <label>Old Password:</label>
                        </td>
                        <td>
                            <input type="Password" name="old_pass" placeholder="Enter Old Password..." class="medium" value="<?php echo set_value('old_pass');?>" />
                            <?php echo form_error('old_pass');?>
                            <span style="color: red"> <?php echo @$passeror['passerror'];?></span>
                        </td>
                    </tr>
    				 <tr>
                        <td>
                            <label>New Password:</label>
                        </td>
                        <td>
                            <input type="Password" name="new_pass" placeholder="Enter New Password..." class="medium" value="<?php echo set_value('new_pass');?>"/>
                            <?php echo form_error('new_pass');?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Confarm New Password:</label>
                        </td>
                        <td>
                            <input type="Password" name="con_pass" placeholder="Enter New Password..." class="medium" value="<?php echo set_value('con_pass');?>"/>
                            <?php echo form_error('con_pass');?>
                        </td>
                    </tr>
    				
    				 <tr>
                        <td>
                        </td>
                        <td>
                            <input type="submit" name="submit" Value="Update" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
