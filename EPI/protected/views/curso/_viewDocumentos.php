<?php
/* @var $this DocumentosController */
/* @var $data Documentos */
?>
<tr style="height:40px;">
<!-- 
	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->doc_id), array('view', 'id'=>$data->doc_id)); ?>
	<br />
 -->
<td style="border: solid #F0F0F0 1px;width:100px;text-align:center;">
	<b><?php echo CHtml::encode($data->doc_fecha); ?></b>
</td>

<td style="border: solid #F0F0F0 1px;padding-left:10px;border-right:none;">
	<?php echo CHtml::encode($data->doc_nombre); ?>
</td>



<td style="border: solid #F0F0F0 1px;border-left:none;">
	
	<?php echo CHtml::link('Link Text',array($data->doc_link),array('target'=>'_blank')); ?>
	
</td>




	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('doc_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->doc_tipo); ?>
	<br /> -->


</tr>