<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\RefKecamatan */
?>
<div class="ref-kecamatan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_kab_kota',
            'nama_kecamatan',
        ],
    ]) ?>

</div>
