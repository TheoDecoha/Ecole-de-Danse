<?php
/* @var $this ParticiperController */
/* @var $model Participer */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cours_id'); ?>
		<?php echo $form->textField($model,'cours_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enfant_id'); ?>
		<?php echo $form->textField($model,'enfant_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->