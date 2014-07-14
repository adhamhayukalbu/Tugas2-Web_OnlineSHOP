<?php
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20,'placeholder'=>'Username')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->textField($model,'FullName',array('size'=>30,'maxlength'=>30,'placeholder'=>'Full Name')); ?>
		<?php echo $form->error($model,'FullName'); ?>
	</div>

	<div class="row">
		<?php echo $form->passwordField($model,'password',array('size'=>30,'maxlength'=>30,'placeholder'=>'Password')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'Email',array('size'=>30,'maxlength'=>30,'placeholder'=>'Email')); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avatar'); ?>
		<?php echo $form->fileField($model,'avatar'); ?>
		<?php echo $form->error($model,'avatar'); ?>
	</div>

	<div class="row">
		<hr/>
		<?php echo $form->label($model,'Level_id'); ?>
		<?php $level = CHtml::listData(Level::model()->findAll(),'2','Level');?>
		<?php echo $form->dropDownList($model,'Level_id',$level,array('style'=>'width:200px;')); ?>
		<?php echo $form->error($model,'Level_id'); ?>
	</div><br/>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Daftar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div><!-- form -->