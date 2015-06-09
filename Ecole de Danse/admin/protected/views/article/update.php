<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->id_article=>array('view','id'=>$model->id_article),
	'Update',
);

$this->menu=array(
	array('label'=>'List Article', 'url'=>array('index')),
	array('label'=>'Create Article', 'url'=>array('create')),
	array('label'=>'View Article', 'url'=>array('view', 'id'=>$model->id_article)),
	array('label'=>'Manage Article', 'url'=>array('admin')),
);
?>

<h1>Update Article <?php echo $model->id_article; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>