<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'qa-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">带 <span class="required">*</span> 必填.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'nickname',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model,'email',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model,'phone',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php echo $form->dropDownListGroup($model,'course_id',array('widgetOptions'=>array(
		'data'=>CHtml::listData(Course::model()->findAll(), 'id', 'title'),
		'htmlOptions'=>array('class'=>'span5')
	))); ?>

	<?php echo $form->textAreaGroup($model,'question',array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php echo $form->textAreaGroup($model,'answer', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php echo $form->datePickerGroup($model,'created_at',
		array('widgetOptions'=>array(
			'options' => array(
				'language' => 'zh-CN',
				'format' => 'yyyy-mm-dd',
				'viewformat' => 'yyyy-mm-dd',
			),
			'htmlOptions'=>array('class'=>'span5')
		))
	); ?>

	<?php echo $form->datePickerGroup($model,'answered_at',
		array('widgetOptions'=>array(
			'options' => array(
				'language' => 'zh-CN',
				'format' => 'yyyy-mm-dd',
				'viewformat' => 'yyyy-mm-dd',
			),
			'htmlOptions'=>array('class'=>'span5')
		))
	); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? '创建' : '更新',
		)); ?>
</div>

<?php $this->endWidget(); ?>
