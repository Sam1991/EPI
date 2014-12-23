



	
	
		<?php  
			$imageUrl = "".Yii::app()->request->baseUrl."/images/convocatorias-inscribete.png";
			$image = '<img src="'.$imageUrl.'" style="margin-bottom: 35px;" >';
			echo CHtml::link($image, array('/alumno/create'));
		?>
		
		<!-- facebook -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="lateralRedes" ><div class="fb-like-box" data-href="https://www.facebook.com/programaepi" data-width="306" data-height="266" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div></div>
		<!-- fin_facebook -->
		
		<!-- twitter -->
		<div class="lateralRedes" ><a href="https://twitter.com/programaepi" class="twitter-follow-button" data-show-count="false" data-lang="es" data-size="large" data-dnt="true">Seguir a @programaepi</a></div>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				<!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/convocatorias_twitter.png" style="margin-bottom: 10px;"> -->
		<!-- fin_twitter -->
	




