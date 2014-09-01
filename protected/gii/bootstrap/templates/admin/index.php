<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
    '$label'=>array('index'),
    '管理',
);\n";
?>

$this->menu=array(
    array('label'=>'创建','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
        $('.search-form').toggle();
        return false;
    });
    $('.search-form form').submit(function(){
        $.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
            data: $(this).serialize()
        });
        return false;
    });
");
?>

<h1>管理</h1>

<?php echo "<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button btn')); ?>"; ?>

<div class="search-form" style="display:none">
    <?php echo "<?php \$this->renderPartial('_search',array(
        'model'=>\$model,
    )); ?>\n"; ?>
</div><!-- search-form -->

<?php echo "<?php"; ?> $this->widget('booster.widgets.TbGridView',array(
    'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        <?php
        $count = 0;
        foreach ($this->tableSchema->columns as $column) {
            if (++$count == 5) {
                echo "\t\t/*\n";
            }
            echo "\t\t'" . $column->name . "',\n";
        }
        if ($count >= 5) {
            echo "\t\t*/\n";
        }
        ?>
        array(
            'class'=>'booster.widgets.TbButtonColumn',
        ),
    ),
)); ?>
