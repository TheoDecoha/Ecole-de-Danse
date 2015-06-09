<?php
/* @var $this ParticiperController */
/* @var $model Participer */

$this->breadcrumbs=array(
	'Participers'=>array('index'),
	$model->cours_id,
);

$this->menu=array(
	array('label'=>'List Participer', 'url'=>array('index')),
	array('label'=>'Create Participer', 'url'=>array('create')),
	array('label'=>'Update Participer', 'url'=>array('update', 'id'=>$model->cours_id)),
	array('label'=>'Delete Participer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cours_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Participer', 'url'=>array('admin')),
);
?>

<h1>View Participer #<?php echo $model->cours_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cours_id',
		'enfant_id',
	),
)); ?>
