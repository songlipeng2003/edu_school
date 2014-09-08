<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="language" content="en"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php echo CHtml::encode($this->pageTitle.' - 后台登录'); ?></title>

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container" style="width:800px;">
        <h1>登录</h1>

        <?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
            'id'=>'login-form',
            'enableAjaxValidation'=>false,
            'type' => 'horizontal',
        )); ?>

        <p class="help-block">带 <span class="required">*</span> 必填.</p>

        <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldGroup($model,'username',array(
                'widgetOptions'=>array(
                    'htmlOptions'=>array(
                        'maxlength'=>255
                    )
                ),
                'wrapperHtmlOptions'=>array(
                    'class'=>'col-sm-5',
                )
            )); ?>

            <?php echo $form->passwordFieldGroup($model,'password',array(
                'widgetOptions'=>array(
                    'htmlOptions'=>array(
                        'maxlength'=>255
                    )
                ),
                'wrapperHtmlOptions'=>array(
                    'class'=>'col-sm-5',
                )
            )); ?>

            <?php echo $form->checkboxGroup($model,'rememberMe'); ?>

        <div class="form-actions">
            <?php $this->widget('booster.widgets.TbButton', array(
                    'buttonType'=>'submit',
                    'context'=>'primary',
                    'label'=>'登录',
                )); ?>
        </div>

        <?php $this->endWidget(); ?>
    </div>

    
</body>
</html>