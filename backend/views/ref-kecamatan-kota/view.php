<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\RefKecamatanKota */
?>
<div class="ref-kecamatan-kota-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_provinsi',
            'nama_kab_kota',
        ],
    ]) ?>

</div>
