<?php
/* @var $this ParticiperController */
/* @var $model Participer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'participer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cours_id'); ?>
		<?php echo $form->textField($model,'cours_id'); ?>
		<?php echo $form->error($model,'cours_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enfant_id'); ?>
		<?php echo $form->textField($model,'enfant_id'); ?>
		<?php echo $form->error($model,'enfant_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->