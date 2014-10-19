<?php
/* @var $this SchoolclassController */
/* @var $model Schoolclass */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'schoolclass-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textArea($model,'Description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'room_no'); ?>
		<?php echo $form->textField($model,'room_no'); ?>
		<?php echo $form->error($model,'room_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'teacher_id'); ?>
		<?php echo $form->dropDownList($model, 'teacher_id', User::model()->UserOptions); ?>
		<?php echo $form->error($model,'teacher_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'topper_id'); ?>
		<?php echo $form->dropDownList($model, 'topper_id', User::model()->UserOptions); ?>
		<?php echo $form->error($model,'topper_id'); ?>
	</div>
        
        <?php // Bollu - Auditing details were removed from the form. ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->