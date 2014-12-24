<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="contenedor">
<div id="principal">
	<div style="margin-top: 59px;">
		<?php echo $content; ?>
	</div>
</div>
<div id="segundaria" style="margin-top: 138px;">
	<?php $this->renderPartial('/site/_lateral'); ?>
</div>
</div>
<?php $this->endContent(); ?>