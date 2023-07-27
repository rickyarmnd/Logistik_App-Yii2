<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\JumlahBarang */
?>
<div class="jumlah-barang-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_barang',
            'id_gudang',
            'barang_masuk',
            'barang_keluar',
        ],
    ]) ?>

</div>
