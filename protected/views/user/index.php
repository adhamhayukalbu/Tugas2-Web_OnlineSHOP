<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Kelola User', 'url'=>array('admin')),
	array('label'=>'Relasi User', 'url'=>array('relasi')),
);
?>
<h3 class="header" style="color:#51a351;font-size:20px;font-family:'Candara';">List User<span class="header-line"></span></h3> 
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
