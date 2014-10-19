<?php
/* @var $this AssignmentController */
/* @var $model Assignment */

$this->breadcrumbs=array(
	'Assignments'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Assignment', 'url'=>array('index')),
	array('label'=>'Update Assignment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Assignment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Assignment', 'url'=>array('admin')),
);
?>

<h1>View Assignment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'Description',
		array(
                    'name'=>'class_id',
                    'value'=>$model->class->name,
                ),
		array(
                    'name'=>'teacher_id',
                    'value'=>$model->teacher->first_name,
                ),
		'last_date',
		'create_time',
		array(
                    'name'=>'create_user_id',
                    'value'=>$this->getUserName($model->create_user_id),
                ),
		'update_time',
		array(
                    'name'=>'update_user_id',
                    'value'=>$this->getUserName($model->update_user_id),
                ),
	),
)); ?>
