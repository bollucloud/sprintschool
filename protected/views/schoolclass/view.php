<?php
/* @var $this SchoolclassController */
/* @var $model Schoolclass */

$this->breadcrumbs=array(
	'Schoolclasses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Schoolclass', 'url'=>array('index')),
	array('label'=>'Create Schoolclass', 'url'=>array('create')),
	array('label'=>'Update Schoolclass', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Schoolclass', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Schoolclass', 'url'=>array('admin')),
        array('label'=>'Create Assignment', 'url'=>array('assignment/create', 'cid'=>$model->id)),
);
?>

<h1>View Schoolclass #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'Description',
		'room_no',
		array(
                    'name'=>'teacher_id',
                    'value'=>$model->teacher->first_name,
                ),
		array(
                    'name'=>'topper_id',
                    'value'=>$model->topper->first_name,
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

<br><br>
<h1>Assignments given to this class</h1>

<?php $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $assignment,
        'itemView' => '/assignment/_view',
)); ?>