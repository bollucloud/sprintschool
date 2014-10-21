<?php
/* @var $this TransportFeeController */
/* @var $model TransportFee */

$this->breadcrumbs=array(
	'Transport Fees'=>array('index'),
	$model->transaction_id=>array('view','id'=>$model->transaction_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TransportFee', 'url'=>array('index')),
	array('label'=>'Create TransportFee', 'url'=>array('create')),
	array('label'=>'View TransportFee', 'url'=>array('view', 'id'=>$model->transaction_id)),
	array('label'=>'Manage TransportFee', 'url'=>array('admin')),
);
?>

<h1>Update TransportFee <?php echo $model->transaction_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>