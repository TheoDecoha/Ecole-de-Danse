<?php
/* @var $this EnfantsController */
/* @var $model Enfants */

$this->breadcrumbs=array(
	'Enfants'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Enfants', 'url'=>array('index')),
	array('label'=>'Create Enfants', 'url'=>array('create')),
	array('label'=>'Update Enfants', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Enfants', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Enfants', 'url'=>array('admin')),
);
?>

<h1>View Enfants #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nom',
		'prenom',
		'parent_id',
	),
)); ?>
