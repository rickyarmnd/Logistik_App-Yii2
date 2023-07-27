<?php

use yii\helpers\Html;

$total = 0;
foreach($dataProvider->getModels() as $model) {
    $barang_masuk = $model->barang_masuk;
    $barang_keluar = $model->barang_keluar;
    $total += $barang_masuk - $barang_keluar;
}

return [
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
        'footerOptions' => ['style' => 'text-align:left; background-color: #FFECB4;'],
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'barang_masuk',
        'footer' => 'Total Barang',
        'footerOptions' => ['style' => 'text-align:left; background-color: #FFECB4;'],
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'barang_keluar',
        'footerOptions' => ['style' => 'text-align:left; background-color: #FFECB4;'],
        'footer' => $total ?? 0,
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'format' => 'raw',
        'vAlign' => 'middle',
        'width' => '50px',
        
        'footerOptions' => ['style' => 'text-align:left; background-color: #FFECB4;'],
        'value' => function($model){
            return Html::a('<i data-feather="edit" width="16" height="16" class="me-1 align-middle"></i> Hapus', ['delete', 'id' => $model->id, 'id_gudang' => $model->id_gudang], [
                'class' => 'btn btn-danger btn-block',
                'role' => 'modal-remote', 'title' => 'Hapus',
                'data-confirm' => false, 'data-method' => false, // for overide yii data api
                'data-request-method' => 'post',
                'data-toggle' => 'tooltip',
                'data-confirm-title' => 'Hapus Barang',
                'data-confirm-ok' => 'Yakin',
                'data-confirm-cancel' => 'Kembali',
                'data-confirm-message' => 'Apakah kamu yakin ingin menghapus barang ini?'
            ]);
        }
    ]
];   