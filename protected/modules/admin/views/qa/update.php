<?php
$this->breadcrumbs=array(
	'问答'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'管理','url'=>array('index')),
	array('label'=>'创建','url'=>array('create')),
	array('label'=>'查看','url'=>array('view','id'=>$model->id)),
);
?>

<h1>更新</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>