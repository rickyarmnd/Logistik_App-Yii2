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
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'kode_barang',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nama_barang',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'tanggal_produk',
        'label' => 'Tanggal Produksi'
    ],
    // [
    //     'class'=>'\kartik\grid\DataColumn',
    //     'attribute'=>'supplier.nama_supplier',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'tanggal_exp',
        'label' => 'Tanggal Experied'
    ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'id_gudang',
    // ],
    [
        'class' => '\kartik\grid\DataColumn',
        'format' => 'raw',
        'vAlign' => 'middle',
        // 'label' => 'Aksi',
        'width' => '350px',
        'value' => function ($model) {
            return Html::a('<i data-feather="info" width="16" height="16" class="me-1 align-middle"></i> Detail Barang', ['../jumlah-barang', 'id_barang' => $model->id ,'id_gudang' => $model->id_gudang ,'id_supplier' => $model->id_supplier ], [
                'class' => 'btn btn-primary btn-block',
                // 'role' => 'modal-remote',
                'data-pjax' => 0,
                'title' => 'Jumlah Barang',
                'data-toggle' => 'tooltip'
            ]) . ' ' . Html::a('<i data-feather="edit" width="16" height="16" class="me-1 align-middle"></i> Edit', ['update', 'id' => $model->id], [
                'class' => 'btn btn-warning btn-block',
                'role' => 'modal-remote',
                'title' => 'Edit',
                'data-toggle' => 'tooltip'
            ]) . ' ' . Html::a('<i data-feather="trash" width="16" height="16" class="me-1 align-middle"></i> Hapus', ['delete', 'id' => $model->id , 'id_gudang' => $model->id_gudang], [
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
        },
    ],
    // [
    //     return Html::a('<i data-feather="more-vertical" width="16" height="16"></i>', ['detail', 'account_id' => $model->id], [
    //                 'class' => 'btn btn-info d-flex justify-content-center align-items-center',
    //                 // 'role' => 'modal-remote',
    //                 'data-pjax' => 0,
    //                 'title' => 'Detail',
    //                 'data-toggle' => 'tooltip'
    //             ]);
    //         },
    // ],

];   