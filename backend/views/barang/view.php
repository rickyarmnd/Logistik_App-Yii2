<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Barang */
?>
<div class="barang-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kode_barang',
            'nama_barang',
            'tanggal_produk',
            'id_supplier',
            'tanggal_exp',
        ],
    ]) ?>

</div>
