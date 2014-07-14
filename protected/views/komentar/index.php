<?php
/* @var $this KomentarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Komentars',
);

$this->menu=array(
	array('label'=>'Create Komentar', 'url'=>array('create')),
	array('label'=>'Manage Komentar', 'url'=>array('admin')),
);
?>

<h1>Komentars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
