<?php
/* @var $this AlbumsController */
/* @var $data Albums */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chemin')); ?>:</b>
	<?php echo CHtml::encode($data->chemin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbail')); ?>:</b>
	<?php echo CHtml::encode($data->thumbail); ?>
	<br />


</div>