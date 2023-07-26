<?php
use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;
use kartik\grid\GridView;
use cangak\ajaxcrud\CrudAsset; 
use cangak\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefProvinsiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ref Provinsis';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="ref-provinsi-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns.php'),
            'panelBeforeTemplate'=>  Html::a('<i class="fas fa fa-plus" aria-hidden="true"></i> Tambah Data', ['create'],
            ['role'=>'modal-remote','title'=> 'Tambah Users','class'=>'btn btn-primary']),
            'summary' => false,         
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'panel' => [
                'type' => 'primary', 
                'heading' => '<span class="text-light"><i class="fas fa fa-list" aria-hidden="true"></i> Ref Provinsis listing</spa>',
                'after'=>false,
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
   "options" => [
    "id"=>"ajaxCrudModal",
    "tabindex" => false // important for Select2 to work properly
],
   "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>
