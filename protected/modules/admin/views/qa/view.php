<?php
$this->breadcrumbs=array(
	'问答'=>array('index'),
	$model->id,
);

$this->menu=array(
    array('label'=>'管理','url'=>array('index')),
    array('label'=>'创建','url'=>array('create')),
    array('label'=>'更新','url'=>array('update','id'=>$model->id)),
    array('label'=>'删除','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'你确定要删除吗?')),
);
?>

<h1>查看</h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nickname',
		'email',
		'phone',
		'course_id',
		'question',
		'answer',
		'created_at',
		'answered_at',
		'updated_at',
),
)); ?>
