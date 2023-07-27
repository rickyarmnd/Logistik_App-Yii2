<?php

use yii\bootstrap5\Html;
//use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;
use kartik\datecontrol\DateControl;
use kartik\date\DatePicker;
use kartik\depdrop\DepDrop;
use kartik\select2\Select2;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model common\models\Barang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_barang')->textInput() ?>

    <?= $form->field($model, 'nama_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_produk')->widget(DateControl::classname(), [
        'type' => DateControl::FORMAT_DATE,
        'ajaxConversion' => false,
        'widgetOptions' => [
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pickerIcon' => '<i class="far fa-calendar"></i>',
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'id_supplier')->widget(Select2::classname(), [
        'data' => $model->allSupplier,
        'options' => ['placeholder' => 'Pilih Supplier ...',],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Supplier'); ?>

    <?= $form->field($model, 'tanggal_exp')->widget(DateControl::classname(), [
        'type' => DateControl::FORMAT_DATE,
        'ajaxConversion' => false,
        'widgetOptions' => [
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pickerIcon' => '<i class="far fa-calendar"></i>',
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?php if (!Yii::$app->request->isAjax) { ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php } ?>

    <?php ActiveForm::end(); ?>

</div>