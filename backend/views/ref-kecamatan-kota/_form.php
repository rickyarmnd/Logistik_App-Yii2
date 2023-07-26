<?php
use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RefKecamatanKota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-kecamatan-kota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_provinsi')->textInput() ?>

    <?= $form->field($model, 'nama_kab_kota')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
