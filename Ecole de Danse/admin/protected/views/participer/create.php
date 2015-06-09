<?php
/* @var $this ParticiperController */
/* @var $model Participer */

$this->breadcrumbs=array(
	'Participers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Participer', 'url'=>array('index')),
	array('label'=>'Manage Participer', 'url'=>array('admin')),
);
?>

<h1>Create Participer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>