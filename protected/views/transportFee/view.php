<?php
/* @var $this TransportFeeController */
/* @var $model TransportFee */

$this->breadcrumbs=array(
	'Transport Fees'=>array('index'),
	$model->transaction_id,
);

$this->menu=array(
	array('label'=>'List TransportFee', 'url'=>array('index')),
	array('label'=>'Create TransportFee', 'url'=>array('create')),
	array('label'=>'Update TransportFee', 'url'=>array('update', 'id'=>$model->transaction_id)),
	array('label'=>'Delete TransportFee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->transaction_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TransportFee', 'url'=>array('admin')),
);
?>

<h1>View TransportFee #<?php echo $model->transaction_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'transaction_id',
		'payer_id',
		'transport_fare',
		'collection_id',
		'partial',
		'payment_method',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
