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
	\$model->{$nameColumn}=>array('view','id'=>\$model->{$this->tableSchema->primaryKey}),
	'更新',
);\n";
?>

$this->menu=array(
	array('label'=>'管理','url'=>array('index')),
	array('label'=>'创建','url'=>array('create')),
	array('label'=>'查看','url'=>array('view','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
);
?>

<h1>更新</h1>

<?php echo "<?php echo \$this->renderPartial('_form',array('model'=>\$model)); ?>"; ?>