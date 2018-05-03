<div class="grid_10"> 
    <div class="box round first grid">
        <h2>Add New Social Media</h2>
        <div class="block">
         <form action="<?php echo base_url('Admin/addSocial/')?>" method="post">
            <table class="form">					
                <tr>
                    <td>
                        <label>Social Name</label>
                    </td>
                    <td>
                        <input type="text" name="social_name" value="" class="medium" /><?php echo form_error('social_name');?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Social Icon</label>
                    </td>
                    <td>
                        <input type="text" name="social_icon" value="" class="medium" /><?php echo form_error('social_icon');?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Social link</label>
                    </td>
                    <td>
                        <input type="text" name="social_link" value="" class="medium" /><?php echo form_error('social_link');?>
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