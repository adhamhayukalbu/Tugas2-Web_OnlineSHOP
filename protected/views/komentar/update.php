<?php
/* @var $this KomentarController */
/* @var $model Komentar */

$this->breadcrumbs=array(
	'Komentars'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Komentar', 'url'=>array('index')),
	array('label'=>'Create Komentar', 'url'=>array('create')),
	array('label'=>'View Komentar', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Komentar', 'url'=>array('admin')),
);
?>

<h1>Update Komentar <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>