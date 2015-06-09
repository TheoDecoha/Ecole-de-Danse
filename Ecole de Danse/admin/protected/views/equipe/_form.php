<?php
/* @var $this EquipeController */
/* @var $model Equipe */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'equipe-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom'); ?>
		<?php echo $form->textField($model,'nom',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'nom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prenom'); ?>
		<?php echo $form->textField($model,'prenom',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'prenom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statut'); ?>
		<?php echo $form->textField($model,'statut',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'statut'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->