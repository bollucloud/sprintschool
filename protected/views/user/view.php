<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->first_name,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'last_name',
		'age',
                'password',
		'email',
		array(
                    'name'=>'type_id',
                    'value'=> $model->getTypeStatus($model->type_id),
                ),
		array(
                    'name'=>'class_id',
                    'type'=>'raw',
                    'value'=> CHtml::link(CHtml::encode($model->class->name), array('Schoolclass/view', 'id'=>$model->class->id)),
                ),
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
