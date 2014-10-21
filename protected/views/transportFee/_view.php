<?php
/* @var $this TransportFeeController */
/* @var $data TransportFee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaction_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->transaction_id), array('view', 'id'=>$data->transaction_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payer_id')); ?>:</b>
	<?php echo CHtml::encode($data->payer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transport_fare')); ?>:</b>
	<?php echo CHtml::encode($data->transport_fare); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('collection_id')); ?>:</b>
	<?php echo CHtml::encode($data->collection_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partial')); ?>:</b>
	<?php echo CHtml::encode($data->partial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_method')); ?>:</b>
	<?php echo CHtml::encode($data->payment_method); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	*/ ?>

</div>