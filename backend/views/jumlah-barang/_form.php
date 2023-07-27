<?php
use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\JumlahBarang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jumlah-barang-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'barang_masuk')->textInput() ?>
	
    <?php 

	echo $form->field($model, 'barang_keluar')->textInput(['disabled' => $total  == null OR 0 ? true : false]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
