<?php /* @var $this Controller */ ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="pohyb, WOW Slider, Website Slide Show, Web Image Slider" />
   	<meta name="description" content="pohyb created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />
    <link href='http://fonts.googleapis.com/css?family=Noto+Serif&subset=latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" />
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/js-image-slider.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>
		 // DOM ready
		 $(function() {
		   
	      // Create the dropdown base
	      $("<select />").appendTo("nav");
	      
	      // Create default option "Go to..."
	      $("<option />", {
	         "selected": "selected",
	         "value"   : "",
	         "text"    : "Select a page"
	      }).appendTo("nav select");
	      
	      // Populate dropdown with menu items
	      $("nav a").each(function() {
	       var el = $(this);
	       $("<option />", {
	           "value"   : el.attr("href"),
	           "text"    : el.text()
	       }).appendTo("nav select");
	      });
	      
		   // To make dropdown actually work
	      $("nav select").change(function() {
	        window.location = $(this).find("option:selected").val();
	      });
		 
		 });
	</script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<header>
	<nav>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'O Nás', 'url'=>array('/site/index')),
				array('label'=>'Novinky', 'url'=>array('/news/index')),
				array('label'=>'Rozvrh', 'url'=>array('/schedule/index')),
				array('label'=>'Ligy', 'url'=>array('/league/index')),
				array('label'=>'Akcie', 'url'=>array('/event/index')),
				array('label'=>'Kurzy', 'url'=>array('/course/index')),
        		array('label'=>'Galéria', 'url'=>array('/gallery/index')),
			),
			'activeCssClass'=>'active',
		)); ?>
	</nav>
	<div id="login_link" >
   		<?php if(Yii::app()->user->isGuest): ?>
			<?php echo CHtml::button('Prihlásiť', array('submit' => array('site/login'), 'class'=>'prihlas')); ?>
   		<?php else: ?>
  			<?php echo CHtml::link(Yii::app()->user->email, Yii::app()->request->baseUrl.'/user/'.Yii::app()->user->id);  ?>
   			<?php echo CHtml::button('Odhlásiť', array('submit' => array('site/logout')), array('class'=>'prihlas')); ?>
   	    <?php endif; ?>
	</div>
    <div class="clearfloat"></div>
    
</header>
<div class="logo1">
        <a href="http://www.fmph.uniba.sk/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo1.png" alt="FMFI"></a> 
    </div>
    <div class="logo2">
        <a href="http://www.fmph.uniba.sk/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo2.png" alt="FMFI"></a> 
    </div>
    <div class="logo"><a href=""><?php echo CHtml::encode(Yii::app()->name); ?></a>
    </div>
   
<div class="wrapper">
     <div id="sliderFrame">
        <div id="slider">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg" />
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.png"  />
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/3.jpg" />
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/5.png" />
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/9.png" />
        </div>
    </div>  
    <div class="contentBody">
    	<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif?>
    	<div class="post">
    		<?php echo $content; ?>
        </div>
        <div class="post">
        	<h2>Lorem Ipsum is simply</h2>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/4.jpg" alt="pic2">
            <p>
            	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
            </p>
            <p class="button"><a href="">Details...</a></p>
        </div>
    </div>
    <div class="sidebar">
    	<h2>Športy</h2>
   			<?php $this->widget('application.components.SportMenu'); ?>
    	<?php if(Yii::app()->user->checkAccess('createSport')): ?>
    		<?php echo CHtml::button('Pridať šport', array('submit' => array('sport/create'), 'class' => '')); ?>
    	<?php endif; ?>
     
    </div>

    <div class="clearfloat"></div>   
</div>
<footer>
    <p class="copyright">
        Copyright &copy; <a href="#">DreamTeam</a> | Designed by <a href="" title="free responsive templates">Matfyzaci</a>
    </p>
</footer>
</body>
</html>
