<?php
/* @var $this EnfantsController */
/* @var $model Enfants */

$this->breadcrumbs=array(
	'Enfants'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Enfants', 'url'=>array('index')),
	array('label'=>'Manage Enfants', 'url'=>array('admin')),
);
?>

<h1>Create Enfants</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>