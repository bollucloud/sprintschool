<?php
/* @var $this TransportFeeCollectionsController */
/* @var $model TransportFeeCollections */

$this->breadcrumbs=array(
	'Transport Fee Collections'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TransportFeeCollections', 'url'=>array('index')),
	array('label'=>'Create TransportFeeCollections', 'url'=>array('create')),
	array('label'=>'Update TransportFeeCollections', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TransportFeeCollections', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TransportFeeCollections', 'url'=>array('admin')),
);
?>

<h1>View TransportFeeCollections #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'batch_id',
		'start_date',
		'end_date',
		'due_date',
		'valid',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
