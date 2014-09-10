<?php
$this->pageTitle = $this->pageTitle . ' - 在线问答';
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" media="screen" />

<div style="margin-bottom:10px;" id="ordct606">
    <div style="padding-bottom:10px;border:solid 1px #D9E0E6;">
        <div class="b606">在线问答</div>
        <div style="padding-right:4px;padding-top:7px;padding-left:5px;">
            <div class="s6" style="line-height: 23px; padding: 10px;">
                <?php foreach ($qas as $qa) { ?>
                <ul>
                    <li class="QA1 link14A0">
                        <?php echo CHtml::link($qa->course->title, array('course/view', 'id'=>$qa->course->id), array('target'=>'_blank')) ?>
                    </li>
                    <li class="QA2">
                        <span style="font-size: 12px; color: red">
                            <?php echo substr($qa->created_at, 0, 10) ?>
                        </span>
                    </li>
                    <li class="QA3">问：<?php echo $qa->question ?></li>
                    <li class="QA4">答：<?php echo $qa->answer ?></li>
                </ul>
                <?php } ?>
            </div>
        </div>
        <div class="form">
            <?php
                foreach(Yii::app()->user->getFlashes() as $key => $message) {
                    echo '<div class="' . $key . '">' . $message . "</div>\n";
                }
            ?>

            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'contact-form',
                'enableClientValidation'=>true,
                'action'=>array('qa/create'),
                'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                ),
            )); ?>

                <?php echo $form->errorSummary($model); ?>

                <div class="row">
                    <?php echo $form->labelEx($model,'nickname'); ?>
                    <?php echo $form->textField($model,'nickname'); ?>
                    <?php echo $form->error($model,'nickname'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'email'); ?>
                    <?php echo $form->textField($model,'email'); ?>
                    <?php echo $form->error($model,'email'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'course_id'); ?>
                    <?php echo $form->dropDownList($model,'course_id',CHtml::listData(Course::model()->findAll(), 'id', 'title')); ?>
                    <?php echo $form->error($model,'course_id'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'question'); ?>
                    <?php echo $form->textArea($model,'question',array('rows'=>6, 'cols'=>50)); ?>
                    <?php echo $form->error($model,'question'); ?>
                </div>

                <div class="row buttons">
                    <?php echo CHtml::submitButton('提问'); ?>
                </div>

            <?php $this->endWidget(); ?>
        </div><!-- form -->
    </div>
</div>
   