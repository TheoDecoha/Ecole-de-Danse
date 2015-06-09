<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


<p>Sélectionnez la table à modifier</p>
<ul>
	<li><a href='index.php?r=article'>Articles</a></li>
	<li><a href='index.php?r=albums'>Albums</a></li>
	<li><a href='index.php?r=cours'>Cours</a></li>
	<li><a href='index.php?r=enfants'>Enfants</a></li>
	<li><a href='index.php?r=responsable'>Responsables</a></li>
	<li><a href='index.php?r=participer'>Participer</a></li>
	<li><a href='index.php?r=equipe'>Equipe</a></li>
</ul>