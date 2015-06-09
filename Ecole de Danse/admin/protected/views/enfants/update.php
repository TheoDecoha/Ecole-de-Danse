<?php
/* @var $this EnfantsController */
/* @var $model Enfants */

$this->breadcrumbs=array(
	'Enfants'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Enfants', 'url'=>array('index')),
	array('label'=>'Create Enfants', 'url'=>array('create')),
	array('label'=>'View Enfants', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Enfants', 'url'=>array('admin')),
);
?>

<h1>Update Enfants <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>