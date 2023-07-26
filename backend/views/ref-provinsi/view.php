<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\RefProvinsi */
?>
<div class="ref-provinsi-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_provinsi',
        ],
    ]) ?>

</div>
