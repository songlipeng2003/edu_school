<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$nameColumn = $this->guessNameColumn($this->tableSchema->columns);
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn},
);\n";
?>

$this->menu=array(
    array('label'=>'管理','url'=>array('index')),
    array('label'=>'创建','url'=>array('create')),
    array('label'=>'更新','url'=>array('update','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
    array('label'=>'删除','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>),'confirm'=>'你确定要删除吗?')),
);
?>

<h1>查看</h1>

<?php echo "<?php"; ?> $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
<?php
foreach ($this->tableSchema->columns as $column) {
	echo "\t\t'" . $column->name . "',\n";
}
?>
),
)); ?>
