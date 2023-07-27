<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Gudang */
?>
<div class="gudang-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_supplier',
            'nama_gudang',
        ],
    ]) ?>

</div>
