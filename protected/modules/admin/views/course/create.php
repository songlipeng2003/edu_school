<?php
$this->breadcrumbs=array(
	'课程'=>array('index'),
	'创建',
);

$this->menu=array(
    array('label'=>'管理','url'=>array('index')),
);
?>

<h1>创建</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>