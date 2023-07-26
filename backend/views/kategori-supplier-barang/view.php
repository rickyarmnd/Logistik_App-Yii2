<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\KetegoriSupplierBarang */
?>
<div class="ketegori-supplier-barang-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_kategori',
        ],
    ]) ?>

</div>
