<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BarangMasuk */
?>
<div class="barang-masuk-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_kode_barang_masuk',
            'jumlah_barang_masuk',
        ],
    ]) ?>

</div>
