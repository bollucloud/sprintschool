<?php
/* @var $this TransportFeeController */
/* @var $model TransportFee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transport-fee-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'payer_id'); ?>
		<?php echo $form->textField($model,'payer_id'); ?>
		<?php echo $form->error($model,'payer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transport_fare'); ?>
		<?php echo $form->textField($model,'transport_fare'); ?>
		<?php echo $form->error($model,'transport_fare'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'collection_id'); ?>
		<?php echo $form->textField($model,'collection_id'); ?>
		<?php echo $form->error($model,'collection_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'partial'); ?>
		<?php echo $form->textField($model,'partial'); ?>
		<?php echo $form->error($model,'partial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_method'); ?>
		<?php echo $form->textField($model,'payment_method',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'payment_method'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id'); ?>
		<?php echo $form->error($model,'update_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->