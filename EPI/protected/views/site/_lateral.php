<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



	
	
		<?php  
			$imageUrl = "".Yii::app()->request->baseUrl."/images/convocatorias-inscribete.png";
			$image = '<img src="'.$imageUrl.'" style="margin-bottom: 35px;" >';
			echo CHtml::link($image, array('/alumno/create'));
		?>
		<div class="lateralRedes" ><div class="fb-like-box" data-href="https://www.facebook.com/programaepi" data-width="306" data-height="266" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div></div>
			


		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/convocatorias_twitter.png" style="margin-bottom: 10px;">
	




