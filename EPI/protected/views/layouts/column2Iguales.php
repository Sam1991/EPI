<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="contenedor">
<div class="inscripcion" style="margin-left: 65px;">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="inscripcion">
	<?php $this->renderPartial('_columna2'); ?>
</div>
</div>
<?php $this->endContent(); ?>