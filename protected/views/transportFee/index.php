<?php
/* @var $this TransportFeeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transport Fees',
);

$this->menu=array(
	array('label'=>'Create TransportFee', 'url'=>array('create')),
	array('label'=>'Manage TransportFee', 'url'=>array('admin')),
);
?>

<h1>Transport Fees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
