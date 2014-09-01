<?php
$this->breadcrumbs=array(
    '新闻'=>array('index'),
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
        $.fn.yiiGridView.update('news-grid', {
            data: $(this).serialize()
        });
        return false;
    });
");
?>

<h1>新闻管理</h1>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView',array(
    'id'=>'news-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id',
		'title',
		'post_time',
        array(
            'class'=>'booster.widgets.TbButtonColumn',
        ),
    ),
)); ?>
