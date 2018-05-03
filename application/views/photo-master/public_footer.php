

   <!-- Footer -->
   <footer class="home-page">
     <div class="container text-muted text-center">
       <div class="row"> 
             <?php  echo $footer[0]['footer_text'];?>
 
         <ul class="list-inline social-buttons">
            <?php foreach($social as $soc){?>
              <li><a href="<?php echo $soc['social_link'];?>"><i class="<?php echo $soc['social_icon'];?>"></i></a></li>
            <?php }?> 
         </ul>
       </div>
     </div>
   </footer>

   <!-- Jquery -->
   <script type="text/javascript" src="<?php echo base_url('assets/')?>js/jquery.min.js"></script>
   <!-- Bootstrap core Javascript -->
   <script type="text/javascript" src="<?php echo base_url('assets/')?>bootstrap/js/bootstrap.min.js"></script>
   <!-- Plugins -->
   <script type="text/javascript" src="<?php echo base_url('assets/')?>js/jquery.easing.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/')?>js/jquery.magnific-popup.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/')?>js/scrollreveal.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/')?>js/script.js"></script>
</body>
</html>
