<?php
$this->breadcrumbs=array(
    '课程'=>array('index'),
    '管理',
);

$this->menu=array(
    array('label'=>'创建','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
        $('.search-form').toggle();
        return false;
    });
    $('.search-form form').submit(function(){
        $.fn.yiiGridView.update('course-grid', {
            data: $(this).serialize()
        });
        return false;
    });
");
?>

<h1>管理</h1>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView',array(
    'id'=>'course-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        		'id',
		'title',
		'description',
		'class_number',
		/*
		'created_at',
		'updated_at',
		*/
        array(
            'class'=>'booster.widgets.TbButtonColumn',
        ),
    ),
)); ?>
