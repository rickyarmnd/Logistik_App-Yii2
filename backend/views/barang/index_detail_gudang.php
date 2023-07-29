<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;
use kartik\grid\GridView;
use cangak\ajaxcrud\CrudAsset;
use cangak\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barangs';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="card mt-3">
    <h4 class="card-header bg-text-9">
        DETAIL GUDANG
    </h4>
    <div class="card-body d-flex justify-content-between my-2">
        <div class="me-3">
            <span class="color-text-3">Nama Gudang</span> <br>
            <span class="fw-500"> <?= $gudang->nama_gudang ?></span>
        </div>
        <div class="me-3">
            <span class="color-text-3">Nama Supplier</span> <br>
            <span class="fw-500"> <?= $supplier->nama_supplier ?></span>
        </div>
        <div class="">
            <span class="color-text-3">Jumlah Barang</span> <br>
            <span class="fw-500"> <?= $jumlah_barang ?? 0 ?> </span>
        </div>
    </div>
    <div class="card-footer d-flex">
        <?= Html::a('<i data-feather="trash" width="16" height="16" class="mx-2"></i> Hapus Gudang', ['../gudang/delete', 'id' => $gudang->id, 'id_supplier' => $supplier->id,], [
            'class' => 'btn btn-primary',
            'role' => 'modal-remote', 'title' => 'Activate Account',
            'data-confirm' => false, 'data-method' => false, // for overide yii data api
            'data-request-method' => 'post',
            'data-toggle' => 'tooltip',
            'data-confirm-title' => 'Hapus Gudang',
            'data-confirm-ok' => 'Ya, Yakin',
            'data-confirm-cancel' => 'Batal',
            'data-confirm-message' => 'Kamu Yakin Ingin Menghapus Gudang?'
        ]); ?>
        <?= Html::a('<i data-feather="tool" width="16" height="16" class="mx-2"></i> Edit Gudang', ['../gudang/update', 'id' => $gudang->id], [
            'class' => 'btn btn-warning d-flex justify-content-center align-items-center mx-2',
            'role' => 'modal-remote',
            'data-pjax' => 0,
            'title' => 'View Certificate',
        ]); ?>
    </div>
</div>
<div class="barang-index">
    <div id="ajaxCrudDatatable">
        <?= GridView::widget([
            'id' => 'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax' => true,
            'columns' => require(__DIR__ . '/_columns_detail_gudang.php'),
            'panelBeforeTemplate' =>  Html::a(
                '<i class="fas fa fa-plus" aria-hidden="true"></i> Tambah Data',
                ['create', 'id_gudang' => $gudang->id, 'id_supplier' => $supplier->id],
                ['role' => 'modal-remote', 'title' => 'Tambah Users', 'class' => 'btn btn-primary']
            ),
            'summary' => false,
            'striped' => true,
            'condensed' => true,
            'responsive' => true,
            'panel' => [
                'type' => 'primary',
                'heading' => '<span class="text-light"><i class="fas fa fa-list" aria-hidden="true"></i> Daftar Barang</spa>',
                'after' => false,
            ]
        ]) ?>
    </div>
</div>
<?php Modal::begin([
    "options" => [
        "id" => "ajaxCrudModal",
        "tabindex" => false // important for Select2 to work properly
    ],
    "id" => "ajaxCrudModal",
    "footer" => "", // always need it for jquery plugin
]) ?>
<?php Modal::end(); ?>