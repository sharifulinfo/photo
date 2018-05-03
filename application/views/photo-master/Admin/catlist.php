 
<div class="grid_10">
    <div class="box round first grid">
 								
        <h2>Category List</h2>

        <?php if( $esrr = $this->session->flashdata('feedback_article') ){
				$clas = $this->session->flashdata('feedback_article_class') ;
			?> 
		  <strong class="successData"><?php echo $esrr;?></strong> 
	    <?php } ?>

        <div class="block">        
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Serial No.</th>
					<th>Category Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

			<?php  
					$i=0;
					foreach($cats as $row){
						$i++;
			?>
				<tr class="odd gradeX">
					<td><?php echo $i;?></td>
					<td><?php echo $row->cat_name;?></td>
					<td><a href="<?php echo base_url('Admin/editCategory/'.$row->cat_id);?>">Edit</a> || <a onclick="return confirm('Are you sure to Delete!')" href="<?php echo base_url('Admin/deleteCategory/'.$row->cat_id)?>">Delete</a></td>
				</tr>

			<?php }?>	

			</tbody>
		</table>
       </div>
    </div>
</div>
<script type="text/javascript">

$(document).ready(function () {
    setupLeftMenu();

    $('.datatable').dataTable();
    setSidebarHeight();


});
</script> 
