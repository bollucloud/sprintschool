<?php
/* @var $this AssignmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Assignments',
);

$this->menu=array(
	array('label'=>'Manage Assignment', 'url'=>array('admin')),
);
?>

<h1>Assignments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
