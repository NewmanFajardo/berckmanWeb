<!--
Author: Newman Fajardo-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Index</title>
		<?= $this->Html->charset() ?>
	    <?= $this->element('admin_link') ?>
		
		

	</head> 
	   
	 <body class="sticky-header left-side-collapsed"  onload="initMap()">
	    <section>
	    	
	    	<?= $this->element('admin_menu') ?>
	    	<?= $this->element('admin_head') ?>
	    
			
				<div id="page-wrapper">
					<div class="graphs">
					
					</div>
				<!--body wrapper start-->
				</div>
				<!-- <footer>
				   <p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
				</footer> -->
	        <!--footer section end-->
	   </section>
	</body>
    <?= $this->element('admin_foot') ?>
</html>