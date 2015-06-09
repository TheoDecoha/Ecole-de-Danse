<?php
/* @var $this ArticleController */
/* @var $data Article */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_article')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_article), array('view', 'id'=>$data->id_article)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titre')); ?>:</b>
	<?php echo CHtml::encode($data->titre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article')); ?>:</b>
	<?php echo CHtml::encode($data->article); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_article')); ?>:</b>
	<?php echo CHtml::encode($data->date_article); ?>
	<br />


</div>