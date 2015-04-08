  <body>
    <div class="header">
    	<div class="container">
            <div class="col-md-12 clear-both">
            	<div class="links">
                	<?php if ($logged_in): ?>
						<div class="left_links_top_first" id="welcome-user">					
							<a href="user/logout"><?php print "Logout";?></a>
						</div>
					<?php endif; ?>
					<?php if(!$logged_in): ?>
						<div class="left_links_top_first" id="welcome-user">					
							<a href="user/login"><?php print "Login";?></a>
						</div>
					<?php endif; ?>

                </div>
            </div>
        </div>
    </div>
	<div class="main_container">
		<div class="container">
			<img alt="Logo" src="../dtdc_geotag/sites/all/themes/bootstrap_dtdc/img/logo-bigsize.png">
		</div>
	</div>
    
    <div class="footer-block">
        <div class="download-block">
			
        	<p>Get it on! <span><a target="_blank" title="Google Play" href="#">
						<img alt="Logo" src="<?php global $base_url; echo $base_url.'/'.path_to_theme(); ?>/img/playstore.png">
					</a></span></p>
        </div>
    
    	<div class="fotter-bottom">
        	<div class="footer-left">Support &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FAQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Security &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Privacy &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Terms</div>
            <div class="footer-right">© Copyright 2015 DTDC Geoscout - All Rights Reserved </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>

