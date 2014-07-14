<?php
/* @var $this BarangController */
/* @var $data Barang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kategori_id')); ?>:</b>
	<?php echo CHtml::encode($data->Kategori_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama')); ?>:</b>
	<?php echo CHtml::encode($data->Nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Size')); ?>:</b>
	<?php echo CHtml::encode($data->Size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Warna')); ?>:</b>
	<?php echo CHtml::encode($data->Warna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Harga')); ?>:</b>
	<?php echo CHtml::encode($data->Harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('User_id')); ?>:</b>
	<?php echo CHtml::encode($data->User_id); ?>
	<br />


</div>