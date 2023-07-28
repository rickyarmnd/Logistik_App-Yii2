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
        'attribute'=>'nama_supplier',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        // 'attribute'=>'',
        'label' => 'Kategori',
        'value' => function($model){
            return $model->kategori->nama_kategori;
        }
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'provinsi.nama_provinsi',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'kota.nama_kab_kota',
        // 'label' => 'Kota',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'format' => 'raw',
        'vAlign' => 'middle',
        // 'label' => 'Aksi',
        'width' => '190px',
        'value' => function ($model) {
            return Html::a('<i data-feather="edit" width="16" height="16" class="me-1 align-middle"></i> Edit', ['update', 'id' => $model->id], [
                'class' => 'btn btn-warning btn-block',
                'role' => 'modal-remote',
                'title' => 'Edit',
                'data-toggle' => 'tooltip'
            ]) . ' ' . Html::a('<i data-feather="edit" width="16" height="16" class="me-1 align-middle"></i> Hapus', ['delete', 'id' => $model->id], [
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
    

];   