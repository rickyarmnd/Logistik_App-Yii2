<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;
use kartik\grid\GridView;
use cangak\ajaxcrud\CrudAsset;
use cangak\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JumlahBarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jumlah Barangs';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="card mt-3">
    <h4 class="card-header bg-text-9">
        DETAIL BARANG
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
        <div class="me-3">
            <span class="color-text-3">Nama Barang</span> <br>
            <span class="fw-500"> <?= $barang->nama_barang ?></span>
        </div>
    </div>
</div>
<div class="jumlah-barang-index">
    <div id="ajaxCrudDatatable">
        <?= GridView::widget([
            'id' => 'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax' => true,
            'showFooter' => true,
            'columns' => require(__DIR__ . '/_columns.php'),
            'panelBeforeTemplate' =>  Html::a(
                '<i class="fas fa fa-plus" aria-hidden="true"></i> Tambah Data',
                ['create', 'id_barang' => $barang->id, 'id_gudang' => $gudang->id],
                ['role' => 'modal-remote', 'title' => 'Tambah Users', 'class' => 'btn btn-primary']
            ),
            'summary' => false,
            'striped' => true,
            'condensed' => true,
            'responsive' => true,
            'panel' => [
                'type' => 'primary',
                'heading' => '<span class="text-light"><i class="fas fa fa-list" aria-hidden="true"></i> Jumlah Barangs listing</spa>',
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