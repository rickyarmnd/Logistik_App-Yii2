<?php
use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BarangMasuk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-masuk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kode_barang_masuk')->textInput() ?>

    <?= $form->field($model, 'jumlah_barang_masuk')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
