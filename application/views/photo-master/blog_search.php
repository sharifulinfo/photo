<?php require_once('public_header.php');?>
 
<!-- Principal Content Start -->
   <div id="blog">
     <div class="container">
      <div class="row">

      <!-- Blocks of Posts -->
        <div class="col-xs-12 col-sm-8 row">
          <?php foreach ($values as $single) {?>
               
           
           <div class="col-xs-12 col-sm-12">
             <div class="post">
               <div class="post-heading">
                 <span><?php echo date('d F',strtotime($single->blog_time));?></span>
                 <img class="img-responsive" src="<?php echo $single->blog_img ?>" alt="post's picture">
               </div>
               <div class="post-body">
                 <h3><a href="single_post.html"><strong><?php echo $single->blog_title ?></strong></a></h3>
                 <hr>
                 <p>
                  <?php 
                    $this->load->helper('text'); 
                    echo word_limiter($single->blog_desc, 50);
                    ?>     
                 </p> 
                       
               </div>
               <div class="post-footer">
                 <a class="btn" href="<?php echo base_url('users/single/'.$single->blog_id);?>">READ MORE...</a>
                 <span>
                 <i class="fa fa-heart sr-icons"></i> 10
                 <i class="fa fa-comments sr-icons"></i> 10
                 </span>
               </div>
             </div>
           </div>
            <?php }?>
              <nav class="text-left">
                <?= $this->pagination->create_links();?> 
              </nav>
        </div>
      <!-- End of Blog Post -->  
      <?php require_once('sidebar.php');?>

      </div>
     </div>
   </div>
<!-- End of Principal Content Start --> 

<?php //require_once('public_footer.php');?>