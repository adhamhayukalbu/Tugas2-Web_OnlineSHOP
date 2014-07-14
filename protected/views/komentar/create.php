<?php
/* @var $this KomentarController */
/* @var $model Komentar */

$this->breadcrumbs=array(
	'Komentars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Komentar', 'url'=>array('index')),
	array('label'=>'Manage Komentar', 'url'=>array('admin')),
);
?>

<h1>Create Komentar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>