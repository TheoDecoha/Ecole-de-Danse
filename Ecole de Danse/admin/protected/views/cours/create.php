<?php
/* @var $this CoursController */
/* @var $model Cours */

$this->breadcrumbs=array(
	'Cours'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cours', 'url'=>array('index')),
	array('label'=>'Manage Cours', 'url'=>array('admin')),
);
?>

<h1>Create Cours</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>