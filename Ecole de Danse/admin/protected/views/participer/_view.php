<?php
/* @var $this ParticiperController */
/* @var $data Participer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cours_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cours_id), array('view', 'id'=>$data->cours_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfant_id')); ?>:</b>
	<?php echo CHtml::encode($data->enfant_id); ?>
	<br />


</div>