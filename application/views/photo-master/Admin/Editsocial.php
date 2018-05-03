<div class="grid_10"> 
    <div class="box round first grid">
        <h2>Update Social Media</h2>
        <div class="block">
         <form action="<?php echo base_url('Admin/updateSocial/'.$social->social_id)?>" method="post">
            <table class="form">					
                <tr>
                    <td>
                        <label>Social Name</label>
                    </td>
                    <td>
                        <input type="text" name="social_name" value="<?php echo $social->social_name;?>" class="medium" /><?php echo form_error('social_name');?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Social Icon</label>
                    </td>
                    <td>
                        <input type="text" name="social_icon" value="<?php echo $social->social_icon;?>" class="medium" /><?php echo form_error('social_icon');?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Social link</label>
                    </td>
                    <td>
                        <input type="text" name="social_link" value="<?php echo $social->social_link;?>" class="medium" /><?php echo form_error('social_link');?>
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