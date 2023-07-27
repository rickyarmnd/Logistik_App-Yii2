<?php

use kartik\select2\Select2;
use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Gudang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gudang-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'id_supplier')->widget(Select2::classname(), [
		'data' => $model->getAllSupplier(),
		'options' => ['placeholder' => 'Pilih Supplier ...',],
		'pluginOptions' => [
			'allowClear' => true
		],
	])->label('Supplier'); ?>

	<?= $form->field($model, 'nama_gudang')->textInput(['maxlength' => true]) ?>


	<?php if (!Yii::$app->request->isAjax) { ?>
		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>
	<?php } ?>

	<?php ActiveForm::end(); ?>

</div>