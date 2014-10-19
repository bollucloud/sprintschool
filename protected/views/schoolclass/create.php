<?php
/* @var $this SchoolclassController */
/* @var $model Schoolclass */

$this->breadcrumbs=array(
	'Schoolclasses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Schoolclass', 'url'=>array('index')),
	array('label'=>'Manage Schoolclass', 'url'=>array('admin')),
);
?>

<h1>Create Schoolclass</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>