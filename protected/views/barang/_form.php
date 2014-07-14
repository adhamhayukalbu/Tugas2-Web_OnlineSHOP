<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Kategori_id'); ?>
		<?php echo $form->textField($model,'Kategori_id'); ?>
		<?php echo $form->error($model,'Kategori_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama'); ?>
		<?php echo $form->textField($model,'Nama',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Size'); ?>
		<?php echo $form->textField($model,'Size'); ?>
		<?php echo $form->error($model,'Size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Warna'); ?>
		<?php echo $form->textField($model,'Warna',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Warna'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Harga'); ?>
		<?php echo $form->textField($model,'Harga'); ?>
		<?php echo $form->error($model,'Harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'User_id'); ?>
		<?php echo $form->textField($model,'User_id'); ?>
		<?php echo $form->error($model,'User_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->