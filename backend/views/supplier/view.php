<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Supplier */
?>
<div class="supplier-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_kategori_supplier',
            'nama_supplier',
            'id_prov_supplier',
            'id_kec_supplier',
            'id_kota_supplier',
        ],
    ]) ?>

</div>
