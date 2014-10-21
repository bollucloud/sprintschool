<?php
/* @var $this TransportFeeController */
/* @var $model TransportFee */

$this->breadcrumbs=array(
	'Transport Fees'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TransportFee', 'url'=>array('index')),
	array('label'=>'Manage TransportFee', 'url'=>array('admin')),
);
?>

<h1>Create TransportFee</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>