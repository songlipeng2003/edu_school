<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="language" content="en"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <?php
    $this->widget(
        'booster.widgets.TbNavbar',
        array(
            'brand' => CHtml::encode(Yii::app()->name),
            'fixed' => false,
            'fluid' => false,
            'items' => array(
                array(
                    'class' => 'booster.widgets.TbMenu',
                    'type' => 'navbar',
                    'items' => array(
                        array('label' => 'Home', 'url' => array('default/'), 'active' => Yii::app()->controller->id=='default'),
                    )
                )
            )
        )
    ); 
    ?>

    <div class="container">
        <?php
            foreach(Yii::app()->user->getFlashes() as $key => $message) {
                $key = $key=='error'?'danger':$key;
                echo '<div class="alert alert-' . $key . '">' . $message . "</div>\n";
            }
        ?>
    </div>

    <?php if(isset($this->breadcrumbs)):?>
    <div class="container">
        <div class="row">
            <?php $this->widget('booster.widgets.TbBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
            )); ?><!-- breadcrumbs -->
        </div>
    </div>
    <?php endif?>

    <?php echo $content; ?>

    <footer class="footer">
        <div class="container">
            <p class="powered">
                Copyright &copy; 2014 by <?php echo CHtml::encode(Yii::app()->name); ?> </p>
        </div>
    </footer>
</body>
</html>
