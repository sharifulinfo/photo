<?php include"inc/ad_header.php";?>
<div class="grid_10">
    <div class="box round first grid">
<?php
	if(isset($_GET['delID'])){
		$delID = $_GET['delID'];
		$sql = "DELETE FROM tbl_user WHERE id = '$delID'";
		$DelCat = $db->delete($sql);
		if($DelCat){
			echo "<span class='success'>User Deleted Succussfully!</span>";
		}
	}
?>									
        <h2>Category List</h2>
        <div class="block">        
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Serial No.</th>
					<th>Name</th>
					<th>User Name</th>
					<th>Email</th>
					<th>Role</th>
					<th>Detials</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

			<?php 
				$sql = "SELECT * FROM tbl_user ORDER BY id DESC";
				$result = $db->select($sql);
				if($result){
					$i=0;
					while($row = $result->fetch_assoc()){
						$i++;
			?>
				<tr class="odd gradeX">
					<td><?php echo $i;?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['username'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $fm->Role($row['role']);?></td>
					<td><?php echo $fm->TextShort($row['details'],30);?></td>
					<td><a href="ViewUser.php?userID=<?php echo $row['id'];?>">View</a> 
					 <?php if(Session::get("userRole")=='0'){?>
						|| <a onclick="return confirm('Are you sure to Delete!')" href="?delID=<?php echo $row['id'];?>">Delete</a></td>
					<?php }?>   
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
