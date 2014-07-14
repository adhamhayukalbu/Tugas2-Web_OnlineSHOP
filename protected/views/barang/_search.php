<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kategori_id'); ?>
		<?php echo $form->textField($model,'Kategori_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nama'); ?>
		<?php echo $form->textField($model,'Nama',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Size'); ?>
		<?php echo $form->textField($model,'Size'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Warna'); ?>
		<?php echo $form->textField($model,'Warna',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Harga'); ?>
		<?php echo $form->textField($model,'Harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'User_id'); ?>
		<?php echo $form->textField($model,'User_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->