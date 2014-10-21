<?php
/* @var $this VehiclesController */
/* @var $model Vehicles */

$this->breadcrumbs=array(
	'Vehicles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Vehicles', 'url'=>array('index')),
	array('label'=>'Create Vehicles', 'url'=>array('create')),
	array('label'=>'Update Vehicles', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Vehicles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vehicles', 'url'=>array('admin')),
);
?>

<h1>View Vehicles #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'registration_number',
		'route_id',
		'occupancy',
		'status',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
