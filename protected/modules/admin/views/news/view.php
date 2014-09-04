<?php
$this->breadcrumbs=array(
	'新闻'=>array('index'),
	$model->title,
);

$this->menu=array(
    array('label'=>'管理','url'=>array('index')),
    array('label'=>'创建','url'=>array('create')),
    array('label'=>'更新','url'=>array('update','id'=>$model->id)),
    array('label'=>'删除','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1><?php echo $model->title; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'title',
        'description',
		array(
            'label'=>'内容',
            'type'=>'raw',
            'name'=>'content'
        ),
		'created_at',
		'updated_at',
		'post_time',
),
)); ?>
