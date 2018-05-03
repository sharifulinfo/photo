<?php include"inc/ad_header.php";?>
<?php
    if(isset($_GET['DelID']) && $_GET['DelID'] != NULL){
        $DelID = $_GET['DelID'];

        $sql = "SELECT * FROM tbl_slider WHERE id = '$DelID'";
		$Unlink = $db->select($sql)->fetch_assoc();
		if($Unlink){
			$delink = $Unlink['slide_img'];
			unlink('upload/slider/'.$delink);
		}

		$sql = "DELETE FROM tbl_slider WHERE id = '$DelID'";
		$DelPost = $db->delete($sql);
		if($DelPost){
			#header("location: postlist.php");
			echo "<script>alert('Slider Deleted Successfully.')</script>";
			echo "<script>window.location = 'Slidelist.php'</script>";

		}

    }else{
        echo "<script>window.location = 'postlist.php'</script>";
        # header("Location: catlist.php");
    } 
?>	