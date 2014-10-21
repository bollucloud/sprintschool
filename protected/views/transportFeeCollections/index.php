<?php
/* @var $this TransportFeeCollectionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transport Fee Collections',
);

$this->menu=array(
	array('label'=>'Create TransportFeeCollections', 'url'=>array('create')),
	array('label'=>'Manage TransportFeeCollections', 'url'=>array('admin')),
);
?>

<h1>Transport Fee Collections</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
