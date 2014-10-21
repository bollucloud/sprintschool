<?php
/* @var $this TransportFeeCollectionsController */
/* @var $model TransportFeeCollections */

$this->breadcrumbs=array(
	'Transport Fee Collections'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TransportFeeCollections', 'url'=>array('index')),
	array('label'=>'Create TransportFeeCollections', 'url'=>array('create')),
	array('label'=>'View TransportFeeCollections', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TransportFeeCollections', 'url'=>array('admin')),
);
?>

<h1>Update TransportFeeCollections <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>