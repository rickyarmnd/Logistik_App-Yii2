<?php
use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Barang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_barang')->textInput() ?>

    <?= $form->field($model, 'nama_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_produk')->textInput() ?>

    <?= $form->field($model, 'id_supplier')->textInput() ?>

    <?= $form->field($model, 'tanggal_exp')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
