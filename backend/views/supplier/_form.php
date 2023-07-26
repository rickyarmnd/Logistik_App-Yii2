<?php
use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Supplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kategori_supplier')->textInput() ?>

    <?= $form->field($model, 'nama_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_prov_supplier')->textInput() ?>

    <?= $form->field($model, 'id_kec_supplier')->textInput() ?>

    <?= $form->field($model, 'id_kota_supplier')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
