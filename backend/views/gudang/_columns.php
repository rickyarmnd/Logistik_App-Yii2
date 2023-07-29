<?php

use yii\helpers\Html;
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'id',
    // ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'supplier.nama_supplier',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'nama_gudang',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'format' => 'raw',
        'value' => function ($model) {
            return Html::a('Detail Barang', ['../barang/detail-gudang', 'id_gudang' => $model->id , 'id_supplier' => $model->id_supplier], ['class' => 'btn btn-primary w-100' , 'data-pjax' => 0]);
        }
    ],
    // [
    //     'class' => 'kartik\grid\ActionColumn',
    //     'dropdown' => false,
    //     'vAlign' => 'middle',
    //     // 'urlCreator' => function ($action, $model, $key, $index) {
    //     //     return Url::to([$action, 'id' => $key]);
    //     // },
    //     'viewOptions' => ['role' => 'modal-remote', 'title' => 'Lihat', 'data-toggle' => 'tooltip'],
    // ],

];
