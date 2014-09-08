<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
    'id'=>'school-form',
    'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">带 <span class="required">*</span> 必填.</p>

<?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldGroup($model,'siteName',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

    <?php echo $form->textFieldGroup($model,'password',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

    <?php echo $form->ckEditorGroup($model,'contact',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

    <?php echo $form->textAreaGroup($model,'description',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

    <?php echo $form->ckEditorGroup($model,'intro',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

    <?php echo $form->ckEditorGroup($model,'env',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

    <?php echo $form->textAreaGroup($model,'statisticsCode',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>1000)))); ?>

    <?php echo $form->textAreaGroup($model,'footer',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>1000)))); ?>

<div class="form-actions">
    <?php $this->widget('booster.widgets.TbButton', array(
            'buttonType'=>'submit',
            'context'=>'primary',
            'label'=>'保存',
        )); ?>
</div>

<?php $this->endWidget(); ?>
