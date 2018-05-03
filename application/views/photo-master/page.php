 

<!-- Principal Content Start-->
   <div id="about">

    <!-- Header -->
      <div class="row">
         <div class="col-xs-12 intro">
            <div class="carousel-inner">
               <div class="item active">
                <img class="img-responsive" style="width: 100%" src="<?php echo $page->page_img;?>" alt="header picture">
               </div>
               <div class="carousel-caption">
                  <h1><?php echo $page->page_title;?></h1>
                  <p><?php echo $page->page_short;?></p>
                  <hr>
               </div>
            </div>
         </div>
      </div>
    <!-- End of header -->  

    <!-- Container Box -->
      <div class="container">
        <div class="row">  
                <h2><?php echo $page->page_title;?></h2>
                <p class="text-left text-muted">
                	<?php echo $page->page_content;?>
                </p>
               </div>
             </div> 
        </div>

      
        
<!-- End of principal content -->

   <!-- Footer -->
  <?php //require_once('public_footer.php');?>