 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <?php if( $esrr = $this->session->flashdata('feedback_article') ){
				$clas = $this->session->flashdata('feedback_article_class') ;
			?> 
		  <strong class="successData"><?php echo $esrr;?></strong> 
	    <?php } ?>
                <?php
				    // if(isset($_GET['seenId']) && $_GET['seenId'] != NULL){
				    //     $seenId = $_GET['seenId'];
				    //     $sql = "UPDATE tbl_contact
				    //             SET 
				    //             status = '1'
				    //             WHERE id = '$seenId'";
				    //         $msgSeen = $db->update($sql);
				    //         if($msgSeen){
				    //             echo "<span class='success'>Message Goed to Seenbox Successfully!</span>";
				    //         }else{
				    //     echo "<script>window.location = 'inbox.php'</script>";
				    //     # header("Location: catlist.php");
				    // }}
				?>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Email</th>
							<th>Massage</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
								$i=1;
								foreach ($msges as $msg) {
									# code...
								
						?>

						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $msg->msg_user;?></td>
							<td><?php echo $msg->msg_user_mail;?></td>
							<td><?php $this->load->helper('text'); echo word_limiter($msg->msg_content, 10);?>
							</td>
							<td><?php echo date('d/m/y',strtotime($msg->msg_time));?></td>
							<td>
								<a href="<?php echo base_url('Admin/viewMsg/'.$msg->msg_id)?>">View</a> || 
								<a href="replymsg.php?msgId=">Reply</a> ||
								<a onclick="return confirm('Are you sure to Seen')" href="<?php echo base_url('Admin/seenMsg/'.$msg->msg_id)?>">Seen</a> 
							</td>
						</tr>

						<?php $i++;}?>
					</tbody>

				</table>
               </div>
            </div>
        </div>


        <div class="grid_10">
            <div class="box round first grid">
                <h2>Seen Box</h2>
                <?php
      //           	 if(isset($_GET['DElID']) && $_GET['DElID'] != NULL){
				  //       $DElID = $_GET['DElID'];
				  //       $sql = "DELETE FROM tbl_contact WHERE id = '$DElID'";
						// $DelCat = $db->delete($sql);
						// if($DelCat){
						// 	echo "<span class='success'>Message Deleted Succussfully!</span>";
						// }

				  //   }
                ?>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Email</th>
							<th>Massage</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
								$i=1;
								foreach ($msge as $msg1) {
									# code...
								
						?>

						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $msg1->msg_user;?></td>
							<td><?php echo $msg1->msg_user_mail;?></td>
							<td><?php $this->load->helper('text'); echo word_limiter($msg1->msg_content, 10);?>
							</td>
							<td><?php echo date('d/m/y',strtotime($msg1->msg_time));?></td>
							<td>
								<a href="<?php echo base_url('Admin/viewMsg/'.$msg1->msg_id)?>">View</a> || 
								<a href="replymsg.php?msgId=">Reply</a> ||
								<a onclick="return confirm('Are you sure to Seen')" href="<?php echo base_url('Admin/deleteMsg/'.$msg1->msg_id)?>">Delete</a> 
							</td>
						</tr>

						<?php $i++;}?>
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

