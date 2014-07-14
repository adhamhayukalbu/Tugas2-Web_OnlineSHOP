<?php
$items = array();
if(Yii::app()->user->isAdmin())
{
		$items[]=array('label'=>'Manage<span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
							array('label'=>'User', 'url'=>array('/user/index')),
							array('label'=>'Komentar', 'url'=>array('/komentar/index')),
							array('label'=>'Barang', 'url'=>array('/barang/index')),
							array('label'=>'Level', 'url'=>array('/level/index')),
                        ),
						/*'visible'=>Yii::app()->user->isAdmin()*/
					);
}
elseif(Yii::app()->user->isMember())
{	
	$items[]=array('label'=>'My Profile','url'=>array('/user/profile')); 	
} 
$items[]=array('label'=>'SIGN IN', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest); 
$items[]=array('label'=>'LOGOUT('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest);
$items[]=array('label'=>'REGISTER', 'url'=>array('/user/register'),'visible'=>Yii::app()->user->isGuest);  
?>
<div class="navbar">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"></a>  
          <div class="jqueryslidemenu">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>$items
                    )
                ); ?>
				<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Apa yang ingin kamu cari ?">
					<button type="button" class="btn btn-success navbar-btn">GO</button>
				</div>
				</form>
    	</div>
    </div>
	</div>
</div>
