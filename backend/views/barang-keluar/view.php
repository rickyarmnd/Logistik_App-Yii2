<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BarangKeluar */
?>
<div class="barang-keluar-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_kode_barang_keluar',
            'jumlah_barang_keluar',
        ],
    ]) ?>

</div>
