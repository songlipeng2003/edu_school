<?php

class SettingForm extends CFormModel
{
    public $siteName;
    public $description;
    public $intro;
    public $env;
    public $statisticsCode;
    public $footer;
    public $password;
    public $contact;

    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            array('siteName, password, description', 'required'),
            array('password', 'length', 'max'=>32),
            array('description', 'length', 'max'=>255),
            array('intro, contact', 'length', 'max'=>60000),
            array('env', 'length', 'max'=>60000),
            array('statisticsCode', 'length', 'max'=>1000),
            array('footer', 'length', 'max'=>2000),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels()
    {
        return array(
            'password'=>'后台密码',
            'siteName'=>'网站名称',
            'description'=>'网站简介',
            'env'=>'学校环境',
            'intro'=>'学校介绍',
            'statisticsCode'=>'统计代码',
            'footer'=>'底部代码',
            'contact'=>'联系方式'
        );
    }

    public function save()
    {
        Yii::app()->settings->set('system', $this->attributes);

        return true;
    }
}