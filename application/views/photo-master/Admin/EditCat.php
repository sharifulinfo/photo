 
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Category</h2>
       <div class="block copyblock">   
         <form action="<?php echo base_url('Admin/updateCategory/'.$cats->cat_id)?>" method="post">
            <table class="form">					
                <tr>
                    <td>
                        <input type="text" name="cat_name" value="<?php echo $cats->cat_name;?>" class="medium" />
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