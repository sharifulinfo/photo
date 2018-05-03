<?php include"inc/ad_header.php";?> 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Slider List</h2> 
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="5%">SL</th>
							<th width="30%">Title</th>
							<th width="50%">Slider Images</th> 
							<th width="15%">Action</th> 
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT * FROM tbl_slider";
							$ShowSlider = $db->select($sql);
							if($ShowSlider){
								$i=1;
								while($row = $ShowSlider->fetch_assoc()){
						?>
						<tr class="odd gradeX">
							<td><?php echo $i++;?></td>
							<td><?php echo $row['title'];?></td> 
							 
							<td><img src="upload/slider/<?php echo $row['slide_img'];?>" height="100px" width="250px"></td> 
							 
							  <td> 
							  	<a href="EditSlider.php?PostID=<?php echo $row['id'];?>">Edit</a> 
								|| <a onclick="return confirm('Are you sure to Delete!')" href="SlideDel.php?DelID=<?php echo $row['id'];?>">Delete</a></td>
							 
								</td>

						</tr> 
						<?php }}?>
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
<?php include"inc/ad_footer.php";?>
