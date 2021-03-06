<?= doctype('html5')?>
<head>
<title><?=$titulo?></title>	
	<!--TAGS-->	
	<!--Desarrollador Jonathan Govinda Medrano Salazar-->
	<!--Para más información: arithgrey@gmail.com desarrollador backend y fronend del sistema qrnegocios-->
	<?php
		$meta = array(
	        array('name' => 'robots', 'content' => 'no-cache'),
	        array('name' => 'description', 'content' => 'Social I'),
	        array('name' => 'keywords', 'content' => 'social media, business intelligence, emprendimiento'),
	        array('name' => 'robots', 'content' => 'no-cache'),
	        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
	    );	    
	?>
	<?=meta($meta);?>
	<meta name="author" content="Jonathan Govinda Medrano Salazar arithgrey@gmail.com" />
	<!--CSS-->
	<?=link_tag('application/css/foundation.min.css');?>
	<?=link_tag('application/css/normalize.css');?>
	<?=link_tag('application/css/foundation.css');?>
	
	<?=link_tag('application/css/main.css');?>

	
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.7/slick.css"/>
	<!--JS-->	
	<script type="text/javascript" src="<?=base_url('application/js/jquery-2.1.1.min.js')?>"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.7/slick.min.js"/></script>
	<script type="text/javascript" src="<?=base_url('application/js/foundation.min.js')?>"></script>	
	<script type="text/javascript" src="<?=base_url('application/js/general.js')?>"></script>	
	<script src="<?=base_url('application/js/vendor/jquery.js')?>"></script>
	<script src="<?=base_url('application/js/foundation/foundation.js')?>"></script>
	<script src="<?=base_url('application/js/foundation/foundation.equalizer.js')?>"></script>
	<script src="<?=base_url('application/js/vendor/jquery.js')?>"></script>
	<script src="<?=base_url('application/js/foundation/foundation.js')?>"></script>
	
	<script>
    	$(document).foundation();
  	</script>
  	<style type="text/css">
  	.title_general{
  		font-size: 1.3em;

  	}
  	#titlemain{
  		background: rgba(13, 72, 99, 1);
  		color:  white;
  		font-size: 1.5em;
  	}
  	#mensaje_camp{
  		display: none;
  	}
  	</style>


</head>
<body>
	<header>
		
		<div class='row'>
			<div class='large-4 columns'>
				<a href="<?=base_url('index.php/principal/logout')?>" data-reveal-id="firstModal" class="radius button">
					→ Logout »
				</a>		
			</div>

			<label class='large-4 columns title_general'><?=$nombrecuentaact?></label>
			<label class='large-4 columns title_general'><?=$username?></label>

		</div>
							
		<div class="row">			
			<div class='row'> 
				<div class='row'>
	
	
	<dl class="sub-nav"> 	
			
			<dd class="" id='panelcontrol_menu'>
				<a href="<?=base_url('index.php/panelcontrol/control')?>">Panel de control </a>
			</dd> 
			<dd id="home_menu">
				<a href="<?=base_url()?>">Home</a>
			</dd> 
			<dd id='zonasqr_menu'>
				<a href="<?=base_url('index.php/zonasqr/principal')?>">Zonas QR </a>
			</dd> 
			<dd id='campanias_menu'>
				<a href="<?=base_url('index.php/cuentas/accessacount')?>">Campañas </a>
			</dd>

			<dd id='mensaje_camp'>
				<a href="<?=base_url('index.php/cuentas/accessacount')?>">Mensajes</a>
			</dd>


				
	</dl>
	


</div>

</div>
				<h1 class='home large-8 columns' id='home'><a href="<?=$homesess;?>">QR social</a></h1>
					



				<div class='large-4 columns' >
					<p id="titlemain" ><?=$titulo?></p>
					<div class="progress [radius round]"> 
		<span class="meter" style="width:70%;"></span> 
 </div> 					
					
				</div>
			</div>										
		</div> 		
		<nav>
		</nav>
	</header>
	<div id='wrapper' class='wrapper'>
		<div class='content' id='content'>
			<input type="hidden" name="now" class="now" id="now" value="<?=base_url()?>">



