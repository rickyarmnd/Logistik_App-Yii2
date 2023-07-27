<?php

use kartik\select2\Select2;
use yii\bootstrap5\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Supplier */
/* @var $form yii\widgets\ActiveForm */

$this->registerJsFile(
    '@web/js/load_ajax_change.js',
    ['depends' => [\yii\web\JqueryAsset::className()]],
);
$this->registerJsFile(
    '@web/js/load_ajax_change_kec.js',
    ['depends' => [\yii\web\JqueryAsset::className()]],
);
?>

<div class="supplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kategori_supplier')->widget(Select2::classname(), [
        'data' => $model->getAllKategori(),
        'options' => ['placeholder' => 'Pilih Supplier ...',],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Ketgori Supplier'); ?>


    <?= $form->field($model, 'id_prov_supplier')->widget(Select2::classname(), [
        'data' => $model->getAllProvinsi(),
        'options' => [
            'placeholder' => '-Pilih Provinsi-',
            'class' => 'form-select form-control form-control-lg load_ajax_change',
            'id' => 'id_provinsi',
            'data-ajaxload' => Url::to(["ajax-load/get-id-kab"]),
            'data-ajaxdata' => '#id_provinsi',
            'data-ajaxtarget' => '#id_kab_kota'
        ],
        'pluginOptions' => [
            'allowClear' => true,
            'dropdownParent' => (Yii::$app->request->isAjax ? '#ajaxCrudModal' : null)

        ],
    ])->label('Provinsi'); ?>

    <?= $form->field($model, 'id_kota_supplier')->widget(Select2::classname(), [
        'data' => $model->getAllKota(),
        'options' => [
            'placeholder' => '-Pilih Kabupaten/Kota-',
            'class' => 'form-select form-control form-control-lg load_ajax_change_kec',
            'id' => 'id_kab_kota',
            'data-ajaxload' => Url::to(["ajax-load/get-id-kec"]),
            'data-ajaxdata' => '#id_kab_kota',
            'data-ajaxtarget' => '#id_kecamatan'
        ],
        'pluginOptions' => [
            'allowClear' => true,
            'dropdownParent' => (Yii::$app->request->isAjax ? '#ajaxCrudModal' : null)

        ],
    ])->label('Kota / Kab'); ?>

    <?php if (!Yii::$app->request->isAjax) { ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php } ?>

    <?php ActiveForm::end(); ?>

</div>