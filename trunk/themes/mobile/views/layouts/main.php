<?php /* @var $this Controller */ ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="pohyb, WOW Slider, Website Slide Show, Web Image Slider" />
   	<meta name="description" content="pohyb created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />
    <link href='http://fonts.googleapis.com/css?family=Noto+Serif&subset=latin-ext' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/src/css/jquery.mmenu.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mobile.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/src/js/jquery.mmenu.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function() {
				$('nav#menu').mmenu({
					classes: 'mm-light'
				});
			});
		</script>
    
</head>
<body>

<div id="page">
	
<div>
	<div id="hlavicka">
		

		 <div class="obr">
          <a href="#menu"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/mobile1.png" alt="mobileMenuIcon.png, 1,0kB" title="mobileMenuIcon" height="50" width="50"/></a>
 	     </div>
 	      <div class="navigacia">
			<div id="vyskakovacie_menu">
				<?php  $this->widget('application.components.MainMenu'); ?>
			</div>
		</div>
		
		
	</div>
	
	<div id="logos">
	<div class="nadpis">
    	<a href=""><?php echo CHtml::encode(Yii::app()->name); ?></a>
    </div>
	<div class="logo">
        <a href="http://www.uniba.sk/" target='_blank'><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo1.png" alt="FMFI", 28kB" title="logo1" height="147" width="149"></a> 
    </div>

    <div class="logo">
        <a href="http://www.fmph.uniba.sk/" target='_blank'><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo2.png" alt="FMFI", 28kB" title="logo1" height="147" width="149"></a> 
    </div>
    
    </div>
   
	
	    <div id="telo">
	    	<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>
			
	    	<div class="post">
	    		<?php echo $content; ?>
	        </div>
	    </div>
	    
	
	<footer>
	        Copyright &copy; <b style="color: orange;">D r e a m T e a m</b> | Designed by <b style="color: orange;">M a t f y z a c i</b>
	</footer>
</div> 

	<nav id="menu">
			<?php $this->widget('application.components.SportMenu'); ?>
	    
	</nav>
 </div> 
</body>
</html>
