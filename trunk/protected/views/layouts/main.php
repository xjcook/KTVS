<?php /* @var $this Controller */ ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="pohyb, WOW Slider, Website Slide Show, Web Image Slider" />
  	<meta name="description" content="pohyb created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />

  	<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One|Stoke|Quattrocento+Sans' rel='stylesheet' type='text/css'>
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
				array('label'=>'Novinky', 'url'=>array('/site/page', 'view'=>'nothing')),
				array('label'=>'Rozvrh', 'url'=>array('/site/page', 'view'=>'nothing')),
				array('label'=>'Galéria', 'url'=>array('/site/page', 'view'=>'nothing')),
				array('label'=>'Ligy', 'url'=>array('/site/page', 'view'=>'nothing')),
				array('label'=>'Akcie', 'url'=>array('/site/page', 'view'=>'nothing')),
				array('label'=>'Kurzy', 'url'=>array('/site/page', 'view'=>'nothing')),
			),
			'activeCssClass'=>'active',
		)); ?>
    <div class="clearfloat"></div>
    <a href="http://www.fmph.uniba.sk/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo1.png" alt="FMFI"></a> 
    <a href="http://www.fmph.uniba.sk/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo2.png" alt="FMFI"></a> 
</header>

<div class="wrapper">
	<div class="logo"><h1><a href=""><?php echo CHtml::encode(Yii::app()->name); ?><br/></a></h1>
    </div>
    <div class="clearfloat"></div>  
    <div id="sliderFrame">
        <div id="slider">
            <img src="images/image-slider-1.jpg" />
            <img src="images/image-slider-2.jpg"  />
            <img src="images/image-slider-3.jpg" />
            <img src="images/image-slider-4.jpg" />
            <img src="images/image-slider-5.jpg" />
        </div>
    </div>  
    <div class="contentBody">
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
        <ul>
            <li><a href="">aerobik </a></li>
            <li><a href="">Basketbal</a></li>
            <li><a href="">vod. turistika</a></li>
            <li><a href="">stolný tenis </a></li>
            <li><a href="">bedminton </a></li>
            <li><a href="">crossfit </a></li>
            <li><a href="">Futbal</a></li>
            <li><a href="">Futsal</a></li>
            <li><a href="">Florbale </a></li>
            <li><a href="">Plávanie</a></li>
            <li><a href="">Trampolíny</a></li>
            <li><a href="">Tenis</a></li>
            <li><a href="">Volejbal</a></li>
        </ul>
    </div>
    <div class="clearfloat"></div>   
</div>
<footer>
	<div class="author">
    	<div class="authorBox">
        	<div class="authorPic"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/prihlas.png" alt="pic3"></div>
            <div class="authorDescription">
                <h2>Prihlásenie užívateľa</h2>
                <p>
                  <form method="POST" action=" http://YOUR_DOMAIN_HERE:81/login/login.php">
                  Email: <input type="text" name="username" size="20" />
                  <br /> <br />
                  Heslo: <input type="password" name="passwort" size="20" />
                  <br /> <br />
                  
                    <p>
                      <input class="prihlas" type="submit" value="Prihlás ma"/>
                    </p>
                 
                  </form>
                </p>
                <p class="button"><a href="">zabudli ste heslo?</a></p>
            </div>
            <div class="clearfloat"></div>
        </div>
    </div> 
    <p class="copyright">
        Copyright &copy; <a href="#">DreamTeam</a> | Designed by <a href="" title="free responsive templates">Matfyzaci</a>
    </p>
</footer>
</body>
</html>
