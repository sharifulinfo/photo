 
<div class="grid_10">
    <div class="box round first grid">
        <h2> Dashbord</h2>
        <div class="block">  
        <?php if( $esrr = $this->session->flashdata('feedback_article') ){
                $clas = $this->session->flashdata('feedback_article_class') ;
            ?> 
          <strong class="successData"><?php echo $esrr;?></strong> 
        <?php } ?>               
          Welcome admin panel   

        </div>
    </div>
</div>
