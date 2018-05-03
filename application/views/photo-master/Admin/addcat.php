 
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Category</h2>
       <div class="block copyblock">   
         <form action="<?php echo base_url('Admin/addCategory');?>" method="post">
            <?php echo form_error('cat_name');?>
            <table class="form">					
                <tr>
                    <td>
                        <input type="text" name="cat_name" placeholder="Enter Category Name..." class="medium" />
                    </td>
                </tr>
				<tr> 
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div> 