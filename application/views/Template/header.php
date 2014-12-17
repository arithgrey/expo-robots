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

#repoacces{
    background: #01A9DB;
  }

.ex{
	color: black;
}
#terminoscp_p, #acerca_p{
	color: white;
	font-size: 2em;
}
#acerca_p_a{
	

	font-size: 2.6em;	
	color: white;
}
#acerca_p_aa{
	font-size: 2.6em;	
	color: rgb(18, 23, 29);
}
#regacountn{
	background: none repeat scroll 0% 0% rgba(19, 178, 221, 1);
	color: white;
}
#acerca_p{
	color: rgba(13, 79, 92, 1);
}
#home_q{
	color: white;
}
#redessociales{
	background: none repeat scroll 0% 0% #2DAEBF;	
	text-align: center;
	padding: 10px;

}
#title_redes{
	color: white;
	font-size: 2em;
}
#title_redes_sub{
	font-size: 1.3em;	
}
#title_descr{
	font-size: 1.3em;	
	color: white;
}
footer{
	background: black;
	padding: 10px;
	color: white;
}
#title_p{
	font-size: 1.7em;
	color: rgb(34, 96, 121);
}
</style> 




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
		
							
		<div class="row">			
			<div class='row'> 
				<div class='row'>
	
	
	


</div>

</div>
				<h1 class='home large-8 columns' id='home'><a href="<?=base_url()?>">
					Innovación 
Tecnología & Educación
				</a></h1>
					



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



