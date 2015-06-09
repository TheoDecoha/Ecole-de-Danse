<?php
/* @var $this ParticiperController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Participers',
);

$this->menu=array(
	array('label'=>'Create Participer', 'url'=>array('create')),
	array('label'=>'Manage Participer', 'url'=>array('admin')),
);
?>

<h1>Participers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
