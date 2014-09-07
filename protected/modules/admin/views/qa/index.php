<?php
$this->breadcrumbs=array(
    '问答'=>array('index'),
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
        $.fn.yiiGridView.update('qa-grid', {
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
    'id'=>'qa-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        array(
            'name'=>'id',
            'headerHtmlOptions'=>array(
                'width'=>50,
            )
        ),
        array(
            'name'=>'course_id',
            'value'=>'$data->course->title',
            'headerHtmlOptions'=>array(
                'width'=>200,
            )
        ),
		'nickname',
        'created_at',
        'answered_at',
		/*
		'course_id',
		'question',
		'answer',
		'updated_at',
		*/
        array(
            'class'=>'booster.widgets.TbButtonColumn',
        ),
    ),
)); ?>
