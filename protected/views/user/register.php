    <ul class="nav nav-tabs" >
        <li><a href="/Orderyuk/index.php?r=site/index">Home</a></li>
        <li class="active"><a href="/Orderyuk/index.php?r=user/register" data-toggle="tab">Register</a></li>
	</ul><br/>
<?php $this->renderPartial('_regform', array('model'=>$model)); ?>