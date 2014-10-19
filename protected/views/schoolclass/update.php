<?php
/* @var $this SchoolclassController */
/* @var $model Schoolclass */

$this->breadcrumbs=array(
	'Schoolclasses'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Schoolclass', 'url'=>array('index')),
	array('label'=>'Create Schoolclass', 'url'=>array('create')),
	array('label'=>'View Schoolclass', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Schoolclass', 'url'=>array('admin')),
);
?>

<h1>Update Schoolclass <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>