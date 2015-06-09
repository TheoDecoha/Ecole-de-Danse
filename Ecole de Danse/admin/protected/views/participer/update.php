<?php
/* @var $this ParticiperController */
/* @var $model Participer */

$this->breadcrumbs=array(
	'Participers'=>array('index'),
	$model->cours_id=>array('view','id'=>$model->cours_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Participer', 'url'=>array('index')),
	array('label'=>'Create Participer', 'url'=>array('create')),
	array('label'=>'View Participer', 'url'=>array('view', 'id'=>$model->cours_id)),
	array('label'=>'Manage Participer', 'url'=>array('admin')),
);
?>

<h1>Update Participer <?php echo $model->cours_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>