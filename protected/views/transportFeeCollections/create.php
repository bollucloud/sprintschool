<?php
/* @var $this TransportFeeCollectionsController */
/* @var $model TransportFeeCollections */

$this->breadcrumbs=array(
	'Transport Fee Collections'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TransportFeeCollections', 'url'=>array('index')),
	array('label'=>'Manage TransportFeeCollections', 'url'=>array('admin')),
);
?>

<h1>Create TransportFeeCollections</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>