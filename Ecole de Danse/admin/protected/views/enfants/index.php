<?php
/* @var $this EnfantsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enfants',
);

$this->menu=array(
	array('label'=>'Create Enfants', 'url'=>array('create')),
	array('label'=>'Manage Enfants', 'url'=>array('admin')),
);
?>

<h1>Enfants</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
